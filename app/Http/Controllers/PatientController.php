<?php

namespace App\Http\Controllers;

use App\Models\DiseaseCondition;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Patient;
use App\Models\PatientAddress;
use App\Models\PatientBlueFormDetailedExamination;
use App\Models\PatientBlueFormGeneralCondition;
use App\Models\PatientBlueFormOtherDetails;
use App\Models\PatientClassification;
use App\Models\PatientComfortDevices;
use App\Models\PatientDiagnosis;
use App\Models\PatientDisease;
use App\Models\PatientDiseaseConditions;
use App\Models\PatientFamily;
use App\Models\PatientInitialDiagnosis;
use App\Models\PatientLocation;
use App\Models\PatientMedication;
use App\Models\PatientPastTreatmentCategory;
use App\Models\PatientPhysicalDifficulties;
use App\Models\PatientTreatmentCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function add_new_patient(): View
    {
        return view('pages/patient/register_patient');
    }

    public function register_new_patient_jphn(): View
    {
        return view('pages/patient/register_new_patient');
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
                   'flow_status_id' =>1,
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



    public function patient_basic_details_save_jphn(Request $request)
    {       
   
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required|string|max:64',
            'second_name'   => 'required|string|max:64',            
            'gender'        => 'required|in:1,2,3',
            'phone_no'      => 'required|digits:10',
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
                   'flow_status_id' =>1,
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

               Patient::where('id', $request->patient_id)->update(['flow_status_id' => 2]);
               
           

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
            'diagnosis_details' => 'required|string|max:1000',    
            'diagnosis_date' => 'required',         
            'prior_condition' => 'required|string|max:1000',      
            'hospital_name' => 'required|string|max:30',            
            'present_condition' => 'required|string|max:1000',   
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
                        'created_at' =>Carbon::now(),
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
                        'created_at' =>Carbon::now(),
                        'status' => 1
                    ];
                }
            } 
            if (!empty($patient_comfortdev_Data)) {
            \DB::table('patient_comfort_devices')->insert($patient_comfortdev_Data);
            }
    
           


            $treatment_type_ids = $request->input('treatment_category');
        
       
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
          

            Patient::where('id', $request->patient_id)->update(['flow_status_id' => 8]);
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


    public function save_patient_disease_jphn(Request $request)
    {
       

        $validator = Validator::make($request->all(), [           
            'patient_id'    => 'required|integer|exists:patient_master,id',    
            'diagnosis' => 'required|array|min:1',       
            'diagnosis.*' => 'required|integer|exists:mt_diagnosis,id',
            'details_from_disease' => 'required|string|max:1000',  
            'treatment_till_now' => 'required|array|min:1',   
           'treatment_till_now.*' => 'required|integer|exists:mt_treatment_type,id',
           'treatment_category' => 'required|array|min:1',   
           'treatment_category.*' => 'required|integer|exists:mt_treatment_type,id',      
            'patient_understanding' => 'required|integer|max:3',      
            'family_understanding' => 'required|integer|max:3',   
                      
            'ward_member_aware' => 'required|integer|max:2',       
            'data_collected' => 'required|integer|max:4',    
            
                   
           
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }

        try {
           \DB::beginTransaction();   
            
            
            $diagnosis_ids = $request->input('diagnosis'); 
    
            if (!is_array($diagnosis_ids)) {
                $diagnosis_ids = [$diagnosis_ids]; 
            }
            
            $patient_diag_Data = [];
            foreach ($diagnosis_ids as $diagnosis_id) {
                if (!empty($diagnosis_id)) { 
                    $patient_diag_Data[] = [
                        'patient_id' => $request->patient_id,
                        'diagnosis_id' => $diagnosis_id,
                        'enteredby' =>   auth()->user()->id,  
                        'created_at' =>Carbon::now(),
                        'status' => 1
                    ];
                }
            }
            
            if (!empty($patient_diag_Data)) {
                \DB::table('patient_diagnosis')->insert($patient_diag_Data); 
            }




            $treatment_till_now_ids = $request->input('treatment_till_now');
       
            if (!is_array($treatment_till_now_ids)) {
                $treatment_till_now_ids = [$treatment_till_now_ids];
            }
    
            $patient_treatment_till_Data = [];        
            foreach ($treatment_till_now_ids as $treatment_type_id) { 
                if (!empty($treatment_type_id)) { 
                    $patient_treatment_till_Data[] = [
                        'patient_id' => $request->patient_id,
                        'treatment_category_id' => $treatment_type_id,
                        'enteredby' =>   auth()->user()->id,  
                        'created_at' =>Carbon::now(),
                        'status' => 1
                    ]; 
                }
            } 
            try {
                if (!empty($patient_treatment_till_Data)) {
                    \DB::table('patient_past_treatments')->insert($patient_treatment_till_Data);
                   
                }
            } catch (\Exception $e) {
                \Log::error('Error inserting data: ' . $e->getMessage());
                return response()->json(['error' => $e->getMessage()], 500);
            }



            $treatment_category_ids = $request->input('treatment_category');
        
       
            if (!is_array($treatment_category_ids)) {
                $treatment_category_ids = [$treatment_category_ids];
            }
    
            $patient_treatment_Data = [];        
            foreach ($treatment_category_ids as $treatment_category_id) {
                if (!empty($treatment_category_id)) { 
                    $patient_treatment_Data[] = [
                        'patient_id' => $request->patient_id,
                        'treatment_category_id' => $treatment_category_id,
                        'enteredby' =>   auth()->user()->id, 
                        'created_at' =>Carbon::now(), 
                        'status' => 1
                    ];
                }
            } 
            if (!empty($patient_treatment_Data)) {
            \DB::table('patient_treatment_category')->insert($patient_treatment_Data);
            }

            $difficulty = $request->get('difficulty[]', []); 
            $duration = $request->get('duration[]', []);
            $period = $request->get('period[]', []);

            if (is_array($difficulty) && is_array($duration) && is_array($period)) {
                $difficulty_data = [];
                foreach ($difficulty as $index => $value) {
                    $difficulty_data[] = [
                        'patient_id' => $request->patient_id,
                        'physical_difficulty' => $value,
                        'period' => $period[$index] ?? null,
                        'duration' => $duration[$index] ?? null,
                        'enteredby' =>   auth()->user()->id, 
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        else
        {
           print_r("Error");
        }

            \DB::table('patient_monthly_assessment_physical_difficulty')->insert($difficulty_data);


            PatientInitialDiagnosis::create([
                'patient_id'    => $request->patient_id,
                'details_from_disease'   => $request->details_from_disease,
                'undertanding_abt_disease'      => $request->patient_understanding,
                'family_abt_disease'        => $request->family_understanding   ,
                'ward_member_aware'        => $request->ward_member_aware   ,
                'volunteer_type'        => $request->data_collected , 
                'volunteer'             =>  $request->volunteer , 
                'enteredby' =>   auth()->user()->id,  
                'status'        => 1
                                                             
            ]);





            Patient::where('id', $request->patient_id)->update(['flow_status_id' => 3]);
         



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
        // \DB::enableQueryLog();  
        $patients = Patient::select('id','first_name','second_name','dob','gender');
        if(auth()->user()->hasRole('Mid Level Service Provider Nurse') )
        {
            $patients =$patients->where('enteredby',auth()->user()->id);
        }
  
      //  $patients = $patients->get();
        $patients = $patients->paginate(10);
        // dd(\DB::getQueryLog()); 
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

        $patient_diagnosis = PatientDiagnosis::where('patient_id', $id)
        ->whereIn('status', [1])
        ->with('diagnosis')
        ->get();

        $patient_treatment_category = PatientTreatmentCategory::where('patient_id', $id)
        ->whereIn('status', [1])
        ->with('treatment_type')
        ->get();
        $patient_comfort_devices = PatientComfortDevices::where('patient_id', $id)
        ->whereIn('status', [1])
        ->with('comfort_devices')
        ->get();

        $patient_family = PatientFamily::select(
            'family_member_name',
            DB::raw('TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age'),
            'gender',
            DB::raw("
                CASE 
                        WHEN patient_relation = 1 THEN 'Father'
                        WHEN patient_relation = 2 THEN 'Mother'
                        WHEN patient_relation = 3 THEN 'Son'
                        WHEN patient_relation = 4 THEN 'Daughter'
                        WHEN patient_relation = 5 THEN 'Wife'
                        WHEN patient_relation = 6 THEN 'Husband'
                        WHEN patient_relation = 7 THEN 'Brother'
                        WHEN patient_relation = 8 THEN 'Sister'
                        WHEN patient_relation = 9 THEN 'Grand son'
                        WHEN patient_relation = 10 THEN 'Grand Daughter'
                        WHEN patient_relation = 11 THEN 'Son-in-Law'
                        WHEN patient_relation = 12 THEN 'Daughter-in-Law'
                    ELSE 'Other'
                END AS relation
            "),
            'staying','education','income',
            DB::raw("
            CASE 
                    WHEN source_income = 1 THEN 'Agriculture'
                    WHEN source_income = 2 THEN 'Job'
                    WHEN source_income = 3 THEN 'Pension'
                    WHEN source_income = 4 THEN 'Others'
                    WHEN source_income = 5 THEN 'Nil'                  
                ELSE 'Other'
            END AS source_income
        "),
        DB::raw("
        CASE 
                WHEN income_catogory = 1 THEN 'APL'
                WHEN income_catogory = 2 THEN 'BPL'
                WHEN income_catogory = 3 THEN 'AAY'
                WHEN income_catogory = 4 THEN 'Others'
                WHEN income_catogory = 5 THEN 'Nil'                  
            ELSE 'Other'
        END AS income_cat
    "),'income_catogory',
        )
        ->where('patient_id', $id)
        ->where('status', 1)
        ->get();
        $patient_medication = PatientMedication::select('id','medication','medicine_type','dose','duration','route','status', DB::raw('CASE WHEN dose_unit = 1 THEN "mg" WHEN dose_unit = 2 THEN "ml" WHEN dose_unit = 3 THEN "gm"  END AS unit_dose'),DB::raw('CASE WHEN 	frequency = 1 THEN "Once" WHEN frequency = 2 THEN "Twice" WHEN frequency = 3 THEN "Thrice" WHEN frequency = 4 THEN "Four times" WHEN frequency = 5 THEN "Five times" WHEN frequency = 6 THEN "Six times" WHEN frequency = 7 THEN "Alternate days" END AS frequency'),DB::raw('CASE WHEN period = 1 THEN "daily" WHEN period = 2 THEN "weekly" WHEN period = 3 THEN "monthly"  END AS period'),DB::raw('CASE WHEN timespan = 1 THEN "days" WHEN 	timespan = 2 THEN "weeks" WHEN timespan = 3 THEN "months" WHEN timespan = 4 THEN "years"  END AS timespan'),'enteredby','created_at')
                                    ->with([
                                        'medicine_details' => function($query) {
                                            $query->select('id', 'medicine');  
                                        },
                                       

                                      
                                    ])
                                ->where('patient_id', $id)
                                ->whereIn('status',[1,2])
                                ->get();
     // dd($patient_medication);
     $patient_intial_diagnosis = PatientInitialDiagnosis::select('details_from_disease', DB::raw("
     CASE 
             WHEN undertanding_abt_disease = 1 THEN 'Well Aware'
             WHEN undertanding_abt_disease = 2 THEN 'Not Aware'
             WHEN undertanding_abt_disease = 3 THEN 'Little Aware'
                               
         ELSE 'Other'
     END AS undertanding_abt_disease
 "),DB::raw("
 CASE 
         WHEN family_abt_disease = 1 THEN 'Well Aware'
         WHEN family_abt_disease = 2 THEN 'Not Aware'
         WHEN family_abt_disease = 3 THEN 'Little Aware'
                           
     ELSE 'Other'
 END AS family_abt_disease
"),DB::raw("
CASE 
        WHEN ward_member_aware = 1 THEN 'Ward Member is Aware'
        WHEN ward_member_aware = 2 THEN 'Ward Member is not Aware'      
                          
    ELSE 'Other'
END AS ward_member_aware
"),DB::raw("
CASE 
        WHEN 	volunteer_type = 1 THEN 'Asha Worker'
        WHEN 	volunteer_type = 2 THEN 'JPHN'
        WHEN 	volunteer_type = 3 THEN 'JHI'
          WHEN 	volunteer_type = 4 THEN 'MLSP'
                          
    ELSE 'Other'
END AS 	volunteer_type
"))
     ->where('patient_id', $id)
     ->where('status', 1)
     ->first();

     $patient_past_treatment_category = PatientPastTreatmentCategory::where('patient_id', $id)
     ->whereIn('status', [1])
     ->with('treatment_type')
     ->get();

     $patient_difficulties = PatientPhysicalDifficulties::select('physical_difficulty','duration',DB::raw("
     CASE 
             WHEN 	period = 1 THEN 'days'
             WHEN 	period = 2 THEN 'weeks'
             WHEN 	period = 3 THEN 'months'
            WHEN 	period = 4 THEN 'years'                               
         ELSE 'Other'
     END AS 	period
     "),'created_at','enteredby')->where('patient_id', $id)
         ->get();
    $patient_general_condition = PatientBlueFormGeneralCondition::select('present_condition','feeding_method',DB::raw("
    CASE 
            WHEN feeding_method = 1 THEN 'Oral'
            WHEN feeding_method = 2 THEN 'Ryles Tube'                                        
        ELSE 'Other'
    END AS 	feeding
    "),'sleep',DB::raw("
    CASE 
            WHEN sleep = 1 THEN 'Normal'
            WHEN sleep = 2 THEN 'Reduced Sleep'                                        
        ELSE 'Other'
    END AS 	sleep_condition
    "),'bowel',DB::raw("
    CASE 
            WHEN 	bowel = 1 THEN 'Normal'
            WHEN 	bowel = 2 THEN 'Incontinence'
            WHEN 	bowel = 3 THEN 'Loose Stool'
           WHEN 	bowel = 4 THEN 'Constipation	'                               
        ELSE 'Other'
    END AS 	bowel_condition
    "),'colostomy',DB::raw("
    CASE 
            WHEN colostomy = 1 THEN 'Present'
            WHEN colostomy = 2 THEN 'Absent'                                        
        ELSE 'Other'
    END AS 	colostomy_condition
    "),'bladder_habit',DB::raw("
    CASE 
            WHEN bladder_habit = 1 THEN 'Normal'
            WHEN bladder_habit = 2 THEN 'on CBD'                                        
        ELSE 'Other'
    END AS 	bladder_habit_condition
    "))
                                ->where('patient_id', $id)
                                ->where('status',1)
                                ->first();

    $patient_detailed_examination = PatientBlueFormDetailedExamination::where('patient_id', $id)
         ->get();
    $patient_other_condition = PatientBlueFormOtherDetails::where('patient_id', $id)
         ->get();     


        if (!$patient) {
            abort(404); 
        }
    
        return view('pages.patient.profile', compact('patient','patient_disease','patient_family','patient_medication','patient_location','patient_diagnosis','patient_treatment_category','patient_comfort_devices','patient_intial_diagnosis','patient_past_treatment_category','patient_difficulties','patient_general_condition','patient_detailed_examination','patient_other_condition'));
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
            'dose_unit'        => 'required|numeric',                    
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
                'dose_unit'      => $request->dose_unit,
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


    public function pending_with_mlsp()
    {      
        // \DB::enableQueryLog();  
        $patients = Patient::select('id','first_name','second_name','dob','gender');
        if(auth()->user()->hasRole('Mid Level Service Provider Nurse') )
        {
            $patients =$patients->where('flow_status_id',2)->where();
        }
  
      //  $patients = $patients->get();
        $patients = $patients->paginate(10);
        // dd(\DB::getQueryLog()); 
        return view('pages.patient.list', compact('patients'));
    }



    public function patient_blue_form_entry($id)
    {      
        $patient = Patient::where('id', $id)
        ->first();
        $patient_difficulties = PatientPhysicalDifficulties::select(
            'physical_difficulty',
            'duration',
            DB::raw('CASE WHEN period = 1 THEN "days" WHEN period = 2 THEN "weeks" WHEN period = 3 THEN "months" WHEN period = 4 THEN "years" END AS period_value'),'users.name',DB::raw('DATE_FORMAT(patient_monthly_assessment_physical_difficulty.created_at, "%d-%M-%Y") AS formatted_date')
        )
        ->join('users', 'users.id', '=', 'patient_monthly_assessment_physical_difficulty.enteredby')
        ->where('patient_id', $id)
        ->get();

        $disease_conditions = DiseaseCondition::select('id', 'disease_condition')
        ->get();
        $patient_medications = PatientMedication::select('id','medication','medicine_type','dose','duration','route','status', DB::raw('CASE WHEN dose_unit = 1 THEN "mg" WHEN dose_unit = 2 THEN "ml" WHEN dose_unit = 3 THEN "gm"  END AS unit_dose'),DB::raw('CASE WHEN 	frequency = 1 THEN "Once" WHEN frequency = 2 THEN "Twice" WHEN frequency = 3 THEN "Thrice" WHEN frequency = 4 THEN "Four times" WHEN frequency = 5 THEN "Five times" WHEN frequency = 6 THEN "Six times" WHEN frequency = 7 THEN "Alternate days" END AS frequency'),DB::raw('CASE WHEN period = 1 THEN "daily" WHEN period = 2 THEN "weekly" WHEN period = 3 THEN "monthly"  END AS period'),DB::raw('CASE WHEN timespan = 1 THEN "days" WHEN 	timespan = 2 THEN "weeks" WHEN timespan = 3 THEN "months" WHEN timespan = 4 THEN "years"  END AS timespan'))
                                    ->with([
                                        'medicine_details' => function($query) {
                                            $query->select('id', 'medicine');  
                                        },
                                       

                                      
                                    ])
                                ->where('patient_id', $id)
                                ->whereIn('status',[1])
                                ->get();
        return view('pages.patient.profile_edit', compact('patient','patient_difficulties','disease_conditions','patient_medications'));
    }

    public function blue_form_general_save(Request $request)
    {
        try {
            \DB::beginTransaction();
    
            // Validate form inputs
            $request->validate([
                'present_condition' => 'required|string',
                'feeding_method' => 'required|in:1,2',
                'sleep' => 'required|in:1,2',
                'bowel' => 'required|in:1,2,3,4',
                'colostomy' => 'required|in:1,2',
                'bladder_habit' => 'required|in:1,2',
            ]);
    
            // Check if the 'difficulty' array is present and not empty
            if ($request->has('difficulty') && !empty($request->input('difficulty'))) {
                $difficulty = $request->input('difficulty');
                $duration = $request->input('duration', []);
                $period = $request->input('period', []);
    
                $difficulty_data = [];
                foreach ($difficulty as $index => $value) {
                    if ($value) { // Only save if there's a valid difficulty value
                        $difficulty_data[] = [
                            'patient_id' => $request->patient_id,
                            'physical_difficulty' => $value,
                            'period' => $period[$index] ?? null,
                            'duration' => $duration[$index] ?? null,
                            'enteredby' => auth()->user()->id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
    
                // Insert data only if there is any valid difficulty data
                if (!empty($difficulty_data)) {
                    try {
                        \DB::table('patient_monthly_assessment_physical_difficulty')->insert($difficulty_data);
                    } catch (\Exception $e) {
                        // Log any errors during insertion
                        \Log::error('Error inserting data: ' . $e->getMessage());
                        return back()->withErrors(['error' => 'There was an error saving the data.'])->withInput();
                    }
                }
            }
    
            $existingRecord = PatientBlueFormGeneralCondition::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {                
                $existingRecord->status = 0;
                $existingRecord->save();
            }
            PatientBlueFormGeneralCondition::create([
                'patient_id' => $request->patient_id,
                'present_condition' => $request->present_condition,
                'feeding_method' => $request->feeding_method,
                'sleep' => $request->sleep,
                'bowel' => $request->bowel,
                'colostomy' => $request->colostomy,
                'bladder_habit' => $request->bladder_habit,
                'enteredby' => auth()->user()->id,
                'status' => 1,
            ]);
            $flow_status_id=4;
            $existingRecord = PatientBlueFormDetailedExamination::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {  
                $flow_status_id++;
            }
            $existingRecord = PatientBlueFormOtherDetails::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {  
                $flow_status_id++;
            }
            Patient::where('id', $request->patient_id)->update(['flow_status_id' => $flow_status_id]);
            \DB::commit();
    
            return redirect()->route('patient_blue_form', ['id' => $request->patient_id])
                ->with('success', 'Patient general information saved successfully!')
                ->with('notification', 'Patient data saved successfully!')
                ->header('Location', route('patient_blue_form', ['id' => $request->patient_id]) . '?page=detail_exam');
    
        } catch (\Exception $e) {
            \DB::rollBack();
            return back()->withErrors(['error' => 'An error occurred while saving general condition: ' . $e->getMessage()])->withInput();
        }
    }
    


    public function blue_form_detail_info_save(Request $request)
    {
     //   dd($request->all());
        try {
            \DB::beginTransaction();  
            $request->validate([
                'systolic_bp' => 'required|integer',
                'diastolic_bp' => 'required|integer',
                'pulse_rate' => 'required|integer',
                'oral_hygiene' => 'required|in:1,2',
                'skin_care' => 'required|in:1,2',
                'skin_integrity' => 'required|in:1,2',
                'pressure_sore' => 'required|in:1,2',
                'private_hygiene' => 'required|in:1,2',                
            ]); 
            $existingRecord = PatientBlueFormDetailedExamination::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {                
                $existingRecord->status = 0;
                $existingRecord->save();
            }        
            PatientBlueFormDetailedExamination::create([
                'patient_id' => $request->patient_id,
                'systolic_bp' => $request->systolic_bp,
                'diastolic_bp' => $request->diastolic_bp,
                'pulse_rate' => $request->pulse_rate,
                'oral_hygiene' => $request->oral_hygiene,
                'skin_care' => $request->skin_care,
                'skin_integrity' => $request->skin_integrity,
                'pressure_sore' => $request->pressure_sore,
                'private_hygiene' => $request->private_hygiene,
                'enteredby' => auth()->user()->id,
                'status' => 1,
            ]);

            $flow_status_id=3;
            $existingRecord = PatientBlueFormGeneralCondition::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {  
                $flow_status_id=$flow_status_id+2;
                $existingRecord = PatientBlueFormOtherDetails::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
                if ($existingRecord) {  
                    $flow_status_id++;
                }
            }          
            
           
            Patient::where('id', $request->patient_id)->update(['flow_status_id' => $flow_status_id]);
    
            \DB::commit();    
            return redirect()->route('patient_blue_form', ['id' => $request->patient_id])
                    ->with('success', 'Patient detailed examination saved successfully!')
                    ->with('notification', 'Patient data saved successfully!')
                    ->header('Location', route('patient_blue_form', ['id' => $request->patient_id]) . '?page=other_conditions');
        
        } catch (\Exception $e) {
            \DB::rollBack();
            return back()->withErrors(['error' => 'An error occurred while saving detailed examination: ' . $e->getMessage()])->withInput();
        }
    }

    public function blue_form_other_detail_save(Request $request)
    {
     //   dd($request->all());
        try {
            \DB::beginTransaction();  
            $request->validate([
                'mental_constraint' => 'required|in:1,2',
                'social_constraint' => 'required|in:1,2',
                'rehabilitation_service' => 'required',
                'thing_from_homecare' => 'required',
                'disease_condition.*' => 'required|integer|exists:mt_patient_disease_conditions,id',
                              
            ]);      
            
            $disease_condition_ids = $request->input('disease_condition');
     
       
            if (!is_array($disease_condition_ids)) {
                $disease_condition_ids = [$disease_condition_ids];
            }
            
            $patient_disease_Data = [];        
            foreach ($disease_condition_ids as $disease_condition_id) { 
                if (!empty($disease_condition_id)) { 
                    $patient_disease_Data[] = [
                        'patient_id' => $request->patient_id,
                        'disease_condition' => $disease_condition_id,
                        'enteredby' =>   auth()->user()->id, 
                        'created_at' =>Carbon::now(), 
                        'status' => 1
                    ];
                }
            } 
            if (!empty($patient_disease_Data)) {
            PatientDiseaseConditions::insert($patient_disease_Data);
            }
            
            $low_mood = $request->low_mood ?? null;
            $depression = $request->depression ?? null;
            $anxiety = $request->anxiety ?? null;
            $phychiatric_disorder = $request->phychiatric_disorder ?? null;
            $memory_loss = $request->memory_loss ?? null;
            $mental_constraint_details = $request->mental_constraint_details ?? null;
            $social_exclusion = $request->social_exclusion ?? null;
            $family_not_Care = $request->family_not_Care ?? null;
            $no_support_sytem = $request->no_support_sytem ?? null;
            $social_constraints_detail = $request->social_constraints_detail ?? null;

            $existingRecord = PatientBlueFormOtherDetails::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {                
                $existingRecord->status = 0;
                $existingRecord->save();
            } 

            PatientBlueFormOtherDetails::create([
                'patient_id' => $request->patient_id,
                'mental_constraint' => $request->mental_constraint,
                'low_mood' => $low_mood,
                'depression' =>$depression,
                'anxiety' => $anxiety,
                'phychiatric_disorder' => $phychiatric_disorder,
                'memory_loss' => $memory_loss,
                'mental_constraint_details' => $mental_constraint_details,
                'social_constraint' => $request->social_constraint,
                'social_exclusion' => $social_exclusion,
                'family_not_Care' => $family_not_Care,
                'no_support_sytem' => $no_support_sytem,
                'social_constraints_detail' => $social_constraints_detail,
                'rehabilitation_service' => $request->rehabilitation_service,
                'thing_from_homecare' => $request->thing_from_homecare,
                'enteredby' => auth()->user()->id,
                'status' => 1,
            ]);


            $flow_status_id=3;
            $existingRecord = PatientBlueFormGeneralCondition::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
            if ($existingRecord) {  
                $flow_status_id++;
                $existingRecord = PatientBlueFormDetailedExamination::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
                if ($existingRecord) {  
                    $flow_status_id=$flow_status_id+2;
                }
            } 
            Patient::where('id', $request->patient_id)->update(['flow_status_id' => $flow_status_id]);
            \DB::commit();    
            return redirect()->route('patient_blue_form', ['id' => $request->patient_id])
                    ->with('success', 'Patient detailed examination saved successfully!')
                    ->with('notification', 'Patient data saved successfully!')
                    ->header('Location', route('patient_blue_form', ['id' => $request->patient_id]) . '?page=medication');
        
        } catch (\Exception $e) {
            \DB::rollBack();
            return back()->withErrors(['error' => 'An error occurred while saving detailed examination: ' . $e->getMessage()])->withInput();
        }
    }
    


    public function medicine_updateStatus(Request $request, $id)
{
    $medication = PatientMedication::findOrFail($id);
    $medication->status = $request->status;
    $medication->save();
    return redirect()->back();
}

public function updateMedicationStatus(Request $request)
{
    $medicationId = $request->input('medication_id');


    $medication = PatientMedication::find($medicationId);
    if ($medication) {
        $medication->status = 2; 
        $medication->save();
    }

    return redirect()->back()->with('success', 'Medication status updated successfully!');
}

public function deleteMedication(Request $request)
{
    $medicationId = $request->input('medication_id');
    $medication = PatientMedication::find($medicationId);
    if ($medication) {
        $medication->status = 0; 
        $medication->save();
    }
    return redirect()->back()->with('success', 'Medication status updated successfully!');
}



public function blue_form_medicine_save(Request $request) {
    $medicines = $request->input('medicines');  
    $patientId = $request->patient_id; 

    foreach ($medicines as $medicine) {
        // Ensure the $medicine is an array and contains the necessary keys.
        $validatedData = Validator::make($medicine, [
            'medicine_name' => 'required|string',
            'medicine_type' => 'required|string',
            'med_dose' => 'required|numeric',
            'dose_unit' => 'required|string',
            'med_frequency' => 'required|string',
            'med_period' => 'required|string',            
            'medicine_mode' => 'required|string',
        ]);

        // Check if validation fails.
        if ($validatedData->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation failed']);
        }

        // If validation passes, save the medication.
        PatientMedication::create([
            'patient_id' => $patientId,
            'medication' => $medicine['medicine_name'],
            'medicine_type' => $medicine['medicine_type'],
            'dose' => $medicine['med_dose'],
            'dose_unit' => $medicine['dose_unit'],
            'frequency' => $medicine['med_frequency'],
            'period' => $medicine['med_period'],
            'duration' => $medicine['duration'],
            'timespan' => $medicine['timespan'],
            'route' => $medicine['medicine_mode'],
            'enteredby' => auth()->user()->id,
            'status' => 1
        ]);
    }

    // return redirect()->route('patient_blue_form', ['id' => $request->patient_id])
    // ->with('success', 'Patient medication details saved successfully!')
    // ->with('notification', 'Patient drug details saved successfully!')
    // ->header('Location', route('patient_blue_form', ['id' => $request->patient_id]) . '?page=medication');
    return response()->json([
        'success' => true,
        'message' => 'Patient medication details saved successfully!'
    ]);

}


// public function pending_blue_form()
// {      
//     // \DB::enableQueryLog();  
//     $patients = Patient::select('id','first_name','second_name','dob','gender');
//     // if(auth()->user()->hasRole('Palliative Care Nurse') )
//     // {
//         $patients =$patients->where('status',1);
//     // }

//   //  $patients = $patients->get();
//     $patients = $patients->paginate(10);
//     // dd(\DB::getQueryLog()); 
//     return view('pages.patient.blue_form_pending', compact('patients'));
// }


public function pending_pink_list()
{      
       $list_type="pink_pending";
    return view('pages.patient.list', compact('list_type'));
}
public function completed_pink_list()
{      
    $list_type="pink_completed";
    return view('pages.patient.list', compact('list_type'));
}
public function pending_blue_list()
{      
       $list_type="blue_pending";
    return view('pages.patient.list', compact('list_type'));
}
public function completed_blue_list()
{      
    $list_type="blue_completed";
    return view('pages.patient.list', compact('list_type'));
}
public function pending_classify_list()
{      
       $list_type="classify_pending";
    return view('pages.patient.list', compact('list_type'));
}
public function completed_classify_list()
{      
    $list_type="classify_completed";
    return view('pages.patient.list', compact('list_type'));
}
public function pending_white_list()
{      
       $list_type="white_pending";
    return view('pages.patient.list', compact('list_type'));
}
public function completed_white_list()
{      
    $list_type="white_completed";
    return view('pages.patient.list', compact('list_type'));
}
public function edit_patient($id)
{
    $patient_id=$id;
    $flow_status_id = Patient::where('id', $id)->pluck('flow_status_id')->first();
    if($flow_status_id==1 || $flow_status_id==2)
    return view('pages/patient/register_new_patient',compact('flow_status_id','patient_id'));
   
}


public function getPatientsList(Request $request)
{
    $listType = $request->get('list_type');
    $columns = [ 'patient_code', 'first_name', 'second_name','dob','phone_no']; 
    $patients = Patient::query();

    if($listType=="pink_pending")
    {
        $patients->whereIn('flow_status_id',[1,2]);
    }
    else if($listType=="pink_completed")
    {
        $patients->whereIn('flow_status_id',[3,4,5,6,7,8]);
    }
    else if($listType=="blue_pending")
    {
        $patients->whereIn('flow_status_id',[3,4,5]);
    }
    else if($listType=="blue_completed")
    {
        $patients->whereIn('flow_status_id',[6,7,8]);
    }
    else if($listType=="classify_pending")
    {
        $patients->where('flow_status_id',6)->whereNull('class');
    }
    else if($listType=="classify_completed")
    {
        $patients->where('flow_status_id',7);
    }
    else if($listType=="white_pending")
    {
        $patients->whereIn('flow_status_id',[7]);
    }
    else if($listType=="white_completed")
    {
        $patients->where('flow_status_id',8);
    }

    if(auth()->user()->hasRole('Junior Health Inspector') || auth()->user()->hasRole('Junior Public Health Nurse'))	    
    {
        // $patients =$patients->where('enteredby',auth()->user()->id);
    }
    // else if(auth()->user()->hasRole('Mid Level Service Provider Nurse'))	    
    // {
    //     $patients.=$patients->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
    //                             ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id');
    // }
    if ($search = $request->input('search.value')) {
        $patients->where(function($query) use ($search) {
            $query->where('patient_code', 'like', "%{$search}%")
                  ->orWhere('first_name', 'like', "%{$search}%")
                  ->orWhere('second_name', 'like', "%{$search}%")
                  ->orWhere('dob', 'like', "%{$search}%")
                  ->orWhere('phone_no', 'like', "%{$search}%");
        });
    }
    $orderColumn = $columns[$request->input('order.0.column')];
    $orderDir = $request->input('order.0.dir', 'asc');
    $patients->orderBy($orderColumn, $orderDir);
    $totalRecords = $patients->count();  
    $filteredPatients = $patients->skip($request->input('start'))->take($request->input('length'))->get();
    
    $patientsData = $filteredPatients->map(function($patient) {
        $patient->name = $patient->first_name . ' ' . $patient->second_name; // Concatenate names
        unset($patient->first_name); 
        unset($patient->second_name); 
        return $patient;
    });
    // Return JSON response
    return response()->json([
        'draw' => (int) $request->input('draw'),

        'recordsTotal' => $totalRecords, // Total number of records

        'recordsFiltered' => $patients->count(), // Filtered count (before pagination)

        'data' => $patientsData
    ]);
}



public function save_classify(Request $request)
{
   

    $validator = Validator::make($request->all(), [
        'patient_id'    => 'required|integer|exists:patient_master,id',        
        'classify' => 'required|integer|in:1,2',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors(),
        ], 422); 
    }

    try {
        \DB::beginTransaction();

        PatientClassification::create([
            'patient_id'    => $request->patient_id,    
            'patient_type'  => $request->classify,
            'enteredby' =>   auth()->user()->id,            
            'status'        => 1
                                                         
        ]);

        Patient::where('id', $request->patient_id)->update(['flow_status_id' => 7,'class'=> $request->classify]);


        $existingRecord = PatientDisease::where(['patient_id'=> $request->patient_id,'status'=>1])->first();
        if ($existingRecord) {                
            Patient::where('id', $request->patient_id)->update(['flow_status_id' => 8]);

        } 

        // Commit the transaction
        \DB::commit();

        return redirect()->route('patient.profile', ['id' => $request->patient_id])->with('success', 'Patient classified successfully!');
    }
    catch (\Illuminate\Validation\ValidationException $e) {
       
        return response()->json([
            'success' => false,
            'errors' => $e->errors(),  
        ], 422);  
    }catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'An error occurred while saving.',
            'error'   => $e->getMessage(),
        ], 500);
    }

}



public function edit_white_form($id)
{    
   $patient_id=$id;
    return view('pages/patient/register_patient',compact('patient_id'));   

   
}

 
    
}
