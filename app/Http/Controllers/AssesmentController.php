<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\PatientAddress;
use App\Models\PatientLocation;
use App\Models\Ward;
use App\Models\WardMember;
use App\Models\AshaWorker;
use App\Models\PatientDiagnosis;
use App\Models\PalliativeNurse;
use App\Models\JHI;
use App\Models\JPHN;
use App\Models\JHISubcentre;
use App\Models\Mlsp;
use App\Models\PatientMonthlyAssessmentVisit;
use App\Models\PatientMonthlyAssessmentBasicNeeds;
use App\Models\PatientMonthlyAssessmentPersonalHygiene;
use App\Models\PatientMonthlyAssessmentPhysiotherapy;
use App\Models\PatientMonthlyAssessmentHomecare;
use Illuminate\Support\Facades\Validator;
 
class AssesmentController extends Controller
{
    public function assesment_checklist_pageone(): View {
        return view('pages/assesmentchecklist/checklist_pageone');
    }
    
    public function getPatientDetails($id) {
        $patient = Patient::find($id);
        
        $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        $ward_id = $patient_location->ward_id;
        $ward = Ward::where('id', $ward_id)
                ->first();
        $patient_diagnosis = PatientDiagnosis::where('patient_id', $id)
                            ->whereIn('status', [1])
                            ->with('diagnosis')
                            ->get();
        $diagnosis_names = $patient_diagnosis->map(function ($diagnosis) {
                                return $diagnosis->diagnosis->diagnosis ?? ''; 
        })->filter()->values(); 

        if ($patient) {
            \Log::info('dob:', [$patient->dob]);
            return response()->json([
                'id' => $patient->id,
                // 'p_code' => $patient->patient_code,
                'name' => $patient->first_name . " " . $patient->second_name,
                'age' => $this->calculateAge($patient->dob),
                'ward_no' => is_numeric($ward->ward_no) ? $ward->ward_no : null,
                // 'ward_no' => $ward ? $ward->ward_no : null,
                'diagnosis' => $diagnosis_names->isNotEmpty() ? $diagnosis_names->implode(', ') : null, 
            ]);
        }
        return response()->json(['error' => 'Patient not found'], 404);
    }

    private function calculateAge($dob) {
        if (!$dob) {
            return null; // Return null if DOB is not provided
        }
        return Carbon::parse($dob)->age; // Calculate age using Carbon
    }
    
    public function getNursesByPatient() {
        $p_nurse = PalliativeNurse::first();
        if ($p_nurse) {
            return response()->json([
                'id' => $p_nurse->id,
                'p_nurse' => $p_nurse->nurse_name,
            ]);
        }
        return response()->json(['error' => 'Nurse not found'], 404);
    }
    
    public function getJhiData($id) {
        $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        if (!$patient_location) {
            return response()->json(['jhis' => []]); // Return empty if no patient location found
        }
        $subcentre_id = $patient_location->subcentre_id;
        
        $jhi = JHISubcentre::where('subcentre_id', $subcentre_id)
                ->where('status', 1)
                ->with('JHI')
                ->get();
        $jhi_list = $jhi->map(function ($item) {
            return [
                'id' => $item->jhi->id ?? null, 
                'name' => $item->jhi->jhi_name ?? null
            ];
        })->filter(function ($item) {
            return $item['id'] && $item['name']; // Filter out null values
        })->values();
    
        return response()->json(['jhis' => $jhi_list]);
    }
    
    public function getJphnData($id) {
        $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        if (!$patient_location) {
            return response()->json(['jphns' => []]); // Return empty if no patient location found
        }
        $subcentre_id = $patient_location->subcentre_id; 
        // \Log::info('Subcentre ID:', [$subcentre_id]);
        
        $jphn = JPHN::where('subcentre_id', $subcentre_id)
                ->where('status', 1)
                ->get();
        // \Log::info('Fetched JPHNs:', $jphn->toArray());
        $jphn_list = $jphn->map(function ($item) {
            return [
                'id' => $item->id, 
                'name' => $item->jphn_name 
            ];
        });
        return response()->json(['jphns' => $jphn_list]); 
    }
        

    public function getWmData($id) {
        $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        if (!$patient_location) {
            return response()->json(['ward' => []]); // Return empty if no patient location found
        }

        $ward_id = $patient_location->ward_id;
        
        $ward_m = WardMember::where('ward', $ward_id)
                ->where('status', 1)
                ->get();
        $ward_members = $ward_m->map(function ($item) {
            return [
                'id' => $item->id ?? null, // Ensure the ID exists
                'member' => $item->member_name ?? null // Ensure the name exists
            ];
        });
        return response()->json(['ward' => $ward_members]);
    }
    public function getAshaData($id) {
        $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        if (!$patient_location) {
            return response()->json(['ward' => []]); // Return empty if no patient location found
        }

        $ward_id = $patient_location->ward_id;
        
        $ashas = AshaWorker::where('ward', $ward_id)
                ->where('status', 1)
                ->get();
        $asha_workers = $ashas->map(function ($item) {
            return [
                'id' => $item->id ?? null, // Ensure the ID exists
                'asha_worker' => $item->asha_worker_name ?? null // Ensure the name exists
            ];
        });
        return response()->json(['asha' => $asha_workers]);
    }
    
    public function getMlspData($id) {
       $patient_location = PatientLocation::where('patient_id', $id)
                            ->where('status', 1)
                            ->first();
        if (!$patient_location) {
            return response()->json(['mlsps' => []]); // Return empty if no patient location found
        }
        $ward_id = $patient_location->ward_id; 
        // \Log::info('Subcentre ID:', [$subcentre_id]);
        
        $mlsps = Mlsp::whereHas('wards', function ($query) use ($ward_id) {
            $query->where('ward_id', $ward_id);
        })
        ->where('status', 1)
        ->get();

        // Map the results
        $mlsp_list = $mlsps->map(function ($item) {
            return [
                'id' => $item->id,
                'mlsp_name' => $item->mlsp_name,
            ];
        });

        return response()->json(['mlsps' => $mlsp_list]);
    }
    
    public function save_basic_details(Request $request) {
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|integer|exists:patient_master,id',
            'visited_date' => 'required|date',
            'visited_time' => 'required|string',
            'visited_doctor' => 'nullable|string',
            'visited_palliativenurse' => 'nullable|integer|exists:mt_palliative_nurse,id',
            'visited_jhi' => 'nullable|integer|exists:mt_jhi,id',
            'visited_jphn' => 'nullable|integer|exists:mt_jphn,id',
            'visited_volunteer' => 'nullable|string',
            'visited_ward_member' => 'nullable|integer|exists:mt_ward_members,id',
            'visited_mlsp' => 'nullable|integer|exists:mt_mid_level_service_providers,id',
            'visited_ashaworker' => 'nullable|integer|exists:mt_asha_workers,id',
            'phy_ill' => 'required|integer',
            'bp_systolic' => 'required|integer',
            'bp_diastolic' => 'required|integer',
            'pr' => 'required|integer',
            'grbs' => 'required|integer',
            'spo2' => 'required|integer',
            'body_built' => 'required|integer',
            'nutrition' => 'required|integer',
            'consciousness_level' => 'required|integer',
            'time_orientation' => 'required|integer',
            'place_orientation' => 'required|integer',
            'person_orientation' => 'required|integer',
            'gaze' => 'required|integer',
            'current_physical_condition' => 'required|integer',
            'speech_and_language' => 'required|integer',
            'dysarthria' => 'required|integer',
            'sleep' => 'required|integer',
            
            'difficulty' => 'nullable|array',
            'difficulty.*' => 'string|max:255',
            'duration' => 'nullable|array',
            'duration.*' => 'integer|min:1',
            'period' => 'nullable|array',
            'period.*' => 'integer|min:1',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
    
        try {
            // Access validated data using the validated method
            $validatedData = $validator->validated();
    
            // Ensure that you access validated data (not $validator directly)
            $formattedDate = date('Y-m-d', strtotime($validatedData['visited_date']));
    
            $visit_time = \DateTime::createFromFormat('h:i A', $validatedData['visited_time']);
            if ($visit_time) {
                $formattedTime = $visit_time->format('H:i:s');  // Converts to 'HH:MM:SS' (24-hour format)
            } else {
                throw new \Exception('Invalid time format.');
            }
            $monthlyAssessment = PatientMonthlyAssessmentVisit::create([
                'patient_id' => $validatedData['patient_id'],
                'visit_date' => $formattedDate,
                'visited_time' => $visit_time,
                'visited_doctor' => $validatedData['visited_doctor'],
                'visited_palliativenurse' => $validatedData['visited_palliativenurse'],
                'visited_jhi' => $validatedData['visited_jhi'],
                'visited_jphn' => $validatedData['visited_jphn'],
                'visited_volunteer' => $validatedData['visited_volunteer'],
                'visited_ward_member' => $validatedData['visited_ward_member'],
                'visited_mlsp' => $validatedData['visited_mlsp'],
                'visited_ashaworker' => $validatedData['visited_ashaworker'],
                'physical_difficulty' => $validatedData['phy_ill'],
                'bp_diastolic' => $validatedData['bp_diastolic'],
                'bp_systolic' => $validatedData['bp_systolic'],
                'pulse_rate' => $validatedData['pr'],
                'general_random_blood_sugar' => $validatedData['grbs'],
                'spo2' => $validatedData['spo2'],
                'body_built' => $validatedData['body_built'],
                'nutrition' => $validatedData['nutrition'],
                'consciousness_level' => $validatedData['consciousness_level'],
                'time_orientation' => $validatedData['time_orientation'],
                'place_orientation' => $validatedData['place_orientation'],
                'person_orientation' => $validatedData['person_orientation'],
                'gaze' => $validatedData['gaze'],
                'current_physical_condition' => $validatedData['current_physical_condition'],
                'speech_and_language' => $validatedData['speech_and_language'],
                'dysarthria' => $validatedData['dysarthria'],
                'sleep' => $validatedData['sleep'],
                'enteredby' => auth()->user()->id,
                'status' => 1,
            ]);
            if ($monthlyAssessment) { 
                $difficultyData = []; 
                if ($validatedData['phy_ill'] == 1) {
                    $difficulty=$request->input('difficulty[]');
                    $duration = $request->input('duration[]');
                    $period = $request->input('period[]');
                    if (count($difficulty) == count($duration) && count($duration) == count($period)) {
                        foreach ($difficulty as $index => $value) {
                            $difficultyData[] = [
                                'patient_id' => $validatedData['patient_id'],
                                'visit_id' => $monthlyAssessment->id,
                                'physical_difficulty' => $value,
                                'period' => $period[$index] ?? null,
                                'duration' => $duration[$index] ?? null,
                                'enteredby' => auth()->user()->id,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ];
                        }
                        if (!empty($difficultyData)) {
                            \DB::table('patient_monthly_assessment_physical_difficulty')->insert($difficultyData);
                        }
                    } else {
                        \Log::error('Mismatch or empty difficulty data.');
                    }
                }
            }
            return response()->json([
                'success' => true,
                'message' => 'Basic details saved successfully!',
                'visit_id' => $monthlyAssessment->id,
                'patient_id' => $validatedData['patient_id'],
                'difficultyData' => $difficultyData, // Debugging
            ]);
        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors(),  
            ], 422);  
        }
        catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while saving basic details.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    
    
    
    
    
    
    public function save_memory_details(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visit_id' => 'required|integer|exists:patient_monthly_assessment_visit,id',
            'immediate_short_term_memory' => 'required|integer',
            'recent_memory' => 'required|integer',
            'remote_memory' => 'required|integer',
            'attention' => 'required|integer',
            'concentration' => 'required|integer',
            'altered_smell_sensation' => 'required|integer',
            'vision_difficulty' => 'required|integer',
            'refractive_error' => 'nullable|integer',
            'cataract' => 'nullable|integer',
            'diminisioned_vision' => 'nullable|integer',
            'pupil_size' => 'required|integer',
            'pupil_shape' => 'required|integer',
            'light_reaction' => 'required|string',
            'diplopia' => 'nullable|integer',
            'nystagmus' => 'nullable|integer',
            'ptosis' => 'nullable|integer',
            'other_eye_disease' => 'nullable|string',
            'chewing_difficulty' => 'required|integer',
            'facial_assymetry' => 'required|integer',
            'salvia_drooling' => 'required|integer',
            'food_statis' => 'required|integer',
            'dysphagia' => 'required|integer',
            'postural_imbalance' => 'required|integer',
            'angle_deviation_mouth' => 'required|integer',
            'upp_limb_muscle_tone_rt' => 'required|integer',
            'upp_limb_muscle_tone_lt' => 'required|integer',
            'upp_limb_muscle_power_rt' => 'required|integer',
            'upp_limb_muscle_power_lt' => 'required|integer',
            'upp_limb_reflex_rt' => 'required|integer',
            'upp_limb_reflex_lt' => 'required|integer',
            'upp_limb_pain' => 'required|integer',
            'upp_limb_oedema' => 'required|integer',
            'upp_limb_cellulitis' => 'required|integer',
            'upp_limb_clubbing' => 'required|integer',
            'upp_limb_cyanosis' => 'required|integer',
            'upp_limb_paresis' => 'required|integer',
            'upp_limb_contractures' => 'required|integer',
            'low_limb_muscle_tone_rt' => 'required|integer',
            'low_limb_muscle_tone_lt' => 'required|integer',
            'low_limb_muscle_power_rt' => 'required|integer',
            'low_limb_muscle_power_lt' => 'required|integer',
            'low_limb_reflex_rt' => 'required|integer',
            'low_limb_reflex_lt' => 'required|integer',
            'low_limb_pain' => 'required|integer',
            'low_limb_oedema' => 'required|integer',
            'low_limb_cellulitis' => 'required|integer',
            'low_limb_clubbing' => 'required|integer',
            'low_limb_cyanosis' => 'required|integer',
            'low_limb_paresis' => 'required|integer',
            'low_limb_contractures' => 'required|integer',
            'gait' => 'required|integer',
            'epilepsy' => 'nullable|integer',
            'chorea' => 'nullable|integer',
            'tremors' => 'nullable|integer',
            'facial_dystonia' => 'nullable|integer',
            'other_involuntary_movements' => 'nullable|string',
            'unsteady_standing_walking' => 'nullable|integer',
            'vertigo' => 'nullable|integer',
            'food_bringing_difficulty' => 'nullable|integer',
            'deafness' => 'nullable|integer',
        ]);
        
       if ($validator->fails()) {
        //   echo("helloo");exit();
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
        // echo("hii");exit();
        // \Log::info('Data received:', $validator);
        try {
            $validatedData = $validator->validated();
            PatientMonthlyAssessmentVisit::where('id', $validatedData['visit_id'])
                    ->update([
                        'immediate_short_term_memory' => $validatedData['immediate_short_term_memory'],
                        'recent_memory' => $validatedData['recent_memory'],
                        'remote_memory' => $validatedData['remote_memory'],
                        'attention' => $validatedData['attention'],
                        'concentration' => $validatedData['concentration'],
                        'altered_smell_sensation' => $validatedData['altered_smell_sensation'],
                        'vision_difficulty' => $validatedData['vision_difficulty'],
                        'refractive_error' => $validatedData['refractive_error'],
                        'cataract' => $validatedData['cataract'],
                        'diminisioned_vision' => $validatedData['diminisioned_vision'],
                        'pupil_size' => $validatedData['pupil_size'],
                        'pupil_shape' => $validatedData['pupil_shape'],
                        'light_reaction' => $validatedData['light_reaction'],
                        'diplopia' => $validatedData['diplopia'],
                        'nystagmus' => $validatedData['nystagmus'],
                        'ptosis' => $validatedData['ptosis'],
                        'other_eye_disease' => $validatedData['other_eye_disease'],
                        'chewing_difficulty' => $validatedData['chewing_difficulty'],
                        'facial_assymetry' => $validatedData['facial_assymetry'],
                        'salvia_drooling' => $validatedData['salvia_drooling'],
                        'food_statis' => $validatedData['food_statis'],
                        'dysphagia' => $validatedData['dysphagia'],
                        'postural_imbalance' => $validatedData['postural_imbalance'],
                        'angle_deviation_mouth' => $validatedData['angle_deviation_mouth'],
                        'upp_limb_muscle_tone_rt' => $validatedData['upp_limb_muscle_tone_rt'],
                        'upp_limb_muscle_tone_lt' => $validatedData['upp_limb_muscle_tone_lt'],
                        'upp_limb_muscle_power_rt' => $validatedData['upp_limb_muscle_power_rt'],
                        'upp_limb_muscle_power_lt' => $validatedData['upp_limb_muscle_power_lt'],
                        'upp_limb_reflex_rt' => $validatedData['upp_limb_reflex_rt'],
                        'upp_limb_reflex_lt' => $validatedData['upp_limb_reflex_lt'],
                        'upp_limb_pain' => $validatedData['upp_limb_pain'],
                        'upp_limb_oedema' => $validatedData['upp_limb_oedema'],
                        'upp_limb_cellulitis' => $validatedData['upp_limb_cellulitis'],
                        'upp_limb_clubbing' => $validatedData['upp_limb_clubbing'],
                        'upp_limb_cyanosis' => $validatedData['upp_limb_cyanosis'],
                        'upp_limb_paresis' => $validatedData['upp_limb_paresis'],
                        'upp_limb_contractures' => $validatedData['upp_limb_paresis'],
                        'low_limb_muscle_tone_rt' => $validatedData['low_limb_muscle_tone_rt'],
                        'low_limb_muscle_tone_lt' => $validatedData['low_limb_muscle_tone_lt'],
                        'low_limb_muscle_power_rt' => $validatedData['low_limb_muscle_power_rt'],
                        'low_limb_muscle_power_lt' => $validatedData['low_limb_muscle_power_lt'],
                        'low_limb_reflex_rt' => $validatedData['low_limb_reflex_rt'],
                        'low_limb_reflex_lt' => $validatedData['low_limb_reflex_lt'],
                        'low_limb_pain' => $validatedData['low_limb_pain'],
                        'low_limb_oedema' => $validatedData['low_limb_oedema'],
                        'low_limb_cellulitis' => $validatedData['low_limb_cellulitis'],
                        'low_limb_clubbing' => $validatedData['low_limb_clubbing'],
                        'low_limb_cyanosis' => $validatedData['low_limb_cyanosis'],
                        'low_limb_paresis' => $validatedData['low_limb_paresis'],
                        'low_limb_contractures' => $validatedData['low_limb_paresis'],
                        'gait' => $validatedData['gait'],
                        'epilepsy' => $validatedData['epilepsy'],
                        'chorea' => $validatedData['chorea'],
                        'tremors' => $validatedData['tremors'],
                        'facial_dystonia' => $validatedData['facial_dystonia'],
                        'other_involuntary_movements' => $validatedData['other_involuntary_movements'],
                        'unsteady_standing_walking' => $validatedData['unsteady_standing_walking'],
                        'vertigo' => $validatedData['vertigo'],
                        'food_bringing_difficulty' => $validatedData['food_bringing_difficulty'],
                        'deafness' => $validatedData['deafness'],
                        'enteredby' => auth()->user()->id,
                    ]);
            
            
            
           return response()->json([
                    'success' => true,
                    'message' => 'Patient information  saved successfully!',
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
    
    public function save_primary_needs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|integer|exists:patient_master,id',
            'visit_id' => 'required|integer|exists:patient_monthly_assessment_visit,id',
            'dietary_habits' => 'required|integer',
            'hungry' => 'required|integer',
            'food_steady_position' => 'required|integer',
            'balanced_diet' => 'required|integer',
            'liquid_food' => 'required|integer',
            'slow_food' => 'required|integer',
            'know_lying_food' => 'required|integer',
            'stool' => 'required|integer',
            'colostomy' => 'required|integer',
            'urination' => 'required|integer',
            'stoma' => 'required|integer',
        ]);
         if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
        // \Log::info('Data received:', $validator);
        try {
            $validatedData = $validator->validated();
            $basicNeeds = PatientMonthlyAssessmentBasicNeeds::create([
                'patient_id' => $validatedData['patient_id'],
                'visit_id' => $validatedData['visit_id'],
                'dietary_habits' => $validatedData['dietary_habits'],
                'hungry' => $validatedData['hungry'],
                'food_steady_position' => $validatedData['food_steady_position'],
                'balanced_diet' => $validatedData['balanced_diet'],
                'liquid_food' => $validatedData['liquid_food'],
                'slow_food' => $validatedData['slow_food'],
                'know_lying_food' => $validatedData['know_lying_food'],
                'stool' => $validatedData['stool'],
                'colostomy' => $validatedData['colostomy'],
                'urination' => $validatedData['urination'],
                'stoma' => $validatedData['stoma'],
                'enteredby' => auth()->user()->id,
            ]);
    
           return response()->json([
                    'success' => true,
                    'message' => 'Patient information  saved successfully!',
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
    public function save_general_hygiene(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|integer|exists:patient_master,id',
            'visit_id' => 'required|integer|exists:patient_monthly_assessment_visit,id',
            'bath_days' => 'required|integer',
            'family_know_clean' => 'required|integer',
            'oral_mucosa' => 'required|integer',
            'teeth' => 'required|integer',
            'oral_hygiene' => 'required|integer',
            'candidiasis' => 'nullable|integer',
            'halitosis' => 'nullable|integer',
            'aphthous_ulcer' => 'nullable|integer',
            'dental_caries' => 'nullable|integer',
            'other_oral_prblem' => 'nullable|string',
            'advice_on_aspiration' => 'required|integer',
            'nails_care' => 'required|integer',
            'eyes_care' => 'required|integer',
            'skin_care' => 'required|integer',
            'skin_integrity' => 'required|integer',
            'pressure_sore' => 'required|integer',
            'pressure_point_pain' => 'required|integer',
            'skin_moisture' => 'required|integer',
            'physical_activity' => 'required|integer',
            'self_movement' => 'required|integer',
            'daily_diet_valued' => 'required|integer',
            'high_risk_said' => 'required|integer',
            'friction_said' => 'required|integer',
            'pressure_point_said' => 'required|integer',
            'lying_position_known' => 'required|integer',
            'air_water_bed' => 'required|integer',
            'daily_skincare_known' => 'required|integer',
            'drying_parts' => 'required|integer',
            'body_changes' => 'required|integer',
            'ventilated_room' => 'required|integer',
        ]);
         if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
        // \Log::info('Data received:', $validator);
        try {
            $validatedData = $validator->validated();
            PatientMonthlyAssessmentPersonalHygiene::create([
                'patient_id' => $validatedData['patient_id'],
                'visit_id' => $validatedData['visit_id'],
                'bath_days' => $validatedData['bath_days'],
                'family_know_clean' => $validatedData['family_know_clean'],
                'oral_mucosa' => $validatedData['oral_mucosa'],
                'teeth' => $validatedData['teeth'],
                'oral_hygiene' => $validatedData['oral_hygiene'],
                'candidiasis' => $validatedData['candidiasis'],
                'halitosis' => $validatedData['halitosis'],
                'aphthous_ulcer' => $validatedData['aphthous_ulcer'],
                'dental_caries' => $validatedData['dental_caries'],
                'other_oral_prblem' => $validatedData['other_oral_prblem'],
                'advice_on_aspiration' => $validatedData['advice_on_aspiration'],
                'nails_care' => $validatedData['nails_care'],
                'eyes_care' => $validatedData['eyes_care'],
                'skin_care' => $validatedData['skin_care'],
                'skin_integrity' => $validatedData['skin_integrity'],
                'pressure_sore' => $validatedData['pressure_sore'],
                'pressure_point_pain' => $validatedData['pressure_point_pain'],
                'skin_moisture' => $validatedData['skin_moisture'],
                'physical_activity' => $validatedData['physical_activity'],
                'self_movement' => $validatedData['self_movement'],
                'daily_diet_valued' => $validatedData['daily_diet_valued'],
                'high_risk_said' => $validatedData['high_risk_said'],
                'friction_said' => $validatedData['friction_said'],
                'pressure_point_said' => $validatedData['pressure_point_said'],
                'lying_position_known' => $validatedData['lying_position_known'],
                'air_water_bed' => $validatedData['air_water_bed'],
                'daily_skincare_known' => $validatedData['daily_skincare_known'],
                'drying_parts' => $validatedData['drying_parts'],
                'body_changes' => $validatedData['body_changes'],
                'ventilated_room' => $validatedData['ventilated_room'],
                'enteredby' => auth()->user()->id,
            ]);
    
           return response()->json([
                    'success' => true,
                    'message' => 'Patient information  saved successfully!',
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
    
    public function save_physiotherapy_details(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'patient_id' => 'required|integer|exists:patient_master,id',
            'visit_id' => 'required|integer|exists:patient_monthly_assessment_visit,id',
            'physiotherapy' => 'required|integer',
            'passive_mobilisation_known' => 'required|integer',
            'exercise_imp_known' => 'required|integer',
            'chest_therapy_trained' => 'required|integer',
            'time_spend_known' => 'required|integer',
            'daytime_songs' => 'nullable|integer',
            'daytime_reading' => 'nullable|integer',
            'daytime_sleeping' => 'nullable|integer',
            'daytime_tv' => 'nullable|integer',
            'daytime_others' => 'nullable|string',
            'other_treatment' => 'required|integer',
            'treatment_category.*' => 'nullable|integer|exists:mt_treatment_type,id',
            'explain_treatment' => 'nullable|string',
            'volunteer_visit' => 'required|integer',
            'last_visited_date' => 'nullable|date',
            'rehabilitation_program' => 'required|integer',
            'umbrella_making' => 'nullable|integer',
            'paper_cover_making' => 'nullable|integer',
            'lottery_selling' => 'nullable|integer',
            'small_shop' => 'nullable|integer',
            'computer_dtp' => 'nullable|integer',
            'call_center' => 'nullable|integer',
            'other_SSI' => 'nullable|integer',
            'other_rehabilitation_program' => 'nullable|string',
            'catheterization' => 'nullable|integer',
            'ryle_tube_insertion' => 'nullable|integer',
            'tracheostomy_care' => 'nullable|integer',
            'lymphoedema_care' => 'nullable|integer',
            'minnor_dressing' => 'nullable|integer',
            'major_dressing' => 'nullable|integer',
            'ascittic_tapping' => 'nullable|integer',
            'colostomy_care' => 'nullable|integer',
            'physio' => 'nullable|integer',
            'no_procedure' => 'nullable|integer',
            
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422); 
        }
        // \Log::info('Data received:', $validator);
        try {
            $validatedData = $validator->validated();
            $physiotherapy=PatientMonthlyAssessmentPhysiotherapy::create([
                'patient_id' => $validatedData['patient_id'],
                'visit_id' => $validatedData['visit_id'],
                'physiotherapy' => $validatedData['physiotherapy'],
                'passive_mobilisation_known' => $validatedData['passive_mobilisation_known'],
                'exercise_imp_known' => $validatedData['exercise_imp_known'],
                'chest_therapy_trained' => $validatedData['chest_therapy_trained'],
                'time_spend_known' => $validatedData['time_spend_known'],
                'daytime_songs' => $validatedData['daytime_songs'],
                'daytime_reading' => $validatedData['daytime_reading'],
                'daytime_sleeping' => $validatedData['daytime_sleeping'],
                'daytime_tv' => $validatedData['daytime_tv'],
                'daytime_others' => $validatedData['daytime_others'],
                'enteredby' => auth()->user()->id,
            ]);
            if ($physiotherapy) {
                $formattedDate = date('Y-m-d', strtotime($request->last_visited_date));
                
                $validatedData['treatment_category'] = is_array($validatedData['treatment_category'])
    ? json_encode($validatedData['treatment_category'])
    : json_encode([]); // Ensure it's always stored as JSON
                
                PatientMonthlyAssessmentHomecare::create([
                    'patient_id' => $validatedData['patient_id'],
                    'visit_id' => $validatedData['visit_id'],
                    'other_treatment' => $validatedData['other_treatment'],
                    'treatment_category' => $validatedData['treatment_category'],
                    // 'treatment_category' => $validatedData['treatment_category'],
                    'explain_treatment' => $validatedData['explain_treatment'],
                    'volunteer_visit' => $validatedData['volunteer_visit'],
                    'last_visited_date' => $formattedDate,
                    'rehabilitation_program' => $validatedData['rehabilitation_program'],
                    'umbrella_making' => $validatedData['umbrella_making'],
                    'paper_cover_making' => $validatedData['paper_cover_making'],
                    'lottery_selling' => $validatedData['lottery_selling'],
                    'small_shop' => $validatedData['small_shop'],
                    'computer_dtp' => $validatedData['computer_dtp'],
                    'call_center' => $validatedData['call_center'],
                    'other_SSI' => $validatedData['other_SSI'],
                    'other_rehabilitation_program' => $validatedData['other_rehabilitation_program'],
                    'catheterization' => $validatedData['catheterization'],
                    'ryle_tube_insertion' => $validatedData['ryle_tube_insertion'],
                    'tracheostomy_care' => $validatedData['tracheostomy_care'],
                    'lymphoedema_care' => $validatedData['lymphoedema_care'],
                    'minnor_dressing' => $validatedData['minnor_dressing'],
                    'major_dressing' => $validatedData['major_dressing'],
                    'ascittic_tapping' => $validatedData['ascittic_tapping'],
                    'colostomy_care' => $validatedData['colostomy_care'],
                    'physio' => $validatedData['physio'],
                    'no_procedure' => $validatedData['no_procedure'],
                    'enteredby' =>auth()->user()->id,            
                 ]);
            }
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
    

//     public function save_patient_location(Request $request)
//     {
// //    dd($request->all());
//         $validator = Validator::make($request->all(), [
//             'patient_id'    => 'required|integer|exists:patient_master,id',
//             'subcentre'    => 'required|integer|exists:mt_subcentres,id',
//             'ward'          => 'required|integer|exists:mt_wards,id',
//             'ashaworker'        => 'required|integer|exists:mt_asha_workers,id',  
//             'awc'      => 'required|digits:11|exists:mt_anganwadi,id',  
//             'awc_worker'        => 'required|integer|exists:mt_anganwadi_workers,id',
           
            
//         ]);

    
//         if ($validator->fails()) {
//             return response()->json([
//                 'success' => false,
//                 'errors'  => $validator->errors(),
//             ], 422); 
//         }
    
//         try {
           
//              PatientLocation::create([
//                   'patient_id'    => $request->patient_id,
//                   'subcentre_id'   => $request->subcentre,
//                   'ward_id'        => $request->ward,
//                   'ashaworker_id'      => $request->ashaworker,
//                   'awc'        => $request->awc   ,
//                   'awc_worker_id'        => $request->awc_worker   ,
//                   'status'        => 1                  
//               ]);

               
           

//                 return response()->json([
//                     'success' => true,
//                     'message' => 'Patient information saved successfully!',
//                 ]);
//         } 
//         catch (\Illuminate\Validation\ValidationException $e) {
           
//             return response()->json([
//                 'success' => false,
//                 'errors' => $e->errors(),  
//             ], 422);  
//         }catch (\Exception $e) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'An error occurred while saving patient information.',
//                 'error'   => $e->getMessage(),
//             ], 500);
//         }
//     }

//     public function patient_list()
//     {        
//         $patients = Patient::all();
//         return view('pages.patient.list', compact('patients'));
//     }
    
}
