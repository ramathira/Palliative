@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Sparshamayi-Palliative Care</title>
    
@endsection
@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
            ASSESSMENT CHECKLIST 
        </div>
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">
            
            <div class="mt-7 step"  id="step-1">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Patient ID</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        രോഗിയുടെ ഐ ഡി നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <!--<x-base.form-input 
                                    list="patients" 
                                    id="patient-select" 
                                    name="patientid" 
                                    placeholder="Search Patient ID..." 
                                    class="border rounded-md px-2 py-1 w-full"
                                />
                                <datalist id="patients">
                                   
                                </datalist> -->
                                <x-base.form-select 
                                    id="patient-select" 
                                    name="patientid" >
                                <option value="">Select Patient ID</option> 
                                </x-base.form-select>
                                
                            </div>
                        </div>
                       
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Name of Patient</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    രോഗിയുടെ പേര് 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                   <x-base.form-input
                                        class="character_only"
                                        type="text"
                                        placeholder="Name"
                                        id="patient-name"
                                        name="patient-name"
                                        readonly
                                        
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Age</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">വയസ്സ്</div>
                                </div>
                            </div>
                            
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                   <x-base.form-input
                                        type="text"
                                        placeholder="Age"
                                        id="patient-age"
                                        name="patient-age"
                                        readonly
                                        
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ward Number</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">വാർഡ് നമ്പർ</div>
                                </div>
                            </div>
                            
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                   <x-base.form-input
                                        class="character_only"
                                        type="text"
                                        placeholder="Ward"
                                        id="patient-ward"
                                        name="ward"
                                        readonly
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Diagnosis</div>
                                        <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    രോഗനിർണയം
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                
                                placeholder="diagnosis"
                                id="patient-diagnosis"
                                        name="diagnosis"
                                        readonly
                                />
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Visited Date</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                   സന്ദർശിച്ച തീയതി 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.litepicker
                                    class="mx-auto block"
                                    data-single-mode="true"
                                    data-format="YYYY-MM-DD"
                                    data-enable-time="true"
                                    data-max-date="today"
                                    name="visited_date"   
                                />
                            </div>
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Visited Time</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                   സന്ദർശിച്ച സമയം 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0 relative">
                                <input 
                                    type="text" 
                                    id="visited_time" 
                                    name="visited_time" 
                                    class="w-full border border-slate-300 rounded px-2 py-1 form-control"
                                    placeholder="Select Time"
                                    readonly
                                />
                                <div 
                                    id="time-picker" 
                                    class="mt-3 w-full flex-1 xl:mt-0 absolute bg-white border rounded shadow-md p-2 hidden"
                                    style="z-index: 1000;"
                                >
                                    <div class="flex justify-between items-center">
                                        <x-base.form-input 
                                            type="number" 
                                            id="hours" 
                                            min="1" 
                                            max="12" 
                                            value="12" 
                                            class="border rounded px-1 text-center"
                                            oninput="this.value = Math.min(Math.max(this.value, this.min), this.max)"
                                        />
                                        <span>:</span>
                                        <x-base.form-input  
                                            type="number" 
                                            id="minutes" 
                                            min="0" 
                                            max="59" 
                                            value="00" 
                                            class="border rounded px-1 text-center"
                                            oninput="this.value = Math.min(Math.max(this.value, this.min), this.max)"
                                        />
                                        <x-base.form-select id="ampm" class="border rounded px-1 ">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>
                                        </x-base.form-select>
                                    </div>
                                    <button 
                                        id="set-time" 
                                        class="bg-blue-500 text-black px-3 py-1 border rounded mt-2 w-full"
                                    >Set Time</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Visited Team</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                   സന്ദർശിച്ച സംഘം 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="1" class="mr-2" data-input="doctor-input">
                                        <span>Doctor</span>
                                    </label>
                                    <div id="doctor-input" style="display: none; margin-top: 10px;">
                                        <input 
                                        type="text" 
                                        name="doctor_name" 
                                        placeholder="Enter Doctor's Name" 
                                        class="border rounded p-2 w-full character_only">
                                    </div>
                                    <label class="flex items-center">
                                        <input 
                                            type="checkbox" 
                                            name="visited_team" 
                                            data-input="paliative-nurse"
                                            id="communityNurseCheckbox" 
                                            value="2" 
                                            class="mr-2">
                                        <span>Community nurse</span>
                                    </label>
                                    <div id="paliative-nurse" style="display: none; margin-top: 10px;">
                                        <input 
                                        type="text" 
                                        name="communitive_nurse" 
                                        id="communitive_nurse"
                                        class="border rounded p-2 w-full character_only"
                                        readonly >
                                        <input 
                                        type="hidden" 
                                        name="paliative_nurse" 
                                        id="p_nurse"
                                        class="border rounded p-2 w-full character_only">
                                    </div>
                                     <label class="flex items-center">
                                        <input 
                                        type="checkbox" 
                                        name="visited_team" 
                                        id="jhiCheckbox" 
                                        value="3" 
                                        class="mr-2">
                                        <span>JHI</span>
                                    </label>
                                    <div id="jhiDropdownContainer" style="display: none;" class="mt-3">
                                        <x-base.form-select id="jhiDropdown" name="jhi_id" class="border rounded-md p-2 w-full">
                                            <option value="">Select JHI</option>
                                        </x-base.form-select>
                                    </div>
                                    <label class="flex items-center">
                                        <input 
                                        type="checkbox" 
                                        name="visited_team"
                                        id="jphnCheckbox" 
                                        value="4" 
                                        class="mr-2">
                                        <span>JPHN</span>
                                    </label>
                                    <div id="jphnDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="jphnDropdown" name="jhi_id" class="border rounded-md  p-2 w-full">
                                            <option value="">Select JPHN</option>
                                        </select>
                                    </div>
                                    <label class="flex items-center ">
                                        <input type="checkbox" name="visited_team" value="5" class="mr-2 " data-input="vounteer-input">
                                        <span>Volunteers</span>
                                    </label>
                                    <div id="vounteer-input" style="display: none; margin-top: 10px;">
                                        <input 
                                        type="text" 
                                        name="volunteer_name" 
                                        placeholder="Enter Volunteer's Name" 
                                        class="border rounded p-2 w-full character_only">
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="6" class="mr-2" id="wmCheckbox" >
                                        <span>Ward member</span>
                                    </label>
                                    <div id="wmDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="wmDropdown" name="jhi_id" class="border rounded-md p-2 w-full">
                                            <option value="">Select Ward member</option>
                                        </select>
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="7" class="mr-2" id="mlspCheckbox" >
                                        <span>MLSP</span>
                                    </label>
                                    <div id="mlspDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="mlspDropdown" name="jhi_id" class="border rounded-md p-2 w-full">
                                            <option value="">Select MLSP</option>
                                        </select>
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="8" class="mr-2" id="ashaCheckbox">
                                        <span>ASHA Worker</span>
                                    </label> 
                                    <div id="ashaDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="ashaDropdown" name="jhi_id" class="border rounded-md p-2 w-full">
                                            <option value="">Select Asha Worker</option>
                                        </select>
                                    </div>
                        
                        
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">രോഗിക്ക് നിലവിൽ ശാരീരിക ബുദ്ധിമുട്ടുകൾ ഉണ്ടോ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="phy_ill" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="phy_ill" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div id="illness-details" style="display: none;">
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <table class="w-full border-collapse border border-slate-300">
                                            <thead>
                                                <tr>
                                                    <th class="border border-slate-300 px-4 py-2">ബുദ്ധിമുട്ട്</th>
                                                    <th class="border border-slate-300 px-4 py-2">കാലയളവ് </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-slate-300 px-4 py-2"><input type="text" name="physical_difficulty[]" value="" class="w-full border border-slate-300 px-2 py-1">
                                                    </td>
                                                    
                                                    <td class="border border-slate-300 px-4 py-2">
                                                        <x-base.form-select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Duration</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    
                                                        </x-base.form-select>
                                                        
                                                        <x-base.form-select name="period[]" class="border rounded-md px-3 py-2 mr-4 ">
                                                        <option value="">Period</option>
                                                        <option value="1">days</option>
                                                        <option value="2">weeks</option>
                                                        <option value="3">months</option>
                                                        <option value="4">years</option>
                                                        </x-base.form-select>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-slate-300 px-4 py-2"><input type="text" name="physical_difficulty[]" value="" class="w-full border border-slate-300 px-2 py-1">
                                                    </td>
                                                    
                                                    <td class="border border-slate-300 px-4 py-2">
                                                        <x-base.form-select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Duration</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    
                                                        </x-base.form-select>
                                                        
                                                        <x-base.form-select name="period[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Period</option>
                                                        <option value="1">days</option>
                                                        <option value="2">weeks</option>
                                                        <option value="3">months</option>
                                                        <option value="4">years</option>
                                                        </x-base.form-select>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                
                                               <tr>
                                                    <td class="border border-slate-300 px-4 py-2"><input type="text" name="physical_difficulty[]" value="" class="w-full border border-slate-300 px-2 py-1">
                                                    </td>
                                                    
                                                    <td class="border border-slate-300 px-4 py-2">
                                                        <x-base.form-select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Duration</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    
                                                        </x-base.form-select>
                                                        
                                                        <x-base.form-select name="period[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Period</option>
                                                        <option value="1">days</option>
                                                        <option value="2">weeks</option>
                                                        <option value="3">months</option>
                                                        <option value="4">years</option>
                                                        </x-base.form-select>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-slate-300 px-4 py-2"><input type="text" name="physical_difficulty[]" value="" class="w-full border border-slate-300 px-2 py-1">
                                                    </td>
                                                    
                                                    <td class="border border-slate-300 px-4 py-2">
                                                        <x-base.form-select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Duration</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                    
                                                        </x-base.form-select>
                                                        
                                                        <x-base.form-select name="period[]" class="border rounded-md px-3 py-2 mr-4">
                                                        <option value="">Period</option>
                                                        <option value="1">days</option>
                                                        <option value="2">weeks</option>
                                                        <option value="3">months</option>
                                                        <option value="4">years</option>
                                                        </x-base.form-select>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        (രോഗി പറയുന്ന / കൂട്ടിരിപ്പുകാർ പറയുന്ന ശാരീരികവും മാനസികവുമായ ബുദ്ധിമുട്ടുകൾ അതിന്റെ കാലയളവും കൂടി വ്യക്തമാക്കുക )
                                        </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Vital Signs</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                            
                                    <label class="flex items-center">
                                        <span class="mr-4">Systolic BP: </span>
                                        <div class="mr-4">
                                            <x-base.form-input
                                                type="text"
                                                class="numbers-only"
                                                placeholder="Systolic Blood Pressure"
                                                id="bp_systolic"
                                                name="bp_systolic"
                                                maxlength="3"
                                                pattern="\d{2,3}" 
                                                title="Please enter a valid BP value"
                                                
                                            />
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">Diastolic BP: </span>
                                        <div class="mr-4">
                                            <x-base.form-input
                                                type="text"
                                                class="numbers-only"
                                                placeholder="Diastolic Blood Pressure"
                                                id="bp_diastolic"
                                                name="bp_diastolic"
                                                maxlength="3"
                                                pattern="\d{2,3}" 
                                                title="Please enter a valid BP value"
                                                
                                            />
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">PR: </span>
                                        <div class="mr-4">
                                            <x-base.form-input
                                                class="numbers-only"
                                                type="text"
                                                placeholder="PR"
                                                id="pr"
                                                name="pr"
                                                pattern="\d{2,3}"
                                               
                                            />
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">GRBS: </span>
                                        <div class="mr-4">
                                            <x-base.form-input
                                                class="numbers-only"
                                                type="text"
                                                placeholder="GRBS"
                                                id="grbs"
                                                name="grbs"
                                                pattern="\d{2,3}"
                                            />
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">SPO2: </span>
                                        <div class="mr-4">
                                            <x-base.form-input
                                                class="numbers-only"
                                                type="text"
                                                placeholder="SPO2"
                                                id="spo2"
                                                name="spo2"
                                                pattern="\d{2,3}"
                                            />
                                        </div>
                                    </label>
                                    
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">General Conditions</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <label class="flex items-center">
                                        <span class="mr-4">BODY BUILT: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="body_built" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Thin</option>
                                                <option value="2">Obese</option>
                                                <option value="3">Normal</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                     <label class="flex items-center">
                                        <span class="mr-4">NUTRITION: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="nutrition" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Moderately Nourished</option>
                                                <option value="3">Malnourished</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">LEVEL OF CONSCIOUSNESS: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="consciousness_level" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Alert</option>
                                                <option value="2">Not Alert but Arousable with minimal stimulation</option>
                                                <option value="3">Not Alert requires repeat stimulation to attend</option>
                                                <option value="3">Coma</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">ORIENTATION TO TIME: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="time_orientation" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select</option>
                                                <option value="1">Oriented</option>
                                                <option value="2">Disoriented</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">ORIENTATION TO PLACE: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="place_orientation" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select</option>
                                                <option value="1">Oriented</option>
                                                <option value="2">Disoriented</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">ORIENTATION TO PERSON: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="person_orientation" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select</option>
                                                <option value="1">Oriented</option>
                                                <option value="2">Disoriented</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                    <label class="flex items-center">
                                        <span class="mr-4">GAZE: </span>
                                        <div class="mr-4">
                                            <x-base.form-select name="gaze" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">SELECT</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Partial Gaze Palsy</option>
                                                <option value="3">Forced Gaze Palsy</option>
                                            </x-base.form-select>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br><hr>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">ഇപ്പോഴത്തെ ശാരീരികാവസ്ഥ : </div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <x-base.form-select name="current_physical_condition" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">SELECT</option>
                                                <option value="1">പുറത്തുപോകാൻ സാധിക്കുന്നുണ്ട് </option>
                                                <option value="2">വീടിനകത്ത് പരസഹായത്തോടെ നടക്കാം</option>
                                                <option value="3">പരസഹായത്തോടെ എഴുന്നേറ്റിരിക്കാം/ കിടപ്പാണ് </option>
                                                <option value="4">താങ്ങിയാൽ മാത്രം ഇരിക്കാം  </option>
                                                <option value="5">തീർത്തും കിടപ്പിലാണ്  </option>
                                    </x-base.form-select>
                                 </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Speech and Language</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                  SPEECH (language)
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <x-base.form-select name="speech_and_language" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">SELECT</option>
                                                <option value="1">No Aphasia</option>
                                                <option value="2">Mild to moderate Aphasia</option>
                                                <option value="3">Severe Aphasia</option>
                                                <option value="4">Mute</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                         
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DYSARTHRIA</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div> 
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <x-base.form-select name="dysarthria" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">SELECT</option>
                                                <option value="1">Normal Articulation</option>
                                                <option value="2"> Moderate Slurring of Wordsn </option>
                                                <option value="3"> near unintelligible/unable to speak </option>
                                    </x-base.form-select>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">SLEEP</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <x-base.form-select name="sleep" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">SELECT</option>
                                                <option value="1">Normal </option>
                                                <option value="2"> Reduced Sleep  </option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <!--testing -->
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-80">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">7.a) കഴിഞ്ഞ ഹോം കെയർ / ഓ പി സന്ദർശനത്തിന് ശേഷം രോഗി മറ്റു ചികിത്സകൾ തേടിയിട്ടുണ്ടോ?  </div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="treatment-yes" name="other_treatment" value="1" >
                                        <x-base.form-check.label for="treatment-yes">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="treatment-no" name="other_treatment" value="2" >
                                        <x-base.form-check.label for="treatment-no">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div id="treatment-details" style="display: none;">
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-80">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">7.b) ചികിത്സ തേടിയിട്ടുണ്ടെങ്കിൽ ചികിത്സ എന്താണ്? </div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.preview>
                                    <x-base.tom-select
                                        class="w-full"
                                        data-placeholder="Select Treatment Types"
                                        multiple
                                        id="treatment-type-select"
                                        name="treatment_category"
                                    >
                                    </x-base.tom-select>
                                </x-base.preview>                                                   
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-80">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">7.c) ചുരുക്കി വിവരിക്കുക </div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-input
                                            class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            type="text"
                                            placeholder="Explain briefly "
                                            name="explain_treatment"
                                        />                                                   
                            </div>
                        </div>
                        </div>
                        
                        <!--testing -->
                    </div> 
                </div>
            </div>
            <div class="mt-7 step"  id="step-2">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">MEMORY</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <span>Immediate or Short-term memory</span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="short_term" value="1">
                                                <x-base.form-check.label for="checkbox-switch-1">Yes</x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="short_term" value="2">
                                                <x-base.form-check.label for="checkbox-switch-2">No</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <br>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <span>Recent Memory</span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="recent" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="recent" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <br>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <span>Remote Memory</span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="remote" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="remote" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">ATTENTION</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="attention" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="attention" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">CONCENTRATION</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="concentration" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="concentration" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">ALTERED SENSATION OF SMELL</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="smell" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="smell" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DIFFICULTY IN VISION</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="vision-yes" name="vision" value="1" >
                                        <x-base.form-check.label for="vision-yes">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="cvision-no" name="vision" value="2" >
                                        <x-base.form-check.label for="vision-no">
                                            No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    
                                     </div>
                                      
                                     <div id="vision-options" style="display: none; margin-top: 20px;" >
                                         <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-wrap items-center gap-4">
                                        <!--<label class="flex items-center">-->
                                        <x-base.form-check class="mr-4">
                                            <span  class=" mr-2 ">REFRACTIVE ERROR</span>
                                            <input type="checkbox" name="refractive_error" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <span class=" mr-2 ">CATARACT</span>
                                            <input type="checkbox" name="cataract" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <span class=" mr-2 ">DIMINISIONED VISION</span>
                                            <input type="checkbox" name="diminisioned_vision" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>
                                    <!--</label>-->
                                    
                                </div>
                                </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">PUPILS</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col space-y-2">
                                    <label class="flex items-center">
                                        <x-base.form-check class="mr-4">
                                            <span>Size</span>
                                        </x-base.form-check>
                                        <x-base.form-select name="pupil_size" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Small</option>
                                                <option value="3">Dialated</option>
                                        </x-base.form-select>
                                    </label>
                                    <label class="flex items-center">
                                        <x-base.form-check class="mr-4">
                                        <span>Shape</span>
                                        </x-base.form-check>
                                        <x-base.form-select name="pupil_shape" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Round</option>
                                                <option value="2">Slit Horizontal</option>
                                                <option value="3">Slit Vertical</option>
                                        </x-base.form-select> 
                                        
                                    </label>
                                    <label class="flex items-center">
                                        <x-base.form-check class="mr-4">
                                        <span>REACTION TO LIGHT: </span>
                                        </x-base.form-check>
                                        <x-base.form-input
                                            class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            type="text"
                                            placeholder="Reaction to Light"
                                            name="light_reaction"
                                        />
                                        
                                        
                                        
                                    </label>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-wrap items-center gap-4"> 
                                            <x-base.form-check class="mr-4">
                                                <input type="checkbox" id="diplopia" name="diplopia" value="1">
                                                <x-base.form-check.label for="diplopia">DIPLOPIA</x-base.form-check.label>
                                            </x-base.form-check>
                                            
                                            
                                            <x-base.form-check class="mr-4">
                                                <input type="checkbox" id="nystagmus" name="nystagmus" value="1">
                                                <x-base.form-check.label for="nystagmus">NYSTAGMUS</x-base.form-check.label>
                                            </x-base.form-check>
                                    
                                            <x-base.form-check class="mr-4">
                                                <input type="checkbox" id="ptosis" name="ptosis" value="1">
                                                <x-base.form-check.label for="ptosis">PTOSIS</x-base.form-check.label>
                                            </x-base.form-check>
                                    
                                            <x-base.form-check class="mr-4">
                                                <input type="checkbox" id="others" name="light_reaction" value="1">
                                                <x-base.form-check.label for="others">OTHERS</x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-input
                                                id="other-eye-disease"
                                                type="text"
                                                placeholder="Specify other eye disease"
                                                name="other_eye_disease"
                                                class="hidden border rounded-md p-2 w-60"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DIFFICULTY IN CHEWING</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <!--<label class="flex items-center">-->
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="chewing" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="chewing" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    <!--</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">FACIAL ASSYMMETRY</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <!--<label class="flex items-center">-->
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="facial" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="facial" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    <!--</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DROOLING OF SALIVA</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="saliva" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="saliva" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">STASIS OF FOOD IN MOUTH</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="food_in_mouth" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="food_in_mouth" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DEVIATION OF ANGLE OF MOUTH</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <!--<label class="flex items-center">-->
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="angle_of_mouth" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="angle_of_mouth" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    <!--</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">DYSPHAGIA</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <!--<label class="flex items-center">-->
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="dysphagia" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="dysphagia" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    <!--</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">POSTURAL IMBALANCE</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-1" name="postur" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="postur" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    <!--</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">UPPER LIMB</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE TONE - RT: </span>
                                    </x-base.form-check>
                                    <x-base.form-select name="upp_limb_muscle_tone_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Hypotonia</option>
                                                <option value="3">Hypertonia</option>
                                                <option value="4">Atonia</option>
                                    </x-base.form-select>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE TONE - LT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="upp_limb_muscle_tone_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Hypotonia</option>
                                                <option value="3">Hypertonia</option>
                                                <option value="4">Atonia</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE POWER - RT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="upp_limb_muscle_power_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                        
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE POWER - LT: </span>
                                        </x-base.form-check>
                                        
                                        <x-base.form-select name="upp_limb_muscle_power_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>REFLEXES - RT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="upp_limb_reflex_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>REFLEXES - LT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="upp_limb_reflex_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>PAIN</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_pain" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_pain" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                     
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>OEDEMA</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_oedema" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_oedema" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CELLULITIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_cellulitis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_cellulitis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CLUBBING</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_clubbing" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_clubbing" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CYANOSIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_cyanosis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_cyanosis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>PARESIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_paresis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_paresis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                    
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CONTRACTURES</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="upp_limb_contractures" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="upp_limb_contractures" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">LOWER LIMB</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE TONE - RT: </span>
                                    </x-base.form-check>
                                    <x-base.form-select name="low_limb_muscle_tone_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Hypotonia</option>
                                                <option value="3">Hypertonia</option>
                                                <option value="4">Atonia</option>
                                    </x-base.form-select>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE TONE - LT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="low_limb_muscle_tone_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Hypotonia</option>
                                                <option value="3">Hypertonia</option>
                                                <option value="4">Atonia</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE POWER - RT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="low_limb_muscle_power_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                        
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>MUSCLE POWER - LT: </span>
                                        </x-base.form-check>
                                        
                                        <x-base.form-select name="low_limb_muscle_power_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>REFLEXES - RT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="low_limb_reflex_rt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>REFLEXES - LT: </span>
                                        </x-base.form-check>
                                        <x-base.form-select name="low_limb_reflex_lt" class="border rounded-md px-3 py-2 mr-2">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                        </x-base.form-select>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>PAIN</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_pain" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_pain" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                     
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>OEDEMA</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_oedema" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_oedema" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CELLULITIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_cellulitis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_cellulitis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CLUBBING</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_clubbing" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_clubbing" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CYANOSIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_cyanosis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_cyanosis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>PARESIS</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_paresis" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_paresis" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                    
                                        <x-base.form-check class="mr-4 xl:mr-14 xl:w-40">
                                        <span>CONTRACTURES</span>
                                        </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        
                                        <input type="radio" id="checkbox-switch-1" name="low_limb_contractures" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                            
                                            <input type="radio" id="checkbox-switch-2" name="low_limb_contractures" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                No
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">GAIT</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-select name="gait" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Abnormal</option>
                                                <option value="3">Cannot Access</option>
                                    </x-base.form-select>
                                </div>
                                    
                                    
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">INVOLUNTARY MOVEMENTS</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                                <input type="checkbox" name="epilepsy" value="1" class="mr-2">
                                                <x-base.form-check.label >EPILEPSY</x-base.form-check.label>
                                               
                                                
                                            </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                                <input type="checkbox" name="chorea" value="1" class="mr-2">
                                                <x-base.form-check.label >CHOREA</x-base.form-check.label>
                                                
                                            </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                                <input type="checkbox" name="tremors" value="1" class="mr-2">
                                               <x-base.form-check.label >TREMORS</x-base.form-check.label>
                                    </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-check class="mr-4">
                                            <input type="checkbox" name="facial_dystonia" value="1" class="mr-2">
                                            <x-base.form-check.label >FACIAL DYSTONA</x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                    <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                                <input type="checkbox" name="other_involuntary" id="other_involuntary" value="1" class="mr-2">
                                            <!--<span  class=" flex items-center ">OTHERS</span>-->
                                            <x-base.form-check.label for="other_involuntary">OTHERS</x-base.form-check.label>
                                            </x-base.form-check>
                                         <x-base.form-input
                                                id="other_involuntary_move"
                                                type="text"
                                                placeholder="Specify other involuntary movements"
                                                name="other_involuntary_move"
                                                class="hidden border rounded-md p-2 w-60"
                                            />   
                                  </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">COORDINATION</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="unsteady_standing_walking" value="1" class="mr-2 ">
                                        <x-base.form-check.label >UNSTEADINESS IN STANDING/ WALKING</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="vertigo" value="1" class="mr-2">
                                        <x-base.form-check.label >VERTIGO</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="food_bringing_difficulty" value="1" class=" mr-2 " >
                                        <x-base.form-check.label >DIFFICULTY IN BRINGING FOOD TO MOUTH</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="deafness" value="1" class="mr-2">
                                        <x-base.form-check.label >DEAFNESS</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                       
                        <!-- testing  -->
                        
                        
                        
                        
                        
                        
                        <!-- testing -->
                    </div>
                   
                </div>
            </div>
            
            <div class="box flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                <x-base.button
                    class="w-full border-primary/50 px-10 md:w-auto"
                    variant="outline-primary"
                    id="next-button"
                >
                    <x-base.lucide
                        class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                    /> Next
                </x-base.button>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-timepicker.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const timeInput = document.getElementById('visited_time');
            const timePicker = document.getElementById('time-picker');
            const hoursInput = document.getElementById('hours');
            const minutesInput = document.getElementById('minutes');
            const ampmSelect = document.getElementById('ampm');
            const setTimeButton = document.getElementById('set-time');

            // Show time picker when input is clicked
            timeInput.addEventListener('focus', () => {
                timePicker.classList.remove('hidden');
            });

            // Set time and close picker
            setTimeButton.addEventListener('click', () => {
                const hours = hoursInput.value.padStart(2, '0');
                const minutes = minutesInput.value.padStart(2, '0');
                const ampm = ampmSelect.value;
                timeInput.value = `${hours}:${minutes} ${ampm}`;
                timePicker.classList.add('hidden');
            });
    
            // Hide time picker if clicked outside
            document.addEventListener('click', (event) => {
                if (!timePicker.contains(event.target) && event.target !== timeInput) {
                    timePicker.classList.add('hidden');
                }
            });
        
            document.getElementById('hours').addEventListener('input', function () {
                const min = parseInt(this.min, 10);
                const max = parseInt(this.max, 10);
                let value = parseInt(this.value, 10);
            
                // Ensure value stays within range
                if (value < min) value = min;
                if (value > max) value = max;
            
                this.value = value; // Set corrected value back
            });
            document.getElementById('minutes').addEventListener('input', function () {
                const min = parseInt(this.min, 10);
                const max = parseInt(this.max, 10);
                let value = parseInt(this.value, 10);
            
                // Ensure value stays within range
                if (value < min) value = min;
                if (value > max) value = max;
            
                this.value = value; // Set corrected value back
            });
            document.getElementById('minutes').addEventListener('blur', function () {
               this.value = this.value.padStart(2, '0');
            });
            
             //Akhi
            document.getElementById('pr').addEventListener('input', function (e) {
                const value = e.target.value;
                // Allow only numbers and restrict to 3 digits
                if (!/^\d{0,3}$/.test(value)) {
                    e.target.value = value.slice(0, 3); // Truncate to first 3 digits
                }
                // Prevent input if the first digit is empty (enforce at least 2 digits)
                if (value.length < 2 && e.inputType === "deleteContentBackward") {
                    e.target.value = ""; // Reset if less than 2 digits
                }
            });
            
            document.getElementById('grbs').addEventListener('input', function (e) {
                const value = e.target.value;
                if (!/^\d{0,3}$/.test(value)) {
                    e.target.value = value.slice(0, -1); // Restrict to 3 digits
                }
            });
            
            document.getElementById('spo2').addEventListener('input', function (e) {
                const value = e.target.value;
                if (!/^\d{0,3}$/.test(value)) {
                    e.target.value = value.slice(0, -1); // Restrict to 3 digits
                }
            });
            
            
            jQuery.ajax({
                url: '/get_patient_id',
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    const $select = jQuery('#patient-select');
                    if ($select.length) {
                        // Clear existing options
                        $select.empty().append('<option value="">Select</option>');
                        response.forEach(function (data) {
                                $select.append('<option value="' + data.id + '">' + data.patient_code + '</option>');
                            });
                    } else {
                        console.error('Patient ID select element not found.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching Patient ID:', error);
                }
            });
           
            jQuery(document).ready(function () {
                jQuery('#patient-select').on('change', function () {
                    const patientId = jQuery(this).val();
                    if (patientId) {
                        jQuery.ajax({
                            url: '/get_patient_details/' + patientId,
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.name ) {
                                    
                                    jQuery('#patient-name').val(response.name || '');
                                    jQuery('#patient-age').val(response.age !== null ? response.age : 'N/A');
                                    jQuery('#patient-ward').val(response.ward_no !== null ? response.ward_no : 'N/A');
                                    // jQuery('#patient-age').val(response.age || '');
                                    // jQuery('#patient-ward').val(response.ward_no || '');
                                    jQuery('#patient-diagnosis').val(response.diagnosis || '');
                                    
                                    
                                } else {
                                    // Clear fields if no valid response
                                    jQuery('#patient-name').val('');
                                    jQuery('#patient-age').val('');
                                    jQuery('#patient-ward').val('');
                                    jQuery('#patient-diagnosis').val('');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching patient details:', error);
                            }
                        });
                    } else {
                        // Clear fields if no patient is selected
                        jQuery('#patient-name').val('');
                        jQuery('#patient-age').val('');
                        jQuery('#patient-ward').val('');
                        jQuery('#patient-diagnosis').val('');
                    }
                });
                
                jQuery('input[type="checkbox"][data-input]').on('change', function () {
                    const targetInput = jQuery(this).data('input'); // Get the target input ID
                    const $inputField = jQuery('#' + targetInput); // Target the associated div
                    if (jQuery(this).is(':checked')) {
                        $inputField.css('display', 'block'); // Show the input field
                    } else {
                        $inputField.css('display', 'none').find('input').val(''); // Hide and clear the input field
                    }
                });
                
                jQuery('#communityNurseCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    if (isChecked && patientId) {
                       jQuery.ajax({
                            url: '/get-nurses-by-patient/', // Replace with your backend endpoint
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response) {
                                    jQuery('#communitive_nurse').val(response.p_nurse || '');
                                    jQuery('#p_nurse').val(response.id || '');
                                } else {
                                    // Clear fields if no valid response
                                    jQuery('#communitive_nurse').val('');
                                    jQuery('#p_nurse').val('');
                                }
                            }
                        });
                    } 
                    else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#communityNurseCheckbox').prop('checked', false); // Uncheck the checkbox
                        jQuery('#paliative-nurse').css('display', 'none');
                        jQuery('#communitive_nurse').empty();
                        jQuery('#p_nurse').empty();
                        
                    }
                    else {
                        jQuery('#paliative-nurse').css('display', 'none');
                        jQuery('#communitive_nurse').empty();
                        jQuery('#p_nurse').empty();
                    }
                });
                
                jQuery('#jhiCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    if (isChecked && patientId) {
                        jQuery.ajax({
                            url: '/get_jhi_data/' + patientId, // Backend endpoint to fetch JHI data
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.jhis && response.jhis.length > 0) {
                                    // Populate JHI dropdown
                                    const jhiDropdown = jQuery('#jhiDropdown');
                                    jhiDropdown.empty(); // Clear previous options
                                    jhiDropdown.append('<option value="">Select JHI</option>');
                                    response.jhis.forEach(jhi => {
                                        jhiDropdown.append(`<option value="${jhi.id}">${jhi.name}</option>`);
                                    });
                                    // Show the dropdown
                                    jQuery('#jhiDropdownContainer').show();
                                } else {
                                    // No JHIs found
                                    jQuery('#jhiDropdownContainer').hide();
                                    alert('No JHI found for the selected patient.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching JHI data:', error);
                                jQuery('#jhiDropdownContainer').hide();
                                alert('Please select patient ID.');
                            }
                        });
                    } else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#jhiCheckbox').prop('checked', false);
                        jQuery('#jhiDropdownContainer').hide();
                    }
                    else{
                        // Hide the dropdown if unchecked or no patient selected
                        jQuery('#jhiDropdownContainer').hide();
                    }
                });
                    
               jQuery('#jphnCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    // console.log('Checkbox checked:', isChecked);
                    // console.log('Selected patient ID:', patientId);
                    
                    if (isChecked && patientId) {
                        jQuery.ajax({
                            url: '/get_jphn_data/' + patientId, // Backend endpoint to fetch JHI data
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.jphns && response.jphns.length > 0) {
                                    // Populate JHI dropdown
                                    const jphnDropdown = jQuery('#jphnDropdown');
                                    jphnDropdown.empty(); // Clear previous options
                                    jphnDropdown.append('<option value="">Select JPHN</option>');
                                    
                                    response.jphns.forEach(jphn => {
                                        jphnDropdown.append(`<option value="${jphn.id}">${jphn.name}</option>`);
                                    });
            
                                    // Show the dropdown
                                    jQuery('#jphnDropdownContainer').show();
                                } else {
                                    // No JHIs found
                                    jQuery('#jphnDropdownContainer').hide();
                                    alert('No JPHN found for the selected patient.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching JPHN data:', error);
                                jQuery('#jphnDropdownContainer').hide();
                                alert('Please select patient ID.');
                            }
                        });
                    } 
                    else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#jphnCheckbox').prop('checked', false);
                        jQuery('#jphnDropdownContainer').hide();
                    }else {
                        // Hide the dropdown if unchecked or no patient selected
                        jQuery('#jphnDropdownContainer').hide();
                    }
                });
                jQuery('#wmCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    if (isChecked && patientId) {
                        jQuery.ajax({
                            url: '/get_wm_data/' + patientId, // Backend endpoint to fetch ward member data
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.ward && response.ward.length > 0) {
                                    // Populate ward member dropdown
                                    const wmDropdown = jQuery('#wmDropdown');
                                    wmDropdown.empty(); // Clear previous options
                                    wmDropdown.append('<option value="">Select Ward Member</option>');
                                    
                                    response.ward.forEach(member => {
                                        wmDropdown.append(`<option value="${member.id}">${member.member}</option>`);
                                    });
                
                                    // Show the dropdown
                                    jQuery('#wmDropdownContainer').show();
                                } else {
                                    // No ward members found
                                    jQuery('#wmDropdownContainer').hide();
                                    alert('No ward member found for the selected patient.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching ward member data:', error);
                                jQuery('#wmDropdownContainer').hide();
                                alert('An error occurred while fetching ward members.');
                            }
                        });
                    }
                    else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#wmCheckbox').prop('checked', false);
                        jQuery('#wmDropdownContainer').hide();
                    }
                    else {
                        // Hide the dropdown if unchecked or no patient selected
                        jQuery('#wmDropdownContainer').hide();
                    }
                });
                
                jQuery('#mlspCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    if (isChecked && patientId) {
                        jQuery.ajax({
                            url: '/get_mlsp_data/' + patientId, // Backend endpoint to fetch asha worker data
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.mlsps && response.mlsps.length > 0) {
                                    // Populate asha worker dropdown
                                    const mlspDropdown = jQuery('#mlspDropdown');
                                    mlspDropdown.empty(); // Clear previous options
                                    mlspDropdown.append('<option value="">Select MLSP </option>');
                                    
                                    response.mlsps.forEach(mlsp => {
                                        mlspDropdown.append(`<option value="${mlsp.id}">${mlsp.mlsp_name}</option>`);
                                    });
                                    // Show the dropdown
                                    jQuery('#mlspDropdownContainer').show();
                                } else {
                                    // No ward members found
                                    jQuery('#mlspDropdownContainer').hide();
                                    alert('No MLSP found for the selected patient.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching ward member data:', error);
                                jQuery('#mlspDropdownContainer').hide();
                                alert('An error occurred while fetching MLSP.');
                            }
                        });
                    } 
                    else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#mlspCheckbox').prop('checked', false); // Uncheck the checkbox
                        // Query('#mlspDropdownContainer').hide();
                    }
                    else {
                        // Hide the dropdown if unchecked or no patient selected
                        jQuery('#mlspDropdownContainer').hide();
                    }
                });
                
                jQuery('#ashaCheckbox').on('change', function () {
                    const isChecked = jQuery(this).is(':checked');
                    const patientId = jQuery('#patient-select').val();
                    if (isChecked && patientId) {
                        jQuery.ajax({
                            url: '/get_asha_data/' + patientId, // Backend endpoint to fetch asha worker data
                            type: 'GET',
                            dataType: 'json',
                            success: function (response) {
                                if (response && response.asha && response.asha.length > 0) {
                                    // Populate asha worker dropdown
                                    const ashaDropdown = jQuery('#ashaDropdown');
                                    ashaDropdown.empty(); // Clear previous options
                                    ashaDropdown.append('<option value="">Select Asha Worker</option>');
                                    
                                    response.asha.forEach(asha_w => {
                                        ashaDropdown.append(`<option value="${asha_w.id}">${asha_w.asha_worker}</option>`);
                                    });
                                    // Show the dropdown
                                    jQuery('#ashaDropdownContainer').show();
                                } else {
                                    // No ward members found
                                    jQuery('#ashaDropdownContainer').hide();
                                    alert('No asha worker found for the selected patient.');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching ward member data:', error);
                                jQuery('#ashaDropdownContainer').hide();
                                alert('An error occurred while fetching Asha workers.');
                            }
                        });
                    } 
                    else if (isChecked && !patientId) {
                        alert('Please select patient ID.');
                        jQuery('#ashaCheckbox').prop('checked', false);
                        jQuery('#ashaDropdownContainer').hide();
                    }else {
                        // Hide the dropdown if unchecked or no patient selected
                        jQuery('#ashaDropdownContainer').hide();
                    }
                });
                
                
                
                jQuery.ajax({
                    url: '/get_treatment_types',
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        const $select = jQuery('#treatment-type-select');
                
                        if ($select.length) {
                            // Clear existing options
                            $select[0].tomselect.clearOptions();
                            
                            response.forEach(function (data) {
                                $select[0].tomselect.addOption({ value: data.id, text: data.treatment_type });
                            });
                        } else {
                            console.error('Treament type select element not found.');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error fetching treatment type:', error);
                    }
                });
                
            });
           
           const phyIllRadios = document.querySelectorAll('input[name="phy_ill"]');
            const illnessDetails = document.getElementById('illness-details');
            const difficultyInputs = document.querySelectorAll('input[name="physical_difficulty[]"]');
            const durationInputs = document.querySelectorAll('select[name="duration[]"]');
            const periodInputs = document.querySelectorAll('select[name="period[]"]');
    
            phyIllRadios.forEach(radio => {
                radio.addEventListener('change', function () {
                    if (this.value === '1') {
                        // Show the illness details section
                        illnessDetails.style.display = 'block';
                        // Validate that at least one value is entered in the fields when submitting
                        document.querySelector('form').addEventListener('submit', function (event) {
                            let hasValue = false;
                            difficultyInputs.forEach(input => {
                                if (input.value.trim() !== '') {
                                    hasValue = true;
                                }
                            });
                            durationInputs.forEach(select => {
                                if (select.value.trim() !== '') {
                                    hasValue = true;
                                }
                            });
                            periodInputs.forEach(select => {
                                if (select.value.trim() !== '') {
                                    hasValue = true;
                                }
                            });
                            if (!hasValue) {
                                event.preventDefault(); // Prevent form submission
                                alert('Please fill in at least one row of difficulties, duration, and period.');
                            }
                        });
                    } else {
                        // Hide the illness details section and clear all values
                        illnessDetails.style.display = 'none';
                        difficultyInputs.forEach(input => {
                            input.value = '';
                        });
                        durationInputs.forEach(select => {
                            select.value = '';
                        });
                        periodInputs.forEach(select => {
                            select.value = '';
                        });
                    }
                });
            });
            
            
            const visionRadios = document.querySelectorAll('input[name="vision"]');
            const visionOptions = document.getElementById("vision-options");
            const checkboxes = visionOptions.querySelectorAll('input[type="checkbox"]');
    
            visionRadios.forEach(radio => {
                radio.addEventListener("change", function () {
                    if (this.value === "1") {
                        visionOptions.style.display = "block";
                    } else {
                        visionOptions.style.display = "none";
                        checkboxes.forEach(checkbox => checkbox.checked = false); // Uncheck checkboxes when "No" is selected
                    }
                });
            });
            
            const othersCheckbox = document.getElementById("others");
            const otherEyeDiseaseInput = document.getElementById("other-eye-disease");
    
            othersCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    otherEyeDiseaseInput.classList.remove("hidden");
                    otherEyeDiseaseInput.focus(); // Auto-focus when displayed
                } else {
                    otherEyeDiseaseInput.classList.add("hidden");
                    otherEyeDiseaseInput.value = ""; // Clear input when unchecked
                }
            });
            
            
            const otherinvoluntaryCheckbox = document.getElementById("other_involuntary");
            const otherInvoluntaryMoveInput = document.getElementById("other_involuntary_move");
    
            otherinvoluntaryCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    otherInvoluntaryMoveInput.classList.remove("hidden");
                    otherInvoluntaryMoveInput.focus(); // Auto-focus when displayed
                } else {
                    otherInvoluntaryMoveInput.classList.add("hidden");
                    otherInvoluntaryMoveInput.value = ""; // Clear input when unchecked
                }
            });
               
            const otherdentalproblemCheckbox = document.getElementById("other_dental_problem");
            const otherOralProblemInput = document.getElementById("other_oral_prblem");
    
            otherdentalproblemCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    otherOralProblemInput.classList.remove("hidden");
                    otherOralProblemInput.focus(); // Auto-focus when displayed
                } else {
                    otherOralProblemInput.classList.add("hidden");
                    otherOralProblemInput.value = ""; // Clear input when unchecked
                }
            });   
               
            const daytimeOthersCheckbox = document.getElementById("daytimeOthers");
            const otherDayTimeInput = document.getElementById("daytime_others");
    
            daytimeOthersCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    otherDayTimeInput.classList.remove("hidden");
                    otherDayTimeInput.focus(); // Auto-focus when displayed
                } else {
                    otherDayTimeInput.classList.add("hidden");
                    otherDayTimeInput.value = ""; // Clear input when unchecked
                }
            });
            
            const other_rehabilitationCheckbox = document.getElementById("other_rehabilitation");
            const other_rehabilitationInput = document.getElementById("other_rehabilitation_program");
    
            other_rehabilitationCheckbox.addEventListener("change", function () {
                if (this.checked) {
                    other_rehabilitationInput.classList.remove("hidden");
                    other_rehabilitationInput.focus(); // Auto-focus when displayed
                } else {
                    other_rehabilitationInput.classList.add("hidden");
                    other_rehabilitationInput.value = ""; // Clear input when unchecked
                }
            });
              
               
            let treatmentYes = document.getElementById("treatment-yes");
            let treatmentNo = document.getElementById("treatment-no");
            let treatmentDetails = document.getElementById("treatment-details");
            let treatmentSelect = document.getElementById("treatment-type-select");
            let explainTreatment = document.getElementById("explain-treatment");
        
            function toggleTreatmentDetails() {
                if (treatmentYes.checked) {
                    treatmentDetails.style.display = "block";
                    treatmentSelect.setAttribute("required", "true");
                    explainTreatment.setAttribute("required", "true");
                } else {
                    treatmentDetails.style.display = "none";
                    // Clear values when hidden
                    treatmentSelect.value = "";
                    explainTreatment.value = "";
                    treatmentSelect.removeAttribute("required");
                    explainTreatment.removeAttribute("required");
                }
            }
        
            treatmentYes.addEventListener("change", toggleTreatmentDetails);
            treatmentNo.addEventListener("change", toggleTreatmentDetails); 
            
            
            
            //Akhi
            
            
            let currentStep = 0;
            const steps = document.querySelectorAll(".step");
            const formData = {}; // Store data for all steps
            // Initialize step visibility
            steps.forEach((step, index) => {
                step.style.display = index === 0 ? "block" : "none";
            });
            
           
            
            // Event listener for "Next" button
            document.getElementById("next-button").addEventListener("click", function () {
                if(currentStep==0)
                    saveBasicDetails(currentStep);
                if(currentStep==1)
                    saveMemoryData(currentStep);
                if(currentStep==2)
                    savePrimaryNeedData(currentStep);
                if(currentStep==3)
                    saveGeneralHygieneDate(currentStep);
                if(currentStep==4)
                    savePhysiotherapyData(currentStep);
            });

            function saveBasicDetails(step) {
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select");
                const nextButton = document.querySelector("#next-button"); // Assuming your button has this ID
                // 🔒 Disable the next button immediately
                nextButton.disabled = true;
                nextButton.textContent = 'Saving...'; 
                    
                // Collect the data for the current step
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        else if (input.type === 'checkbox' && !input.checked) return;
                        data[input.name] = input.value;
                        formData[input.name] = input.value; // Save the data in the formData object
                    }
                });

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch("/save-basic-details", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(data) // Send only the current step's data 
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                    } else {
                        // 🔥 Save patient_id in formData for later use
                        if (responseData.patient_id) {
                            formData.patient_id = responseData.patient_id; 
                        }
                        if (currentStep < steps.length - 1) {
                            steps[currentStep].style.display = "none";
                                currentStep++;
                            steps[currentStep].style.display = "block";
                                updateButtons();
                        } else {
                            submitFormData(); // Submit the full form after the last step
                        }
                    }
                })
                .catch(error => {
                    console.error("Error saving step data:", error);
                    nextButton.disabled = false;
                    nextButton.textContent = 'Next';
                });
            }
            
            // Function to save step data and move to the next step
            function saveMemoryData(step) {
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select");

                // Collect the data for the current step
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        data[input.name] = input.value;
                        formData[input.name] = input.value; // Save the data in the formData object
                    }
                });
                // Attach patient_id to the data if it exists
                 if (formData.patient_id) {
                    data.patient_id = formData.patient_id; 
                }
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch("/save-memory-details", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(data) // Send only the current step's data
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                    } else {
                        if (currentStep < steps.length - 1) {
                            steps[currentStep].style.display = "none";
                            currentStep++;
                            steps[currentStep].style.display = "block";
                            updateButtons();
                        } else {
                            submitFormData(); // Submit the full form after the last step
                        }
                    }
                })
                .catch(error => {
                    console.error("Error saving step data:", error);
                });
            }
            
            // Function to save step data and move to the next step
            function savePrimaryNeedData(step) {
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select");
        
                // Collect the data for the current step
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        data[input.name] = input.value;
                        formData[input.name] = input.value; // Save the data in the formData object
                    }
                });
                // Attach patient_id to the data if it exists
                 if (formData.patient_id) {
                    data.patient_id = formData.patient_id; 
                }
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
                fetch("/save-primary-needs", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(data) // Send only the current step's data
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                    } else {
                        if (currentStep < steps.length - 1) {
                            steps[currentStep].style.display = "none";
                            currentStep++;
                            steps[currentStep].style.display = "block";
                            updateButtons();
                        } else {
                            submitFormData(); // Submit the full form after the last step
                        }
                    }
                })
                .catch(error => {
                    console.error("Error saving step data:", error);
                });
            }
    
            // Function to save step data and move to the next step
            function saveGeneralHygieneDate(step) {
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select");
        
                // Collect the data for the current step
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        data[input.name] = input.value;
                        formData[input.name] = input.value; // Save the data in the formData object
                    }
                });
                // Attach patient_id to the data if it exists
                 if (formData.patient_id) {
                    data.patient_id = formData.patient_id; 
                }
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
                fetch("/save-general-hygiene", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(data) // Send only the current step's data
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                    } else {
                        if (currentStep < steps.length - 1) {
                            steps[currentStep].style.display = "none";
                            currentStep++;
                            steps[currentStep].style.display = "block";
                            updateButtons();
                        } else {
                            submitFormData(); // Submit the full form after the last step
                        }
                    }
                })
                .catch(error => {
                    console.error("Error saving step data:", error);
                });
            }
    
            function savePhysiotherapyData(step) {
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select,textarea");
                const nextButton = document.querySelector("#next-button"); // Assuming your button has this ID
                
                // 🔒 Disable the next button immediately
                nextButton.disabled = true;
                nextButton.textContent = 'Saving...'; 
            
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        else if (input.type === 'checkbox' && !input.checked) return; 
                        if (input.classList.contains('tom-select')) {
                                const selectedOptions = Array.from(input.options)
                                    .filter(option => option.selected)
                                    .map(option => option.value);
                                data[input.name] = selectedOptions;
                                formData[input.name] = selectedOptions;
                            } else {
                            data[input.name] = input.value;
                            formData[input.name] = input.value;
                        }
                    }
                });
            
                if (formData.patient_id) {
                    data.patient_id = formData.patient_id; 
                }
            
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
                fetch("/save-physiotherapy-details", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(data) 
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                        nextButton.disabled = false;
                        nextButton.textContent = 'Next';
                    } else {
                        if (currentStep < steps.length - 1) {
                            steps[currentStep].style.display = "none";
                            currentStep++;
                            steps[currentStep].style.display = "block";
                            updateButtons();
                          
                        } else {
                          
                     //       submitFormData(); 
                     window.location.replace('/patient_list');
                        }
                    }
                })
                .catch(error => {
                    console.error("Error saving step data:", error);
                    nextButton.disabled = false;
                    nextButton.textContent = 'Next';
                });
            }
    
            // Display validation errors for the current step
            function displayValidationErrors(errors) {
                const errorElements = document.querySelectorAll('.error-message');
                errorElements.forEach(errorElement => errorElement.remove());
        
                for (const [fieldName, errorMessages] of Object.entries(errors)) {
                    const inputField = document.querySelector(`[name="${fieldName}"]`);
                    if (inputField && inputField.closest('.step').style.display !== 'none') {
                        const errorMessageContainer = document.createElement('div');
                        errorMessageContainer.classList.add('error-message');
                        errorMessageContainer.textContent = errorMessages.join(', ');
                        inputField.parentElement.appendChild(errorMessageContainer);
                    }
                }
            }

            // Final submission of the form
            function submitFormData() {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
                fetch("/submit-patient-form", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken
                    },
                    body: JSON.stringify(formData) // Send the full form data after all steps
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.success) {
                        alert("Form successfully submitted!");
                    } else {
                        displayValidationErrors(responseData.errors);
                    }
                })
                .catch(error => {
                    console.error("Error submitting final form data:", error);
                });
            }

            // Update button states based on current step
            function updateButtons() {
                // document.getElementById("prev-button").style.display = currentStep === 0 ? "none" : "inline-block";
                document.getElementById("next-button").textContent = currentStep === steps.length - 1 ? "Submit" : "Next";
            }
        
            // Initialize button states
            updateButtons();
            
            
        });
        
        $(document).ready(function() { 
    
            jQuery('.toggle-checkbox').change(function () {
                // Get the target text area using the `data-target` attribute
                var target = jQuery(this).data('target');
                
                if (jQuery(this).is(':checked')) {
                    // Show the text area if the checkbox is checked
                    jQuery(target).removeClass('hidden');
                } else {
                    // Hide the text area if the checkbox is unchecked
                    jQuery(target).addClass('hidden');
                }
            });


            jQuery('.character_only').on('keypress', function (e) {
                var charCode = e.which || e.keyCode;
                if (!/[a-zA-Z\s]/.test(String.fromCharCode(charCode))) {
                    e.preventDefault(); 
                }
            });

            $('.numbers-only').on('keypress', function (e) {
                // Allow digits and control characters like backspace, delete, etc.
                var charCode = e.which || e.keyCode;
                // Check if the key is not a number or control character
                if (!(charCode >= 48 && charCode <= 57) && charCode !== 8 && charCode !== 9 && charCode !== 46) {
                    e.preventDefault();
                }
            });
        });
    </script>
    @endpush