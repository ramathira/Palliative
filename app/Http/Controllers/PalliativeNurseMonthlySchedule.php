<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\MonthlySchedulePalliativeNurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PalliativeNurseMonthlySchedule extends Controller
{
    public function create_schedule()
    {
         // \DB::enableQueryLog();  
         $schedules = MonthlySchedulePalliativeNurse::with([
            'patient_details:patient_master.id,first_name', 
            'patient_details.subCentres:mt_subcentres.id,mt_subcentres.sub_centre' 
        ])
            ->select('monthly_schedule_palliative_nurse.plan_date', 'monthly_schedule_palliative_nurse.plan_time', 'monthly_schedule_palliative_nurse.patient_id') // Specify table name for plan_date and plan_time
            ->when(auth()->user()->hasRole('Palliative Care Nurse'), function($query) {
                return $query->where('enteredby', auth()->user()->id);
            })
            ->whereMonth('plan_date', Carbon::now()->month) 
            ->whereYear('plan_date', Carbon::now()->year)
            ->get();
        
     
         // dd(\DB::getQueryLog()); 
                    
        return view('pages.palliative_nurse.create_schedule', compact('schedules'));
    }

    public function view_schedule()
    {
        $initialDate = Carbon::now()->startOfMonth()->toDateString();
        if(auth()->user()->hasRole('Palliative Care Nurse'))
        {
            // \DB::enableQueryLog();  
            $schedules = MonthlySchedulePalliativeNurse::with([
                'patient_details:patient_master.id,first_name', 
                'patient_details.subCentres:mt_subcentres.id,mt_subcentres.sub_centre' 
            ])
                ->select('monthly_schedule_palliative_nurse.plan_date', 'monthly_schedule_palliative_nurse.plan_time', 'monthly_schedule_palliative_nurse.patient_id') 
                ->when(auth()->user()->hasRole('Palliative Care Nurse'), function($query) {
                    return $query->where('enteredby', auth()->user()->id);
                })
                ->get();

                $events = $schedules->map(function ($schedule) {
                    return [
                        'title' => $schedule->patient_details->first_name, 
                        'start' => $schedule->plan_date . 'T' . $schedule->plan_time, 
                    
                        
                    ];
                });
        }
        else if(auth()->user()->hasRole('Super Admin'))
        {
       //      \DB::enableQueryLog();  
         
       

       $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
           ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
           ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
           ->select(
               'monthly_schedule_palliative_nurse.plan_date',
               'mt_subcentres.sub_centre',
               DB::raw('COUNT(mt_subcentres.id) as subcentre_count')
           )
           ->groupBy('monthly_schedule_palliative_nurse.plan_date', 'mt_subcentres.id', 'mt_subcentres.sub_centre') // ✅ Add sub_centre
           ->get();
       
          //      dd(\DB::getQueryLog()); 
                $events = $schedules->map(function ($schedule) {
                    return [
                        'title' => $schedule->sub_centre."- ".$schedule->subcentre_count, 
                        'start' => $schedule->plan_date , 
                    
                        
                    ];
                });
        }

       else if(auth()->user()->hasRole('Junior Public Health Nurse') )
        {
        //     \DB::enableQueryLog();  
             $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
             ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
             ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
             ->join('mt_wards', 'mt_wards.id', '=', 'patient_location.ward_id')
             ->join('mt_jphn', 'mt_jphn.subcentre_id', '=', 'mt_subcentres.id')
             ->select(
                 'monthly_schedule_palliative_nurse.plan_date',
                 'mt_wards.ward_name',
                 DB::raw('COUNT(mt_wards.id) as ward_count')
             )
             ->where('mt_jphn.user_id', auth()->user()->id)                    
             ->groupBy('monthly_schedule_palliative_nurse.plan_date', 'mt_wards.id', 'mt_wards.ward_name') // ✅ Add sub_centre
             ->get();
         
          //        dd(\DB::getQueryLog()); 
                  $events = $schedules->map(function ($schedule) {
                      return [
                          'title' => $schedule->ward_name."- ".$schedule->ward_count, 
                          'start' => $schedule->plan_date , 
                      
                          
                      ];
                  });
        }

        else if( auth()->user()->hasRole('Junior Health Inspector') )
        {
        //     \DB::enableQueryLog();  
             $schedules = MonthlySchedulePalliativeNurse::join('patient_master', 'monthly_schedule_palliative_nurse.patient_id', '=', 'patient_master.id')
             ->join('patient_location', 'patient_master.id', '=', 'patient_location.patient_id')
             ->join('mt_subcentres', 'patient_location.subcentre_id', '=', 'mt_subcentres.id')
             ->join('mt_wards', 'mt_wards.id', '=', 'patient_location.ward_id')
             ->join('mt_jhi', 'mt_jhi.subcentre_id', '=', 'mt_subcentres.id')
             ->select(
                 'monthly_schedule_palliative_nurse.plan_date',
                 'mt_wards.ward_name',
                 DB::raw('COUNT(mt_wards.id) as ward_count')
             )
             ->where('mt_jhi.user_id', auth()->user()->id)                    
             ->groupBy('monthly_schedule_palliative_nurse.plan_date', 'mt_wards.id', 'mt_wards.ward_name') // ✅ Add sub_centre
             ->get();
         
          //        dd(\DB::getQueryLog()); 
                  $events = $schedules->map(function ($schedule) {
                      return [
                          'title' => $schedule->ward_name."- ".$schedule->ward_count, 
                          'start' => $schedule->plan_date , 
                      
                          
                      ];
                  });
        }
        return view('pages.palliative_nurse.view_schedule', compact('initialDate','events'));
    }

    public function save_schedule(Request $request)
    {
        try
        {
            $request->validate([
                'plan_date' => 'required',
                'plan_hour' => 'required|integer',
                'plan_minute' => 'required',
                'plan_meridiem' => 'required',           
                'patient' => 'required|integer|exists:patient_master,id',
            ]);

            $formattedDate = date('Y-m-d', strtotime($request->plan_date));
            $hour = $request->plan_hour;
            if ($request->plan_meridiem == 'PM' && $hour != 12) {
                $hour = $hour + 12;
            } elseif ($request->plan_meridiem == 'AM' && $hour == 12) {
                $hour = 0;  // 12 AM should be 00:00
            }
            // Pad the minute to ensure it's always two digits
            $minute = str_pad($request->plan_minute, 2, '0', STR_PAD_LEFT);
            // Construct the time
            $plan_time = $hour . ':' . $minute;      

            MonthlySchedulePalliativeNurse::create([
                'plan_date' => $formattedDate,
                'plan_time' => $plan_time,
                'patient_id' => $request->patient,
                'enteredby' =>   auth()->user()->id,
            ]);
            return redirect()->back()->with('success', 'Plan saved successfully.');
        }
        catch (\Exception $e) {
           return redirect()->back()->with('error', 'Failed to save schedule. Error: ' . $e->getMessage());
     //   print_r($e->getMessage());
        }
    }
}
