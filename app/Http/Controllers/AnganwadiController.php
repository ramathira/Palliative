<?php

namespace App\Http\Controllers;
use App\Models\Anganwadi;
use App\Models\AWC_Worker;
use App\Models\SubCentre;
use Illuminate\Http\Request;

class AnganwadiController extends Controller
{
    public function index()
    {
        
        $anganwadis = Anganwadi::with('subcentre')->get(); 
        return view('pages.anganwadi.index', compact('anganwadis'));
    }

    public function show($id)
    {       
        // $ward = Anganwadi::findOrFail($id);
        // return view('pages.wards.show', compact('ward'));
    }

    public function create()
    {
        $subcentres = SubCentre::all();
        return view('pages.anganwadi.create', compact('subcentres'));
    }

    public function store(Request $request)
    {
        try {
            // Step 1: Validate the request
            $request->validate([
                'awc_code' => 'required|numeric', // Use 'numeric' instead of 'integer' to allow large values
                'awc_name' => 'required|string',
                'subcentre' => 'required|integer|exists:mt_subcentres,id',
            ]);
    
            // Step 2: Cast 'awc_code' to an integer (or big integer)
            $awc_code = (int) $request->awc_code;
    
            // Step 3: Check if the ID already exists
            $exists = Anganwadi::where('id', $awc_code)->exists();
            if ($exists) {
                return redirect()->back()->with('error', 'The given AWC Code already exists.');
            }
    
            // Step 4: Insert the new Anganwadi record
            Anganwadi::create([
                'id' => $awc_code, 
                'awc_name' => $request->awc_name,
                'subcentre_id' => $request->subcentre,
            ]);
    
            return redirect()->route('anganwadi.index')->with('success', 'AWC added successfully');
        } catch (\Exception $e) {
            \Log::error('Error creating AWC: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }


    public function awc_worker_list()
    {        
        $awc_workers = AWC_Worker::with('awc')->get(); 
        return view('pages.anganwadi.awc_workers_list', compact('awc_workers'));
    }

    public function awc_worker_add()
    {
        $awcs = Anganwadi::all();
        return view('pages.anganwadi.awc_worker_add', compact('awcs'));
    }

    public function awc_worker_save(Request $request)
    { 
        try
        {
           
            $request->validate([              
                'awc_worker_name' => ['required', 'string', 'max:255'],
                'contactno' => ['required', 'string', 'max:10'],
               'awc' => 'required|integer|exists:mt_anganwadi,id',
               
            ]);
            
           
    
            AWC_Worker::create([
                'awc_worker_name' => $request->awc_worker_name,
                'phone_no' => $request->contactno,
                'awc_id' => $request->awc,
                'status' => 1
                
            ]);

       
    
            return redirect()->route('anganwadi.awc_worker_list')->with('success', 'AWC Worker added successfully');
    
            
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
        catch (\Exception $e) {
            \Log::error('Error creating AWC worker: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
    
}
