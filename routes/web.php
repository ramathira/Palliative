<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\SubcentreController;
use App\Http\Controllers\AshaWorkerController;
use App\Http\Controllers\AnganwadiController;
use App\Http\Controllers\MidLevelServiceProviderController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\TreatmentTypeController;

Route::get('theme-switcher/{activeTheme}', [ThemeController::class, 'switch'])->name('theme-switcher');

Route::get('/', function () {
    return view('/welcome.index');
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
    Route::get('/patient_list', [PatientController::class, 'patient_list'])->name('patient.list');

    Route::get('/subcentres', [ListController::class, 'get_subcentre']);
    Route::get('/get_wards/{subcentreId}', [ListController::class, 'getWardsBySubCentre']);
    Route::get('/get_ward_people/{wardeId}', [WardController::class, 'get_ward_details']);
    Route::get('/get_asha_in_ward/{wardeId}', [ListController::class, 'getAshaByWard']);
    Route::get('/get_aganwadi_in_subcentre/{subcentreId}', [ListController::class, 'getAwcBySubCentre']);
    Route::get('/get_awc_worker_in_awc/{awcId}', [ListController::class, 'getAwcWorkerByAwc']);
    Route::get('/get_diagnosis', [ListController::class, 'get_diagnosis']);
    Route::get('/get_all_roles', [ListController::class, 'get_roles']);
    Route::get('/get_all_mlsp', [ListController::class, 'get_all_mlsp']);
    Route::get('/get_treatment_types', [ListController::class, 'get_treatment_types']);
    Route::get('/get_comfort_devices', [ListController::class, 'get_comfort_devices']);
});


Route::controller(PageController::class)->group(function () {
    Route::get('settings', 'settings')->name('settings');
    // Route::get('users', 'users')->name('users');
    // Route::get('users', 'users')->name('permissions');
    });

require __DIR__.'/auth.php';