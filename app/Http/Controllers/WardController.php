<?php

namespace App\Http\Controllers;
use App\Models\Ward;
use App\Models\WardMember;
use App\Models\SubCentre;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class WardController extends Controller
{
    public function index()
    {
        
        $wards = Ward::with('subcentre')->get(); 
        return view('pages.wards.index', compact('wards'));
    }
    
    public function edit(Ward $ward)
    {
        $subcentres = DB::table('mt_subcentres')->get();
        return view('pages.wards.edit', compact('ward','subcentres'));
    }

     public function view_ward(): View
    {
        $wards = Ward::all(); 
        return response()->json($wards);
    }

    public function show($id)
    {       
        $ward = Ward::findOrFail($id);
        return view('pages.wards.show', compact('ward'));
    }

    public function get_ward_details($wardId)
    {
        $ward = Ward::with('wardMember')->find($wardId);


        // Return the wards as a JSON response
        return response()->json($ward);
    }


    public function members_list()
    {        
        $ward_members = WardMember::with('ward')->get(); 
        return view('pages.wards.ward_members_list', compact('ward_members'));
    }

    public function member_add()
    {
        $wards = Ward::all();
        return view('pages.wards.ward_member_add', compact('wards'));
    }
    public function create()
    {
        $subcentres = SubCentre::all();
        return view('pages.wards.create',compact('subcentres'));
    }

    public function store(Request $request)
    { 
        try
        {
           
            $request->validate([      
                'ward_no' => ['required', 'integer', 'unique:mt_wards,ward_no'],        
                'ward' => ['required', 'string', 'max:255','unique:mt_wards,ward_name'],
               'subcentre' => 'required|integer|exists:mt_subcentres,id',
               
            ]);
            
           
    
             Ward::create([
                'ward_no' => $request->ward_no,
                'ward_name' => $request->ward,
                'subcentre' => $request->subcentre,
                
            ]);

       
    
            return redirect()->route('wards.index')->with('success', 'Ward created successfully');
    
            
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
        catch (\Exception $e) {
            \Log::error('Error creating ward : ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function member_save(Request $request)
    { 
        try
        {
           
            $request->validate([              
                'ward_member' => ['required', 'string', 'max:255'],
                'contactno' => ['required', 'string', 'max:10'],
               'ward' => 'required|integer|exists:mt_wards,id',
               
            ]);
            
           
    
            WardMember::create([
                'member_name' => $request->ward_member,
                'contact_number' => $request->contactno,
                'ward' => $request->ward,
                'status' => 1
                
            ]);

       
    
            return redirect()->route('ward_members.members_list')->with('success', 'Ward Member added successfully');
    
            
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
        catch (\Exception $e) {
            \Log::error('Error creating ward member: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
