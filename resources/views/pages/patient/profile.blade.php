@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Palliative Care</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="box box--stacked flex flex-col p-1.5">
                <div class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                    <div @class([
                        'w-full h-full relative overflow-hidden',
                        "before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem]",
                        "after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]",
                    ])></div>
                    <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
                        <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
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
                <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                    <div class="flex items-center justify-center text-xl font-medium">
                        {{ $patient['first_name']." ".$patient['second_name']  }}                     
                        
                        @if($patient->class)
                            @php
                                $variant = ($patient->class == 1) ? 'soft-warning' : 'soft-pending';
                                $text = ($patient->class == 1) ? 'Home Bound' : 'Bed Ridden';
                            @endphp
                        
                            <x-base.button
                                class="w-24"
                                variant="{{ $variant }}"
                                rounded
                                size="sm"
                            >
                                {{ $text }}
                            </x-base.button>
                        @endif

                    </div>
                    <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="Calendar"
                            />
                            {{ \Carbon\Carbon::parse($patient->dob)->format('d-M-Y') }}
                        </div>
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="PhoneCall"
                            />
                            <a href="">{{ $patient['phone_no'] }}</a>
                        </div>
                        <div class="flex items-center text-slate-500">
                            <x-base.lucide
                                class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                icon="CreditCard"
                            />
                            {{ $patient['aadhar'] }}
                        </div>
                    </div>
                </div>
            </div>
            <x-base.tab.group class="mt-10">
                <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                    <x-base.tab.list
                        class="box mr-auto w-full flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto"
                        variant="boxed-tabs"
                    >
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-1-tab"
                            selected="{{ is_null(request()->query('page')) }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Profile
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-2-tab"
                            selected="{{ request()->query('page') === 'family' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Family
                                <span
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70"
                                >
                                    7
                                </span>
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-3-tab"
                            selected="{{ request()->query('page') === 'achievements' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Physical Difficulties
                            </x-base.tab.button>
                        </x-base.tab>
                        {{-- <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-4-tab"
                            selected="{{ request()->query('page') === 'contacts' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Contacts
                                <span
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70"
                                >
                                    5
                                </span>
                            </x-base.tab.button>
                        </x-base.tab> --}}
                        {{-- <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-5-tab"
                            selected="{{ request()->query('page') === 'default' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Default
                            </x-base.tab.button>
                        </x-base.tab> --}}
                    </x-base.tab.list>
                    <div class="flex items-center gap-3 2xl:ml-auto">
                        
                       
                        <x-base.menu>
                            <x-base.menu.button
                                class="rounded-[0.6rem] bg-white py-3 text-[0.94rem]"
                                as="x-base.button"
                                variant="secondary"
                            >
                                <span class="flex h-5 w-5 items-center justify-center">
                                    <x-base.lucide
                                        class="h-4 w-4 stroke-[1.3]"
                                        icon="MoreVertical"
                                    />
                                </span>
                            </x-base.menu.button>
                            <x-base.menu.items class="w-44">
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Settings"
                                    /> Delete
                                </x-base.menu.item>
                                
                            </x-base.menu.items>
                        </x-base.menu>
                    </div>
                </div>
                <x-base.tab.panels>
                    <x-base.tab.panel
                        id="example-1"
                        selected="{{ is_null(request()->query('page')) }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">
                            <div class="col-span-12 xl:col-span-8">
                                <div class="flex flex-col gap-y-7">
                                   @if($patient_disease)
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Disease details
                                            </div>
                                            <div class="-my-3">
                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                        <div @class([
                                                                'px-4 py-3 ml-8',
                                                                "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                                "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                            ])>
                                                                <a
                                                                    class="font-medium text-primary"
                                                                    href=""
                                                                >
                                                                {{ $patient_disease->diagnosis ?? '' }}
                                                                </a>                                                          
                                                            </div>                                                                                               
                                                </div>
                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                        <div @class([
                                                                'px-4 py-3 ml-8',
                                                                "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                                "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                            ])>
                                                                Diagnosed Date:                                                          
                                                            {{ $patient->diagnosed_date ? \Carbon\Carbon::parse($patient->diagnosed_date)->format('d-M-Y') : 'N/A' }}
                                                                                                                    
                                                            </div>                                                                                               
                                                </div>

                                                <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            Prior Condition:                                                          
                                                            <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 text-info bg-info/10 border-info/10">
                                                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-info/80"></span>
                                                                <span class="-mt-px">
                                                                    {{ $patient_disease->prior_condition ?? '' }}
                                                                </span>
                                                            </span>
                                                                                                                
                                                        </div>                                                                                               
                                                </div>

                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                        <div @class([
                                                                'px-4 py-3 ml-8',
                                                                "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                                "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                            ])>
                                                            Treatment Availed From:                                                          
                                                                {{ $patient_disease->treating_hospital ?? "NULL"}}
                                                                                                                    
                                                            </div>                                                                                               
                                                </div>

                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                        Treating Doctor:                                                          
                                                            {{ $patient_disease->doctor_name ?? "NULL" }}
                                                                                                                
                                                        </div>  
                                                        
                                                        
                                                    
                                                </div>
                                                
                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                        Treatment Type:                                                          
                                                        {{ $patient_disease && $patient_disease->hospital_type == 1 ? 'Public' : 'Private' }}
                                                                                                                
                                                        </div>                                                  
                                                </div>
                                                @if($patient_disease && $patient_disease->allopathy)
                                                <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            Allopathy Treatment Details:                                                          
                                                            <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 text-warning bg-warning/10 border-warning/10">
                                                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-warning/80"></span>
                                                                <span class="-mt-px">
                                                                    {{ $patient_disease->allopathy_details ?? '' }}
                                                                </span>
                                                            </span>
                                                                                                                    
                                                        </div>                                                                                               
                                                </div>
                                                @endif
                                                
                                                @if($patient_disease && $patient_disease->ayurveda)
                                                <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            Ayurveda Treatment Details:                                                          
                                                            <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 text-primary bg-primary/10 border-primary/10">
                                                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-primary/80"></span>
                                                                <span class="-mt-px">
                                                                    {{ $patient_disease->ayurveda_details ?? '' }}
                                                                </span>
                                                            </span>
                                                                                                                    
                                                        </div>                                                                                               
                                                </div>
                                                @endif
                                                
                                                @if($patient_disease && $patient_disease->homeopathy)
                                                <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            Homeopathy Treatment Details:                                                          
                                                            <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 text-success bg-success/10 border-success/10">
                                                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-success/80"></span>
                                                                <span class="-mt-px">
                                                                    {{ $patient_disease->homeopathy_details ?? '' }}
                                                                </span>
                                                            </span>
                                                                                                                    
                                                        </div>                                                                                               
                                                </div>
                                                @endif
                                                <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div @class([
                                                            'px-4 py-3 ml-8',
                                                            "before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10",
                                                            "after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10",
                                                        ])>
                                                            Present Health Condition:                                                          
                                                            <span class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 text-danger bg-danger/10 border-danger/10">
                                                                <span class="mr-1.5 h-1.5 w-1.5 rounded-full bg-danger/80"></span>
                                                                <span class="-mt-px">
                                                                    {{ $patient_disease->present_health_condition ?? '' }}
                                                                </span>
                                                            </span>
                                                                                                                    
                                                        </div>                                                                                               
                                                </div>

                                            
                                            </div>
                                        </div>
                                    @endif
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-2">
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Diagnosis
                                            </div>
                                            <div class="flex flex-col gap-5">
                                            @foreach($patient_diagnosis as $diagnosis)
                                                    <div class="flex items-center">
                                                        <div class="relative h-12 w-12">
                                                            <div
                                                            class="flex h-full w-full items-center justify-center overflow-hidden rounded-full border-2 border-slate-200/40 bg-theme-1/5">
                                                            <x-base.lucide
                                                                class="h-4 w-4 fill-theme-1/10 text-theme-1"
                                                                icon="Triangle"
                                                            />
                                                        </div>
                                                          
                                                        </div>
                                                        <div class="ml-3.5">
                                                            <div class="font-medium">
                                                              {{   $diagnosis->diagnosis->diagnosis }} 
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{   $diagnosis->enteredon }} 
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                              @endforeach
                                            </div>                                          
                                        </div>
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Treatment Type
                                            </div>
                                            <div class="flex flex-col gap-5">
                                                @foreach($patient_treatment_category as $patient_treatment_cat)
                                                    <div class="flex items-center">
                                                        <div class="relative h-12 w-12">
                                                            <div
                                                            class="flex h-full w-full items-center justify-center overflow-hidden rounded-full border-2 border-slate-200/40 bg-theme-1/5">
                                                            <x-base.lucide
                                                                class="h-4 w-4 fill-theme-1/10 text-theme-1"
                                                                icon="Triangle"
                                                            />
                                                            </div>                                                          
                                                        </div>
                                                        <div class="ml-3.5">
                                                            <div class="font-medium">
                                                              {{   $patient_treatment_cat->treatment_type->treatment_type	 }} 
                                                            </div>                                                      
                                                        </div>
                                                    </div>
                                                @endforeach                                             
                                            </div> 
                                            @if($patient_comfort_devices)      
                                                <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Comfort Devices used
                                                </div>
                                                <div class="flex flex-col gap-5">
                                                    @foreach($patient_comfort_devices as $devices)
                                                    <div
                                                        class="ml-1 flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs font-medium text-success">
                                                        <span class="-mt-px">{{ $devices->comfort_devices->comfort_device_name	 }}</span>
                                                    </div>
                                                    @endforeach                                          
                                                </div> 
                                            @endif   

                                        </div>
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                               Past Treatments
                                            </div>
                                            <div class="flex flex-col gap-5">
                                                @foreach($patient_past_treatment_category as $patient_treatment_cat)
                                                <div class="flex items-center">
                                                    <div class="relative h-12 w-12">
                                                        <div
                                                        class="flex h-full w-full items-center justify-center overflow-hidden rounded-full border-2 border-slate-200/40 bg-theme-1/5">
                                                        <x-base.lucide
                                                            class="h-4 w-4 fill-theme-1/10 text-theme-1"
                                                            icon="Triangle"
                                                        />
                                                        </div>                                                          
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">
                                                          {{   $patient_treatment_cat->treatment_type->treatment_type	 }} 
                                                        </div>                                                      
                                                    </div>
                                                </div>
                                            @endforeach  
                                            </div>                                          
                                        </div>
                                        @if($patient_intial_diagnosis)
                                        <div class="p-5 box box--stacked">
                                            <div class="mb-5 flex items-center gap-3.5 border-b border-dashed pb-5">
                                                <div>
                                                    <div
                                                        class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                     
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="max-w-[9rem] truncate text-base font-medium md:max-w-none">
                                                        Intially Collected Details
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                                Details from the onset of the disease:   {{$patient_intial_diagnosis->details_from_disease}}
                                              
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                                Understanding of the disease:   {{$patient_intial_diagnosis->undertanding_abt_disease}}
                                              
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                                Family's Understanding of the disease:   {{$patient_intial_diagnosis->family_abt_disease}}
                                              
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                                  {{$patient_intial_diagnosis->ward_member_aware}}
                                              
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                               Volunteer:   {{$patient_intial_diagnosis->volunteer_type}} 
                                              
                                            </div>
                                            <div class="flex items-center">
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                    icon="Clipboard"
                                                />                                                       
                                                 Entered by: {{$patient_intial_diagnosis->volunteer_type}} 
                                              
                                            </div>
                                           
                                          
                                        </div>
                                        @endif
                                    </div>
                                    <div class="box box--stacked flex flex-col">
                                        <div class="p-5 font-medium">Medication</div>                               
                                            <div class="overflow-x-auto">
                                                @if(!$patient_medication->isEmpty()) 
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
                                                                    Route of Administration
                                                                </x-base.table.th>
                                                                <x-base.table.th
                                                                class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                                >
                                                                    Status
                                                                </x-base.table.th>
                                                                <x-base.table.th
                                                                class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                                >
                                                                    Enteredby
                                                                </x-base.table.th>
                                                                <x-base.table.th
                                                                class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                                >
                                                                    Entered on
                                                                </x-base.table.th>
                                                                <x-base.table.th
                                                                class="bg-slate-50 !px-2 dark:bg-darkmode-800"></x-base.table.th>
                                                            </x-base.table.tr>
                                                        </x-base.table.thead>
                                                        <x-base.table.tbody> <?php $i=1; ?>
                                                            @foreach($patient_medication as $medication)
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
                                                                    <x-base.table.td class="!pl-4 text-slate-500 {{ $medication->status == 1 ? 'text-success' : 'text-grey' }} ">
                                                            
                                                                        <?php if($medication->status==1) echo "Active";
                                                                        elseif($medication->status==2) echo "Inactive";                                          
                                                                        else echo "";
                                                                        ?>                              
                                                                    </x-base.table.td>
                                                                    <x-base.table.td class="!pl-4 text-slate-500">
                                                                        {{ $medication->enteredBy->name;   }} 
                                                                    </x-base.table.td>
                                                                    <x-base.table.td class="!pl-4 text-slate-500">
                                                                        {{ \Carbon\Carbon::parse($medication->created_at)->format('d-M-Y') }}
                                                                    </x-base.table.td>
                                                                    <x-base.table.td class="!pl-4 text-slate-500">
                                                                        <div x-data="{ open: false, action: '', medicationId: null }" class="flex items-center justify-center">
                                                                            <!-- Menu Component -->
                                                                            <x-base.menu class="h-5" x-show="!open" x-transition> <!-- Hide the menu if modal is open -->
                                                                                <x-base.menu.button class="h-5 w-5 text-slate-500">
                                                                                    <x-base.lucide class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70" icon="MoreVertical" />
                                                                                </x-base.menu.button>
                                                                                <x-base.menu.items class="w-40">
                                                                                    <!-- Inactive Item -->
                                                                                    <x-base.menu.item @click="open = true; action = 'inactive'; medicationId = {{ $medication->id }}">
                                                                                        <x-base.lucide class="mr-2 h-4 w-4" icon="CheckSquare" />
                                                                                        Inactive
                                                                                    </x-base.menu.item>
                                                                                    <!-- Delete Item -->
                                                                                    <x-base.menu.item @click="open = true; action = 'delete'; medicationId = {{ $medication->id }}" class="text-danger">
                                                                                        <x-base.lucide class="mr-2 h-4 w-4" icon="Trash2" />
                                                                                        Delete
                                                                                    </x-base.menu.item>
                                                                                </x-base.menu.items>
                                                                            </x-base.menu>
                                                                        
                                                                            <!-- Confirmation Modal -->
                                                                            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" @click.away="open = false">
                                                                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full z-60">
                                                                                    <h2 class="text-lg font-semibold mb-4">Are you sure?</h2>
                                                                                    <p x-show="action === 'inactive'">Do you want to mark this record as inactive?</p>
                                                                                    <p x-show="action === 'delete'">Are you sure you want to delete this record?</p>
                                                                                    <div class="flex justify-between mt-4">
                                                                                        <button @click="open = false" class="px-4 py-2 bg-gray-300 text-gray-800 rounded">Cancel</button>
                                                                                        <button @click="deleteRecord" class="px-4 py-2 bg-red-500 text-white rounded">Yes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </x-base.table.td>
                                                                    <?php $i++;?>
                                                                </x-base.table.tr>                               
                                                            @endforeach                                                                                     
                                                        </x-base.table.tbody>
                                                    </x-base.table>
                                                @endif
                                                 <br><br>
                                                <x-base.table class="border" id="medication-table">
                                                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
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
                                                                <x-base.form-select class="medicine_name" name="medicine_name" required>
                                                                    <option value="">Select</option>                 
                                                                </x-base.form-select>                                                    
                                                            </x-base.table.td>
                                                            <x-base.table.td class="whitespace-nowrap">                                                  
                                                                <x-base.form-select class="medicine_type" name="medicine_type" required>
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
                                                                <x-base.form-select id="dose_unit" name="dose_unit" required>
                                                                    <option value="">Select</option> 
                                                                    <option value="1">mg</option> 
                                                                    <option value="2">ml</option> 
                                                                    <option value="3">gm</option> 
                                                                </x-base.form-select>
                                                            </x-base.table.td>
                                                            <x-base.table.td class="!px-2">
                                                                <x-base.form-select id="med_frequency" name="med_frequency" required>
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
                                                                <x-base.form-select id="med_period" name="med_period" required>
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
                                                                <x-base.form-select class="medicine_mode" name="medicine_mode" required>   
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




                                    @if($patient_general_condition->isEmpty())
                                        <div class="box box--stacked flex flex-col">
                                            <div class="p-5 font-medium">General Condition</div>                                      
                                            <div class="overflow-x-auto">
                                                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                                    <a
                                                        class="text-[0.94rem] font-medium text-primary"
                                                        href=""
                                                    >
                                                    Present_condition
                                                    </a>
                                                    <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                                        {{ $patient_general_condition->present_condition ?? '' }}
                                                        <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                                            <x-base.menu.button class="h-5 w-5 text-slate-500">
                                                                <x-base.lucide
                                                                    class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                                    icon="MoreVertical"
                                                                />
                                                            </x-base.menu.button>
                                                            <x-base.menu.items class="w-40">
                                                                <x-base.menu.item>
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="Copy"
                                                                    /> Copy
                                                                    Link
                                                                </x-base.menu.item>
                                                                <x-base.menu.item>
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="Trash"
                                                                    />
                                                                    Delete
                                                                </x-base.menu.item>
                                                            </x-base.menu.items>
                                                        </x-base.menu>
                                                        <div
                                                            class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">General Condition:</div>
                                                                <div class="ml-auto">
                                                                    <div
                                                                        class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                        <span class="-mt-px"> 
                                                                            {{ $patient_general_condition->present_condition ?? '' }}
                                                                                    
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">Feeding Method:</div>
                                                                <div class="ml-auto">
                                                                    <div class="flex items-center">  
                                                                        @if($patient_general_condition && $patient_general_condition->feeding == 1)                                                                     
                                                                            <div class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->feeding_method ?? '' }}</span>
                                                                            </div>
                                                                        @elseif($patient_general_condition && $patient_general_condition->feeding == 2)
                                                                            <div class="flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs text-danger">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->feeding_method ?? '' }}</span>
                                                                            </div>      
                                                                        @endif
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">Sleep:</div>
                                                                <div class="ml-auto text-slate-500">                                                                  
                                                                    <div class="flex items-center">  
                                                                        @if($patient_general_condition && $patient_general_condition->sleep == 1)                                                                     
                                                                            <div class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->sleep_condition ?? '' }}</span>
                                                                            </div>
                                                                        @elseif($patient_general_condition && $patient_general_condition->sleep == 2)
                                                                            <div class="flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs text-danger">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->sleep_condition ?? '' }}</span>
                                                                            </div>      
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">Bowel Habits:</div>
                                                                <div class="flex items-center">  
                                                                    @if($patient_general_condition && $patient_general_condition->bowel == 1)                                                                     
                                                                        <div class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                            <span class="-mt-px"> {{ $patient_general_condition->bowel_condition ?? '' }}</span>
                                                                        </div>
                                                                    @elseif($patient_general_condition && ($patient_general_condition->bowel == 2 || $patient_general_condition->bowel == 3 || $patient_general_condition->bowel == 2))
                                                                        <div class="flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs text-danger">
                                                                            <span class="-mt-px"> {{ $patient_general_condition->bowel_condition ?? '' }}</span>
                                                                        </div>      
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">Colostomy:</div>
                                                                <div class="ml-auto text-slate-500">
                                                                    @if($patient_general_condition && $patient_general_condition->colostomy == 1)                                                                     
                                                                            <div class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->colostomy_condition ?? '' }}</span>
                                                                            </div>
                                                                        @elseif($patient_general_condition && $patient_general_condition->colostomy == 2)
                                                                            <div class="flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs text-danger">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->colostomy_condition ?? '' }}</span>
                                                                            </div>      
                                                                        @endif
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="text-slate-500">Bladder Habits:</div>
                                                                <div class="ml-auto text-slate-500">
                                                                    @if($patient_general_condition && $patient_general_condition->bladder_habit == 1)                                                                     
                                                                            <div class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->bladder_habit_condition ?? '' }}</span>
                                                                            </div>
                                                                        @elseif($patient_general_condition && $patient_general_condition->bladder_habit == 2)
                                                                            <div class="flex items-center rounded-md border border-danger/10 bg-danger/10 px-1.5 py-px text-xs text-danger">
                                                                                <span class="-mt-px"> {{ $patient_general_condition->bladder_habit_condition ?? '' }}</span>
                                                                            </div>      
                                                                        @endif
                                                                </div>
                                                            </div>
                                                         
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>         
                                        </div>
                                    @endif    

                                    
                                </div>
                            </div>












                            
                            <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                    <div class="box box--stacked flex flex-col p-5">
                                                                            
                                        
                                        <div id="profile-status-text" ></div>
                                        <div class="mt-3.5 flex h-2">
                                            <div id="progress-bar" class="h-full border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"></div>
                                            <div class="h-full w-[100%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r"></div>
                                        </div>
                                        @if($patient->flow_status_id==6)
                                            <x-base.button
                                            class="mt-5 w-full"
                                            variant="primary"
                                            data-tw-toggle="modal"
                                            data-tw-target="#classify_modal"
                                            href="#"
                                            as="a"
                                            >
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Inbox"
                                                />
                                                    Classify
                                            </x-base.button>
                                    @endif
                                    </div>
                                    <div class="box box--stacked flex flex-col p-5">
                                        <div
                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                            Profile
                                        </div>
                                        <div class="flex flex-col gap-8">
                                            @foreach($patient->address as $address)
                                            <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Address
                                                </div>
                                                <div class="mt-3.5">
                                                    <div class="flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clipboard"
                                                        />                                                       
                                                        House No: {{ $address->house_no }}
                                                      
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                        Address: {{ $address->address }}
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Target"
                                                        />
                                                        LandMark:  {{ $address->landmark }}
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                            <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Demographic Details
                                                </div>
                                                <div class="mt-3.5">
                                                   
                                                    <div class="flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clipboard"
                                                        />
                                                        Sub Centre:                                                                                                           
                                                       
                                                       
                                                        {{ $patient->locations->subcentre->sub_centre ?? 'N/A' }}
                                                      
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                        Ward:
                                                      
                                                        {{ $patient->locations->ward->ward_name ?? 'N/A' }}
                                                       
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="User"
                                                        />
                                                        Ward Member:
                                                      
                                                        {{ $patient->locations->ward->wardMember->member_name ?? 'N/A' }}
                                                        {{ "[ " . $patient->locations?->ward?->wardMember?->contact_number . " ]" ?? 'N/A' }}
                                                       
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="User"
                                                        />
                                                        Asha Worker:
                                                       
                                                        {{ $patient->locations->ashaworker->asha_worker_name ?? 'N/A' }}
                                                        {{ "[ " . ($patient->locations?->ashaworker?->contact_number ?? 'N/A') . " ]" }}
                                                        
                                                      
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Home"
                                                        />
                                                       Anganwadi:
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                        {{ $patient->locations->anganwadi->awc_name ?? 'N/A' }}
                                                        </a>
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="User"
                                                        />
                                                       Anganwadi Worker:
                                                     
                                                       {{ $patient->locations->anganwadi_worker->awc_worker_name ?? 'N/A' }}
                                                       
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-2"
                        selected="{{ request()->query('page') === 'family' }}"                        
                    >
                    <x-base.button
                            class="ml-auto border-primary/50 px-4"
                            variant="outline-primary"
                            data-tw-toggle="modal"
                            data-tw-target="#family_modal"
                            href="#"
                            as="a"
                        >
                            <x-base.lucide
                                class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                icon="UserPlus"
                            />
                            Add New
                        </x-base.button>
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                            @foreach($patient_family as $patient_family)
                            <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                <a
                                    class="text-[0.94rem] font-medium text-primary"
                                    href=""
                                >
                                   {{ $patient_family->family_member_name }}
                                </a>
                                <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                    {{ $patient_family->relation }}
                                </div>
                               
                                <div
                                    class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Age:</div>                                   
                                        <div class="ml-auto text-slate-500">
                                            {{ $patient_family->age }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Gender:</div>
                                        <div class="ml-auto">
                                            <div class="flex items-center">
                                              
                                                {{ $patient_family->gender == 1 ? 'Male' : ($patient_family->gender == 2 ? 'Female' : 'Other') }}
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Staying with patient:</div>
                                        <div class="ml-auto text-slate-500">                                       
                                            {{ $patient_family->staying == 1 ? 'Yes' :  'No' }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Education:</div>
                                        <div class="ml-auto text-slate-500">
                                            {{ $patient_family->education }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Income:</div>
                                        <div class="ml-auto text-slate-500">
                                            Rs. {{ $patient_family->income }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Source of Income:</div>
                                        <div class="ml-auto text-slate-500">
                                            {{ $patient_family->source_income }}
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-slate-500">Income Category:</div> 
                                   
    
                                        <div class="ml-auto">
                                            <div
                                                class="flex items-center rounded-md border {{ $patient_family->income_catogory == 1 ? 'border-success/10 bg-success/10 text-success' : 'border-danger/10 bg-danger/10 text-danger' }} px-1.5 py-px text-xs">
                                                <span class="-mt-px">{{ $patient_family->income_cat }}</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                               
                                </div>
                               
                            </div>
                            @endforeach
                              
                               
                                
                           
                        </div>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        id="example-3"
                        selected="{{ request()->query('page') === 'achievements' }}"
                    >
                         <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                            <div class="overflow-auto xl:overflow-visible">
                                <x-base.table class="border-b border-slate-200/60">
                                    <x-base.table.thead>
                                        <x-base.table.tr>                                           
                                            <x-base.table.td
                                                class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                            >
                                                Physical Difficulty
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                            >
                                                Duration
                                            </x-base.table.td>                                           
                                            <x-base.table.td
                                                class="border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500"
                                            >
                                                Enteredby
                                            </x-base.table.td>
                                            <x-base.table.td
                                                class="w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500"
                                            >
                                                Enteredon
                                            </x-base.table.td>
                                            <x-base.table.td
                                            class="w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500"
                                        >
                                            Status
                                        </x-base.table.td>
                                        </x-base.table.tr>
                                    </x-base.table.thead>
                                    <x-base.table.tbody>
                                        @foreach($patient_difficulties as $patient_difficulty)
                                            <x-base.table.tr class="[&_td]:last:border-b-0">                                                
                                                <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                    <a
                                                        class="whitespace-nowrap font-medium"
                                                        href=""
                                                    >
                                                    {{ $patient_difficulty->physical_difficulty }}
                                                </a>                                                   
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">                                                   
                                                    <a
                                                    class="whitespace-nowrap font-medium"
                                                    href=""
                                                    >
                                                    {{ $patient_difficulty->duration }}
                                                    </a>
                                                    <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                        {{ $patient_difficulty->period }}
                                                    </div>                                                 
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 text-center dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        {{ $patient_difficulty->enteredBy->name }}
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 text-center dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                       
                                                        {{ $patient_difficulty->created_at }}
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class='text-success'>
                                                       
                                                        <div class="ml-1.5 whitespace-nowrap">
                                                           Active
                                                        </div>
                                                    </div>
                                                </x-base.table.td>
                                                <x-base.table.td class="relative border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center">
                                                        <x-base.menu class="h-5">
                                                            <x-base.menu.button class="h-5 w-5 text-slate-500">
                                                                <x-base.lucide
                                                                    class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                                    icon="MoreVertical"
                                                                />
                                                            </x-base.menu.button>
                                                            <x-base.menu.items class="w-40">
                                                                <x-base.menu.item>
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="CheckSquare"
                                                                    />
                                                                    Edit
                                                                </x-base.menu.item>
                                                                <x-base.menu.item class="text-danger">
                                                                    <x-base.lucide
                                                                        class="mr-2 h-4 w-4"
                                                                        icon="Trash2"
                                                                    />
                                                                    Delete
                                                                </x-base.menu.item>
                                                            </x-base.menu.items>
                                                        </x-base.menu>
                                                    </div>
                                                </x-base.table.td>
                                            </x-base.table.tr>
                                        @endforeach
                                    </x-base.table.tbody>
                                </x-base.table>
                            </div>
                               
                             
                               
                          
                        </div> 
                    </x-base.tab.panel>
                    {{-- <x-base.tab.panel
                        id="example-4"
                        selected="{{ request()->query('page') === 'contacts' }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                           
                                <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                                            <x-base.lucide
                                                class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                        <div
                                            class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                            <img
                                                src=""
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                            name
                                        </div>
                                        <div class="mt-2 flex items-center justify-center gap-3">
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Hotel"
                                                />
                                                location
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Calendar"
                                                />
                                               joinedDate
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                    department
                                                </span>
                                            </span>
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                 position
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                        <div class="text-slate-500">
                                            {{ mt_rand(20, 100) }}+ Connections
                                        </div>
                                        @if (mt_rand(0, 1))
                                            <x-base.button
                                                class="ml-auto border-primary/50 px-4"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        @else
                                            <x-base.button
                                                class="ml-auto px-4"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        @endif
                                    </div>
                                </div>
                                <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                                            <x-base.lucide
                                                class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                        <div
                                            class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                            <img
                                                src=""
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                            name
                                        </div>
                                        <div class="mt-2 flex items-center justify-center gap-3">
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Hotel"
                                                />
                                                location
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Calendar"
                                                />
                                               joinedDate
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                    department
                                                </span>
                                            </span>
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                 position
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                        <div class="text-slate-500">
                                            {{ mt_rand(20, 100) }}+ Connections
                                        </div>
                                        @if (mt_rand(0, 1))
                                            <x-base.button
                                                class="ml-auto border-primary/50 px-4"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        @else
                                            <x-base.button
                                                class="ml-auto px-4"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        @endif
                                    </div>
                                </div>
                                <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                                            <x-base.lucide
                                                class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70"
                                                icon="MoreVertical"
                                            />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Copy"
                                                /> Copy
                                                Link
                                            </x-base.menu.item>
                                            <x-base.menu.item>
                                                <x-base.lucide
                                                    class="mr-2 h-4 w-4"
                                                    icon="Trash"
                                                />
                                                Delete
                                            </x-base.menu.item>
                                        </x-base.menu.items>
                                    </x-base.menu>
                                    <div class="mt-10 flex flex-col items-center px-5 pb-10">
                                        <div
                                            class="image-fit h-[72px] w-[72px] overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                            <img
                                                src=""
                                                alt="Tailwise - Admin Dashboard Template"
                                            >
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                            name
                                        </div>
                                        <div class="mt-2 flex items-center justify-center gap-3">
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Hotel"
                                                />
                                                location
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <x-base.lucide
                                                    class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"
                                                    icon="Calendar"
                                                />
                                               joinedDate
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-wrap items-center justify-center gap-2 sm:flex-row">
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                    department
                                                </span>
                                            </span>
                                            <span
                                                class="flex items-center rounded-md border border-primary/10 bg-primary/10 px-2 py-0.5 text-xs font-medium text-primary"
                                            >
                                                <span class="-mt-px truncate">
                                                 position
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center border-t border-slate-200/80 px-5 py-4">
                                        <div class="text-slate-500">
                                            {{ mt_rand(20, 100) }}+ Connections
                                        </div>
                                        @if (mt_rand(0, 1))
                                            <x-base.button
                                                class="ml-auto border-primary/50 px-4"
                                                variant="outline-primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="UserPlus"
                                                />
                                                Connect
                                            </x-base.button>
                                        @else
                                            <x-base.button
                                                class="ml-auto px-4"
                                                variant="primary"
                                            >
                                                <x-base.lucide
                                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                    icon="Check"
                                                />
                                                Connected
                                            </x-base.button>
                                        @endif
                                    </div>
                                </div>
                            
                        </div>
                    </x-base.tab.panel> --}}
                    {{-- <x-base.tab.panel
                        id="example-5"
                        selected="{{ request()->query('page') === 'default' }}"
                    >
                        <div class="box box--stacked mt-3.5 flex flex-col items-center py-14">
                            <x-base.lucide
                                class="h-24 w-24 fill-primary/5 stroke-[0.3] text-primary/70"
                                icon="FileLock2"
                            />
                            <div class="mt-5 text-base font-medium">
                                Two-Factor Authentication (2FA)
                            </div>
                            <div class="mt-1 px-10 text-center text-slate-500">
                                Enhance your account security by enabling Two-Factor
                                Authentication in the settings.
                            </div>
                            <x-base.button
                                class="mt-6"
                                variant="primary"
                            >
                                <x-base.lucide
                                    class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                    icon="Lock"
                                />
                                Enable Now
                            </x-base.button>
                        </div>
                    </x-base.tab.panel> --}}
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>
    </div>

        <!-- BEGIN: Large Modal Content -->
        <x-base.dialog
            id="family_modal"
            size="lg"
            >
            <x-base.dialog.panel class="p-10 text-center">
            <x-base.dialog.title>
                <h2 class="mr-auto text-base font-medium">
                Add a Family Member
                </h2>      
            </x-base.dialog.title>
            <form method="POST" action="{{ route('patient_family_save') }}">
                @csrf
                <x-base.dialog.description class=" grid-cols-12 ">
                    <x-base.form-input
                        id="modal-form-1"
                        type="hidden"
                        placeholder="Name"
                        name="patient_id"
                        value="{{ $patient->id }}"
                    />

                    <div class="col-span-12 sm:col-span-6">
                        <x-base.form-label for="modal-form-1">Family Member Name</x-base.form-label>
                        <x-base.form-input
                            id="modal-form-1"
                            type="text"
                            placeholder="Name"
                            name="family_member_name"
                        />
                        <x-base.form-label for="modal-dob">Date of Birth</x-base.form-label>
                        <x-base.litepicker
                            class="mx-auto block"
                            data-single-mode="true"
                            name="dob"                                                
                            data-min-date="1924-01-01"           
                            data-default-date="1980-01-01" 
                            id="modal-id"           
                        />
                        <x-base.form-label for="modal-form-1">Gender</x-base.form-label>
                        <x-base.form-check class="mr-4">
                            <input type="radio" id="checkbox-switch-1" name="gender" value="1" >
                            <x-base.form-check.label for="checkbox-switch-1">
                                Male
                            </x-base.form-check.label>
                        </x-base.form-check>
                        <x-base.form-check class="mr-4">
                            <input type="radio" id="checkbox-switch-2" name="gender" value="2" >
                            <x-base.form-check.label for="checkbox-switch-3">
                                Female
                            </x-base.form-check.label>
                        </x-base.form-check>
                        <x-base.form-label for="modal-form-1">Contact No</x-base.form-label>
                        <x-base.form-input
                        id="modal-form-1"
                        type="text"
                        placeholder="Phone no"
                        name="contact_no"
                        />

                        <x-base.form-label for="modal-form-1">Relation with Patient</x-base.form-label>
                        <x-base.form-select id="patient_relation" name="patient_relation">
                            <option value="">Select</option> 
                            <option value="1">Father</option> 
                            <option value="2">Mother</option> 
                            <option value="3">Son</option> 
                            <option value="4">Daughter</option>               
                            <option value="5">Wife</option> 
                            <option value="6">Husband</option> 
                            <option value="7">Brother</option> 
                            <option value="8">Sister</option> 
                            <option value="9">Grand son</option> 
                            <option value="10">Grand Daughter</option> 
                            <option value="11">Son-in-Law</option> 
                            <option value="12">Daughter-in-Law</option> 
                        </x-base.form-select>
                        <x-base.form-label for="modal-form-1">Staying with Patient</x-base.form-label>
                        <x-base.form-check class="mr-4">
                            <input type="radio" id="checkbox-switch-1" name="staying" value="1" >
                        <x-base.form-check.label for="checkbox-switch-staying">
                            Yes
                        </x-base.form-check.label>
                        </x-base.form-check>
                        <x-base.form-check class="mr-4">
                            <input type="radio" id="checkbox-switch-2" name="staying" value="2" >
                            <x-base.form-check.label for="checkbox-switch-staying">
                            No
                            </x-base.form-check.label>
                        </x-base.form-check>
                        <x-base.form-label for="modal-form-1">Education</x-base.form-label>
                            <x-base.form-input
                            id="modal-form-1"
                            type="text"
                            placeholder="Education"
                            name="education"
                            />
                        <x-base.form-label for="modal-form-1">Monthly income</x-base.form-label>
                        <x-base.form-input
                        id="modal-form-1"
                        type="text"
                        placeholder="Monthly income"
                        name="income"
                        />
                        <x-base.form-label for="modal-form-1">Source of Income</x-base.form-label>
                        <x-base.form-select id="source_income" name="source_income">
                            <option value="">Select</option> 
                            <option value="1">Agriculture</option> 
                            <option value="2">Job</option> 
                            <option value="3">Pension</option> 
                            <option value="4">Others</option> 
                            <option value="5">Nil</option> 
                        </x-base.form-select>

                        <x-base.form-label for="modal-form-1">Category</x-base.form-label>
                        <x-base.form-select id="income_catogory" name="income_catogory">
                            <option value="">Select</option> 
                            <option value="1">APL</option> 
                            <option value="2">BPL</option> 
                            <option value="3">AAY</option> 
                            <option value="4">Others</option> 
                            <option value="5">Nil</option> 
                        </x-base.form-select>
                    </div> 
                </x-base.dialog.description>
                <x-base.dialog.footer>
                    <x-base.button
                        class="mr-1 w-20"
                        data-tw-dismiss="modal"
                        type="button"
                        variant="outline-secondary"
                        >
                        Cancel
                    </x-base.button>
                    <x-base.button
                        class="w-20"
                        type="submit"
                        variant="primary"
                        >
                        Submit
                    </x-base.button>
                </x-base.dialog.footer>
            </form>
        </x-base.dialog.panel>
    </x-base.dialog>
<!-- END: Large Modal Content -->



 <!-- BEGIN: Large Modal Content -->
 <x-base.dialog  id="classify_modal"  size="lg" >
    <x-base.dialog.panel class="p-10 text-center">
    <x-base.dialog.title>
        <h2 class="mr-auto text-base font-medium">
       Classify the patient-  {{ $patient->first_name }}  {{ $patient->last_name }}  {{ $patient->patient_code }}
        </h2>      
    </x-base.dialog.title>
    <form method="POST" action="{{ route('patient_classify_save') }}">
     @csrf
     <x-base.dialog.description class="grid-cols-12 ">
         <x-base.form-input
             id="modal-form-1"
             type="hidden"            
             name="patient_id"
             value="{{ $patient->id }}"
         />
         <div class="col-span-12 sm:col-span-6">
             <x-base.form-label for="modal-form-1">Classify</x-base.form-label>        
            <x-base.form-select id="classify" name="classify">
                 <option value="">Select</option> 
                 <option value="1">Home Bound</option> 
                 <option value="2">Bed Ridden</option>                
             </x-base.form-select>          
         </div> 
     </x-base.dialog.description>
     <x-base.dialog.footer>
         <x-base.button
             class="mr-1 w-20"
             data-tw-dismiss="modal"
             type="button"
             variant="outline-secondary"
             >
             Cancel
         </x-base.button>
         <x-base.button
             class="w-20"
             type="submit"
             variant="primary"
             >
             Submit
         </x-base.button>
     </x-base.dialog.footer>
 </form>
</x-base.dialog.panel>
</x-base.dialog>
<!-- END: Large Modal Content -->



@endsection
@push('custom-scripts')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<script>
window.addEventListener('DOMContentLoaded', (event) => {
        let status = {{ $patient->flow_status_id }};        
        if (status >= 1 && status <= 10) {
            setProgress(status);  
         } else {
            console.error('Invalid status:', status);
        }
    });

    function setProgress(status) {
        const percentage = status * 10;
        const statusTextElement = document.getElementById('profile-status-text');
        if (statusTextElement) {
            statusTextElement.innerText = `Complete your profile (${percentage}%)`; 
        } else {
            console.error("profile-status-text element not found.");
        }
        const progressBarElement = document.getElementById('progress-bar');
        if (progressBarElement) {
            progressBarElement.style.width = `${percentage}%`;
        } else {
            console.error("progress-bar element not found.");
        }
    }

    setProgress({{ $patient->flow_status_id }});




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
        const saveButton = $('#save-medications');  saveButton.text('Saving...');
        document.getElementById("save-medications").disabled = true;
        saveMedicationData();      
    });

    function saveMedicationData() {
        let medicationData = [];

        // Extract patient_id from URL
        const urlSegments = window.location.pathname.split('/');
        const patientId = document.querySelector('input[name="patient_id"]').value;

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



function deleteRecord() {
        // Example action based on the action type
        if (this.action === 'inactive') {
            // Inactivate record
            console.log("Marking record as inactive with ID:", this.medicationId);
            // You can use an AJAX request to update the record status here
        } else if (this.action === 'delete') {
            // Delete record
            console.log("Deleting record with ID:", this.medicationId);
            // Example: Perform an AJAX request to delete the record
            // axios.delete('/delete-record/' + this.medicationId).then(response => {
            //     // handle success
            // }).catch(error => {
            //     // handle error
            // });
        }

        this.open = false; // Close the modal after the action
    }


</script>