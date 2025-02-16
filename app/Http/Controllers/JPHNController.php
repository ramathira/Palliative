<?php

namespace App\Http\Controllers;

use App\Models\JPHN;
use App\Models\SubCentre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JPHNController extends Controller
{
    public function index()
    {
        
        $jphns = JPHN::with('subcentre_details')->get(); 
        return view('pages.jphn.index', compact('jphns'));
    }
    public function create()
    {
        $subcentres = SubCentre::all();             
        return view('pages.jphn.create', compact('subcentres'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'jphn_name' => 'required|string|max:255',
            'subcentre' => 'required|integer|exists:mt_subcentres,id',
            'ward' => 'required|array|min:1',
            'ward.*' => 'integer|exists:mt_wards,id',
        ]);
    
        try {
            // Start a database transaction
            \DB::beginTransaction();
    
            // Step 1: Insert into the 'mlsp' table
            $jphn = new JPHN();
            $jphn->jphn_name = $request->input('jphn_name');
            $jphn->subcentre_id = $request->input('subcentre');
            $jphn->status =1;
            $jphn->enteredby=   auth()->user()->id;
            $jphn->save(); // Save the MLSP record and get the ID
    
            // Step 2: Insert into the 'mlsp_ward' table
            $wardIds = $request->input('ward');
            
            // If wardIds is not an array, convert it into an array
            if (!is_array($wardIds)) {
                $wardIds = [$wardIds];
            }
    
            $jphnWardData = [];
            foreach ($wardIds as $wardId) {
                $jphnWardData[] = [
                    'jphn_id' => $jphn->id,
                    'ward_id' => $wardId,
                    'enteredby'=>   auth()->user()->id,
                    'status' =>1,
                    'created_at' => Carbon::now()
                ];
            }
    
            // Bulk insert all ward data in one query
            \DB::table('jphn_ward')->insert($jphnWardData);
    
            // Commit the transaction
            \DB::commit();
    
            // Redirect back with success message
            return redirect()->route('jphn.index')->with('success', 'JPHN added successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            \DB::rollBack();
    
            // Log the error for debugging (optional)
            \Log::error('Error adding JPHN: ' . $e->getMessage());
    
            // Redirect back with error message
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
