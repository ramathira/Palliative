<?php

namespace App\Http\Controllers;
use App\Models\AshaWorker;
use App\Models\Ward;
use App\Models\SubCentre;
use Illuminate\Http\Request;

class AshaWorkerController extends Controller
{
    public function index()
    {
        
        $ashas = AshaWorker::with(['ward_details','subcentre_details'])->get();  //dd($ashas);
        return view('pages.ashaworker.index', compact('ashas'));
    }

    public function create()
    {
        $wards = Ward::all();
        $subcentres = SubCentre::all();
        return view('pages.ashaworker.create', compact('subcentres'));
    }
    
    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'asha_worker' => 'required',
            'contactno' => ['required', 'string', 'max:10'],
            'ward' => 'required|integer|exists:mt_wards,id',
           
        ]);

        AshaWorker::create([
            'asha_worker_name' => $request->asha_worker,
            'contact_number' => $request->contactno,
            'ward' => $request->ward,
            'status' => 1
        ]);
       

        return redirect()->route('asha_worker.index')->with('success', 'Asha Worker added successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error adding asha worker: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
