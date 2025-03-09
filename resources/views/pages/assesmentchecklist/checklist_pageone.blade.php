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
            <div class="flex flex-col gap-y-2 lg:flex-row lg:items-center">
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                1
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Basic Details
                        </div>
                    </div>
                </div>
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                2
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                           Memory
                        </div>
                    </div>
                </div>
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                3
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Primary Needs
                        </div>
                    </div>
                </div>
                
                <!-- new addition-->
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                4
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            General Hygiene
                        </div>
                    </div>
                </div>
                
                <div @class([
                    'flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group',
                    'after:hidden before:hidden after:lg:block before:lg:block',
                    "first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20",
                    "last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20",
                    "last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20",
                    "first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20",
                ])>
                    <div class="flex items-center">
                        <div
                            class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                            <div class="flex h-10 w-10 items-center justify-center">
                                5
                            </div>
                        </div>
                        <div
                            class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                            Physiotherapy
                        </div>
                    </div>
                </div>
                
                
                <!-- new addition-->
            </div>
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
                                    name="patient_id" >
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
                                        name="visited_doctor" 
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
                                        name="visited_palliativenurse" 
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
                                        <x-base.form-select id="jhiDropdown" name="visited_jhi" class="border rounded-md p-2 w-full">
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
                                        <select id="jphnDropdown" name="visited_jphn" class="border rounded-md  p-2 w-full">
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
                                        name="visited_volunteer" 
                                        placeholder="Enter Volunteer's Name" 
                                        class="border rounded p-2 w-full character_only">
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="6" class="mr-2" id="wmCheckbox" >
                                        <span>Ward member</span>
                                    </label>
                                    <div id="wmDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="wmDropdown" name="visited_ward_member" class="border rounded-md p-2 w-full">
                                            <option value="">Select Ward member</option>
                                        </select>
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="7" class="mr-2" id="mlspCheckbox" >
                                        <span>MLSP</span>
                                    </label>
                                    <div id="mlspDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="mlspDropdown" name="visited_mlsp" class="border rounded-md p-2 w-full">
                                            <option value="">Select MLSP</option>
                                        </select>
                                    </div>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="visited_team" value="8" class="mr-2" id="ashaCheckbox">
                                        <span>ASHA Worker</span>
                                    </label> 
                                    <div id="ashaDropdownContainer" style="display: none;" class="mt-3">
                                        <select id="ashaDropdown" name="visited_ashaworker" class="border rounded-md p-2 w-full">
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
                                     <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <table id="dynamicTable" class="w-full border-collapse border border-slate-300">
                                                    <thead>
                                                        <tr>
                                                            <th class="border border-slate-300 px-4 py-2">ബുദ്ധിമുട്ട് (Difficulty)</th>
                                                            <th class="border border-slate-300 px-4 py-2">കാലയളവ് (Duration)</th>
                                                            <th class="border border-slate-300 px-4 py-2">ദൈർഘ്യം (Period)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="border border-slate-300 px-4 py-2">
                                                                <input type="text" name="difficulty[]" class="w-full border border-slate-300 px-2 py-1">
                                                            </td>
                                                            <td class="border border-slate-300 px-4 py-2">
                                                                <select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
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
                                                                
                                                                    </select>
                                                                    
                                                            </td>
                                                            <td class="border border-slate-300 px-4 py-2">
                                                                <select name="period[]" class="border rounded-md px-3 py-2 mr-4 ">
                                                                    <option value="">Period</option>
                                                                    <option value="1">days</option>
                                                                    <option value="2">weeks</option>
                                                                    <option value="3">months</option>
                                                                    <option value="4">years</option>
                                                                    </select>  </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                               <div className="flex flex-wrap items-center gap-2">
                                                <x-base.button class="w-full border-primary/50  md:w-auto"
                                                       variant="primary" id="addRowButton"  >   + </x-base.button>
                                                </div>    
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                (രോഗി പറയുന്ന / കൂട്ടിരിപ്പുകാർ പറയുന്ന ശാരീരികവും മാനസികവുമായ ബുദ്ധിമുട്ടുകൾ അതിന്റെ കാലയളവും കൂടി വ്യക്തമാക്കുക )
                                                </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="immediate_short_term_memory" value="1">
                                                <x-base.form-check.label for="checkbox-switch-1">Yes</x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="immediate_short_term_memory" value="2">
                                                <x-base.form-check.label for="checkbox-switch-2">No</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <br>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <span>Recent Memory</span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="recent_memory" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="recent_memory" value="2" >
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
                                        <input type="radio" id="checkbox-switch-1" name="remote_memory" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="remote_memory" value="2" >
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
                                        <input type="radio" id="checkbox-switch-1" name="altered_smell_sensation" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="altered_smell_sensation" value="2" >
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
                                        <input type="radio" id="vision-yes" name="vision_difficulty" value="1" >
                                        <x-base.form-check.label for="vision-yes">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="vision-no" name="vision_difficulty" value="2" >
                                        <x-base.form-check.label for="vision-no">
                                            No
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    
                                     </div>
                                      
                                     <div id="vision-options" style="display: none; margin-top: 20px;" >
                                         <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-wrap items-center gap-4">
                                            
                                            <x-base.form-check class="mr-2">
                                                <x-base.form-check.input
                                                    id="checkbox-switch-4"
                                                    type="checkbox"
                                                    class="toggle-checkbox"
                                                    value="1"
                                                    name="refractive_error" />
                                                <x-base.form-check.label for="checkbox-switch-4">
                                                    REFRACTIVE ERROR
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-check class="mr-2">
                                                <x-base.form-check.input
                                                    id="checkbox-switch-5"
                                                    type="checkbox"
                                                    class="toggle-checkbox"
                                                    value="1"
                                                    name="cataract" />
                                                <x-base.form-check.label for="checkbox-switch-5">
                                                    CATARACT
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            <x-base.form-check class="mr-2">
                                                <x-base.form-check.input
                                                    id="checkbox-switch-5"
                                                    type="checkbox"
                                                    class="toggle-checkbox"
                                                    value="1"
                                                    name="diminisioned_vision" />
                                                <x-base.form-check.label for="checkbox-switch-5">
                                                    DIMINISIONED VISION
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                            
                                        <!--<label class="flex items-center">-->
                                        <!--<x-base.form-check class="mr-4">
                                            <span  class=" mr-2 ">REFRACTIVE ERROR</span>
                                            <input type="checkbox" name="refractive_error" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>-->
                                       <!-- <x-base.form-check class="mr-4">
                                            <span class=" mr-2 ">CATARACT</span>
                                            <input type="checkbox" name="cataract" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <span class=" mr-2 ">DIMINISIONED VISION</span>
                                            <input type="checkbox" name="diminisioned_vision" value="1" class="flex items-center">
                                            
                                        </x-base.form-check>-->
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
                                                <input type="checkbox" id="others" name="others" value="1">
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
                                            <input type="radio" id="checkbox-switch-1" name="chewing_difficulty" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="chewing_difficulty" value="2" >
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
                                            <input type="radio" id="checkbox-switch-1" name="facial_assymetry" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="facial_assymetry" value="2" >
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
                                            <input type="radio" id="checkbox-switch-1" name="salvia_drooling" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="salvia_drooling" value="2" >
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
                                            <input type="radio" id="checkbox-switch-1" name="food_statis" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="food_statis" value="2" >
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
                                            <input type="radio" id="checkbox-switch-1" name="angle_deviation_mouth" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="angle_deviation_mouth" value="2" >
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
                                            <input type="radio" id="checkbox-switch-1" name="postural_imbalance" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Yes
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="postural_imbalance" value="2" >
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
                                                name="other_involuntary_movements"
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
            <div class="mt-7 step"  id="step-3">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <div class="font-medium">രോഗിയുടെ പ്രാഥമിക കാര്യങ്ങൾ</div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-70">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">ഭക്ഷണരീതി </div>
                                    </div>
                                    <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="dietary_habits" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ORAL
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="dietary_habits" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            RYLES TUBE
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">a) രോഗിക്ക് വിശപ്പുണ്ടോ?  </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="hungry" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="hungry" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">b) രോഗിയെ നിവർത്തിയിരുത്തിയാണോ ആഹാരം കൊടുക്കുന്നത്? </div>
                                        <div  class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="food_steady_position" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            അതെ
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="food_steady_position" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                           അല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">c) ഭക്ഷണ നിയന്ത്രണങ്ങൾക്കായി ഡോക്ടറിന്റെ നിർദ്ദേശങ്ങൾ ശ്രദ്ധിച്ച് സമീകൃതാഹാരം നൽകാറുണ്ടോ?  </div>
                                        <div  class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="balanced_diet" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="balanced_diet" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">d) രോഗിക്ക് ഡോക്ടറിന്റെ നിർദ്ദേശത്തിനനുസൃതമായി ദ്രാവകങ്ങൾ നൽകുന്നുണ്ടോ? </div>
                                        <div  class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="liquid_food" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="liquid_food" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">e) രോഗിക്ക് മന്ദഗതിയിൽ ഭക്ഷണം നൽകേണ്ടുന്നതും ചെറിയ ഉരുളകളിൽ ഭക്ഷണം നൽകുകയും വിഴുങ്ങുന്നതിന് മുമ്പ് ചവയ്ക്കാൻ സമയം അനുവദിക്കുകയും ചെയ്യണമെന്ന് പരിചാരകർക്ക് അറിവുണ്ടോ? </div>
                                        <div  class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="slow_food" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="slow_food" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">f) കിടക്കുമ്പോൾ രോഗിക്ക് ഭക്ഷണം നൽകരുതെന്ന് പരിചാരകർക്ക് അറിയാമോ?</div>
                                        <div  class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="know_lying_food" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            അറിയാം
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="know_lying_food" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            അറിയില്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">മലവിസർജ്ജനം</div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-select name="stool" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Normal</option>
                                                <option value="2">Incotinence</option>
                                                <option value="3">Loose Stool</option>
                                                <option value="4">Constipation</option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">കൊളോസ്റ്റമി </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="colostomy" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Present
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="colostomy" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            Absent
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">മൂത്രവിസർജ്ജനം </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="urination" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Normal
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="urination" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            On CBD
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">STOMA </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="stoma" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Healthy
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="stoma" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            Unhealthy
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-7 step"  id="step-4" style="display: none;">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <div class="font-medium">വ്യക്തിശുചിത്വം</div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">a) കുളി/ നനച്ച് തുടയ്ക്കൽ എത്ര ദിവസം കൂടുമ്പോൾ    </div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-select name="bath_days" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">ദിവസവും</option>
                                                <option value="2">2-3 ദിവസത്തിലൊരിക്കൽ </option>
                                                <option value="3">ആഴ്ചയിലൊരിക്കൽ </option>
                                    </x-base.form-select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">b) തലമുടി, താടി, മീശ എന്നിവ വൃത്തിയായി സൂക്ഷിക്കുന്നത് ചൊറിച്ചിൽ, പേൻ, ത്വക്ക് രോഗങ്ങൾ, എന്നിവ നിരുത്സാഹപ്പെടുത്തുവാനുള്ള വഴിയാണെന്ന് കുടുംബാംഗങ്ങൾക്ക് അറിയാമോ?      </div>
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
                                            <input type="radio" id="checkbox-switch-1" name="family_know_clean" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                അറിയാം
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                        <x-base.form-check class="mr-4">
                                            <input type="radio" id="checkbox-switch-2" name="family_know_clean" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                അറിയില്ല
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
                                        <div class="font-medium">ദന്തശുചിത്വം / ORAL HYGIENE </div>
                                        <div 
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-80">
                                        <span> a)ORAL MUCOSA: </span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="oral_mucosa" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Dry
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="oral_mucosa" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            Wet
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <br>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-80">
                                        <span> b)TEETH: </span>
                                    </x-base.form-check>
                                    <x-base.form-select name="teeth" class="border rounded-md px-3 py-2 mr-4">
                                                <option value="">Select </option>
                                                <option value="1">Present</option>
                                                <option value="2">Absent</option>
                                                <option value="3">Dentures</option>
                                    </x-base.form-select>
                                </div>
                                <br>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4 xl:mr-14 xl:w-60">
                                        <span>c)പല്ലുകൾ/വായ പതിവായി വൃത്തിയാക്കുന്നുണ്ടെന്ന് ഉറപ്പുവരുത്തിയോ? </span>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-1" name="oral_hygiene" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            അതെ
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="oral_hygiene" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">ORAL PROBLEMS</div>
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
                                        <input type="checkbox" name="candidiasis" value="1" class="mr-2 ">
                                        <x-base.form-check.label >Candidiasis</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="halitosis" value="1" class="mr-2">
                                        <x-base.form-check.label >Halitosis</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="aphthous_ulcer" value="1" class=" mr-2 " >
                                        <x-base.form-check.label >Aphthous Ulcer</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="dental_caries" value="1" class="mr-2">
                                        <x-base.form-check.label >Dental Caries</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="other_dental_problem" id="other_dental_problem" value="1" class="mr-2">
                                        <x-base.form-check.label  for="other_dental_problem" >Others, Please Specify</x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-input id="other_oral_prblem" type="text" placeholder="Specify other Oral Problems" name="other_oral_prblem" class="hidden border rounded-md p-2 w-60" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> അബോധാവസ്ഥയിലുള്ള രോഗിയാണെങ്കിൽ ദന്തശുചിത്വം പാലിക്കേണ്ടതിനെക്കുറിച്ചും
വൃത്തിയാക്കുമ്പോൾ ASPIRATION തടയുന്നതിനുള്ള നിർദ്ദേശങ്ങൾ കുടുംബാംഗങ്ങൾക്ക് പരിചാരകർക്ക് നൽകിയിട്ടുണ്ടോ?</div>
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
                                        <input type="radio" id="checkbox-switch-1" name="advice_on_aspiration" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="advice_on_aspiration" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> CARE OF NAILS </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="nails_care" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="nails_care" value="2" >
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
                                        <div class="font-medium"> CARE OF EYES </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="eyes_care" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="eyes_care" value="2" >
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
                                        <div class="font-medium"> CARE OF SKIN </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="skin_care" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="skin_care" value="2" >
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
                                        <div class="font-medium"> SKIN INTEGRITY </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="skin_integrity" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="skin_integrity" value="2" >
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
                                        <div class="font-medium"> PRESSURE SORE </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="pressure_sore" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Yes
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="pressure_sore" value="2" >
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
                                        <div class="font-medium"> 1) രോഗിയ്ക്ക് ശരീരഭാഗങ്ങളിലെ സമ്മർദ്ദവുമായി ബന്ധപ്പെട്ട അസ്വസ്ഥ്യമോ വേദനയോ ഉണ്ടോ?
</div>
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
                                        <input type="radio" id="checkbox-switch-1" name="pressure_point_pain" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="pressure_point_pain" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> 2) അമിതവും തുടർച്ചയായതുമായ ചർമ്മ ഈർപ്പം
നിലനിൽക്കുന്നുണ്ടോ?  </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="skin_moisture" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="skin_moisture" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> 3) രോഗിയുടെ ശാരീരിക പ്രവർത്തനത്തിന്റെ നിലവാരം പരിശോധിച്ചോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="physical_activity" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="physical_activity" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> 4) ശരീരത്തിന്റെ സ്ഥാനം സ്വതന്ത്രമായി ക്രമീകരിക്കാനുള്ള കഴിവ് രോഗിക്കുണ്ടോ?  </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="self_movement" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="self_movement" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium"> 5) രോഗിയുടെ ദൈനംദിന പോഷകാഹാര നിലവാരം വിലയിരുത്തിയോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="daily_diet_valued" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="daily_diet_valued" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 6) ഉയർന്ന അപകടസാധ്യതയ്ക്കും കാരണമാകുന്നു വെന്ന് കുടുംബാംഗങ്ങളോട്/പരിചാരകരോട് പറഞ്ഞ് മനസ്സിലാക്കിയോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="high_risk_said" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="high_risk_said" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 7) ഘർഷണം ശരീരത്തിൽ മുറിവുകളുണ്ടാകാൻ
കാരണമാകുമെന്ന് രോഗിയോട് (രോഗി അബോധാ വസ്ഥയിലെങ്കിൽ പരിചാരകരോട് പറഞ്ഞ് മനസ്സിലാക്കിയോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="friction_said" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="friction_said" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 8) Pressure Points ൽ പ്രത്യേക ശ്രദ്ധ ചെലുത്തേണ്ടതിന്റെ ആവശ്യകത പരിചാരകർക്ക് അറിയാമോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="pressure_point_said" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            അറിയാം
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="pressure_point_said" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 9) കിടപ്പുരോഗികളുടെ Position ഇടയ്ക്കിടയ്ക്ക് മാറ്റേണ്ടതിന്റെ പ്രാധാന്യം പരിചാരകൾക്ക് അറിയാമോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="lying_position_known" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            അതെ
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="lying_position_known" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                       <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 10) AIRBED/WATERBED ഉപയോഗിക്കുന്നുണ്ടോ ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="air_water_bed" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="air_water_bed" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 11) ദിവസവും SKIN CARE ചെയ്യണമെന്ന് പരിചാരകർക്ക് ബോധ്യമുണ്ടോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="daily_skincare_known" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="daily_skincare_known" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 12) മൂത്രവിസർജ്ജനം, മലവിസർജ്ജനം എന്നിവയ്ക്ക് ശേഷം ഈർപ്പം നിൽക്കാതെ ആ ഭാഗങ്ങൾ ഡ്രൈ ആക്കി വയ്ക്കാറുണ്ടോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="drying_parts" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="drying_parts" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 13) ദിവസവും SKIN ൽ എന്തെങ്കിലും തരത്തിലുള്ള
മാറ്റങ്ങളുണ്ടോ എന്ന് കുടുംബാംഗങ്ങൾ പരിശോധിക്കാറുണ്ടോ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="body_changes" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="body_changes" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left"> രോഗിയുടെ പരിസ്ഥിതി</div>
                                <div class="text-left">
                                    <div class="flex items-center">
                                       <div class="font-medium"> 1) മുറിയിൽ വായുസഞ്ചാരവും നല്ല വെളിച്ചവുമുണ്ടോ ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="ventilated_room" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="ventilated_room" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-7 step" id="step-5" style="display: none;">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <div class="font-medium">PHYSIOTHERAPY</div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">1) ഫിസിയോതെറാപ്പി സേവനങ്ങളുടെ ആവശ്യം രോഗിക്കുണ്ടോ?</div>
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
                                        <input type="radio" id="checkbox-switch-1" name="physiotherapy" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="physiotherapy" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">2) പാസീവ് മൊബിലൈസേഷന്റെ പ്രാധാന്യം കുടുംബാംഗങ്ങൾക്ക് അറിയാമോ ?</div >
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
                                        <input type="radio" id="checkbox-switch-1" name="passive_mobilisation_known" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="passive_mobilisation_known" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">3) പേശികളുടെ ബലഹീനത തടയാൻ ശക്തിപ്പെടുത്തുന്ന വ്യായാമങ്ങൾക്ക് പ്രാധാന്യമുണ്ടെന്ന് പരിചാരകർ തിരിച്ചറിയുന്നുണ്ടോ?</div>
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
                                        <input type="radio" id="checkbox-switch-1" name="exercise_imp_known" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="exercise_imp_known" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">4) കിടപ്പിലായ രോഗികൾക്ക് ചെസ്റ്റ് തെറാപ്പി ചെയ്യാൻ പരിചാരകരെ പരിശീലിപ്പിച്ചിട്ടുണ്ടോ?</div>
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
                                        <input type="radio" id="checkbox-switch-1" name="chest_therapy_trained" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="chest_therapy_trained" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">5) സ്ഥിരമായി രോഗിയോടൊപ്പം കുറച്ചു സമയമെങ്കിലും ചിലവഴിക്കണമെന്ന് കുടുംബാംഗത്തോട്  നിർദ്ദേശിച്ചിട്ടുണ്ടോ ? </div>
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
                                        <input type="radio" id="checkbox-switch-1" name="time_spend_known" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="checkbox-switch-2" name="time_spend_known" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">6) പകൽ സമയം രോഗി എങ്ങനെ ചെലവിടുന്നു.? </div>
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
                                        <input type="checkbox" name="daytime_songs" value="1" class="mr-2">
                                        <x-base.form-check.label >a) പാട്ട് കേൾക്കുക</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <input type="checkbox" name="daytime_reading" value="1" class="mr-2">
                                            <x-base.form-check.label >b) വായിക്കുക </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="daytime_sleeping" value="1" class="mr-2">
                                              <x-base.form-check.label >c) ഉറങ്ങുക</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="daytime_tv" value="1" class="mr-2">
                                        <x-base.form-check.label >d) ടി വി കാണുന്നു<</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="daytimeOthers" id="daytimeOthers" value="1" class="mr-2">
                                        <x-base.form-check.label for="daytimeOthers">e) മറ്റുള്ള</x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-input
                                                id="daytime_others"
                                                type="text"
                                                placeholder="Specify others"
                                                name="daytime_others"
                                                class="hidden border rounded-md p-2 w-60"
                                            />   
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
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
                            <br>
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
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
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
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
                                                id="explain_treatment"
                                            />                                                   
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">8.a) ക്ലിനിക്കിൽ നിന്നും ഏൽപ്പിച്ചിട്ടുള്ള വോളണ്ടിയർ രോഗിയെ കഴിഞ്ഞ ഹോം കെയറിനു ശേഷം സന്ദർശിച്ചിട്ടുണ്ടോ? </div>
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
                                        <input type="radio" id="yes_volunteer_visit" name="volunteer_visit" value="1" >
                                        <x-base.form-check.label for="yes_volunteer_visit">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="no_volunteer_visit" name="volunteer_visit" value="2" >
                                        <x-base.form-check.label for="no_volunteer_visit">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div id="volunteer-visit-details" style="display: none;">
                            <br>
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">8.b) സന്ദർശിച്ചിട്ടുണ്ടെങ്കിൽ അവസാനം സന്ദർശിച്ച തീയതി?</div>
                                            <div 
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
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
                                        name="last_visited_date"   
                                        id="last_visited_date"   
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">9.a) രോഗി പുനരധിവാസ പദ്ധതിയിൽ ഉൾപ്പെട്ടിട്ടുണ്ടോ?  </div>
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
                                        <input type="radio" id="yes_rehabilitation_program" name="rehabilitation_program" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            ഉണ്ട്
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-check class="mr-4">
                                        <input type="radio" id="no_rehabilitation_program" name="rehabilitation_program" value="2" >
                                        <x-base.form-check.label for="checkbox-switch-2">
                                            ഇല്ല
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                            </div>
                        </div>
                        <div id="rehabilitation_program_details" style="display: none;">
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center" >
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">9.b) രോഗിയെ ഉൾപ്പെടുത്തിയിട്ടുള്ള പുനരധിവാസ പദ്ധതി എന്താണ്? </div>
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
                                        <input type="checkbox" name="umbrella_making" value="1" class="mr-2">
                                        <x-base.form-check.label >Umbrella making </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <input type="checkbox" name="paper_cover_making" value="1" class="mr-2">
                                            <x-base.form-check.label >Paper cover making </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="lottery_selling" value="1" class="mr-2">
                                              <x-base.form-check.label >Lottery selling </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="small_shop" value="1" class="mr-2">
                                        <x-base.form-check.label >Small shop </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="computer_dtp" value="1" class="mr-2">
                                        <x-base.form-check.label >Computer DTP </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="call_center" value="1" class="mr-2">
                                        <x-base.form-check.label >Call center </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="other_SSI" value="1" class="mr-2">
                                        <x-base.form-check.label >Other small scale industry </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="other_rehabilitation" id="other_rehabilitation" value="1" class="mr-2">
                                        <x-base.form-check.label for="other_rehabilitation">Other </x-base.form-check.label>
                                    </x-base.form-check>
                                    <x-base.form-input
                                                id="other_rehabilitation_program"
                                                type="text"
                                                placeholder="Specify others"
                                                name="other_rehabilitation_program"
                                                class="hidden border rounded-md p-2 w-60"
                                            />   
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">10) ഹോം  കെയറിനു പോയപ്പോൾ ചെയ്തു കൊടുത്ത കാര്യങ്ങൾ എന്തൊക്കെയാണ്? </div>
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
                                        <input type="checkbox" name="catheterization" value="1" class="mr-2">
                                        <x-base.form-check.label > Catheterization </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                            <input type="checkbox" name="ryle_tube_insertion" value="1" class="mr-2">
                                            <x-base.form-check.label > Ryles Tube Insertion</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="tracheostomy_care" value="1" class="mr-2">
                                              <x-base.form-check.label > Tracheostomy Care</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="lymphoedema_care" value="1" class="mr-2">
                                        <x-base.form-check.label > Lymphoedema Care</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="minnor_dressing" value="1" class="mr-2">
                                        <x-base.form-check.label > Minor Dressing</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="major_dressing" value="1" class="mr-2">
                                        <x-base.form-check.label >Major Dressing </x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="ascittic_tapping" value="1" class="mr-2">
                                        <x-base.form-check.label > Ascittic Tapping</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="colostomy_care" value="1" class="mr-2">
                                        <x-base.form-check.label > Colostomy Care</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="physio" value="1" class="mr-2">
                                        <x-base.form-check.label > Physiotherapy</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        <input type="checkbox" name="no_procedure" value="1" class="mr-2">
                                        <x-base.form-check.label > No procedure</x-base.form-check.label>
                                    </x-base.form-check>
                                </div>
                                
                            </div>
                        </div>
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
                
                const phyIllRadios = document.querySelectorAll('input[name="phy_ill"]');
                const illnessDetails = document.getElementById('illness-details');
                phyIllRadios.forEach(radio => {
                    radio.addEventListener('change', function () {
                        if (this.value === '1') {
                            // Show the illness details section
                            illnessDetails.style.display = 'block';
                        } else if (this.value === '2') {
                            // Hide the illness details section
                            illnessDetails.style.display = 'none';
                            // Clear all input fields within the illness details section
                            const inputs = illnessDetails.querySelectorAll('input, select');
                            inputs.forEach(input => {
                                input.value = '';
                            });
                        }
                    });
                });
                
                
                document.getElementById('addRowButton').addEventListener('click', function () {
                    // Reference the table body
                    const tableBody = document.querySelector('#dynamicTable tbody');
                    
                    // Create a new row
                    const newRow = document.createElement('tr');
                    
                    // Add cells for Difficulty, Period, and Duration
                    newRow.innerHTML = `
                        <td class="border border-slate-300 px-4 py-2">
                            <input type="text" name="difficulty[]" class="w-full border border-slate-300 px-2 py-1">
                        </td>
                        <td class="border border-slate-300 px-4 py-2">
                            <select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
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
                                                                
                                                                    </select>
                        </td>
                        <td class="border border-slate-300 px-4 py-2">
                            <select name="period[]" class="border rounded-md px-3 py-2 mr-4 ">
                                                                    <option value="">Period</option>
                                                                    <option value="1">days</option>
                                                                    <option value="2">weeks</option>
                                                                    <option value="3">months</option>
                                                                    <option value="4">years</option>
                                                                    </select>
                        </td>
                    `;
            
                    // Append the new row to the table
                    // tableBody.appendChild(newRow);
                    $('#dynamicTable tbody').append(newRow);
                });
                $(document).on('click', '.remove-row', function() {
                    $(this).closest('tr').remove();
                });
            });
           
            
            const visionRadios = document.querySelectorAll('input[name="vision_difficulty"]');
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
            
            
             
            
            const treatmentYes = document.getElementById("treatment-yes");
            const treatmentNo = document.getElementById("treatment-no");
            const treatmentDetails = document.getElementById("treatment-details");
            const treatmentSelect = document.getElementById("treatment-type-select");
            const explainTreatment = document.getElementById("explain_treatment"); 
        
            function toggleTreatmentDetails() {
                const isVisible = treatmentYes.checked;
        
                // Show or hide the treatment details section
                treatmentDetails.style.display = isVisible ? "block" : "none";
        
                if (isVisible) {
                    treatmentSelect.setAttribute("required", "true");
                    explainTreatment.setAttribute("required", "true");
                } else {
                    // Clear input values and remove required attribute
                    explainTreatment.value = "";
                    explainTreatment.removeAttribute("required");
                    
                    // Check if TomSelect instance exists and clear selections
                    if (treatmentSelect.tomselect) {
                        treatmentSelect.tomselect.clear();
                    } else {
                        treatmentSelect.value = "";
                    }
                    
                    treatmentSelect.removeAttribute("required");
                }
            } 
        
            // Attach event listeners
            treatmentYes.addEventListener("change", toggleTreatmentDetails);
            treatmentNo.addEventListener("change", toggleTreatmentDetails);
        
            // Run on page load to set the initial state
            toggleTreatmentDetails();
            
            
            
            const volunteerVisitYes = document.getElementById("yes_volunteer_visit");
            const volunteerVisitNo = document.getElementById("no_volunteer_visit");
            const volunteerVisitDetails = document.getElementById("volunteer-visit-details");
            const lastVisitedDate = document.getElementById("last_visited_date"); 
            function toggleVolunteerVisitDetails() {
                const isVisible = volunteerVisitYes.checked;
        
                // Show or hide the treatment details section
                volunteerVisitDetails.style.display = isVisible ? "block" : "none";
        
                if (isVisible) {
                    lastVisitedDate.setAttribute("required", "true");
                } else {
                    // Clear input values and remove required attribute
                    lastVisitedDate.value = "";
                    lastVisitedDate.removeAttribute("required");
                }
            }
            
             // Attach event listeners
            volunteerVisitYes.addEventListener("change", toggleVolunteerVisitDetails);
            volunteerVisitNo.addEventListener("change", toggleVolunteerVisitDetails);
        
            // Run on page load to set the initial state
            toggleVolunteerVisitDetails();
            
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
            
            
            
            const rehabYes = document.getElementById("yes_rehabilitation_program");
            const rehabNo = document.getElementById("no_rehabilitation_program");
            const rehabDetails = document.getElementById("rehabilitation_program_details");
            
           const otherRehabInput = document.getElementById("other_rehabilitation_program");
            // const checkboxes = rehabDetails.querySelectorAll('input[type="checkbox"]');
        
            function toggleRehabDetails() {
                const checkboxes = rehabDetails.querySelectorAll('input[type="checkbox"]'); // Declare inside function
                if (rehabYes.checked) {
                    rehabDetails.style.display = "block";
        
                    // Ensure at least one checkbox is required
                    checkboxes.forEach(checkbox => {
                        checkbox.required = true;
                    });
                } else {
                    rehabDetails.style.display = "none";
        
                    // Uncheck and remove required attribute
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = false;
                        checkbox.required = false;
                    });
                     otherRehabInput.classList.add("hidden");
                     otherRehabInput.value = "";
                }
            }
        
            // Event listeners
            rehabYes.addEventListener("change", toggleRehabDetails);
            rehabNo.addEventListener("change", toggleRehabDetails);
        
            // Initialize on page load
            toggleRehabDetails();
            
            
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

            async function saveBasicDetails(step) {
                // alert("hiii");exit();
                const data = {};
                const inputs = steps[step].querySelectorAll("input, select");
                const nextButton = document.getElementById("next-button");
                // const nextButton = document.querySelector("#next-button"); // Assuming your button has this ID
                // 🔒 Disable the next button immediately
                nextButton.disabled = true;
                nextButton.textContent = 'Saving...'; 
                    
                // Collect the data for the current step
                inputs.forEach(input => {
                    if (input.name) {
                        if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
                        else if (input.type === 'checkbox' && !input.checked) return;
                        
                        
                        if (input.name === 'difficulty[]' ) { 
                            const difficulties = Array.from(document.querySelectorAll('input[name="difficulty[]"]'))
                        .map(input => input.value.trim())
                        .filter(value => value !== ""); // Remove empty values
    
                            // If there are any non-empty values, save them to data and formData
                            if (difficulties.length > 0) {
                                data[input.name] = difficulties;
                                formData[input.name] = difficulties;
                            }
                        }
                        else  if (input.name === 'period[]') {
                            const selectedPeriods = Array.from(document.querySelectorAll('select[name="period[]"]'))
                                .map(select => select.value.trim())
                                .filter(value => value !== ""); 
                            if (selectedPeriods.length > 0) {
                                data['period[]'] = selectedPeriods;
                                formData['period[]'] = selectedPeriods;
                            }
                        }
                        else  if (input.name === 'duration[]' ) { 
                            const selectedDurations = Array.from(document.querySelectorAll('select[name="duration[]"]'))
                                .map(select => select.value.trim())
                                .filter(value => value !== ""); 
                            if (selectedDurations.length > 0) {
                                data['duration[]'] = selectedDurations;
                                formData['duration[]'] = selectedDurations;
                            }
                        }
                        else {
                            data[input.name] = input.value;
                            formData[input.name] = input.value; // Save the data in the formData object
                        }
                    }
                });

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                 try {
                    const response = await fetch("/save-basic-details", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": csrfToken
                        },
                        body: JSON.stringify(data)
                    });
            
                    if (!response.ok) {
                        // Handle HTTP errors
                        const errorData = await response.json();
                        if (errorData.errors) {
                            displayValidationErrors(errorData.errors);
                        } else {
                            console.error("Server Error:", errorData.message);
                        }
                        return;
                    }
            
                    const responseData = await response.json();
            
                    if (responseData.success === false) {
                        displayValidationErrors(responseData.errors);
                    } else {
                        // Save visited_id in formData for later use
                        if (responseData.visit_id) {
                            formData.visit_id = responseData.visit_id;
                        }
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
                } catch (error) {
                    console.error("Network Error:", error);
                } finally {
                    // Re-enable the next button
                    nextButton.disabled = false;
                    nextButton.textContent = 'Next';
                }
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
                 if (formData.visit_id) {
                    data.visit_id = formData.visit_id; 
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
                if (formData.visit_id) {
                    data.visit_id = formData.visit_id; 
                }if (formData.patient_id) {
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
                if (formData.visit_id) {
                    data.visit_id = formData.visit_id; 
                }if (formData.patient_id) {
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
            
                if (formData.visit_id) {
                    data.visit_id = formData.visit_id; 
                }if (formData.patient_id) {
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
                     window.location.replace('/patient_profile'+ formData.patient_id);
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