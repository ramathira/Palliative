<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Patient;
use App\Models\PatientAddress;
use App\Models\PatientDisease;
use App\Models\PatientFamily;
use App\Models\PatientLocation;
use App\Models\PatientMedication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
                   'enteredby' =>   auth()->user()->id,
                   'status'        => 1                  
               ]);

               
            if ($patient) {
                PatientAddress::create([
                     'patient_id'    => $patient->id,
                     'house_no'      => $request->house_no,              
                     'address'       => $request->address,
                     'landmark'      => $request->landmark,  
                     'enteredby' =>auth()->user()->id,
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
                   'enteredby' =>   auth()->user()->id,
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

    
    public function save_patient_disease(Request $request)
    {
       

        $validator = Validator::make($request->all(), [
            'patient_id'    => 'required|integer|exists:patient_master,id',           
            'diagnosis.*' => 'required|integer|exists:mt_diagnosis,id',
            'diagnosis_details' => 'required|string|max:500',    
            'diagnosis_date' => 'required',         
            'prior_condition' => 'required|string|max:500',      
            'hospital_name' => 'required|string|max:30',              
            'treatment_type' => 'required|numeric|max:2',                
            'present_condition' => 'required|string|max:500',   
            'treatment_category.*' => 'required|integer|exists:mt_treatment_type,id', 
            'diagnosis.*' => 'required|integer|exists:mt_diagnosis,id',
                     
           
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }

        try {
            \DB::beginTransaction();
            $formattedDate = date('Y-m-d', strtotime($request->diagnosis_date));
            PatientDisease::create([
                'patient_id'    => $request->patient_id,
                'diagnosis'   => $request->diagnosis_details,
                'diagnosed_date'        => $formattedDate,
                'prior_condition'      => $request->prior_condition,
                'treating_hospital'        => $request->hospital_name   ,
                'doctor_name'        => $request->doctor_name   ,
                'hospital_type'        => $request->treatment_type ,
                'allopathy'        => $request->allopathy,
                'allopathy_details'        => $request->allopathy_treatment,
                'ayurveda'        => $request->ayurveda,
                'ayurveda_details'        => $request->ayurveda_treatment,  
                'homeopathy'        => $request->homeopathy,
                'homeopathy_details'        => $request->homeopathy_treatment, 
                'present_health_condition'        => $request->present_condition,
                //  'treatment_type_id'        => $request->treatment_category,    
                'enteredby' =>   auth()->user()->id,  
                'status'        => 1
                                                             
            ]);

            $diagnosis_ids = $request->input('diagnosis'); 
    
            if (!is_array($diagnosis_ids)) {
                $diagnosis_ids = [$diagnosis_ids]; // Ensure it's an array
            }
            
            $patient_diag_Data = [];
            foreach ($diagnosis_ids as $diagnosis_id) {
                if (!empty($diagnosis_id)) { // Ensure diagnosis_id is not null or empty
                    $patient_diag_Data[] = [
                        'patient_id' => $request->patient_id,
                        'diagnosis_id' => $diagnosis_id,
                        'enteredby' =>   auth()->user()->id,  
                        'status' => 1
                    ];
                }
            }
            
            if (!empty($patient_diag_Data)) {
                \DB::table('patient_diagnosis')->insert($patient_diag_Data); 
            }

            $comfortdevices_ids = $request->input('comfortdevices');
        
       
            if (!is_array($comfortdevices_ids)) {
                $comfortdevices_ids = [$comfortdevices_ids];
            }
    
            $patient_comfortdev_Data = [];        
            foreach ($comfortdevices_ids as $comfortdevices_id) {
                if (!empty($comfortdevices_id)) { 
                    $patient_comfortdev_Data[] = [
                        'patient_id' => $request->patient_id,
                        'comfort_devices_id' => $comfortdevices_id,
                        'enteredby' =>   auth()->user()->id,  
                        'status' => 1
                    ];
                }
            } 
            if (!empty($patient_comfortdev_Data)) {
            \DB::table('patient_comfort_devices')->insert($patient_comfortdev_Data);
            }
    
           


            $treatment_type_ids = $request->input('treatment_type_id');
        
       
            if (!is_array($treatment_type_ids)) {
                $treatment_type_ids = [$treatment_type_ids];
            }
    
            $patient_treatment_Data = [];        
            foreach ($treatment_type_ids as $treatment_type_id) {
                if (!empty($treatment_type_id)) { 
                    $patient_treatment_Data[] = [
                        'patient_id' => $request->patient_id,
                        'treatment_category_id' => $treatment_type_id,
                        'enteredby' =>   auth()->user()->id,  
                        'status' => 1
                    ];
                }
            } 
            if (!empty($patient_treatment_Data)) {
            \DB::table('patient_treatment_category')->insert($patient_treatment_Data);
            }







            \DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Patient disease details saved successfully!',
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
        $patients = Patient::select('id','first_name','second_name','dob','gender')
      //  ->where('enteredby',auth()->user()->id)
        ->get();
        return view('pages.patient.list', compact('patients'));
    }
    public function patient_profile($id)
    {      
        $patient = Patient::with([
            'locations.subcentre' ,
            'locations.ward' ,
            'locations.ashaworker' ,
            'locations.anganwadi' ,
            'locations.anganwadi_worker' ,
            'address' => function ($query) {
                $query->where('status', 1);
            },
          
        ])
        ->where('id', $id)
        ->first();

        $patient_location = PatientLocation::where('patient_id', $id)
        ->where('status', 1)
        ->first();

        $patient_disease = PatientDisease::where('patient_id', $id)
        ->where('status', 1)
        ->first();

        $patient_family = PatientFamily::where('patient_id', $id)
        ->where('status', 1)
        ->get();
        $patient_medication = PatientMedication::where('patient_id', $id)
        ->whereIn('status', [1,2])
        ->with('medicine_details', 'medication_type', 'medicine_mode')
        ->get();
     // dd($patient_medication);
        if (!$patient) {
            abort(404); 
        }
    
        return view('pages.patient.profile', compact('patient','patient_disease','patient_family','patient_medication','patient_location'));
    }


    public function save_family(Request $request)
    {
       

        $validator = Validator::make($request->all(), [
            'patient_id'    => 'required|integer|exists:patient_master,id',         
          
            'family_member_name' => 'required|string|max:30',    
            'dob' => 'required',         
            'gender'        => 'required|in:1,2,3',   
           
            'patient_relation' => 'required|numeric|max:10',    
            'staying'        => 'required|in:1,2',          
            'education' => 'required|string|max:30',  
            'income' => 'required|string|max:5',       
            'source_income' => 'required|numeric|max:5', 
          'income_catogory' => 'required|numeric|max:5', 
                     
           
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }

        try {
            \DB::beginTransaction();
            $formattedDate = date('Y-m-d', strtotime($request->dob));
            PatientFamily::create([
                'patient_id'    => $request->patient_id,
                'family_member_name'   => $request->family_member_name,
                'dob'        => $formattedDate,
                'gender'      => $request->gender,
                'patient_relation'        => $request->patient_relation   ,
                'staying'        => $request->staying   ,
                'education'        => $request->education ,
                'income'        => $request->income,
                'source_income'        => $request->source_income,
                'income_catogory'        => $request->income_catogory,     
                'enteredby' =>   auth()->user()->id,            
                'status'        => 1
                                                             
            ]);

           
    
            // Commit the transaction
            \DB::commit();

            return redirect()->route('patient.profile', ['id' => $request->patient_id])->with('success', 'Patient family details saved successfully!');
        }
        catch (\Illuminate\Validation\ValidationException $e) {
           
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),  
            ], 422);  
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving patient family.',
                'error'   => $e->getMessage(),
            ], 500);
        }

    }

    public function save_medicine(Request $request)
    {
       

        $validator = Validator::make($request->all(), [
            'patient_id'    => 'required|integer|exists:patient_master,id',        
            'medicine_name' => 'required|integer|exists:mt_medicines,id',    
            'medicine_type' => 'required|integer|exists:mt_medicine_type,id',
            'med_dose'        => 'required|numeric',              
            'med_frequency' => 'required|numeric',    
            'med_period'        => 'required|numeric',           
             'medicine_mode' =>  'required|integer|exists:mt_medicine_mode,id',
         
                     
           
            
        ]);

     

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }

        try {
            \DB::beginTransaction();         
            PatientMedication::create([
                'patient_id'    => $request->patient_id,
                'medication'   => $request->medicine_name,
                'medicine_type' => $request->medicine_type,
                'dose'      => $request->med_dose,
                'frequency'        => $request->med_frequency   ,
                'period'        => $request->med_period   ,
                'duration'        => $request->duration ,
                'timespan'        => $request->timespan,
                'route'        => $request->medicine_mode,               
                'enteredby' =>   auth()->user()->id,            
                'status'        => 1
                                                             
            ]);

           
    
            // Commit the transaction
            \DB::commit();

            return redirect()->route('patient.profile', ['id' => $request->patient_id])->with('success', 'Patient family details saved successfully!');
        }
        catch (\Illuminate\Validation\ValidationException $e) {
           
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),  
            ], 422);  
        }catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving patient medication.',
                'error'   => $e->getMessage(),
            ], 500);
        }

    }
    
}
