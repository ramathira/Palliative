@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Palliative Care</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
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
                            Personal Information
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
                           Additional Details
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
                            Diagnosis Details
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-7 step"  id="step-1">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                       
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
                                    placeholder="First Name"
                                    name="first_name"
                                />
                                    <x-base.form-input
                                        class="character_only"
                                        type="text"
                                        placeholder="Second Name"
                                         name="second_name"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Date of Birth</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    ജനന തീയതി 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                               
                               
                                            <x-base.litepicker
                                                class="mx-auto block"
                                                data-single-mode="true"
                                                name="dob"
                                            />
                                        
                                       
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Gender</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        Select your gender from the options.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-check class="mr-4">
                                        {{-- <x-base.form-check.input
                                        id="checkbox-switch-1"
                                        type="radio"
                                        name="gender" 
                                        value="1"
                                        /> --}}
                                        <input type="radio" id="checkbox-switch-1" name="gender" value="1" >
                                        <x-base.form-check.label for="checkbox-switch-1">
                                            Male
                                        </x-base.form-check.label>
                                    </x-base.form-check>
                                   
                                    
                                  
                                        <x-base.form-check class="mr-4">
                                            {{-- <x-base.form-check.input
                                            id="checkbox-switch-2"
                                            type="radio"
                                            name="gender" 
                                            value="2"
                                            /> --}}
                                            <input type="radio" id="checkbox-switch-2" name="gender" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                Female
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                       

                                        {{-- <x-base.form-check class="mr-4">
                                            <x-base.form-check.input
                                            id="checkbox-switch-3"
                                            type="radio"
                                            name="gender" 
                                            value="3"
                                            />
                                            <x-base.form-check.label for="checkbox-switch-3">
                                                Prefer Not to Say
                                            </x-base.form-check.label>
                                        </x-base.form-check> --}}
                                    



                                    
                                  
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Phone Number</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    ഫോൺ നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="numbers-only first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="9876543210"
                                        name="phone_no"
                                    />
                                   
                                </div>
                               
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Aadhar No.</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    ആധാർ നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="numbers-only first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Aadhar Number"
                                        name="aadhar"
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">House Number</div>
                                        
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    വീട് നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="House Number"
                                        name="house_no"
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Address</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    വിലാസം  
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                             

                                    <x-base.form-input
                                    class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                    type="text"
                                    placeholder="Address"
                                    name="address"
                                />
                                    
                                </div>
                               
                            </div>

                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Landmark</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        വഴികാട്ടി 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Landmark"
                                        name="landmark"
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                   
                </div>
            </div>
            <div class="mt-7 step"  id="step-2" style="display: none;">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Sub Centre</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    സബ് സെൻറർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="subcentre-select" name="subcentre">
                                <option value="">Select</option> 
                                </x-base.form-select>
                            </div>
                        </div>
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ward</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    വാർഡ്
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="ward-select" name="ward" >
                                <option value="">Select a Ward</option> 
                                </x-base.form-select>
                            </div>
                        </div>
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ward No.</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    വാർഡ് നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Ward Number"
                                        id="ward_no"
                                        disabled
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>                    
                      
                        
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ward member</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    വാർഡ് മെമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Ward Member"
                                        id="ward_member"
                                        disabled
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Phone Number</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    ഫോൺ നമ്പർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="{{ $users[0]['phone'] }}"
                                        id="ward_phone"
                                        disabled
                                    />
                                   
                                </div>
                               
                            </div>
                        </div>                      

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Asha Worker</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        ആശ വർക്കർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="ashaworker-select" name="ashaworker" >
                                <option value="">Select Asha Worker</option> 
                                </x-base.form-select>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Anganwadi</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        അംഗനവാടി  
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="awc-select" name="awc" >
                                <option value="">Select AWC</option> 
                                </x-base.form-select>
                            </div>
                        </div>
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Anganwadi Worker</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        അംഗനവാടി വർക്കർ 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <x-base.form-select id="awc-worker-select" name="awc_worker"  >
                                <option value="">Select AWC Worker</option> 
                                </x-base.form-select>
                            </div>
                        </div>

                      
                       
                      
                        
                    </div>
                    <!-- <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                        <x-base.button
                            class="w-full border-primary/50 px-10 md:w-auto"
                            variant="outline-primary"
                        >
                            <x-base.lucide
                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                                icon="Pocket"
                            />
                            Next
                        </x-base.button>
                    </div> -->
                </div>
            </div>
            <div class="mt-7 step" id="step-3" style="display: none;">
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Diagnosis </div>
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
                                        data-placeholder="Select the Diagnosis"
                                        multiple
                                        id="diagnosis-select"
                                        name="diagnosis[]"
                                    >                                                                                                          
                                    </x-base.tom-select>
                                </x-base.preview>                                                   
                            </div>
                        </div> 
                       
                     
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Diagnosis details</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                              Write with the help of Hospital Records
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Type disease details..."
                                />                                   
                            </div>                               
                        </div>
                    </div>    
                    
                   

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Disease Diagnosed Date</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                               
                               
                                            <x-base.litepicker
                                                class="mx-auto block"
                                                data-single-mode="true"
                                            />
                                        
                                       
                            </div>
                    </div>

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">General Condition prior to Disease</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Type  details..."
                                />                                   
                            </div>                               
                        </div>
                    </div> 

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Treatment Availed From</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                  Hospital name
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Hospital Name"
                                        id="hospital_name"
                                        
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>

                        

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Name of Doctor</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                    class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                    type="text"
                                    placeholder="Doctor's Name"
                                    id="doctor_name"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Treament Type</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <div
                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <x-base.form-check>
                                            <x-base.form-check.input
                                                id="checkbox-switch-1"
                                                type="radio"
                                                value=""
                                            />
                                            <x-base.form-check.label for="checkbox-switch-1">
                                                Public 
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                    <div
                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <x-base.form-check>
                                            <x-base.form-check.input
                                                id="checkbox-switch-2"
                                                type="radio"
                                                value=""
                                            />
                                            <x-base.form-check.label for="checkbox-switch-2">
                                                Private
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>                                   
                                </div> 
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Treatment Details</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                            <x-base.preview>                                            
                                            <div class="mt-3">                                              
                                                <div class="flex flex-col mt-2 sm:flex-row">
                                                    <x-base.form-check class="mr-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-4"
                                                            type="checkbox"
                                                             class="toggle-checkbox"
                                                               data-target="#allopathy-textarea"
                                                            value=""
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-4">
                                                          Allopathy
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-5"
                                                            type="checkbox"
                                                            value=""
                                                             class="toggle-checkbox"
                                                              data-target="#ayurveda-textarea"
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-5">
                                                          Ayurveda
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-6"
                                                            type="checkbox"
                                                            value=""
                                                             class="toggle-checkbox"
                                                              data-target="#homeopathy-textarea"
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-6">
                                                           Homeopathy
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                
                                                <!-- Textarea for Allopathy -->
                                              
                                                <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                                placeholder="Enter details for allopathy treatment"
                                                name="allopathy"
                                                id="allopathy-textarea"
                                                /> 
                                            </br>
                                                <!-- Textarea for Ayurveda -->
                                               
                                                <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                                placeholder="Enter details for ayurveda treatment"
                                                name="ayurveda"
                                                id="ayurveda-textarea"
                                                /> 
                                                <br>
                                                <!-- Textarea for Homeopathy -->
                                                <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                                placeholder="Enter details for homeopathy treatment"
                                                name="homeopathy"
                                                id="homeopathy-textarea"
                                                /> 
                                              
                                            </div>
                                          
                                        </x-base.preview>                                 
                            </div>                               
                        </div>
                    </div> 


                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Present Health Condition</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Present Health Condition"
                                />                                   
                            </div>                               
                        </div>
                    </div> 
                  
                     


                  
                      
                    </div>
               
                </div>
            </div>
<!-- 
            <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
        <button id="prev-button" class="hidden">Previous</button>
        <button id="next-button">Next</button>
    </div> -->

    <div class="box flex border-t border-slate-200/80 px-7 py-5 md:justify-end">

    {{-- <x-base.button
                            class="w-full border-primary/50 px-10 md:w-auto"
                            variant="outline-primary"
                           id="prev-button"
                        >
                            <x-base.lucide
                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                               
                            />
                          Previous
                        </x-base.button> --}}
                        <x-base.button
                            class="w-full border-primary/50 px-10 md:w-auto"
                            variant="outline-primary"
                            id="next-button"
                        >
                            <x-base.lucide
                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                                
                            />
                            Next
                        </x-base.button>
                    </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {
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
        saveBasicStepData(currentStep);
        if(currentStep==1)
        saveLocationStepData(currentStep);
    });

    // Event listener for "Previous" button
    // document.getElementById("prev-button").addEventListener("click", function () {
    //     if (currentStep > 0) {
    //         steps[currentStep].style.display = "none";
    //         currentStep--;
    //         steps[currentStep].style.display = "block";
    //         updateButtons();
    //     }
    // });

    function saveBasicStepData(step) {
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

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/save-patient-basic", {
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
    });
}




      // Function to save step data and move to the next step
      function saveLocationStepData(step) {
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

        fetch("/save-patient-location", {
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
        document.getElementById("prev-button").style.display = currentStep === 0 ? "none" : "inline-block";
        document.getElementById("next-button").textContent = currentStep === steps.length - 1 ? "Submit" : "Next";
    }

    // Initialize button states
    updateButtons();
});




$(document).ready(function() { 
    jQuery.ajax({
        url: '/subcentres',
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            const $select = jQuery('#subcentre-select');

           
            if ($select.length) {
                $select.empty().append('<option value="">Select</option>');

                response.forEach(function (data) {
                    $select.append('<option value="' + data.id + '">' + data.sub_centre + '</option>');
                });
            } else {
                console.error('Subcentre select element not found.');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching subcentres:', error);
        }
    });



    jQuery('#subcentre-select').change(function() {
        var subcentreId = $(this).val(); 


        if (subcentreId) {
            jQuery.ajax({
                url: '/get_wards/' + subcentreId, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    
                    jQuery('#ward-select').empty();
                    jQuery('#ward-select').append('<option value="">Select a Ward</option>');                   
                    response.forEach(function(ward) { 
                        jQuery('#ward-select').append('<option value="' + ward.id + '">' + ward.ward_name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching wards: " + error);
                }
            });
          
            jQuery.ajax({
                url: '/get_aganwadi_in_subcentre/' + subcentreId, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {                     
                    jQuery('#awc-select').empty();
                    jQuery('#awc-select').append('<option value="">Select an Anganwadi</option>');                   
                    response.forEach(function(anganwadis) { 
                        jQuery('#awc-select').append('<option value="' + anganwadis.id + '">' + anganwadis.id +' ['+ anganwadis.awc_name +']' + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching AWC: " + error);
                }
            });




        } else {
           
            jQuery('#ward-select').empty();
            jQuery('#ward-select').append('<option value="">Select a Wards</option>');
        }
    });


    jQuery('#ward-select').change(function() {
        var wardId = $(this).val();        
        if (wardId) {
            jQuery.ajax({
                url: '/get_ward_people/' + wardId, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {                 
                   jQuery('#ward_member').empty();
                   jQuery('#ward_no').empty();
                   jQuery('#ward_phone').empty();               
               
                if (response && response.ward_member && response.ward_member.member_name) {                  
                    jQuery('#ward_member').val(response.ward_member.member_name); 
                    jQuery('#ward_no').val(response.ward_member.ward); 
                    jQuery('#ward_phone').val(response.ward_member.contact_number); 
                } else {                  
                    jQuery('#ward_member').val('');
                    jQuery('#ward_no').val('');
                    jQuery('#ward_phone').val('');
                }
                 
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching ward details: " + error);
                }
            });

         
            jQuery.ajax({
                url: '/get_asha_in_ward/' + wardId, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {                                
                    jQuery('#ashaworker-select').empty();
                    jQuery('#ashaworker-select').append('<option value="">Select Asha worker</option>');                            
                    response.forEach(function(ashaworker) { 
                        jQuery('#ashaworker-select').append('<option value="' + ashaworker.id + '">' + ashaworker.asha_worker_name + '</option>');
                    });
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching wards: " + error);
                    }
                });
                  
        } else {
         
            $('#ward_member').empty();
          
        }
    });



    jQuery('#awc-select').change(function() {
        var awc_id = $(this).val();        
        if (awc_id) {
            jQuery.ajax({
                url: '/get_awc_worker_in_awc/' + awc_id, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {                 
                   jQuery('#awc-worker-select').empty();
                   
                    jQuery('#awc-worker-select').append('<option value="">Select AWC worker</option>');                            
                    response.forEach(function(awc_worker) { 
                        jQuery('#awc-worker-select').append('<option value="' + awc_worker.id + '">' + awc_worker.awc_worker_name + '</option>');
                    });
                 
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching awc worker details: " + error);
                }
            });

         
            
                  
        } else {
         
            $('#ward_member').empty();
          
        }
    });



    jQuery.ajax({
    url: '/get_diagnosis',
    type: 'GET',
    dataType: 'json',
    success: function (response) {
        const $select = jQuery('#diagnosis-select');

        if ($select.length) {
            // Clear existing options
            $select[0].tomselect.clearOptions();
            
            response.forEach(function (data) {
                $select[0].tomselect.addOption({ value: data.id, text: data.diagnosis });
            });
        } else {
            console.error('Diagnosis select element not found.');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching diagnosis:', error);
    }
});



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