<?php

namespace App\Http\Controllers;
use App\Models\SubCentre;
use App\Models\Ward;
use App\Models\AshaWorker;
use App\Models\Anganwadi;
use App\Models\AWC_Worker;
use App\Models\ComfortDevices;
use App\Models\Diagnosis;
use App\Models\DiseaseCondition;
use App\Models\JHI;
use App\Models\JPHN;
use App\Models\Medicine;
use App\Models\Mlsp;
use App\Models\MonthlySchedulePalliativeNurse;
use App\Models\Patient;
use App\Models\PatientLocation;
use App\Models\PatientMedication;
use App\Models\PatientPhysicalDifficulties;
use App\Models\Role;
use App\Models\TreatmentTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function get_subcentre()
    {
         $subcentres = SubCentre::all();
         return response()->json($subcentres);

    }

    public function getWardsBySubCentre($subcentreId)
    {
        
        $wards = Ward::where('subcentre', $subcentreId)->get();      
        return response()->json($wards);
    }

    public function getWardsBySubCentres(Request $request)
    {
       
        // Check the incoming request
        $subcentreIds = $request->input('subcentres'); // It will return an array like [1, 2]

    
        // Query to get wards for all selected subcentres
        $wards = Ward::whereIn('subcentre', $subcentreIds)->get();  // Make sure 'subcentre_id' is the correct column name
    
        // Return the wards as a JSON response
        return response()->json($wards);
    }

    public function getAshaByWard($wardId)
    {
       
        $ashaworkers = AshaWorker::where('ward', $wardId)->get();
        return response()->json($ashaworkers);
    }

    public function getAwcBySubCentre($subcentreId)
    {
         \Log::info('Subcentre ID received: ' . $subcentreId);
    
         try {
             $anganwadis = Anganwadi::where('subcentre_id', $subcentreId)->get();
    
            if ($anganwadis->isEmpty()) {
                \Log::info('No AWCs found for subcentre: ' . $subcentreId);
                return response()->json([], 200); // Return an empty JSON array instead of null
            }
    
            \Log::info('AWCs found: ', $anganwadis->toArray());
             return response()->json($anganwadis, 200); // Ensure valid JSON response
         } catch (\Exception $e) {
            \Log::error('Error fetching AWCs: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to fetch AWCs'], 500);
         }
    }

    public function getAwcWorkerByAwc($awcId)
    {   
    
         try {
             $awc_workers = AWC_Worker::where('awc_id', $awcId)->get();
    
            if ($awc_workers->isEmpty()) {
                \Log::info('No AWC workers found for AWC: ' . $awc_workers);
                return response()->json([], 200); // Return an empty JSON array instead of null
            }   
         
             return response()->json($awc_workers, 200); // Ensure valid JSON response
         } catch (\Exception $e) {
            \Log::error('Error fetching AWC Workers: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to fetch AWC workers'], 500);
         }
    }

    public function get_diagnosis()
    {
         $diagnosis = Diagnosis::all();
         return response()->json($diagnosis);

    }

    public function get_roles()
    {
         $roles = Role::all();
         return response()->json($roles);

    }

    public function get_all_mlsp()
    {
         $mlsp = Mlsp::where('status',1)->get();
         return response()->json($mlsp);

    }

    public function get_all_jhis()
    {
        $jhis = JHI::where('status', 1)
           ->orderBy('jhi_name', 'asc')  // 'asc' for ascending order, or use 'desc' for descending order
           ->get();
         return response()->json($jhis);

    }

    public function get_all_jphns()
    {
        $jphns = JPHN::where('status', 1)
           ->orderBy('jphn_name', 'asc')  // 'asc' for ascending order, or use 'desc' for descending order
           ->get();
         return response()->json($jphns);

    }
    public function get_treatment_types()
    {
        $treatment_types = TreatmentTypes::orderBy('treatment_type', 'asc')->get();
         return response()->json($treatment_types);

    }
    public function get_comfort_devices()
    {
        $comfort_devices = ComfortDevices::orderBy('comfort_device_name', 'asc')->get();
         return response()->json($comfort_devices);

    }
    public function get_medicines()
    {
        $medicines = Medicine::orderBy('medicine', 'asc')->get();
         return response()->json($medicines);

    }
    public function get_medicine_modes()
    {
        $medicine_modes = DB::table('mt_medicine_mode')
               ->orderBy('medicine_mode', 'asc')
               ->get();
         return response()->json($medicine_modes);

    }
    public function get_medicine_types()
    {
        $medicine_modes = DB::table('mt_medicine_type')
        ->orderBy('medicine_type', 'asc')
        ->get();
  return response()->json($medicine_modes);

    }

    public function getWardOfPatient($patientId)
    {

        $patient_location = PatientLocation::where('patient_id', $patientId)
        ->where('status', 1)
        ->first();
    if (!$patient_location) {
        return response()->json(['error' => 'Patient location not found'], 404);
    }
    $ward = $patient_location->ward; 
    if (!$ward) {
        return response()->json(['error' => 'Ward not found for this patient'], 404);
    }

    return response()->json($ward);
    }

    public function getSubcentreOfPatient($patientId)
    {

        $patient_location = PatientLocation::where('patient_id', $patientId)
        ->where('status', 1)
        ->first();
    if (!$patient_location) {
        return response()->json(['error' => 'Patient location not found'], 404);
    }
    $sub_centre = $patient_location->subcentre; 
    if (!$sub_centre) {
        return response()->json(['error' => 'Ward not found for this patient'], 404);
    }

    return response()->json($sub_centre);
    }


    public function getJPHNsBySubCentres($Subcentre_id)
    {
       
        $Jphns = JPHN::where('subcentre_id', $Subcentre_id)->get();
        return response()->json($Jphns);
    }

    public function getJHIsBySubCentres($Subcentre_id)
    {
       
        $JHIs = JHI::where('subcentre_id', $Subcentre_id)->get();
        return response()->json($JHIs);
    }

    public function getMLPsBySubCentres($Subcentre_id)
    {
       
        $Mlps = Mlsp::where('subcentre_id', $Subcentre_id)->get();
        return response()->json($Mlps);
    }

    public function getPatientId()

    {

         $patient = Patient::all();

         return response()->json($patient);



    }

    public function getPatientsOfWard($Ward_id)
    {
          

        $patients = Patient::whereHas('locations', function ($query) use ($Ward_id) {
            $query->where('ward_id', $Ward_id);
        })
        ->with(['locations.ward'])
        ->get();
        return response()->json($patients);
    }
    
    public function get_disease_condition()
    {
        $disease_conditions = DiseaseCondition::orderBy('disease_condition', 'asc')->get();
         return response()->json($disease_conditions);

    }

    public function get_day_plan_palliative_nurse($plan_date)
    {
        if(auth()->user()->hasRole('Junior Public Health Nurse')  )
       {
            $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
                ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
                ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
                ->join('mt_wards', 'mt_wards.id', '=', 'patient_location.ward_id')
                ->join('mt_jphn', 'mt_jphn.subcentre_id', '=', 'mt_subcentres.id')
                ->select(
                    'monthly_schedule_palliative_nurse.plan_time','patient_master.first_name', 'patient_master.second_name','mt_wards.ward_name','patient_master.dob','patient_master.gender','mt_subcentres.sub_centre',
                    DB::raw('CASE WHEN patient_master.gender = 1 THEN "Male" WHEN patient_master.gender = 2 THEN "Female" WHEN patient_master.gender = 3 THEN "Others"  END AS gender')                   
                )
                ->orderBy('monthly_schedule_palliative_nurse.plan_time')  
                ->where('mt_jphn.user_id', auth()->user()->id)->get();
                    return response()->json($schedules);
       }
       else if( auth()->user()->hasRole('Junior Health Inspector') )
       {
            $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
                ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
                ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
                ->join('mt_wards', 'mt_wards.id', '=', 'patient_location.ward_id')
                ->join('mt_jhi', 'mt_jhi.subcentre_id', '=', 'mt_subcentres.id')
                ->select(
                    'monthly_schedule_palliative_nurse.plan_time','patient_master.first_name', 'patient_master.second_name','mt_wards.ward_name','patient_master.dob','patient_master.gender','mt_subcentres.sub_centre',
                    DB::raw('CASE WHEN patient_master.gender = 1 THEN "Male" WHEN patient_master.gender = 2 THEN "Female" WHEN patient_master.gender = 3 THEN "Others"  END AS gender')                   
                )
                ->orderBy('monthly_schedule_palliative_nurse.plan_time')  
                ->where('mt_jhi.user_id', auth()->user()->id)->get();
                    return response()->json($schedules);
       }
       else if( auth()->user()->hasRole('Super Admin') )
       {
    //    \DB::enableQueryLog();  
            $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
                ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
                ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
                ->join('mt_wards', 'mt_wards.id', '=', 'patient_location.ward_id')
                ->select(
                    'monthly_schedule_palliative_nurse.plan_time','patient_master.first_name', 'patient_master.second_name','mt_wards.ward_name','patient_master.gender','mt_subcentres.sub_centre',
                    DB::raw('CASE WHEN patient_master.gender = 1 THEN "Male" WHEN patient_master.gender = 2 THEN "Female" WHEN patient_master.gender = 3 THEN "Others"  END AS gender'), DB::raw('TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age'))
                    ->orderBy('monthly_schedule_palliative_nurse.plan_time')  ->get();
        //        dd(\DB::getQueryLog()); 
                    return response()->json($schedules);
       }
      
    }

    
    public function getPatientDrugs($patient_id)
    {        

        $medications = PatientMedication::where('patient_id', $patient_id)              
        ->get();
        return response()->json($medications);
    }

    public function getPhyDiffOfPatient(Request $request)
    {
        $patient_id = $request->patient_id;
$physical_difficulties = PatientPhysicalDifficulties::select(
        'physical_difficulty', 
        'duration', 
        DB::raw("CASE WHEN period = 1 THEN 'days' WHEN period = 2 THEN 'weeks' WHEN period = 3 THEN 'months'  WHEN period = 4 THEN 'years'  ELSE 'unknown' END as period_label"), 
        \DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y') as created_at_date")
    )
    ->where('patient_id', $patient_id)
    ->orderBy('created_at', 'asc')
    ->get();
    
         return response()->json($physical_difficulties);

    }

}
