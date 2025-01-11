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
                        <x-base.lucide
                            class="ml-2 h-5 w-5 fill-blue-500/30 text-blue-500"
                            icon="BadgeCheck"
                        />
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
                            id="example-4-tab"
                            selected="{{ request()->query('page') === 'contacts' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Family Members
                                <span
                                    class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70"
                                >
                                    5
                                </span>
                            </x-base.tab.button>
                        </x-base.tab>
                       
                    </x-base.tab.list>
                    <div class="flex items-center gap-3 2xl:ml-auto">
                        <x-base.menu class="mr-auto 2xl:mr-0">
                          
                           
                        </x-base.menu>
                        
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
                                    /> Settings
                                </x-base.menu.item>
                                <x-base.menu.item>
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Contact"
                                    /> Contacts
                                </x-base.menu.item>
                                <x-base.menu.item class="text-danger">
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4"
                                        icon="Lock"
                                    />
                                    Lock Account
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
                                    <div class="box box--stacked flex flex-col p-5">
                                        <div
                                            class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                            Disease details
                                        </div>
                                        <div class="-my-3">
                                            <div
                                                class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                              
                                                    <div @class([
                                                        'mb-3 last:mb-0 relative',
                                                        "first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute",
                                                        "last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0",
                                                    ])>
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

                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                {{ $patient_disease->diagnosed_date ?? '' }}
                                                                <span @class([
                                                                    'group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0',
                                                                    '[&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10',
                                                                    '[&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10',
                                                                    '[&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10',
                                                                    '[&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10',
                                                                    ['primary', 'success', 'warning', 'info'][mt_rand(0, 3)],
                                                                ])>
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"
                                                                    ></span>
                                                                    <span class="-mt-px">
                                                                        {{ $patient_disease->prior_condition ?? '' }}
                                                                    </span>
                                                                </span>
                                                            </div> 
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                {{ $patient_disease->diagnosed_date ?? '' }}
                                                                <span @class([
                                                                    'group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0',
                                                                    '[&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10',
                                                                    '[&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10',
                                                                    '[&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10',
                                                                    '[&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10',
                                                                    ['primary', 'success', 'warning', 'info'][mt_rand(0, 3)],
                                                                ])>
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"
                                                                    ></span>
                                                                    <span class="-mt-px">
                                                                        {{ $patient_disease->prior_condition ?? '' }}
                                                                    </span>
                                                                </span>
                                                            </div>                                                      
                                                         
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                 fgfg
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                            </div>
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
                                                            {{ \Carbon\Carbon::parse($patient->diagnosed_date)->format('d-M-Y') }}
                                                                                                                   
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
                                         
                                        </div>
                                    </div>
                                  
                                    <div class="box box--stacked flex flex-col">
                                        <div class="p-5 font-medium">Medication
                                            <x-base.button
                                            class="ml-auto border-primary/50 px-4"
                                            variant="outline-primary"
                                            data-tw-toggle="modal"
                                            data-tw-target="#medication_modal"
                                            href="#"
                                            as="a"
                                        >
                                            <x-base.lucide
                                                class="-ml-0.5 mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="FilePlus"
                                            />
                                            Add
                                        </x-base.button>
                                        </div>
                                        <div class="overflow-auto xl:overflow-visible">
                                            <x-base.table class="border-b border-dashed border-slate-200/80">
                                                <x-base.table.thead>
                                                    <x-base.table.tr>
                                                        <x-base.table.td
                                                            class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                        >
                                                            Medicine
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                        >
                                                            Dose
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                            class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                        >
                                                            Frequency
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                        class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                    >
                                                        Period
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                    class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                >
                                                    Duration
                                                </x-base.table.td>
                                                    <x-base.table.td
                                                        class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                    >
                                                        Route of Administration
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                    class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                                >
                                                   Status
                                                </x-base.table.td>
                                                <x-base.table.td
                                                class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                            >
                                               Entered On
                                            </x-base.table.td>
                                                    </x-base.table.tr>
                                                </x-base.table.thead>
                                                <x-base.table.tbody>
                                                    @foreach ($patient_medication as $medicine)
                                                        <x-base.table.tr class="[&_td]:last:border-b-0">
                                                            <x-base.table.td
                                                                class="border-dashed py-4 dark:bg-darkmode-600"
                                                            >
                                                                <div class="flex items-center">      
                                                                    {{ $medicine->medication_type->short_code }}                                                              
                                                                      
                                                                
                                                                    {{ $medicine->medicine_details->medicine }}        
                                                                                                                                 
                                                                </div>
                                                            </x-base.table.td>

                                                            <x-base.table.td
                                                            class="border-dashed py-4 dark:bg-darkmode-600"
                                                        >
                                                        <div class="ml-3.5">
                                                           
                                                                {{ $medicine->dose }}
                                                           
                                                           
                                                        </div>
                                                        </x-base.table.td>
                                                        <x-base.table.td
                                                        class="border-dashed py-4 dark:bg-darkmode-600"
                                                    >
                                                    <div class="ml-3.5">
                                                       <?php
                                                       switch($medicine->frequency)
                                                       {
                                                        CASE 1: $frequency="Once"; break;
                                                        CASE 2: $frequency="Twice"; break;
                                                        CASE 3: $frequency="Thrice"; break;
                                                       }
                                                        
                                                        ?>
                                                            {{  $frequency   }}
                                                       
                                                       
                                                    </div>
                                                    </x-base.table.td>
                                                    <x-base.table.td
                                                    class="border-dashed py-4 dark:bg-darkmode-600"
                                                >
                                                <div class="ml-3.5">
                                                   <?php
                                                   switch($medicine->period)
                                                   {
                                                    CASE 1: $period="Daily"; break;
                                                    CASE 2: $period="Weekly"; break;
                                                    CASE 3: $period="Monthly"; break;
                                                   }
                                                    
                                                    ?>
                                                        {{  $period   }}
                                                   
                                                   
                                                </div>
                                                </x-base.table.td>
                                                <x-base.table.td
                                                class="border-dashed py-4 dark:bg-darkmode-600"
                                            >
                                            <div class="ml-3.5">
                                               
                                                    {{ $medicine->medication }}
                                               
                                               
                                            </div>
                                            </x-base.table.td>
                                            <x-base.table.td
                                            class="border-dashed py-4 dark:bg-darkmode-600"
                                        >
                                        <div class="ml-3.5">
                                           
                                                {{ $medicine->medication }}
                                           
                                           
                                        </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                        class="border-dashed py-4 dark:bg-darkmode-600"
                                    >
                                    <div class="ml-3.5">
                                       
                                            {{ $medicine->medication }}
                                       
                                       
                                    </div>
                                    </x-base.table.td>
                                    <x-base.table.td
                                    class="border-dashed py-4 dark:bg-darkmode-600"
                                >
                                <div class="ml-3.5">
                                   
                                        {{ $medicine->medication }}
                                   
                                   
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
                            <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                    <div class="box box--stacked flex flex-col p-5">
                                        <div>Complete your profile (83%)</div>
                                        <div class="mt-3.5 flex h-2">
                                            <div
                                                class="h-full w-[60%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                            </div>
                                            <div
                                                class="h-full w-[40%] border border-slate-300 bg-slate-100 first:rounded-l last:rounded-r">
                                            </div>
                                        </div>
                                        <x-base.button
                                            class="mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"
                                            variant="primary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Inbox"
                                            />
                                            Profile Settings
                                        </x-base.button>
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
                                                        {{ "[ ".$patient->locations->ward->wardMember->contact_number." ]" ?? 'N/A' }}
                                                       
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="User"
                                                        />
                                                        Asha Worker:
                                                       
                                                        {{ $patient->locations->ashaworker->asha_worker_name ?? 'N/A' }}
                                                        {{ "[ ".$patient->locations->ashaworker->contact_number." ]" ?? 'N/A' }}
                                                      
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
                        id="example-4"
                        selected="{{ request()->query('page') === 'contacts' }}"
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
            @foreach($patient_family as $patient_family)
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                           
                                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                  
                                   
                                    
                                    <div
                                        class="mt-auto flex flex-col gap-3 border-t border-dashed border-slate-300/70 pt-5">
                                        <div class="flex items-center">
                                            <div class="text-slate-500">Name:</div>
                                            <div class="ml-auto">
                                                <div
                                                    class="flex items-center rounded-md border border-success/10 bg-success/10 px-1.5 py-px text-xs text-success">
                                                    <span class="-mt-px">{{ $patient_family->family_member_name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500"></div>
                                            <div class="ml-auto">
                                           
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">:</div>
                                            <div class="ml-auto text-slate-500">
                                              ghg
                                            </div>
                                        </div>
                                     
                                        <div class="flex items-center">
                                            <div class="text-slate-500"></div>
                                            <div class="ml-auto">
                                                <a
                                                    class="block w-40 truncate whitespace-nowrap text-right text-slate-500 underline decoration-slate-500/30 decoration-dotted underline-offset-[3px] md:w-52"
                                                    href=""
                                                >
                                                   fgfg
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                             
                        </div>
                        @endforeach
                    </x-base.tab.panel>
                   
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


   <!-- BEGIN: Medication Modal -->
   <x-base.dialog
   id="medication_modal"
   size="lg"
 >
   <x-base.dialog.panel class="p-10 text-center">
     <x-base.dialog.title>
         <h2 class="mr-auto text-base font-medium">
            Medication Details
         </h2>      
     </x-base.dialog.title>
     <form method="POST" action="{{ route('patient_medicine_save') }}">
         @csrf
       
     <x-base.dialog.description class="grid-cols-12 ">
         <x-base.form-input
         id="modal-form-1"
         type="hidden"
         placeholder="Name"
         name="patient_id"
         value="{{ $patient->id }}"
     />
 
         <div class="col-span-12 sm:col-span-6">
            <x-base.form-label for="modal-form-2">Medicine</x-base.form-label>
             <x-base.form-select id="medicine_name" name="medicine_name">
                 <option value="">Select</option>                 
            </x-base.form-select>    

            <x-base.form-label for="modal-form-2">Type</x-base.form-label>
            <x-base.form-select id="medicine_type" name="medicine_type">
                <option value="">Select</option>               
           </x-base.form-select>    
 
            
             <x-base.form-label for="modal-form-1">Dose</x-base.form-label>
             <x-base.form-input
                 id="modal-form-1"
                 type="number"
                 placeholder="Dose"
                 name="med_dose"
             />
 
             <x-base.form-label for="modal-form-2">Frequency</x-base.form-label>
             <x-base.form-select id="med_frequency" name="med_frequency">
                 <option value="">Select</option> 
                 <option value="1">Once</option> 
                 <option value="2">Twice</option> 
                 <option value="3">Thrice</option> 
            </x-base.form-select>

            <x-base.form-label for="modal-form-2">Period</x-base.form-label>
             <x-base.form-select id="med_period" name="med_period">
                 <option value="">Select</option> 
                 <option value="1">Daily</option> 
                 <option value="2">Weekly</option> 
                 <option value="3">Monthly</option> 
            </x-base.form-select>             
 
          
           
             <x-base.form-label for="modal-form-1">Duration</x-base.form-label>
             <x-base.form-input
                 id="modal-form-1"
                 type="number"
                 placeholder="Duration"
                 name="duration"
             />
 
                 <x-base.form-label for="modal-form-1">Timespan</x-base.form-label>
             <x-base.form-select id="timespan" name="timespan">
                 <option value="">Select</option> 
                 <option value="1">Days</option> 
                 <option value="2">Weeks</option> 
                 <option value="3">Months</option> 
                 <option value="4">Years</option>                 
                 </x-base.form-select>

                 <x-base.form-label for="modal-form-1">Route</x-base.form-label>
                <x-base.form-select id="medicine_mode" name="medicine_mode">   
                    <option value="">Select</option>                                
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
 <!-- END: Medication Modal -->
@endsection
@push('custom-scripts')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>



document.addEventListener('DOMContentLoaded', function () {
    const medicationModal = document.querySelector('#medication_modal');
    const medicationSelect = document.querySelector('#medicine_name');
    const medicationTypeSelect = document.querySelector('#medicine_type');
    const medicationModeSelect = document.querySelector('#medicine_mode');

    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (!medicationModal.classList.contains('hidden')) {
                // Modal is visible
                populateMedicationDropdown(medicationSelect);
                populateMedicationTypeDropdown(medicationTypeSelect);
                populateMedicationModeDropdown(medicationModeSelect);
            }
        });
    });

    // Observe changes to the modal's attributes
    observer.observe(medicationModal, { attributes: true, attributeFilter: ['class'] });

    function populateMedicationDropdown(selectElement) {
        // Clear the dropdown
        selectElement.innerHTML = '<option value="">Loading...</option>';

        // Fetch data via AJAX
        fetch('/get_all_medicines')
            .then((response) => response.json())
            .then((data) => {
                selectElement.innerHTML = '<option value="">Select</option>';
                data.forEach((medication) => {
                    const option = document.createElement('option');
                    option.value = medication.id; // Backend medication ID
                    option.textContent = medication.medicine; // Backend medication name
                    selectElement.appendChild(option);
                });
            })
            .catch((error) => {
                console.error('Error fetching medications:', error);
                selectElement.innerHTML = '<option value="">Error loading options</option>';
            });
    }

    function populateMedicationModeDropdown(selectElement) {
        // Clear the dropdown
        selectElement.innerHTML = '<option value="">Loading...</option>';

        // Fetch data via AJAX
        fetch('/get_all_medicine_modes')
            .then((response) => response.json())
            .then((data) => {
                selectElement.innerHTML = '<option value="">Select</option>';
                data.forEach((medication) => {
                    const option = document.createElement('option');
                    option.value = medication.id; // Backend medication ID
                    option.textContent = medication.medicine_mode; // Backend medication name
                    selectElement.appendChild(option);
                });
            })
            .catch((error) => {
                console.error('Error fetching medications:', error);
                selectElement.innerHTML = '<option value="">Error loading options</option>';
            });
    }

    function populateMedicationTypeDropdown(selectElement) {
        // Clear the dropdown
        selectElement.innerHTML = '<option value="">Loading...</option>';

        // Fetch data via AJAX
        fetch('/get_all_medicine_types')
            .then((response) => response.json())
            .then((data) => {
                selectElement.innerHTML = '<option value="">Select</option>';
                data.forEach((medication) => {
                    const option = document.createElement('option');
                    option.value = medication.id; // Backend medication ID
                    option.textContent = medication.medicine_type; // Backend medication name
                    selectElement.appendChild(option);
                });
            })
            .catch((error) => {
                console.error('Error fetching medications:', error);
                selectElement.innerHTML = '<option value="">Error loading options</option>';
            });
    }
});


</script>
    @endpush