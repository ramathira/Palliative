<?php

namespace App\Http\Controllers;

use App\Models\JHI;
use App\Models\SubCentre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JHIController extends Controller
{
    public function index()
    {
        
        $jhis = JHI::get(); 
        return view('pages.jhi.index', compact('jhis'));
    }
    public function create()
    {
        $subcentres = SubCentre::all();              
        return view('pages.jhi.create', compact('subcentres'));
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'jhi_name' => 'required|string|max:255',
            'ward' => 'required|array|min:1',
            'ward.*' => 'integer|exists:mt_wards,id',
            'subcentre' => 'required|array|min:1',
            'subcentre.*' => 'integer|exists:mt_subcentres,id',
        ]);
    
        try {
           
            \DB::beginTransaction();           
            $jhi = new JHI();
            $jhi->jhi_name = $request->input('jhi_name');
            $jhi->status=1;
            $jhi->enteredby=   auth()->user()->id;
            $jhi->save(); 

            $subcentreIds = $request->input('subcentre');
            if (!is_array($subcentreIds)) {
                $subcentreIds = [$subcentreIds];
            }
            $jhiSubcentreData = [];
            foreach ($subcentreIds as $subcentreId) {
                $jhiSubcentreData[] = [
                    'jhi_id' => $jhi->id,
                    'subcentre_id' => $subcentreId,
                    'status' =>1,
                    'enteredby' => auth()->user()->id,
                    'created_at' => Carbon::now()
                ];
            }
            \DB::table('jhi_subcentre')->insert($jhiSubcentreData);
            $wardIds = $request->input('ward');
            
            // If wardIds is not an array, convert it into an array
            if (!is_array($wardIds)) {
                $wardIds = [$wardIds];
            }
    
            $jhiWardData = [];
            foreach ($wardIds as $wardId) {
                $jhiWardData[] = [
                    'jhi_id' => $jhi->id,
                    'ward_id' => $wardId,
                    'status' =>1,
                    'enteredby' =>   auth()->user()->id,
                    'created_at' => Carbon::now()
                ];
            }   

            \DB::table('jhi_ward')->insert($jhiWardData);
    
            \DB::commit();
    
            return redirect()->route('jhi.index')->with('success', 'JHI added successfully!');
        } catch (\Exception $e) {
            \DB::rollBack();
    
            \Log::error('Error adding JHI: ' . $e->getMessage());
    
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
