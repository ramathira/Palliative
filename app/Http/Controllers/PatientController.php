<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Patient;
use App\Models\PatientAddress;
use App\Models\PatientLocation;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function add_new_patient(): View
    {
        return view('pages/patient/register_patient');
    }

    public function save_patient_basic(Request $request)
    {
   
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required|string|max:64',
            'second_name'   => 'required|string|max:64',            
            'gender'        => 'required|in:1,2,3',
            'phone_no'      => 'required|digits:10',
            'aadhar'        => 'required|digits:12',
            'house_no'      => 'required|string|max:8',
            'address'       => 'required|string|max:255',
            'landmark'      => 'required|string|max:50',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
    
        try {
            $formattedDate = date('Y-m-d', strtotime($request->dob));
            $patient=  Patient::create([
                   'first_name'    => $request->first_name,
                   'second_name'   => $request->second_name,
                   'dob'           => $formattedDate,
                   'gender'        => $request->gender,
                   'phone_no'      => $request->phone_no,
                   'aadhar'        => $request->aadhar   ,
                   'status'        => 1                  
               ]);

               
            if ($patient) {
                PatientAddress::create([
                     'patient_id'    => $patient->id,
                     'house_no'      => $request->house_no,              
                     'address'       => $request->address,
                     'landmark'      => $request->landmark,  
                     'status'        => 1             
                 ]);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Patient information saved successfully!',
                    'patient_id' => $patient->id, 
                ]);
        } 
        catch (\Illuminate\Validation\ValidationException $e) {
           
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),  
            ], 422);  
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving patient information.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }


    public function save_patient_location(Request $request)
    {
//    dd($request->all());
        $validator = Validator::make($request->all(), [
            'patient_id'    => 'required|integer|exists:patient_master,id',
            'subcentre'    => 'required|integer|exists:mt_subcentres,id',
            'ward'          => 'required|integer|exists:mt_wards,id',
            'ashaworker'        => 'required|integer|exists:mt_asha_workers,id',  
            'awc'      => 'required|digits:11|exists:mt_anganwadi,id',  
            'awc_worker'        => 'required|integer|exists:mt_anganwadi_workers,id',
           
            
        ]);

    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
    
        try {
           
             PatientLocation::create([
                   'patient_id'    => $request->patient_id,
                   'subcentre_id'   => $request->subcentre,
                   'ward_id'        => $request->ward,
                   'ashaworker_id'      => $request->ashaworker,
                   'awc'        => $request->awc   ,
                   'awc_worker_id'        => $request->awc_worker   ,
                   'status'        => 1                  
               ]);

               
           

                return response()->json([
                    'success' => true,
                    'message' => 'Patient information saved successfully!',
                ]);
        } 
        catch (\Illuminate\Validation\ValidationException $e) {
           
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),  
            ], 422);  
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving patient information.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }

    public function patient_list()
    {        
        $patients = Patient::all();
        return view('pages.patient.list', compact('patients'));
    }
    
}
