<?php

namespace App\Http\Controllers;

use App\Models\TreatmentTypes;
use Illuminate\Http\Request;

class TreatmentTypeController extends Controller
{
    public function index()
    {
        $treatment_types = TreatmentTypes::all();
        return view('pages.treatment_types.index', compact('treatment_types'));
    }
    public function create()
    {
              return view('pages.treatment_types.create');
    }
    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'treatment_type' => 'required',
                   ]);

        $role = TreatmentTypes::create([
            'treatment_type' => $request->treatment_type,
        ]);     
     
 
       

        return redirect()->route('treatment_types.index')->with('success', 'Treatment Type added successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error creating treatment type: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
