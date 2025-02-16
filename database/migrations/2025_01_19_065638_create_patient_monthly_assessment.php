<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_monthly_assessment_visit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')  ;
            $table->foreign('patient_id')->references('id')->on('patient_master')->onDelete('cascade'); 
            $table->date('visit_date')  ;
            $table->time('visited_time');
            $table->string('visited_doctor',20)->nullable();
            $table->unsignedBigInteger('visited_palliativenurse')->nullable()  ;
            $table->foreign('visited_palliativenurse')->references('id')->on('mt_palliative_nurse')->onDelete('cascade'); 
           $table->unsignedBigInteger('visited_jhi')->nullable()  ;
            $table->foreign('visited_jhi')->references('id')->on('mt_jhi')->onDelete('cascade'); 
            $table->unsignedBigInteger('visited_jphn')->nullable()  ;
            $table->foreign('visited_jphn')->references('id')->on('mt_jphn')->onDelete('cascade'); 
            $table->string('visited_volunteer',20)->nullable(); 
            $table->unsignedBigInteger('visited_ward_member')->nullable()  ;
            $table->foreign('visited_ward_member')->references('id')->on('mt_ward_members')->onDelete('cascade'); 
            $table->unsignedBigInteger('visited_mlsp')->nullable()  ;
            $table->foreign('visited_mlsp')->references('id')->on('mt_mid_level_service_providers')->onDelete('cascade'); 
            $table->unsignedBigInteger('visited_ashaworker')->nullable()  ;
            $table->foreign('visited_ashaworker')->references('id')->on('mt_asha_workers')->onDelete('cascade'); 
            $table->tinyInteger('physical_difficulty') ->comment('1-yes,2-no');
            $table->tinyInteger('bp_diastolic') ;
            $table->tinyInteger('bp_systolic') ;
            $table->tinyInteger('pulse_rate') ;
            $table->tinyInteger('general_random_blood_sugar') ;
            $table->tinyInteger('spo2') ;
            $table->tinyInteger('body_built') ->comment('1-Thin,2-Obese,3-Normal');
            $table->tinyInteger('nutrition') ->comment('1-Normal,2-Moderately Nourished,3-Malnourished');
            $table->tinyInteger('consciousness_level') ->comment('1-Alert,2-Not Alert but Arousable with minimal stimulation,3-Not Alert requires repeat stimulation to attend.4-Coma');
            $table->tinyInteger('time_orientation') ->comment('1-Oriented,2-Disoriented');
            $table->tinyInteger('place_orientation') ->comment('1-Oriented,2-Disoriented');
            $table->tinyInteger('person_orientation') ->comment('1-Oriented,2-Disoriented');
            $table->tinyInteger('gaze') ->comment('1-Normal,2-Partial Gaze Palsy.3-Forced Gaze Palsy');
            $table->string('current_physical_condition');
            $table->tinyInteger('speech_and_language') ->comment('1-No Aphasia,2-Mild to moderate Aphasia.3-Severe Aphasia,4-Mute');
            $table->tinyInteger('dysarthria') ->comment('1-Normal Articulation,2-Moderate Slurring of Words, 3- near unintelligible/unable to speak');
            $table->tinyInteger('sleep') ->comment('1-Normal,2-Reduced Sleep');
            $table->tinyInteger('immediate_short_term_memory') ->comment('1-yes,2-no');
            $table->tinyInteger('recent_memory') ->comment('1-yes,2-no');
            $table->tinyInteger('remote_memory') ->comment('1-yes,2-no');
            $table->tinyInteger('attention') ->comment('1-yes,2-no');
            $table->tinyInteger('concentration') ->comment('1-yes,2-no');
            $table->tinyInteger('altered_smell_sensation') ->comment('1-yes,2-no');
            $table->tinyInteger('vision_difficulty') ->comment('1-yes,2-no');
            $table->tinyInteger('refractive_error') ->comment('1-yes')->nullable();
            $table->tinyInteger('cataract') ->comment('1-yes')->nullable();
            $table->tinyInteger('diminisioned_vision') ->comment('1-yes')->nullable();
            $table->tinyInteger('pupil_size') ->comment('1-Normal,2-Small, 3-Dialated');
            $table->tinyInteger('pupil_shape') ->comment('1-Round,2-Slit Horizontal, 3-Slit Vertical');
            $table->string('light_reaction');
            $table->tinyInteger('diplopia') ->comment('1-yes')->nullable();
            $table->tinyInteger('nystagmus') ->comment('1-yes')->nullable();
            $table->tinyInteger('ptosis') ->comment('1-yes')->nullable();
            $table->string('other_eye_disease')->nullable();
            $table->tinyInteger('chewing_difficulty') ->comment('1-yes,2-no');
            $table->tinyInteger('facial_assymetry') ->comment('1-yes,2-no');
            $table->tinyInteger('salvia_drooling') ->comment('1-yes,2-no');
            $table->tinyInteger('food_statis') ->comment('1-yes,2-no');
            $table->tinyInteger('angle_deviation_mouth') ->comment('1-yes,2-no');
            $table->tinyInteger('dysphagia') ->comment('1-yes,2-no');
            $table->tinyInteger('postural_imbalance') ->comment('1-yes,2-no');
            $table->tinyInteger('upp_limb_muscle_tone_rt') ->comment('1-Normal,2-Hypotonia,3-Hypertonia,4-Atonia');
            $table->tinyInteger('upp_limb_muscle_tone_lt') ->comment('1-Normal,2-Hypotonia,3-Hypertonia,4-Atonia');
            $table->tinyInteger('upp_limb_muscle_power_rt') ->comment('1-Normal,2-Abnormal');
            $table->tinyInteger('upp_limb_muscle_power_lt') ->comment('1-Normal,2-Abnormal');
            $table->tinyInteger('upp_limb_reflex_rt') ->comment('1-Present,2-Absent');
            $table->tinyInteger('upp_limb_reflex_lt') ->comment('1-Present,2-Absent');
            $table->tinyInteger('upp_limb_pain') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_oedema') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_cellulitis') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_clubbing') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_cyanosis') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_paresis') ->comment('1-Yes,2-No');
            $table->tinyInteger('upp_limb_contractures') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_muscle_tone_rt') ->comment('1-Normal,2-Hypotonia,3-Hypertonia,4-Atonia');
            $table->tinyInteger('low_limb_muscle_tone_lt') ->comment('1-Normal,2-Hypotonia,3-Hypertonia,4-Atonia');
            $table->tinyInteger('low_limb_muscle_power_rt') ->comment('1-Normal,2-Abnormal');
            $table->tinyInteger('low_limb_muscle_power_lt') ->comment('1-Normal,2-Abnormal');
            $table->tinyInteger('low_limb_reflex_rt') ->comment('1-Present,2-Absent');
            $table->tinyInteger('low_limb_reflex_lt') ->comment('1-Present,2-Absent');
            $table->tinyInteger('low_limb_pain') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_oedema') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_cellulitis') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_clubbing') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_cyanosis') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_paresis') ->comment('1-Yes,2-No');
            $table->tinyInteger('low_limb_contractures') ->comment('1-Yes,2-No');
            $table->tinyInteger('gait') ->comment('1-Normal,2-Abnormal,3 -Cannot Access');
            $table->tinyInteger('epilepsy') ->comment('1-Yes')->nullable();
            $table->tinyInteger('chorea') ->comment('1-Yes')->nullable();
            $table->tinyInteger('tremors') ->comment('1-Yes')->nullable();
            $table->tinyInteger('facial_dystonia') ->comment('1-Yes')->nullable();
            $table->string('other_involuntary_movements') ->nullable();
            $table->tinyInteger('unsteady_standing_walking') ->comment('1-Yes')->nullable();
            $table->tinyInteger('vertigo') ->comment('1-Yes')->nullable();
            $table->tinyInteger('food_bringing_difficulty') ->comment('1-Yes')->nullable();
            $table->tinyInteger('deafness') ->comment('1-Yes')->nullable();
            $table->unsignedBigInteger('enteredby');
            $table->foreign('enteredby')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_monthly_assessment_visit');
    }
};
