<?php

namespace App\Http\Controllers;
use App\Models\SubCentre;
use App\Models\Ward;
use App\Models\AshaWorker;
use App\Models\Anganwadi;
use App\Models\AWC_Worker;
use App\Models\ComfortDevices;
use App\Models\Diagnosis;
use App\Models\Mlsp;
use App\Models\Role;
use App\Models\TreatmentTypes;
use Illuminate\Http\Request;

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
    
}
