<?php

namespace App\Http\Controllers;
use App\Models\Diagnosis;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        $diagnosis = Diagnosis::all();
        return view('pages.diagnosis.index', compact('diagnosis'));
    }
    public function create()
    {
       
        return view('pages.diagnosis.create');
    }

    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'diagnosis' => 'required'         
        ]);

        Diagnosis::create([
            'diagnosis' => $request->diagnosis,
        ]);  

           


        return redirect()->route('diagnosis.index')->with('success', 'Diagnosis added successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error creating diagnosis: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
