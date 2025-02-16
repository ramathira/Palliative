@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Sparshamayi</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Sections
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-3 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        Profile
                    </x-base.button>
                </div>
            </div>
           <x-base.preview>
                <div class="text-center">
                     @if (session('notification'))
                        <!-- BEGIN: Notification Content -->
                        <x-base.notification
                            class="flex flex-col sm:flex-row"
                            id="basic-non-sticky-notification-content"
                        >
                            <div class="font-medium text-success">
                             Data Saved Succefully
                            </div>

                           
                           
                        </x-base.notification>
                        <!-- END: Notification Content -->                      
                   @endif
                    
                </div>
            </x-base.preview>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="relative col-span-12 xl:col-span-3">
                    <div class="sticky top-[104px]">
                        <div class="box box--stacked flex flex-col px-5 pb-6 pt-5">
                            <a
                               href="{{ route('patient_blue_form', ['id' => $patient->id]) }}"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => is_null(request()->query('page')),
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="AppWindow"
                                />
                               General Condtions
                            </a>
                            <a
                                href="{{ route('patient_blue_form', ['id' => $patient->id]) }}?page=detail_exam"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'detail_exam',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="MailCheck"
                                />
                               Detailed Examination
                            </a>
                            <a
                                href="{{ route('patient_blue_form', ['id' => $patient->id]) }}?page=other_conditions"
                                @class([
                                    'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                    'active' => request()->query('page') === 'other_conditions',
                                ])
                            >
                                <x-base.lucide
                                    class="mr-3 h-4 w-4 stroke-[1.3]"
                                    icon="KeyRound"
                                />
                                Other Conditions
                            </a>

                            <a
                            href="{{ route('patient_blue_form', ['id' => $patient->id]) }}?page=medication"
                            @class([
                                'flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary',
                                'active' => request()->query('page') === 'medication',
                            ])
                        >
                            <x-base.lucide
                                class="mr-3 h-4 w-4 stroke-[1.3]"
                                icon="PackageCheck"
                            />
                            Medication 
                        </a>
                         
                          
                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex flex-col gap-y-7 xl:col-span-9">
                    <div class="box box--stacked flex flex-col p-1.5">
                        <div class="relative h-60 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                            <div @class([
                                'w-full h-full relative overflow-hidden',
                                "before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem]",
                                "after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]",
                            ])></div>
                            <div class="absolute inset-x-0 top-0 mx-auto mt-36 h-32 w-32">
                                <div
                                    class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                    @if($patient['gender']==1)
                                    <img src="{{ Vite::asset('resources/images/users/grandpa.png') }}" alt="Grandpa">                          
                                    @elseif($patient['gender']==2)
                                    <img src="{{ Vite::asset('resources/images/users/grandma.png') }}" alt="Grandma">  
                                    @endif
                                </div>
                                <div
                                    class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    @if (is_null(request()->query('page')))
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Profile Info
                            </div>
                            @if (session('error'))
                                <x-base.alert variant="danger">
                                    {{ session('error') }}
                                </x-base.alert>
                            @endif

                            @if ($errors->any())
                                <x-base.alert variant="danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </x-base.alert>
                            @endif
                            {{-- <x-base.preview>
                                <div class="text-center">
                                    <!-- BEGIN: Notification Content -->
                                    <x-base.notification
                                        class="flex flex-col sm:flex-row"
                                        id="basic-non-sticky-notification-content"
                                    >
                                        <div class="font-medium">
                                            Yay! Updates Published!
                                        </div>
                                        <a
                                            class="mt-1 font-medium text-primary dark:text-slate-400 sm:ml-40 sm:mt-0"
                                            href=""
                                        >
                                            Review Changes
                                        </a>
                                    </x-base.notification>
                                    <!-- END: Notification Content -->
                                    <!-- BEGIN: Notification Toggle -->
                                    <x-base.button
                                        class="mr-1"
                                        id="basic-non-sticky-notification-toggle"
                                        variant="primary"
                                    >
                                        Show Non Sticky Notification
                                    </x-base.button>
                                    <x-base.button
                                        class="mt-2 sm:mt-0"
                                        id="basic-sticky-notification-toggle"
                                        variant="primary"
                                    >
                                        Show Sticky Notification
                                    </x-base.button>
                                    <!-- END: Notification Toggle -->
                                </div>
                            </x-base.preview> --}}
                            <div>
                                <form method="POST" action="{{ route('patient.blue_form_general_save') }}">
                                @csrf
                                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">General Condition of Patient</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    രോഗിയുടെ പൊതു അവസ്ഥാ 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row  [&.has-error_.form-control]:border-danger">
                                                <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                                placeholder="Present Health Condition"
                                                name="present_condition"
                                                value="{{ old('present_condition') }}"
                                                />                                   
                                            </div>       
                                            @error('present_condition')
                                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                            @enderror                        
                                        </div>
                                    </div>                           
                                    @if($patient_difficulties)
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Present Health Problems</div>
                                                    
                                                    </div>
                                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        രോഗിയുടെ ഇപ്പോഴത്തെ ശാരീരിക ബുദ്ധിമുട്ടുകൾ 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full">
                                                <div class="overflow-x-auto w-full">
                                                    <x-base.table class="min-w-full table-fixed">
                                                        <x-base.table.thead>
                                                            <x-base.table.tr>
                                                                <x-base.table.td
                                                                    class="bg-slate-50 flex items-center break-words max-w-[200px]"
                                                                >
                                                                ബുദ്ധിമുട്ട് (Difficulty)
                                                                </x-base.table.td>
                                                                <x-base.table.td
                                                                    class="bg-slate-50"
                                                                >
                                                                കാലയളവ് (Duration)
                                                                </x-base.table.td>
                                                                
                                                                <x-base.table.td
                                                                class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                            >
                                                            entered by
                                                            </x-base.table.td> 
                                                            <x-base.table.td
                                                            class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                            >
                                                            entered on
                                                            </x-base.table.td>                                                      
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody>
                                                            @foreach ($patient_difficulties as $patient_difficulty)
                                                            <x-base.table.tr class="[&_td]:last:border-b-0">
                                                                <x-base.table.td
                                                                    class=""
                                                                >
                                                                    <div class="flex items-center break-words max-w-[200px]">
                                                                    
                                                                        {{ $patient_difficulty->physical_difficulty }}
                                                                    </div>
                                                                </x-base.table.td>
                                                                <x-base.table.td
                                                                    class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                                >
                                                                    <div class="flex items-center whitespace-nowrap">
                                                                    
                                                                        {{ $patient_difficulty->duration }} 
                                                                        {{ $patient_difficulty->period_value }} 
                                                                    
                                                                    </div>
                                                                </x-base.table.td>
                                                            
                                                                <x-base.table.td
                                                                    class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                                >
                                                                    <div class="whitespace-nowrap">
                                                                        {{ $patient_difficulty->name }} 
                                                                    </div>
                                                                </x-base.table.td>
                                                                <x-base.table.td
                                                                    class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                                >
                                                                    <div class="whitespace-nowrap">
                                                                        {{ $patient_difficulty->formatted_date}} 
                                                                    </div>
                                                                </x-base.table.td>
                                                            </x-base.table.tr>
                                                        @endforeach
                                                        
                                                            
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                </div>
                                                                        
                                            </div>
                                        </div>
                                    @endif                       
                                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Any Other Difficulty </div>                                        
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    രോഗിയുടെ ഇപ്പോഴത്തെ ശാരീരിക ബുദ്ധിമുട്ടുകൾ 
                                                </div>                                   
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">                             
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
                                                                        </select>  
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="flex flex-wrap items-center gap-2">
                                                        <x-base.button class="w-full border-primary/50  md:w-auto"
                                                            variant="primary" id="addRowButton" type="button" >   + </x-base.button>
                                                         
                                                        </div>    
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    (രോഗി പറയുന്ന / കൂട്ടിരിപ്പുകാർ പറയുന്ന ശാരീരികവും മാനസികവുമായ ബുദ്ധിമുട്ടുകൾ അതിന്റെ കാലയളവും കൂടി വ്യക്തമാക്കുക )
                                                </div>
                                            </div>                                                                                            
                                        </div>
                                    </div>
                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Feeding Method</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ഭക്ഷണ രീതി 
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
                                                            value="1"
                                                            name="feeding_method" 
                                                            id="feeding_switch_1"
                                                            
                                                        />
                                                        <x-base.form-check.label for="feeding_switch_1">
                                                            Oral
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-2"
                                                            type="radio"
                                                            value="2"
                                                            name="feeding_method"
                                                            id="feeding_switch_2"
                                                        />
                                                        <x-base.form-check.label for="feeding_switch_2">
                                                            Ryles Tube
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                @error('feeding_method')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Sleeping</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ഉറക്കം
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input                                             
                                                            type="radio"
                                                            name="sleep"
                                                            value="1"
                                                           id="sleep_switch_1"
                                                        />
                                                        <x-base.form-check.label for="sleep_switch_1">
                                                            Normal
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                         
                                                            type="radio"
                                                            name="sleep"
                                                            value="2"
                                                            id="sleep_switch_2"
                                                        />
                                                        <x-base.form-check.label for="sleep_switch_2">
                                                            Reduced Sleep
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Bowel Habits</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    മലവിസർജനം 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                           
                                                            type="radio"
                                                            value="1"
                                                            name="bowel"
                                                            id="bowel_switch_1"
                                                        />
                                                        <x-base.form-check.label for="bowel_switch_1">
                                                            Normal
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                       
                                                        type="radio"
                                                        value="2"
                                                        name="bowel"
                                                        id="bowel_switch_2"
                                                    />
                                                    <x-base.form-check.label for="bowel_switch_2">
                                                        Incontinence
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                            class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                            <x-base.form-check>
                                                <x-base.form-check.input
                                                   
                                                    type="radio"
                                                    value="3"
                                                    name="bowel"
                                                     id="bowel_switch_3"
                                                />
                                                <x-base.form-check.label for="bowel_switch_3">
                                                    Loose Stool
                                                </x-base.form-check.label>
                                            </x-base.form-check>
                                        </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                           
                                                            type="radio"
                                                            value="4"
                                                            name="bowel"
                                                              id="bowel_switch_4"
                                                        />
                                                        <x-base.form-check.label for="bowel_switch_4">
                                                            Constipation
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Colostomy</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    കൊളോസ്റ്റമി 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="colostomy_switch_1"
                                                            type="radio"
                                                            value="1"
                                                            name="colostomy"
                                                        />
                                                        <x-base.form-check.label for="colostomy_switch_1">
                                                            Present
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                               id="colostomy_switch_2"
                                                            type="radio"
                                                            value="2"
                                                            name="colostomy"
                                                        />
                                                        <x-base.form-check.label for="colostomy_switch_2">
                                                            Absent
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                </div>


                <div
                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                    <div class="text-left">
                        <div class="flex items-center">
                            <div class="font-medium">Bladder Habits</div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                            മൂത്രവിസർജനം  
                        </div>
                    </div>
                </div>
                <div class="mt-3 w-full flex-1 xl:mt-0">
                    <div class="flex flex-col items-center md:flex-row">
                        <div
                            class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                            <x-base.form-check>
                                <x-base.form-check.input                               
                                    type="radio"
                                    value="1"
                                    name="bladder_habit"
                                     id="bladded_switch_1"
                                />
                                <x-base.form-check.label for="bladded_switch_1">
                                    Normal
                                </x-base.form-check.label>
                            </x-base.form-check>
                        </div>
                        <div
                            class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                            <x-base.form-check>
                                <x-base.form-check.input
                                 
                                    type="radio"
                                    value="2"
                                    name="bladder_habit"
                                     id="bladded_switch_2"
                                />
                                <x-base.form-check.label for="bladded_switch_2">
                                    on CBD
                                </x-base.form-check.label>
                            </x-base.form-check>
                        </div>                      
                    </div>
                </div>
            </div>
           </div>
            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                <x-base.button
                    class="w-full border-primary/50 px-4 md:w-auto"
                    variant="outline-primary"
                >
                    Save Changes
                </x-base.button>
            </div>
        </form>
                    </div>
                @endif
                    @if (request()->query('page') === 'detail_exam')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Detailed Examination
                            </div>
                            @if (session('error'))
                                <x-base.alert variant="danger">
                                    {{ session('error') }}
                                </x-base.alert>
                            @endif
                            @if ($errors->any())
                                <x-base.alert variant="danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </x-base.alert>
                            @endif
                            <div>
                                <div class="text-slate-500">
                                   Write down after detailed examination
                                    <span class="font-medium">
                                        രോഗിയെ വിശദമായി പരിശോധിച്ചു എഴുതുക 
                                    </span>
                                    .
                                </div>
                                <form method="POST" action="{{ route('patient.blue_form_detail_info_save') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                    <div
                                        class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Systolic BP</div>
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
                                            <x-base.form-input
                                                type="number"
                                                placeholder="Systolic BP"
                                                name="systolic_bp"
                                                class="numbers-only"
                                                min="20"
                                                max="300" 
                                                step="1"  
                                                required
                                                
                                            />
                                        </div>
                                    </div>
                                    <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Diastolic BP</div>
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
                                            <x-base.form-input
                                                type="number"
                                                placeholder="Diastolic BP"
                                                name="diastolic_bp"
                                                class="numbers-only"
                                                min="20"
                                                max="300" 
                                                step="1" 
                                                required 

                                            />
                                        </div>
                                    </div>
                                    <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Pulse Rate</div>
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
                                            <x-base.form-input
                                                type="number"
                                                placeholder="Pulse Rate"
                                                name="pulse_rate"
                                                 class="numbers-only"
                                                 min="20"
                                                 max="300" 
                                                 step="1"  
                                                 required
                                            />
                                        </div>
                                    </div>
                                    <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Oral Hygiene</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    വായും പല്ലുകളും പതിവായി വൃത്തിയാക്കുന്നുണ്ടോ 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="teeth_1"
                                                            type="radio"
                                                            value="1"
                                                            name="oral_hygiene"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="teeth_1">
                                                            Yes
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                        id="teeth_2"
                                                        type="radio"
                                                        value="2"
                                                        name="oral_hygiene"
                                                        required
                                                        />
                                                        <x-base.form-check.label for="teeth_2">
                                                            No
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Skin Care</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ചർമ സംരക്ഷണം 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input                                      
                                                            id="skin_1"
                                                            type="radio"
                                                            value="1"
                                                            name="skin_care"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="skin_1">
                                                            Yes
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                                id="skin_2"
                                                                type="radio"
                                                                value="2"
                                                                name="skin_care"
                                                                required
                                                        />
                                                        <x-base.form-check.label for="skin_2">
                                                            No
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Skin Integrity</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ചർമ സംരക്ഷണം 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="skin_integrity_1"
                                                            type="radio"
                                                            value="1"
                                                            name="skin_integrity"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="skin_integrity_1">
                                                            Yes
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                        id="skin_integrity_2"
                                                        type="radio"
                                                        value="2"
                                                        name="skin_integrity"
                                                        required
                                                        />
                                                        <x-base.form-check.label for="skin_integrity_2">
                                                            No
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Pressure Sore</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ചർമ സംരക്ഷണം 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="pressure_sore_1"
                                                            type="radio"
                                                            value="1"
                                                            name="pressure_sore"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="pressure_sore_1">
                                                            Yes
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="pressure_sore_2"
                                                            type="radio"
                                                            value="2"
                                                            name="pressure_sore"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="pressure_sore_2">
                                                            No
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
           

                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Private  part Hygiene</div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    മൂത്ര വിസർജനം - മല വിസർജനം എന്നിവക്ക് ശേഷം ഈർപ്പം നില്കാതെ ആ ഭാഗങ്ങൾ സൂക്ഷിക്കുന്നുണ്ടോ ?
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="private_hygiene-1"
                                                            type="radio"
                                                            value="1"
                                                            name="private_hygiene"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="private_hygiene-1">
                                                            Yes
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                                <div
                                                    class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <x-base.form-check>
                                                        <x-base.form-check.input
                                                            id="private_hygiene-2"
                                                            type="radio"
                                                            value="2"
                                                            name="private_hygiene"
                                                            required
                                                        />
                                                        <x-base.form-check.label for="private_hygiene-2">
                                                            No
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>              
                                            </div>
                                        </div>
                                    </div>              
                                </div>
                                <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                    <x-base.button
                                        class="w-full border-primary/50 px-4 md:w-auto"
                                        variant="outline-primary"
                                    >
                                        Save Changes
                                    </x-base.button>
                                </div>
                            </form>
                        </div>
                    @endif
                    @if (request()->query('page') === 'other_conditions')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Other Conditions
                            </div>
                            @if (session('error'))
                            <x-base.alert variant="danger">
                                {{ session('error') }}
                            </x-base.alert>
                        @endif
                        @if ($errors->any())
                            <x-base.alert variant="danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </x-base.alert>
                        @endif
                            <div>
                                <form method="POST" action="{{ route('patient.blue_form_other_detail_save') }}">
                                    @csrf
                                        <input type="hidden" value="{{ $patient->id }}" name="patient_id">
                                     
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Any Other Conditions</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                മറ്റു പ്രതേകിച്ചുള്ള കാര്യങ്ങൾ 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                        
                                                <x-base.tom-select
                                                    class="w-full"
                                                    data-placeholder="Select"
                                                      id="disease-condition-select"
                                                    name="disease_condition[]"
                                                    multiple
                                                >
                                                @foreach($disease_conditions as $dis) 
                                                    <option value="{{ $dis->id }}">{{ $dis->disease_condition }}</option>
                                                @endforeach
                                                </x-base.tom-select>                                         
                                         </div>                               
                                    </div>
                                </div>

                                <div
                                class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Does the patient or any family member has any mental health concern?</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                രോഗിക്കോ കുടുംബാംഗങ്ങൾക്കോ എന്തെങ്കിലും മാനസിക ബുദ്ധിമുട്ടുകൾ ഉണ്ടോ  ?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="mental_checkbox_1"
                                                        type="radio"
                                                        value="1"
                                                        name="mental_constraint"
                                                    />
                                                    <x-base.form-check.label for="mental_checkbox_1">
                                                        Yes
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="mental_checkbox_2"
                                                        type="radio"
                                                        value="2"
                                                          name="mental_constraint"
                                                    />
                                                    <x-base.form-check.label for="mental_checkbox_2">
                                                        No
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div id="mental_constrain_box" style="display:none">
                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">What are they?</div>
                                                    
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ഉണ്ടെങ്കിൽ എന്താണ് ? 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <x-base.form-check.input
                                                class="checkbox-mental"
                                                type="checkbox"
                                                value="1"
                                                name="low_mood"
                                                />Low mood
                                                <x-base.form-check.input
                                                class="checkbox-mental"
                                                type="checkbox"
                                                value="1"
                                                name="depression"
                                                />Symptoms/ Signs of Depression
                                                <x-base.form-check.input
                                                class="checkbox-mental"
                                                type="checkbox"
                                                name="anxiety"
                                                value="1"
                                                />Anxiety
                                                <x-base.form-check.input
                                                class="checkbox-mental"
                                                type="checkbox"
                                                name="phychiatric_disorder"
                                                value="1"
                                                />Psychiatric Disorder on treatment 
                                                <x-base.form-check.input
                                                class="checkbox-mental"
                                                type="checkbox"
                                                name="memory_loss"
                                                value="1"
                                                />Loss of       memory                                                                                
                                            </div>                               
                                        </div>
                                    </div>                                 

                                    <div
                                        class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Mental Constraints of Patient and Family</div>
                                                    
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    രോഗിയുടെയും കുടുംബത്തിൻറെയും മാനസിക പ്രശ്നങ്ങൾ ചോദിച്ചു എഴുതുക 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <x-base.form-textarea
                                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                                placeholder="Mental  Constraints"
                                                name="mental_constraint_details"
                                                id="mental_constraint_details"
                                                />
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Does the patient or any family member has any social concern?</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                രോഗിക്കോ കുടുംബാംഗങ്ങൾക്കോ എന്തെങ്കിലും സാമൂഹിക പ്രശനങ്ങൾ ഉണ്ടോ   ?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="social_constraint_1"
                                                        type="radio"
                                                        value="1"
                                                        name="social_constraint"
                                                    />
                                                    <x-base.form-check.label for="social_constraint_1">
                                                        Yes
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                            <div
                                                class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                <x-base.form-check>
                                                    <x-base.form-check.input
                                                        id="social_constraint_2"
                                                        type="radio"
                                                        value="2"
                                                         name="social_constraint"
                                                    />
                                                    <x-base.form-check.label for="social_constraint_2">
                                                        No
                                                    </x-base.form-check.label>
                                                </x-base.form-check>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div id="social_constrain_box" style="display:none">
                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">What are they?</div>
                                                    
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    ഉണ്ടെങ്കിൽ എന്താണ് ? 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <div class="flex flex-col items-center md:flex-row">
                                                <x-base.form-check.input
                                               
                                                type="checkbox"
                                                value="1"
                                                class="checkbox_social"
                                                name="social_exclusion"
                                            />Social Exclusion

                                            <x-base.form-check.input                                            
                                            type="checkbox"
                                            value="1"
                                            class="checkbox_social"
                                            name="family_not_Care"
                                                />Family members not taking care

                                                <x-base.form-check.input                                              
                                                type="checkbox"
                                                value="1"
                                                class="checkbox_social"
                                                name="no_support_sytem"
                                            />No Social Support System
                                        
                                                                                            
                                                                                
                                            </div>                               
                                        </div>
                                    </div>
                                    <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Social Constraints of Patient and Family</div>
                                                    <div
                                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    രോഗിയുടെയും കുടുംബത്തിൻറെയും സാമൂഹിക പ്രശ്നങ്ങൾ ചോദിച്ചു എഴുതുക 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-full flex-1 xl:mt-0">
                                            <x-base.form-textarea
                                            class="-mb-1.5 resize-none rounded-xl pr-16"
                                            placeholder="Social Constraints"
                                            name="social_constraints_detail"
                                            id="social_constraints_detail"
                                            />
                                        </div>
                                    </div>
                                </div>
                                

                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Details of rehabilitation services available for patient
                                                </div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                രോഗിക്കു ലഭ്യമായ പുനഃരധിവാസ പ്രവർത്തനങ്ങളുടെ വിശദവിവരം  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-textarea
                                        class="-mb-1.5 resize-none rounded-xl pr-16"
                                        placeholder="Rehabilitation services available for patient"
                                        name="rehabilitation_service"
                                        />  
                                      
                                    </div>
                                </div>
                                <div
                                    class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Procedures/ things to be done in Home Care
                                                </div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                രോഗിക്കു ഹോം കെയർ ഇൽ നൽകേണ്ട കാര്യങ്ങൾ 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-textarea
                                        class="-mb-1.5 resize-none rounded-xl pr-16"
                                        placeholder=" Procedures/ things to be done in Home Care"
                                        name="thing_from_homecare"
                                        />                                     
                                    </div>
                                </div>
                               

                              
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    </form>
                    @endif
                    @if (request()->query('page') === 'medication')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Drugs Details    
                                <x-base.alert
                                class="flex items-center px-4 mb-2 border-warning/30 bg-warning/5"
                                variant="outline-warning"
                            >
                                <div>
                                    <x-base.lucide
                                        class="mr-3 h-4 w-4 stroke-[1.3] 2xl:mr-2"
                                        icon="Lightbulb"
                                    />
                                </div>
                                <div class="mr-5 leading-relaxed">
                                    Check the patient's current medications and mark those that are not being taken regularly.
                                    <x-base.alert.dismiss-button class="inset-y-0 btn-close">
                                        <x-base.lucide
                                            class="w-4 h-4"
                                            icon="X"
                                        />
                                    </x-base.alert.dismiss-button>
                                </div>
                            </x-base.alert>                            
                            </div>
                            <div
                            class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                           
                            <div class="flex-1 w-full mt-3 xl:mt-0">
                                <div class="overflow-x-auto">
                                    <x-base.table class="border">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th
                                                    class="bg-slate-50 !pr-2 dark:bg-darkmode-800"></x-base.table.th>
                                                <x-base.table.th
                                                    class="bg-slate-50 dark:bg-darkmode-800"></x-base.table.th>                                               
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                    Dose
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                  Frequency
                                                </x-base.table.th>
                                                <x-base.table.th
                                                class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                Period
                                                </x-base.table.th>                                               
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                                Route
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                >
                                               Status
                                                </x-base.table.th>
                                                <x-base.table.th
                                                    class="bg-slate-50 !px-2 dark:bg-darkmode-800"></x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody> <?php $i=1; ?>
                                            @foreach($patient_medications as $medication)
                                                <x-base.table.tr>
                                                    <x-base.table.td class="!pr-2">{{ $i; }}</x-base.table.td>
                                                    <x-base.table.td class="whitespace-nowrap">
                                                        {{ $medication->medication_type->short_code}} {{  $medication->medicine_details->medicine;   }}
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!px-2">
                                                        {{ $medication->dose;   }}  
                                                         <span class="-mt-px rounded-md border border-primary/10 bg-primary/10 text-primary font-medium text-xs"> {{ $medication->unit_dose;   }}</span>
                                                 
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!px-2">
                                                        {{ $medication->frequency;   }} {{ $medication->period;   }}
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!px-2">
                                                        {{ $medication->duration;   }} {{ $medication->timespan;   }}
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!pl-4 text-slate-500">
                                                        {{ $medication->medicine_mode->medicine_mode;   }} 
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!pl-4 text-slate-500">                                                                                                
                                                        <x-base.form-switch.input type="checkbox"   data-tw-toggle="modal"
                                                            data-tw-target="#warning-modal-preview"
                                                            href="#"
                                                            as="a"
                                                            variant="primary"
                                                            data-medication-id="{{ $medication->id }}" 
                                                            checked
                                                            id="check_switch-{{ $medication->id }}"
                                                            />                                                    
                                                    </x-base.table.td>
                                                    <x-base.table.td class="!pl-4 text-slate-500">
                                                       
                                                            <a href="#"                                                                                                                       
                                                                    data-medication-id="{{ $medication->id }}"                                                                    
                                                                    id="delete-med-{{ $medication->id }}">
                                                                <x-base.lucide
                                                                    class="w-4 h-4"
                                                                    icon="Trash2"
                                                                   
                                                                />
                                                            </a>
                                                       
                                                    </x-base.table.td>
                                                    <?php $i++;?>
                                                </x-base.table.tr>                               
                                            @endforeach                                                                                     
                                        </x-base.table.tbody>
                                    </x-base.table>

                                    <x-base.table class="border" id="medication-table">
                                        <x-base.table.thead>
                                            <x-base.table.tr>
                                                <x-base.table.th class="bg-slate-50 !pr-2 dark:bg-darkmode-800">Medicine</x-base.table.th>
                                                <x-base.table.th class="bg-slate-50 dark:bg-darkmode-800">Type</x-base.table.th>                                               
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Dose
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Unit
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Frequency
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Period
                                                </x-base.table.th>   
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Duration
                                                </x-base.table.th>
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Timespan
                                                </x-base.table.th>                                            
                                                <x-base.table.th class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800">
                                                    Route
                                                </x-base.table.th>
                                            </x-base.table.tr>
                                        </x-base.table.thead>
                                        <x-base.table.tbody id="medicine_table">                                              
                                            <x-base.table.tr class="medication-row">                                                  
                                                <x-base.table.td class="whitespace-nowrap">
                                                    <x-base.form-select class="medicine_name" name="medicine_name">
                                                        <option value="">Select</option>                 
                                                    </x-base.form-select>                                                    
                                                </x-base.table.td>
                                                <x-base.table.td class="whitespace-nowrap">                                                  
                                                    <x-base.form-select class="medicine_type" name="medicine_type">
                                                        <option value="">Select</option>               
                                                    </x-base.form-select> 
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-input
                                                        id="modal-form-1"
                                                        type="number"
                                                        placeholder="Dose"
                                                        name="med_dose"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-select id="dose_unit" name="dose_unit">
                                                        <option value="">Select</option> 
                                                        <option value="1">mg</option> 
                                                        <option value="2">ml</option> 
                                                        <option value="3">gm</option> 
                                                    </x-base.form-select>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-select id="med_frequency" name="med_frequency">
                                                        <option value="">Select</option> 
                                                        <option value="1">Once</option> 
                                                        <option value="2">Twice</option> 
                                                        <option value="3">Thrice</option> 
                                                        <option value="4">Four times</option> 
                                                        <option value="5">Five times</option> 
                                                        <option value="6">Six times</option> 
                                                        <option value="7">Alternate Days</option> 
                                                    </x-base.form-select>
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-select id="med_period" name="med_period">
                                                        <option value="">Select</option> 
                                                        <option value="1">Daily</option> 
                                                        <option value="2">Weekly</option> 
                                                        <option value="3">Monthly</option> 
                                                    </x-base.form-select>   
                                                </x-base.table.td>
                                                <x-base.table.td class="!pl-4 text-slate-500">
                                                    <x-base.form-input
                                                        id="modal-form-1"
                                                        type="text"
                                                        placeholder="Duration"
                                                        name="duration"
                                                    />
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-select id="timespan" name="timespan">
                                                        <option value="">Select</option> 
                                                        <option value="1">Days</option> 
                                                        <option value="2">Weeks</option> 
                                                        <option value="3">Months</option> 
                                                        <option value="4">Years</option>                 
                                                    </x-base.form-select> 
                                                </x-base.table.td>
                                                <x-base.table.td class="!px-2">
                                                    <x-base.form-select class="medicine_mode" name="medicine_mode">   
                                                        <option value="">Select</option>                                 
                                                    </x-base.form-select>   
                                                </x-base.table.td>
                                            </x-base.table.tr>                                       
                                        </x-base.table.tbody>
                                    </x-base.table>
                                </div>
                                <x-base.button
                                    class="w-full mt-4 border-dashed"
                                    variant="outline-primary"
                                    id="add-new-button"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Plus"
                                    />
                                    Add New
                                </x-base.button>
                            </div>
                        </div>   
                          
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                    id="save-medications"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>


                        <!-- Modal Content  -->
                        <x-base.dialog id="warning-modal-preview">
                            <x-base.dialog.panel>
                                <div class="p-5 text-center">          
                                    <div class="mt-2 text-slate-500">
                                        Are you sure you want to make this medication inactive?
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <x-base.button class="w-24" data-tw-dismiss="modal" type="button" variant="primary" onclick="submitForm()">
                                        Inactivate
                                    </x-base.button>
                                    <x-base.button class="w-24" data-tw-dismiss="modal" type="button" variant="secondary" id="inactive_cancel">
                                        Cancel
                                    </x-base.button>
                                </div>
                            </x-base.dialog.panel>
                        </x-base.dialog>
                        <!-- Modal Content  -->
                        <form id="submit-form" method="POST" action="{{ route('updateMedicationStatus') }}">
                            @csrf
                            <input type="hidden" id="medication_id" name="medication_id">
                        </form>


                        
                        <form id="submit-form" method="POST" action="{{ route('deleteMedication') }}">
                            @csrf
                            <input type="hidden" id="medication_id" name="medication_id">
                        </form>




                        <div id="delete-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50 hidden">
                            <x-base.dialog.panel>
                                <div class="p-5 text-center">          
                                    <div class="mt-2 text-slate-500">
                                        Are you sure you want to delete this medicine details?
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button id="cancel-delete" class="px-4 py-2 bg-gray-300 text-gray-700 rounded mr-4">Cancel</button>
                                    <button id="confirm-delete" class="px-4 py-2 bg-red-600 text-white rounded">Delete</button>
                                </div>
                            </x-base.dialog.panel>
                        </div>



                    @endif
                    @if (request()->query('page') === 'two-factor-authentication')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Two-Factor Authentication (2FA)
                                <div
                                    class="ml-3 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                    <span class="-mt-px">Enabled</span>
                                </div>
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Enhance your account security by enabling Two-Factor
                                    Authentication in the settings.
                                </div>
                                <div
                                    class="mt-2 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-64">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">Account Password</div>
                                                <div
                                                    class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                    Required
                                                </div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                Enter your current password to verify your identity.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-input
                                            type="text"
                                            placeholder="P**********d"
                                        />
                                        <x-base.form-help>
                                            This is the password you use to log in to your account.
                                        </x-base.form-help>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'device-history')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Device History
                            </div>
                            <div>
                                <div class="text-slate-500">
                                    Access and control your currently connected devices.
                                </div>
                                <div class="mt-5 rounded-lg border border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Browser
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Device
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Location
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="whitespace-nowrap border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Recent Activity
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                @foreach ($recentDevices as $fakerKey => $faker)
                                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <div class="image-fit zoom-in h-4 w-4">
                                                                    <img
                                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                        src="{{ Vite::asset($faker['browser']['image']) }}"
                                                                        alt="Tailwise - Admin Dashboard Template"
                                                                    >
                                                                </div>
                                                                <div class="ml-3.5">
                                                                    {{ $faker['browser']['name'] }} on
                                                                    {{ $faker['operatingSystem'] }}
                                                                </div>
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="flex items-center whitespace-nowrap">
                                                                <x-base.lucide
                                                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                                                    icon="Smartphone"
                                                                />
                                                                {{ $faker['device'] }}
                                                                @if (!$fakerKey)
                                                                    <div
                                                                        class="ml-3 flex items-center rounded-md border border-primary/10 bg-primary/10 px-1.5 py-px text-xs font-medium text-primary">
                                                                        <span class="-mt-px">Current</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['location'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                        >
                                                            <div class="whitespace-nowrap">
                                                                {{ $faker['activity'] }}
                                                            </div>
                                                        </x-base.table.td>
                                                    </x-base.table.tr>
                                                @endforeach
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'notification-settings')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Notification Settings
                            </div>
                            <div>
                                <x-base.alert
                                    class="mb-2 flex items-center border-primary/20 bg-primary/5 px-4"
                                    variant="outline-primary"
                                >
                                    <div>
                                        <x-base.lucide
                                            class="mr-3 h-4 w-4 stroke-[1.3] md:mr-2"
                                            icon="AlertCircle"
                                        />
                                    </div>
                                    <div class="mr-5 leading-relaxed">
                                        We'd like to request your browser's permission to
                                        display notifications.
                                        <a
                                            class="ml-1 font-medium underline decoration-warning/50 decoration-dotted underline-offset-[3px]"
                                            href=""
                                        >
                                            Request permission
                                        </a>
                                        <x-base.alert.dismiss-button class="btn-close inset-y-0">
                                            <x-base.lucide
                                                class="h-4 w-4"
                                                icon="X"
                                            />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                                <div class="mt-5 rounded-lg border border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <x-base.table>
                                            <x-base.table.thead>
                                                <x-base.table.tr>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        Type
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="MailCheck"
                                                            />
                                                            <div class="mt-1.5">Email</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="Globe"
                                                            />
                                                            <div class="mt-1.5">Browser</div>
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-lg last:rounded-tr-lg"
                                                    >
                                                        <div class="flex flex-col items-center">
                                                            <x-base.lucide
                                                                class="h-6 w-6"
                                                                icon="Smartphone"
                                                            />
                                                            <div class="mt-1.5">App</div>
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.thead>
                                            <x-base.table.tbody>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            Unusual login activity detected
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-3"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-4"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-5"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Password change request
                                                            <x-base.lucide
                                                                class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info"
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-6"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-7"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-8"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            New message received
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-9"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-10"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-11"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="whitespace-nowrap">
                                                            Account activity summary
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-12"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-13"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-14"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                                <x-base.table.tr class="[&_td]:last:border-b-0">
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="flex items-center whitespace-nowrap">
                                                            Security alert: Unrecognized device
                                                            <x-base.lucide
                                                                class="ml-1.5 h-4 w-4 stroke-[1.3] text-slate-400"
                                                                icon="Info"
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-15"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-16"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-dashed border-slate-300/70 py-4 dark:bg-darkmode-600"
                                                    >
                                                        <div class="text-center">
                                                            <x-base.form-check.input
                                                                id="checkbox-switch-17"
                                                                type="checkbox"
                                                                value=""
                                                            />
                                                        </div>
                                                    </x-base.table.td>
                                                </x-base.table.tr>
                                            </x-base.table.tbody>
                                        </x-base.table>
                                    </div>
                                </div>
                                <div
                                    class="mt-3 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    When would you prefer to receive notifications?
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <x-base.form-select>
                                            <option value="Immediately">Immediately</option>
                                            <option value="In the morning">In the morning</option>
                                            <option value="At noon">At noon</option>
                                            <option value="In the afternoon">
                                                In the afternoon
                                            </option>
                                            <option value="In the evening">In the evening</option>
                                            <option value="At night">At night</option>
                                            <option value="Once a day">Once a day</option>
                                            <option value="Twice a day">Twice a day</option>
                                            <option value="Custom schedule">Custom schedule</option>
                                            <option value="Don't send notifications">
                                                Don't send notifications
                                            </option>
                                        </x-base.form-select>
                                    </div>
                                </div>
                                <div
                                    class="mt-3 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-1/2">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium">
                                                    Receive a daily overview ('Daily Digest') of your
                                                    task activity.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 w-full flex-1 xl:mt-0">
                                        <div class="flex flex-col items-center md:flex-row">
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            >
                                                <option value="Every day">Every day</option>
                                                <option value="Once a day">Once a day</option>
                                                <option value="Twice a day">Twice a day</option>
                                                <option value="No daily overview (disable Daily Digest)">
                                                    No daily overview (disable Daily Digest)
                                                </option>
                                            </x-base.form-select>
                                            <x-base.form-select
                                                class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                            >
                                                <option value="at 8:00 AM">at 8:00 AM</option>
                                                <option value="at 12:00 PM">at 12:00 PM</option>
                                                <option value="at 4:00 PM">at 4:00 PM</option>
                                                <option value="at 8:00 PM">at 8:00 PM</option>
                                            </x-base.form-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-7 text-slate-500">
                                    To reduce interruptions, email notifications are bundled and
                                    delivered when you're not actively using your device.
                                </div>
                            </div>
                            <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                <x-base.button
                                    class="w-full border-primary/50 px-4 md:w-auto"
                                    variant="outline-primary"
                                >
                                    Save Changes
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'connected-services')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Connected Services
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Professional network and career profile
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-71"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Dribbble"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Design portfolio and creative work
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-8"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Social connections and personal updates
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-9"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Visual stories and photos
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-10"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Microblogging and real-time updates
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.form-switch.input
                                                id="checkbox-switch-11"
                                                type="checkbox"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'social-media-links')
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Social Media Links
                            </div>
                            <div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Linkedin"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Linked In</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Dribbble</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Facebook"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Facebook</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                <a
                                                    class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href=""
                                                >
                                                    www.facebook.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Instagram"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Instagram</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                Not connected
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center pt-2.5 first:mt-0 first:pt-0 last:mb-2">
                                    <div>
                                        <div
                                            class="ml-2 flex h-10 w-10 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                            <x-base.lucide
                                                class="h-4 w-4 fill-primary/10 stroke-[1.3] text-primary"
                                                icon="Twitter"
                                            />
                                        </div>
                                    </div>
                                    <div class="ml-5 flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="flex items-center">
                                                <div class="font-medium">Twitter</div>
                                            </div>
                                            <div class="mt-1 pr-10 text-xs leading-relaxed text-slate-500">
                                                <a
                                                    class="text-xs text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                    href=""
                                                >
                                                    www.twitter.com/
                                                    {{ str_replace(' ', '', strtolower($users[0]['name'])) }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-1 sm:justify-end">
                                            <x-base.button
                                                class="border-primary/50 bg-primary/5 px-4 text-primary"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (request()->query('page') === 'account-deactivation')
                        <div class="box box--stacked flex flex-col p-5">
                            <div
                                class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                Account Deactivation
                            </div>
                            <div>
                                <div class="leading-relaxed">
                                    When you initiate the account deletion process, you'll no
                                    longer have access to Front account services, and your
                                    personal data will be permanently removed. You have a 10-day
                                    window to cancel the deletion if needed.
                                </div>
                                <x-base.form-check class="mt-5">
                                    <x-base.form-check.input
                                        id="checkbox-switch-1"
                                        type="checkbox"
                                        value=""
                                    />
                                    <x-base.form-check.label for="checkbox-switch-1">
                                        Confirm that I want to delete my account.
                                    </x-base.form-check.label>
                                </x-base.form-check>
                            </div>
                            <div
                                class="mt-6 flex flex-col-reverse gap-3 border-t border-dashed border-slate-300/70 pt-5 md:flex-row md:justify-end">
                                <x-base.button
                                    class="w-full px-4 md:w-auto"
                                    variant="outline-secondary"
                                >
                                    Learn More
                                </x-base.button>
                                <x-base.button
                                    class="w-full border-danger/50 bg-danger/5 px-4 md:w-auto"
                                    variant="outline-danger"
                                >
                                    Delete
                                </x-base.button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection
@pushOnce('scripts')
    {{-- @vite('resources/js/pages/notification.js') --}}
@endPushOnce
@push('custom-scripts')
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


<script>
$(document).ready(function () {
    // Check if the addRowButton exists before adding an event listener
    const addRowButton = document.getElementById('addRowButton');

    if (addRowButton) {
        addRowButton.addEventListener('click', function () {
            const tableBody = document.querySelector('#dynamicTable tbody');
            if (!tableBody) return; // Ensure table body exists

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="border border-slate-300 px-4 py-2">
                    <input type="text" name="difficulty[]" class="w-full border border-slate-300 px-2 py-1">
                </td>
                <td class="border border-slate-300 px-4 py-2">
                    <select name="duration[]" class="border rounded-md px-3 py-2 mr-4">
                        <option value="">Duration</option>
                        ${Array.from({ length: 11 }, (_, i) => `<option value="${i + 1}">${i + 1}</option>`).join('')}
                    </select>
                </td>
                <td class="border border-slate-300 px-4 py-2">
                    <select name="period[]" class="border rounded-md px-3 py-2 mr-4">
                        <option value="">Period</option>
                        <option value="1">days</option>
                        <option value="2">weeks</option>
                        <option value="3">months</option>
                        <option value="4">years</option>
                    </select>
                </td>
            `;
            tableBody.appendChild(newRow);
        });
    }





    $('.numbers-only').on('keypress', function (e) {
        var charCode = e.which || e.keyCode;
        if (!(charCode >= 48 && charCode <= 57) && charCode !== 8 && charCode !== 9 && charCode !== 46) {
            e.preventDefault();
        }
    });
});


$(document).ready(function() { 
    // function loadDiseaseConditions() {
    //     jQuery.ajax({
    //         url: '/get_disease_condition',
    //         type: 'GET',
    //         dataType: 'json',
    //         success: function (response) {
    //             var diagSelect = $('#disease-condition-select')[0].tomselect;
    //             if (diagSelect) {
    //                 diagSelect.clearOptions();
    //                 diagSelect.addOption({ value: '', text: 'Select' });
    //                 response.forEach(function (data) {
    //                     console.log("Adding Option:", data.id, data.disease_condition); // Debugging
    //                     diagSelect.addOption({ value: data.id, text: data.disease_condition });
    //                 });
    //             diagSelect.refreshOptions();  
    //             diagSelect.hideDropdown();       
    //             diagSelect.setValue('');  
    //             } else {
    //                 console.error("Tom Select is not initialized!");
    //             }
    //     },
    //         error: function (xhr, status, error) {
    //             console.error('Error fetching disease:', error);
    //         }
    //     });
    // }


    // if ($('#disease-condition-select').length) {
    //     loadDiseaseConditions();
    // }

    // // Load data when clicking "Other Conditions"
    // $('a[href*="page=other_conditions"]').on('click', function (e) {
    //     // setTimeout(() => {
    //     //     if ($('#disease-condition-select').length) {
    //     //         loadDiseaseConditions();
    //     //     }
    //     // }, 100);
    //     loadDiseaseConditions();
    // });





    function loadMedicines(patient_id) {
        jQuery.ajax({
            url: '/get_drugs_of_patient/${patient_id}',
            type: 'GET',
            dataType: 'json',
            success: function (response) {

                var tableBody = jQuery("x-base.table.tbody"); // Select table body
            tableBody.empty(); // Clear previous data
            
            if (response.length === 0) {
                tableBody.append('<tr><td colspan="9" class="text-center p-3">No medications found</td></tr>');
                return;
            }

            response.forEach(function (medicine, index) {
                var row = `
                    <x-base.table.tr>
                        <x-base.table.td class="!pr-2">${index + 1}.</x-base.table.td>
                        <x-base.table.td>${medicine.type || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.dose || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.frequency || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.period || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.duration || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.timespan || '-'}</x-base.table.td>
                        <x-base.table.td>${medicine.route || '-'}</x-base.table.td>
                    </x-base.table.tr>
                `;
                tableBody.append(row);
            });
          
            },
            error: function (xhr, status, error) {
                console.error('Error fetching medicine:', error);
            }
        });
    }



    $('a[href*="page=medication"]').on('click', function(e) { 
    loadMedicines(patient_id);
    });


    function getPatientIdFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('patient_id'); // Get patient_id from query string
}


});

document.addEventListener("DOMContentLoaded", function() {
    const mentalCheckbox1 = document.getElementById('mental_checkbox_1');    
    if (mentalCheckbox1) {
        mentalCheckbox1.addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('mental_constrain_box').style.display = 'block';
                jQuery('.checkbox-mental').prop('checked', false);
            }
        });
    }

    const mentalCheckbox2 = document.getElementById('mental_checkbox_2');    
    if (mentalCheckbox2) {
        mentalCheckbox2.addEventListener('change', function() {
            if (this.checked) {
                jQuery('.checkbox-mental').prop('checked', false);
                document.getElementById('mental_constrain_box').style.display = 'none';
                $('#mental_constraint_details').val('');
            }
        });
    }

    const socialCheckbox1 = document.getElementById('social_constraint_1');    
    if (socialCheckbox1) {
        socialCheckbox1.addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('social_constrain_box').style.display = 'block';
                jQuery('.checkbox-social').prop('checked', false);
            }
        });
    }

    const socialCheckbox2 = document.getElementById('social_constraint_2');    
    if (socialCheckbox2) {
        socialCheckbox2.addEventListener('change', function() {
            if (this.checked) {
                jQuery('.checkbox-social').prop('checked', false);
            document.getElementById('social_constrain_box').style.display = 'none';
            $('#social_constraints_details').val('');
            }
        });
    }
});



document.addEventListener("DOMContentLoaded", function () { 
    const checkboxes = document.querySelectorAll('[data-tw-toggle="modal"]');
    checkboxes.forEach(function (checkbox) { 
        checkbox.addEventListener('click', function (event) {
            const medicationId = event.target.getAttribute('data-medication-id');
            document.getElementById('medication_id').value = medicationId;
        });
    });
    


});

function submitForm() {
    document.getElementById('submit-form').submit();
}


document.addEventListener("DOMContentLoaded", function () {
      const cancelButton = document.querySelector('#inactive_cancel');
      
      if (cancelButton) {         
          cancelButton.addEventListener('click', function () {         
            const medicationId = document.querySelector('[data-tw-target="#warning-modal-preview"]').getAttribute('data-medication-id');
            const checkbox = document.querySelector(`#check_switch-${medicationId}`);
             
              if (checkbox) {
                  const originalChecked = checkbox.hasAttribute('checked'); 
                  if (originalChecked) {
                    checkbox.removeAttribute('checked'); 
                  } else {
                     
                      checkbox.setAttribute('checked', true); 
                  }
              } else {
                  console.log('Checkbox not found');
              }
          });
      } else {
          console.log('Cancel button not found');
      }






  
  });


  jQuery(document).ready(function() {
    const $select = jQuery('.medicine_name');   
    if ($select.length) {
  jQuery.ajax({
            url: '/get_all_medicines',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                const $select = jQuery('.medicine_name');
    
               
                if ($select.length) {
                    $select.empty().append('<option value="">Select</option>');
    
                    response.forEach(function (data) {
                        $select.append('<option value="' + data.id + '">' + data.medicine + '</option>');
                    });
                } else {
                    console.error('Medicine select element not found.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching Medicine:', error);
            }
        });


        jQuery.ajax({
            url: '/get_all_medicine_modes',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                const $select = jQuery('.medicine_mode');
    
               
                if ($select.length) {
                    $select.empty().append('<option value="">Select</option>');
    
                    response.forEach(function (data) {
                        $select.append('<option value="' + data.id + '">' + data.medicine_mode + '</option>');
                    });
                } else {
                    console.error('Medicine select element not found.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching Medicine:', error);
            }
        });

        jQuery.ajax({
            url: '/get_all_medicine_types',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                const $select = jQuery('.medicine_type');
    
               
                if ($select.length) {
                    $select.empty().append('<option value="">Select</option>');
    
                    response.forEach(function (data) {
                        $select.append('<option value="' + data.id + '">' + data.medicine_type + '</option>');
                    });
                } else {
                    console.error('Medicine select element not found.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching Medicine:', error);
            }
        });

       
    }
});


document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('add-new-button').addEventListener('click', function () {
        var tableBody = document.getElementById('medication-table');
        if (tableBody) {
            var lastRow = document.querySelector('.medication-row');

            if (lastRow) {
                var newRow = lastRow.cloneNode(true);
                var inputs = newRow.querySelectorAll('input, select');
                inputs.forEach(function (input) {
                    if (input.type !== "checkbox") {
                        input.value = '';  
                    }
                });

                tableBody.appendChild(newRow);
            } else {
                console.error('Last row not found.');
            }
        } else {
            console.error('Table body not found.');
        }
    });
});



$(document).ready(function () {
    $('#save-medications').on('click', function () {
        const saveButton = $('#save-medications');
        saveButton.prop('disabled', true);
        saveButton.text('Saving...');
        saveMedicationData();      
    });

    function saveMedicationData() {
        let medicationData = [];

        // Extract patient_id from URL
        const urlSegments = window.location.pathname.split('/');
        const patientId = urlSegments[urlSegments.indexOf('patient_blue_form') + 1];

        // Loop through each row in the table
        $('.medication-row').each(function () {
            const row = $(this);
            const rowData = {
                medicine_name: row.find('.medicine_name').val(),
                medicine_type: row.find('.medicine_type').val(),
                med_dose: row.find('input[name="med_dose"]').val(),
                dose_unit: row.find('select[name="dose_unit"]').val(),
                med_frequency: row.find('select[name="med_frequency"]').val(),
                med_period: row.find('select[name="med_period"]').val(),
                duration: row.find('input[name="duration"]').val(),
                timespan: row.find('select[name="timespan"]').val(),
                medicine_mode: row.find('.medicine_mode').val(),
                patient_id: patientId
            };

            // Only add row data if it's valid (non-empty)
            if (rowData.medicine_name && rowData.medicine_type && rowData.med_dose) {
                medicationData.push(rowData);
            }
        });

        // Send the data to the server via AJAX
        sendMedicationData(medicationData, patientId);  // Correctly pass `patientId` here
    }

    function sendMedicationData(data, patientId) {
        jQuery.ajax({
            url: '/blue_form_medicine_save',  
            type: 'POST',
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',  
                medicines: data, 
                patient_id: patientId  
            },
            success: function(response) {
                if (response.success) {
                  location.reload();       
                } else {
                    alert('Error saving data!');
                }
            },
            error: function(xhr, status, error) {
              
                alert('An error occurred while saving the medication data.');
            }
        });
    }
});








document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('[id^="delete-med-"]');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();  
            const medicationId = this.getAttribute('data-medication-id');
            const modal = document.getElementById('delete-modal');
            modal.classList.remove('hidden'); 
            this.disabled = true;
            const confirmButton = document.getElementById('confirm-delete');          
            confirmButton.onclick = function () {
                confirmButton.disabled = true;
                confirmButton.innerHTML = 'Processing...';

                fetch(`/deleteMedication`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',  
                    },
                    body: JSON.stringify({
                        medication_id: medicationId, 
                        _method: 'POST' 
                    })
                })
                .then(response => {
                    confirmButton.disabled = false;
                    button.disabled = false;
                    location.reload(); 
                    if (response.ok) {
                        modal.classList.add('hidden');                         
                    } else {
                        alert('Error deleting medication');
                    }
                })
                .catch(() => {                  
                    button.disabled = false;                  
                });
            };
        });
    });

    document.getElementById('cancel-delete').addEventListener('click', function () {
        const modal = document.getElementById('delete-modal');
        modal.classList.add('hidden');
    });
});


</script>

@if (session('notification'))
    <script>
        $(document).ready(function () {
            Toastify({
                node: $("#basic-non-sticky-notification-content")
                    .clone()
                    .removeClass("hidden")[0],
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        });
    </script>
@endif
    @endpush