<?php

namespace App\Http\Controllers;
use App\Models\Mlsp;
use App\Models\Ward;
use App\Models\SubCentre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MidLevelServiceProviderController extends Controller
{
    public function index()
    {
        
        $mlsps = Mlsp::with('subcentre')->get(); 
        return view('pages.mlsp.index', compact('mlsps'));
    }
    public function create()
    {
        $subcentres = SubCentre::all();   
           
        return view('pages.mlsp.create', compact('subcentres'));
    }

    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'mlsp_name' => 'required|string|max:255',
        'subcentre' => 'required|integer|exists:mt_subcentres,id',
        'ward' => 'required|array|min:1',
        'ward.*' => 'integer|exists:mt_wards,id',
    ]);

    try {
        // Start a database transaction
        \DB::beginTransaction();

        // Step 1: Insert into the 'mlsp' table
        $mlsp = new Mlsp();
        $mlsp->mlsp_name = $request->input('mlsp_name');
        $mlsp->subcentre_id = $request->input('subcentre');
        $mlsp->save(); // Save the MLSP record and get the ID

        // Step 2: Insert into the 'mlsp_ward' table
        $wardIds = $request->input('ward');
        
        // If wardIds is not an array, convert it into an array
        if (!is_array($wardIds)) {
            $wardIds = [$wardIds];
        }

        $mlspWardData = [];
        foreach ($wardIds as $wardId) {
            $mlspWardData[] = [
                'mlsp_id' => $mlsp->id,
                'ward_id' => $wardId
            ];
        }

        // Bulk insert all ward data in one query
        \DB::table('mlsp_ward')->insert($mlspWardData);

        // Commit the transaction
        \DB::commit();

        // Redirect back with success message
        return redirect()->route('mlsp.index')->with('success', 'MLSP Nurse added successfully!');
    } catch (\Exception $e) {
        // Rollback the transaction in case of an error
        \DB::rollBack();

        // Log the error for debugging (optional)
        \Log::error('Error adding MLSP Nurse: ' . $e->getMessage());

        // Redirect back with error message
        return redirect()->back()->with('error', 'An error occurred while adding the MLSP Nurse. Please try again.');
    }
}

    
    
}
