<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\ThemeController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PermissionController;

use App\Http\Controllers\RolesController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\PatientController;

use App\Http\Controllers\AssesmentController;

use App\Http\Controllers\ListController;

use App\Http\Controllers\WardController;

use App\Http\Controllers\SubcentreController;

use App\Http\Controllers\AshaWorkerController;

use App\Http\Controllers\AnganwadiController;

use App\Http\Controllers\MidLevelServiceProviderController;

use App\Http\Controllers\DiagnosisController;

use App\Http\Controllers\JHIController;

use App\Http\Controllers\JPHNController;

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PalliativeNurseMonthlySchedule;

use App\Http\Controllers\TreatmentTypeController;



Route::get('theme-switcher/{activeTheme}', [ThemeController::class, 'switch'])->name('theme-switcher');



Route::get('/', function () {

    return view('/welcome.index');

});



Route::get('about', function () {

    return view('/welcome.about');

});



Route::get('/dashboard', function () {

    return view('sample');

})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/permissions', PermissionController::class)

    ->names([

       'index' => 'permissions.index',

        'create' => 'permissions.create',

        'store' => 'permissions.store',

        'edit' => 'permissions.edit',

        'update' => 'permissions.update',

        'destroy' => 'permissions.destroy',

    ]);



    Route::resource('/roles', RolesController::class)

    ->names([

       'index' => 'roles.index',

        'create' => 'roles.create',

        'store' => 'roles.store',

        'edit' => 'roles.edit',

        'update' => 'roles.update',

        'destroy' => 'roles.destroy',

    ]);



    Route::resource('/users', UserController::class)

    ->names([

       'index' => 'users.index',

        'create' => 'users.create',

        'store' => 'users.store',

        'edit' => 'users.edit',

        'update' => 'users.update',

        'destroy' => 'users.destroy',

    ]);



    Route::resource('/subcentre', SubcentreController::class)

    ->names([

       'index' => 'subcentre.index'      

    ]);



    Route::resource('/wards', WardController::class)

    ->names([

       'index' => 'wards.index',  

       'create' => 'wards.create',     

        'store' => 'wards.store',

        'edit' => 'wards.edit',

        'update' => 'wards.update',

     

    ]);



    Route::resource('/asha_worker', AshaWorkerController::class)

    ->names([

       'index' => 'asha_worker.index',

       'create' => 'asha_worker.create',       

         'store' => 'asha_worker.store',

        // 'edit' => 'asha_worker.edit',

        // 'update' => 'asha_worker.update',

     

    ]);



    Route::resource('/anganwadi', AnganwadiController::class)

    ->names([

       'index' => 'anganwadi.index',  

       'create' => 'anganwadi.create',        

         'store' => 'anganwadi.store',

        // 'edit' => 'asha_worker.edit',

        // 'update' => 'asha_worker.update',

     

    ]);







    Route::resource('/mlsp', MidLevelServiceProviderController::class)

    ->names([

       'index' => 'mlsp.index',       

       'create' => 'mlsp.create',

         'store' => 'mlsp.store',

        // 'edit' => 'asha_worker.edit',

        // 'update' => 'asha_worker.update',

     

    ]);



    Route::resource('/diagnosis', DiagnosisController::class)

    ->names([

       'index' => 'diagnosis.index',       

       'create' => 'diagnosis.create',

         'store' => 'diagnosis.store',

        // 'edit' => 'asha_worker.edit',

        // 'update' => 'asha_worker.update',

     

    ]);



    Route::resource('/treatment_types', TreatmentTypeController::class)

    ->names([

       'index' => 'treatment_types.index',

        'create' => 'treatment_types.create',

        'store' => 'treatment_types.store',       

    ]);



    Route::resource('/medicines', MedicineController::class)

    ->names([

       'index' => 'medicines.index',

        'create' => 'medicines.create',

        'store' => 'medicines.store',       

    ]);



    Route::resource('/jhi', JHIController::class)

    ->names([

       'index' => 'jhi.index',

        'create' => 'jhi.create',

        'store' => 'jhi.store',       

    ]);



    Route::resource('/jphn', JPHNController::class)

    ->names([

       'index' => 'jphn.index',

        'create' => 'jphn.create',

        'store' => 'jphn.store',       

    ]);

 

    Route::get('/ward_members', [WardController::class, 'members_list'])->name('ward_members.members_list');

    Route::get('/ward_member_edit', [WardController::class, 'members_edit'])->name('ward_members.member_edit');

    Route::get('/ward_member_add', [WardController::class, 'member_add'])->name('ward_members.member_add');

    Route::post('/ward_member_save', [WardController::class, 'member_save'])->name('ward_members.member_save');





    Route::get('/awc_worker_list', [AnganwadiController::class, 'awc_worker_list'])->name('anganwadi.awc_worker_list');

  //   Route::get('/awc_worker_edit', [AnganwadiController::class, 'members_edit'])->name('ward_members.member_edit');

     Route::get('/awc_worker_add', [AnganwadiController::class, 'awc_worker_add'])->name('anganwadi.awc_worker_add');

     Route::post('/awc_worker_save', [AnganwadiController::class, 'awc_worker_save'])->name('anganwadi.awc_worker_save');





    Route::get('/register_patient', [PatientController::class, 'add_new_patient'])->name('patient.create');
    Route::post('/save-patient-basic', [PatientController::class, 'save_patient_basic'])->name('patient.save-patient-basic');
    Route::post('/save-patient-location', [PatientController::class, 'save_patient_location'])->name('patient.save-patient-location');
    Route::post('/save-patient-disease', [PatientController::class, 'save_patient_disease'])->name('patient.save-patient-disease');
    // Route::get('/patient_list', [PatientController::class, 'patient_list'])->name('patient.list');
    Route::get('/patient_profile/{id}', [PatientController::class, 'patient_profile'])->name('patient.profile');
    Route::post('/patient_family_save', [PatientController::class, 'save_family'])->name('patient_family_save');
    Route::post('/patient_medicine_save', [PatientController::class, 'save_medicine'])->name('patient_medicine_save');
    Route::get('/pending_with_mlsp', [PatientController::class, 'pending_with_mlsp'])->name('patient.pending_with_mlsp');
    Route::get('/edit_patient/{id}', [PatientController::class, 'edit_patient'])->name('patient.edit_patient');


    
    Route::get('/getPatientsList', [PatientController::class, 'getPatientsList'])->name('getPatientsList');

    Route::get('/register_new_patient_jphn', [PatientController::class, 'register_new_patient_jphn'])->name('register_new_patient_jphn');
    Route::get('/pink_pending_list', [PatientController::class, 'pending_pink_list'])->name('pink_pending.list');
    Route::get('/pink_completed_list', [PatientController::class, 'completed_pink_list'])->name('pink_completed.list');
    Route::post('/patient_basic_details_save_jphn', [PatientController::class, 'patient_basic_details_save_jphn'])->name('patient_basic_details_save_jphn');

    Route::post('/save-patient-disease-jphn', [PatientController::class, 'save_patient_disease_jphn'])->name('patient.save-patient-disease-jphn');

    /* Blue Form */
    Route::get('/patient_blue_form/{id}', [PatientController::class, 'patient_blue_form_entry'])->name('patient_blue_form');
    Route::post('/blue_form_general_save', [PatientController::class, 'blue_form_general_save'])->name('patient.blue_form_general_save');
    Route::post('/blue_form_detail_info_save', [PatientController::class, 'blue_form_detail_info_save'])->name('patient.blue_form_detail_info_save');
    Route::post('/blue_form_other_detail_save', [PatientController::class, 'blue_form_other_detail_save'])->name('patient.blue_form_other_detail_save');
    Route::post('/updateMedicationStatus', [PatientController::class, 'updateMedicationStatus'])->name('updateMedicationStatus');
    Route::post('/blue_form_medicine_save', [PatientController::class, 'blue_form_medicine_save'])->name('blue_form_medicine_save');
    Route::post('/deleteMedication', [PatientController::class, 'deleteMedication'])->name('deleteMedication');
    Route::get('/blue_pending_list', [PatientController::class, 'pending_blue_list'])->name('blue_pending.list');
    Route::get('/blue_completed_list', [PatientController::class, 'completed_blue_list'])->name('blue_completed.list');
    Route::get('/classify_pending_list', [PatientController::class, 'pending_classify_list'])->name('classify_pending.list');
    Route::get('/classify_completed_list', [PatientController::class, 'completed_classify_list'])->name('classify_completed.list');

    Route::post('/patient_classify_save', [PatientController::class, 'save_classify'])->name('patient_classify_save');
    Route::get('/white_pending_list', [PatientController::class, 'pending_white_list'])->name('white_pending.list');
    Route::get('/white_completed_list', [PatientController::class, 'completed_white_list'])->name('white_completed.list');
    Route::get('/edit_white_form/{id}', [PatientController::class, 'edit_white_form'])->name('edit_white_form');
    /* Blue Form */

    Route::get('/subcentres', [ListController::class, 'get_subcentre']);

    Route::get('/get_wards_of_subcentres', [ListController::class, 'getWardsBySubCentres']);

    Route::get('/get_wards/{subcentreId}', [ListController::class, 'getWardsBySubCentre']);

    Route::get('/get_ward_people/{wardeId}', [WardController::class, 'get_ward_details']);

    Route::get('/get_asha_in_ward/{wardeId}', [ListController::class, 'getAshaByWard']);

    Route::get('/get_aganwadi_in_subcentre/{subcentreId}', [ListController::class, 'getAwcBySubCentre']);

    Route::get('/get_awc_worker_in_awc/{awcId}', [ListController::class, 'getAwcWorkerByAwc']);

    Route::get('/get_diagnosis', [ListController::class, 'get_diagnosis']);

    Route::get('/get_all_roles', [ListController::class, 'get_roles']);

    Route::get('/get_all_mlsp', [ListController::class, 'get_all_mlsp']);

    Route::get('/get_all_jhis', [ListController::class, 'get_all_jhis']);

    Route::get('/get_all_jphns', [ListController::class, 'get_all_jphns']);

    Route::get('/get_treatment_types', [ListController::class, 'get_treatment_types']);

    Route::get('/get_comfort_devices', [ListController::class, 'get_comfort_devices']);

    Route::get('/get_all_medicines', [ListController::class, 'get_medicines']);

    Route::get('/get_all_medicine_modes', [ListController::class, 'get_medicine_modes']);
        Route::get('/get_all_medicine_types', [ListController::class, 'get_medicine_types']);

    Route::get('/get-ward-of-patient/{patientId}', [ListController::class, 'getWardOfPatient']);

    Route::get('/get-subcentre-of-patient/{patientId}', [ListController::class, 'getSubcentreOfPatient']);

    Route::get('/get_jphns_of_subcentres/{subcentre_id}', [ListController::class, 'getJPHNsBySubCentres']);

    Route::get('/get_jhis_of_subcentres/{subcentre_id}', [ListController::class, 'getJHIsBySubCentres']);

    Route::get('/get_mlps_of_subcentres/{subcentre_id}', [ListController::class, 'getMLPsBySubCentres']);

    Route::get('/get_wards_of_subcentres', [ListController::class, 'getWardsBySubCentres']);
    
      Route::get('/get-patients-of-ward/{wardId}', [ListController::class, 'getPatientsOfWard']);

      Route::get('/get_disease_condition', [ListController::class, 'get_disease_condition']);

      Route::get('/get_day_plan_palliative_nurse/{plan_date}', [ListController::class, 'get_day_plan_palliative_nurse']);

      Route::get('/get_drugs_of_patient/{patient_id}', [ListController::class, 'getPatientDrugs']);

      Route::get('/get_patient_physical_difficulty', [ListController::class, 'getPhyDiffOfPatient']);

});

/*----- Assesment Checklist FHC-----*/

Route::get('/assesment-checklist', [AssesmentController::class, 'assesment_checklist_pageone'])->name('assesment_checklist.create');

Route::get('/get_patient_id', [ListController::class, 'getPatientId']);

Route::get('/get_patient_details/{id}', [AssesmentController::class, 'getPatientDetails']);

Route::get('/get-nurses-by-patient', [AssesmentController::class, 'getNursesByPatient']); 
Route::get('/get_jhi_data/{id}', [AssesmentController::class, 'getJhiData']);
Route::get('/get_jphn_data/{id}', [AssesmentController::class, 'getJphnData']);
Route::get('/get_wm_data/{id}', [AssesmentController::class, 'getWmData']);
Route::get('/get_asha_data/{id}', [AssesmentController::class, 'getAshaData']);
Route::get('/get_mlsp_data/{id}', [AssesmentController::class, 'getMlspData']);


Route::post('/save-basic-details', [AssesmentController::class, 'save_basic_details'])->name('patient.save-basic-details');
Route::post('/save-memory-details', [AssesmentController::class, 'save_memory_details'])->name('patient.save-memory-details');
Route::post('/save-primary-needs', [AssesmentController::class, 'save_primary_needs'])->name('patient.save-primary-needs');
Route::post('/save-general-hygiene', [AssesmentController::class, 'save_general_hygiene'])->name('patient.save-general-hygiene');
Route::post('/save-physiotherapy-details', [AssesmentController::class, 'save_physiotherapy_details'])->name('patient.save-physiotherapy-details');

/*----- Assesment Checklist FHC-----*/

Route::controller(PageController::class)->group(function () {

    Route::get('settings', 'settings')->name('settings');

    // Route::get('users', 'users')->name('users');

    // Route::get('users', 'users')->name('permissions');

    });



 /*----- front end tiles --------- */

Route::get('advanced-care', function () {
    return view('/welcome.advanced_care');
});
Route::get('hospice-care', function () {
    return view('/welcome.hospice_care');
});
Route::get('comfort-care', function () {
    return view('/welcome.comfort_care');
});
Route::get('endoflife-care', function () {
    return view('/welcome.endoflife_care');
});
Route::get('grief-counselling', function () {
    return view('/welcome.grief_counselling');
});
Route::get('pain-management', function () {
    return view('/welcome.pain_management');
});


/*----- front end tiles --------- */  

/*----- frontend submenu --------- */
Route::get('home-care', function () {
    return view('/welcome.home_care');
});
/*----- frontend submenu --------- */


/*----- palliative nurse schedule --------- */  
Route::get('/pal_nurse_monthly_schedule_entry', [PalliativeNurseMonthlySchedule::class, 'create_schedule'])->name('palliative_nurse.create_schedule');
Route::post('/pal_nurse_monthly_schedule_save', [PalliativeNurseMonthlySchedule::class, 'save_schedule'])->name('palliative_nurse.save_schedule');
Route::get('/pal_nurse_monthly_schedule', [PalliativeNurseMonthlySchedule::class, 'view_schedule'])->name('palliative_nurse.view_schedule');
/*----- palliative nurse schedule --------- */  


require __DIR__.'/auth.php';