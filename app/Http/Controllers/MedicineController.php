<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
       
        $medicines = Medicine::orderBy('medicine', 'asc')->get();
        return view('pages.medicines.index', compact('medicines'));
    }
    public function create()
    {
        
        return view('pages.medicines.create');
    }

    public function store(Request $request)
    {
        try
        {
        $request->validate([
            'medicine' => 'required|unique:mt_medicines,medicine'           
        ]);

        $medicine = Medicine::create([
            'medicine' => $request->medicine,
            'enteredby' =>   auth()->user()->id
        ]);       

       

        return redirect()->route('medicines.index')->with('success', 'Medicine created successfully');
        }
        catch (\Exception $e) {
           
            \Log::error('Error creating medicines: ' . $e->getMessage());           
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
