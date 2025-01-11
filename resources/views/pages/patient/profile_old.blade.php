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
                            <img src="{{ asset('images/users/grandpa.png') }}" alt="Grandpa">                          
                            @elseif($patient['gender']==2)
                            <img src="{{ asset('images/users/grandma.png') }}" alt="Grandma">  
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
                            {{ $patient['dob'] }}
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
                              Diagnosis
                            </x-base.tab.button>
                        </x-base.tab>
                        <x-base.tab
                            class="bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current"
                            id="example-2-tab"
                            selected="{{ request()->query('page') === 'events' }}"
                        >
                            <x-base.tab.button
                                class="flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40"
                                as="button"
                            >
                                Family Members
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
                            Achievements
                        </x-base.tab.button>
                    </x-base.tab>
                     
                      
                    
                    </x-base.tab.list>
                    
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
                                                      
                                                          
                                                           
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                               fgfg
                                                            </div>
                                                        </div>
                                                    </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-2">
                                        
                                       
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
                                        {{-- <x-base.button
                                            class="mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20"
                                            variant="primary"
                                        >
                                            <x-base.lucide
                                                class="mr-2 h-4 w-4 stroke-[1.3]"
                                                icon="Inbox"
                                            />
                                            Profile Settings
                                        </x-base.button> --}}
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
                                                            icon="Calendar"
                                                        />
                                                        LandMark:  {{ $address->landmark }}
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                         
                                            {{-- <div>
                                                <div class="text-xs uppercase text-slate-500">
                                                    Demographic Details
                                                </div>
                                                <div class="mt-3.5">
                                                    <div class="flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Clipboard"
                                                        />
                                                        Sub Centre
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                        @foreach($patient->subCentres as $subCentre)
                                                        {{ $subCentre->sub_centre }}
                                                        @endforeach
                                                        </a>
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                       Ward:
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                           {{ $patient['landmark'] }}
                                                        </a>
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                       Asha Worker:
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                           {{ $patient['landmark'] }}
                                                        </a>
                                                    </div>
                                                    <div class="mt-3 flex items-center">
                                                        <x-base.lucide
                                                            class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"
                                                            icon="Calendar"
                                                        />
                                                       Anganwadi
                                                        <a
                                                            class="ml-1 whitespace-nowrap text-primary underline decoration-primary/30 decoration-dotted underline-offset-[3px]"
                                                            href=""
                                                        >
                                                           {{ $patient['landmark'] }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-base.tab.panel>
                    
                    <x-base.tab.panel
                        id="example-2"
                        selected=""
                    >
                    @foreach($patient_family as $patient_family)
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                           
                                <div class="box box--stacked col-span-12 flex flex-col p-5 md:col-span-6 xl:col-span-4">
                                    <a
                                        class="text-[0.94rem] font-medium text-primary"
                                        href=""
                                    >
                                     
                                    </a>
                                    <div class="mb-5 mt-1 leading-relaxed text-slate-500">
                                     
                                    </div>
                                    <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                        <x-base.menu.button class="h-5 w-5 text-slate-500">
                                            <x-base.lucide class="h-5 w-5 fill-slate-400/70 stroke-slate-400/70" icon="MoreVertical" />
                                        </x-base.menu.button>
                                        <x-base.menu.items class="w-40">
                                            {{-- <x-base.menu.item>
                                                <x-base.lucide class="mr-2 h-4 w-4" icon="Copy" /> Copy Link
                                            </x-base.menu.item> --}}
                                    
                                            <x-base.menu.item>
                                                <x-base.button
                                            class="mb-2 mr-1"
                                            data-tw-toggle="modal"
                                            data-tw-target="#large-modal-size-preview"
                                            href="#"
                                            as="a"
                                            variant="outline-secondary"
                                        >
                                           Add new
                                        </x-base.button>
                                            </x-base.menu.item>

                                           
                                            {{-- <!-- Add Modal Trigger -->
                                            <x-base.menu.item>
                                                <x-base.lucide class="mr-2 h-4 w-4" icon="Plus" />
                                                <button @click="openModal = true" class="text-sm">Add Patient Family</button>
                                            </x-base.menu.item> --}}
                                    
                                            {{-- <x-base.menu.item>
                                                <x-base.lucide class="mr-2 h-4 w-4" icon="Trash" /> Delete
                                            </x-base.menu.item> --}}
                                        </x-base.menu.items>
                                    </x-base.menu>
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
                                                {{-- <div class="flex items-center">
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => 5 >= 1,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => 7 >= 2,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => 1 >= 3,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' => 5 >= 4,
                                                        ])
                                                    />
                                                    <x-base.lucide
                                                        icon="Armchair"
                                                        @class([
                                                            'w-5 h-5 mr-1 text-slate-400 fill-slate-100 [&.active]:text-pending/80 [&.active]:fill-pending/10',
                                                            'active' =>2 >= 5,
                                                        ])
                                                    />
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="flex items-center">
                                            <div class="text-slate-500">:</div>
                                            <div class="ml-auto text-slate-500">
                                              ghg
                                            </div>
                                        </div>
                                        {{-- <div class="flex items-center">
                                            <div class="text-slate-500">:</div>
                                            <div class="ml-auto">
                                                <div class="flex items-center justify-center">
                                                    <div class="image-fit zoom-in h-6 w-6">
                                                        <x-base.tippy
                                                            class="rounded-full border-2 border-white"
                                                            src=""
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            as="img"
                                                            content=""
                                                        />
                                                    </div>
                                                    <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                        <x-base.tippy
                                                            class="rounded-full border-2 border-white"
                                                            src=""
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            as="img"
                                                            content=""
                                                        />
                                                    </div>
                                                    <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                        <x-base.tippy
                                                            class="rounded-full border-2 border-white"
                                                            src=""
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            as="img"
                                                            content=""
                                                        />
                                                    </div>
                                                    <div class="image-fit zoom-in -ml-2 h-6 w-6">
                                                        <x-base.tippy
                                                            class="rounded-full border-2 border-white"
                                                            src=""
                                                            alt="Tailwise - Admin Dashboard Template"
                                                            as="img"
                                                            content=""
                                                        />
                                                    </div>
                                                    <div class="ml-1 text-slate-500">
                                                        ({{ mt_rand(20, 100) }}+)
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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
                    <x-base.tab.panel
                        id="example-3"
                        selected="{{ request()->query('page') === 'achievements' }}"
                    >
                        <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                          
                                <div class="box box--stacked col-span-12 flex flex-col md:col-span-6 xl:col-span-4">
                                    <div class="ml-5 mt-5 flex">
                                        <span
                                            class="mr-auto flex items-center rounded-md border border-success/10 bg-success/10 px-2 py-0.5 text-xs font-medium text-success"
                                        >
                                            <span class="-mt-px">test</span>
                                        </span>
                                    </div>
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
                                    <div class="mt-5 flex flex-col items-center px-5 pb-10">
                                        <div class="relative h-[72px] w-[72px]">
                                            <div
                                                class="flex h-full w-full items-center justify-center overflow-hidden rounded-full border border-slate-200/70 bg-theme-1/5">
                                                <x-base.lucide
                                                    class="h-6 w-6 fill-theme-1/10 stroke-[0.7] text-theme-1"
                                                    icon="gdg"
                                                />
                                            </div>
                                        </div>
                                        <div class="mt-3 text-[0.94rem] font-medium text-primary">
                                           dfg
                                        </div>
                                        <div class="mt-1.5 text-center text-slate-500">
                                          dfg
                                        </div>
                                        <div class="mt-5 text-xs uppercase text-slate-400">
                                            Collaborators
                                        </div>
                                        <div class="mt-3 flex justify-center">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <x-base.tippy
                                                    class="rounded-full border-2 border-white"
                                                    src=""
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    as="img"
                                                    content=""
                                                />
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-10 w-10">
                                                <x-base.tippy
                                                    class="rounded-full border-2 border-white"
                                                    src=""
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    as="img"
                                                    content=""
                                                />
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-10 w-10">
                                                <x-base.tippy
                                                    class="rounded-full border-2 border-white"
                                                    src=""
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    as="img"
                                                    content=""
                                                />
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-10 w-10">
                                                <x-base.tippy
                                                    class="rounded-full border-2 border-white"
                                                    src=""
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    as="img"
                                                    content=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex border-t border-slate-200/80">
                                        <div class="flex flex-1 flex-col items-center py-3">
                                            <div class="text-base font-medium">
                                               dfgfd
                                            </div>
                                            <div class="text-slate-500">Level</div>
                                        </div>
                                        <div class="flex flex-1 flex-col items-center border-x border-slate-200/80 py-3">
                                            <div class="text-base font-medium">
                                             dfgdfg
                                            </div>
                                            <div class="text-slate-500">Duration</div>
                                        </div>
                                        <div class="flex flex-1 flex-col items-center py-3">
                                            <div class="text-base font-medium">
                                              dfgdfg
                                            </div>
                                            <div class="text-slate-500">Score</div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </x-base.tab.panel>
                 
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>
    </div>


  <!-- BEGIN: Large Modal Content -->
  <x-base.dialog
  id="large-modal-size-preview"
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

  

@endsection


@pushOnce('scripts')
    @vite('resources/js/pages/modal.js')
@endPushOnce