@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Palliative Care</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <x-base.tab.group>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Patient Statistic
                    </div>
                   
                </div>
                <x-base.tab.panels class="box box--stacked mt-3.5">
                    <x-base.tab.panel
                        class="flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row"
                        id="example-1"
                        selected
                    >
                        <div class="grid w-full grid-cols-4 gap-2">
                            <div
                                class="box relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border-0 border-slate-200/60 bg-slate-50 bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5 before:absolute before:right-0 before:top-0 before:-mr-[62%] before:h-[130%] before:w-full before:rotate-45 before:bg-gradient-to-b before:from-black/[0.15] before:to-transparent before:content-[''] sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-white/10 text-white"
                                        icon="Database"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium text-white">
                                        230
                                    </div>
                                    {{-- <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        12%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div> --}}
                                </div>
                                <div class="mt-1 text-base text-white/70">
                                   Total Patients Registered
                                </div>
                                <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-white/70 stroke-white/70"
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
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-primary/10 text-primary"
                                        icon="AppWindow"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">86</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        35%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                   Monthly Visited
                                </div>
                                <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
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
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-info/10 text-info"
                                        icon="Box"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">197</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        65%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Comfort Devices
                                </div>
                                <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
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
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <x-base.lucide
                                        class="h-6 w-6 fill-primary/10 text-primary"
                                        icon="Layout"
                                    />
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">8</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        0.8%
                                        <x-base.lucide
                                            class="ml-px h-4 w-4 stroke-[1.5]"
                                            icon="ChevronUp"
                                        />
                                    </div>
                                </div>
                                
                                <div class="mt-1 text-base text-slate-500">
                                    Registered this Month
                                </div>
                                <x-base.menu class="absolute right-0 top-0 mr-5 mt-5">
                                    <x-base.menu.button class="h-5 w-5 text-slate-500">
                                        <x-base.lucide
                                            class="h-6 w-6 fill-slate-400/70 stroke-slate-400/70"
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
                            </div>
                        </div>
                        <a
                            class="flex flex-col items-center justify-center rounded-[0.6rem] border border-dashed border-slate-300/80 bg-slate-50 p-5 text-slate-400/80 hover:bg-slate-50 xl:w-20 [&:hover_svg]:rotate-180"
                            href=""
                        >
                            <x-base.lucide
                                class="h-6 w-6 transform transition-transform"
                                icon="PlusSquare"
                            />
                        </a>
                    </x-base.tab.panel>
                    <x-base.tab.panel
                        class="p-5 leading-relaxed"
                        id="example-2"
                    ></x-base.tab.panel>
                    <x-base.tab.panel
                        class="p-5 leading-relaxed"
                        id="example-3"
                    ></x-base.tab.panel>
                </x-base.tab.panels>
            </x-base.tab.group>
        </div>








        <div class="col-span-12 xl:col-span-8">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        General Report
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col gap-y-5 lg:flex-row lg:items-center">
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row sm:items-center">
                            <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                    icon="CalendarCheck2"
                                />
                                <x-base.form-select class="pl-9 sm:w-44">
                                    <option value="custom-date">Custom Date</option>
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </x-base.form-select>
                            </div>
                            {{-- <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"
                                    icon="Calendar"
                                />
                                <x-base.litepicker class="rounded-[0.3rem] pl-9 sm:w-64" 
                                />
                            </div> --}}
                        </div>
                        <div class="flex items-center gap-3.5 lg:ml-auto">
                            <a
                                class="flex items-center text-slate-500"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-3.5 w-3.5 stroke-[1.7]"
                                    icon="Printer"
                                />
                                <div
                                    class="ml-1.5 whitespace-nowrap underline decoration-slate-300 decoration-dotted underline-offset-[3px]">
                                    Export to PDF
                                </div>
                            </a>
                            <a
                                class="flex items-center text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-3.5 w-3.5 stroke-[1.7]"
                                    icon="ExternalLink"
                                />
                                <div
                                    class="ml-1.5 whitespace-nowrap underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                    Show full report
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <x-report-bar-chart-6 height="h-[280px]" />
                    </div>
                    <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60"></div>
                           Bed Patient 
                        </div>
                        <div class="flex items-center text-slate-500">
                            <div class="mr-2 h-2 w-2 rounded-full border border-slate-500/60 bg-slate-500/60"></div>
                           Home Bound
                        </div>
                    </div>
                </div>
            </div>
        </div>




















        <div class="col-span-12 md:col-span-6 xl:col-span-4">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium xl:group-[.mode--light]:text-white">
                        Monthly Patient Overview
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div>
                            <div class="text-xl font-medium">8</div>
                            <div class="mt-1 text-base text-slate-500">
                                Total Patients
                            </div>
                        </div>
                       
                    </div>
                    <div class="mb-9 mt-6">
                        <div class="border-t border-dashed border-slate-300/70 pt-6">
                            <div class="text-slate-500">
                                Medical condition distribution
                            </div>
                            <div class="mt-3 flex h-2.5">
                                <x-base.tippy
                                    class="h-full w-[12.5%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Heart Disease"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[25%] border border-info/50 bg-info/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="CKD"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[5%] border border-pending/50 bg-pending/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Respiratory Issues"
                                ></x-base.tippy>
                                <x-base.tippy
                                    class="h-full w-[40%] border border-success/50 bg-success/50 first:rounded-l last:rounded-r"
                                    as="div"
                                    content="Other"
                                ></x-base.tippy>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-center">
                            <div>
                                <div class="flex flex-col items-end">
                                    <div class="w-28 truncate text-right text-slate-500">
                                        Heart Disease
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">1</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            12.5%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col items-end">
                                    <div class="w-28 truncate text-right text-slate-500">
                                        Chronic Kidney Disease
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">2</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            25%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-12 w-px border-r border-dashed"></div>
                            <div>
                                <div class="flex flex-col">
                                    <div class="w-28 truncate text-slate-500">
                                        Respiratory Issues
                                    </div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">1</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            12.5%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col">
                                    <div class="w-28 truncate text-slate-500">Other</div>
                                    <div class="mt-1.5 flex items-center">
                                        <div class="text-base font-medium">4</div>
                                        <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                            50%
                                            <x-base.lucide
                                                class="ml-0.5 h-4 w-4"
                                                icon="ChevronUp"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-base.button class="w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>
       
       











        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Cases </div>
                <div class="flex gap-x-3 gap-y-2 md:ml-auto">
                    <x-base.button
                        class="rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"
                        data-carousel="important-notes"
                        data-target="prev"
                    >
                        <span class="flex h-5 w-3.5 items-center justify-center">
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronLeft"
                            />
                        </span>
                    </x-base.button>
                    <x-base.button
                        class="rounded-[0.5rem] bg-white text-slate-600 dark:text-slate-300"
                        data-carousel="important-notes"
                        data-target="next"
                    >
                        <span class="flex h-5 w-3.5 items-center justify-center">
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronRight"
                            />
                        </span>
                    </x-base.button>
                </div>
            </div>
            <div class="-mx-2.5 mt-3.5">
                <x-base.tiny-slider config="performance-insight-slider-config">
                   
                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="BadgeCheck"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                       
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">Stroke Patients</div>
                                    <div class="mt-0.5 text-slate-500">
                                       40
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                   
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>


                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="Compass"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                       
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">Dialysis Patients </div>
                                    <div class="mt-0.5 text-slate-500">
                                       24
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                   
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>

                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="Lock"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                       
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">Physiotherapy</div>
                                    <div class="mt-0.5 text-slate-500">
                                       8
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                   
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>


                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="Filter"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                       
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">Cancer Patients</div>
                                    <div class="mt-0.5 text-slate-500">
                                       12
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                   
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>

                        <div class="px-2.5 pb-3">
                            <div class="relative p-5 box box--stacked">
                                <div class="flex items-center">
                                    <div @class([
                                        'group flex items-center justify-center w-10 h-10 border rounded-full',
                                        '[&.primary]:border-primary/10 [&.primary]:bg-primary/10',
                                        '[&.success]:border-success/10 [&.success]:bg-success/10',
                                        ['primary', 'success'][mt_rand(0, 1)],
                                    ])>
                                        <x-base.lucide
                                            icon="Globe"
                                            @class([
                                                'w-5 h-5',
                                                'group-[.primary]:text-primary group-[.primary]:fill-primary/10',
                                                'group-[.success]:text-success group-[.success]:fill-success/10',
                                            ])
                                        />
                                    </div>
                                    <div class="flex ml-auto">
                                       
                                    </div>
                                </div>
                                <div class="mt-11">
                                    <div class="text-base font-medium">Nuero Motor Disability</div>
                                    <div class="mt-0.5 text-slate-500">
                                       8
                                    </div>
                                </div>
                                <a
                                    class="flex items-center pt-4 mt-4 font-medium border-t border-dashed text-primary"
                                    href=""
                                >
                                   
                                    <x-base.lucide
                                        class="ml-1.5 h-4 w-4"
                                        icon="ArrowRight"
                                    />
                                </a>
                            </div>
                        </div>
                   
                </x-base.tiny-slider>
            </div>
        </div>












        <div class="flex flex-col col-span-12 gap-y-4 md:col-span-4 xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Total Registered</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="pb-5 border-b border-dashed mb-7 border-slate-300/70">
                        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                            <div>
                                <div class="text-base text-slate-500">
                                    Total Patients
                                </div>
                                <div class="flex items-center mt-1">
                                    <div class="text-xl font-medium">230</div>
                                    <div class="flex items-center ml-2 -mr-1 text-xs text-danger">
                                       
                                        <x-base.lucide
                                            class="w-4 h-4 ml-px"
                                            icon="ChevronDown"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="mt-12 flex items-center">
                        <div class="text-2xl font-medium">86</div>
                       <div
                            class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                            Home Bound
                            <x-base.lucide
                                class="ml-px h-4 w-4 stroke-[1.5]"
                                icon="ChevronDown"
                            />
                        </div>
                    </div>

                    <div class="mt-12 flex items-center">
                        <div class="text-2xl font-medium">130</div>
                       <div
                            class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                            Bed Ridden 
                            <x-base.lucide
                                class="ml-px h-4 w-4 stroke-[1.5]"
                                icon="ChevronDown"
                            />
                        </div>
                    </div>


                </div>
            </div>


            
        </div>


      

        
        <div class="flex flex-col col-span-12 gap-y-4 md:col-span-4 xl:col-span-6">
        <div>
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium">Monthly Statistic</div>
            </div>
            <div class="box box--stacked mt-3.5 p-5">
                <div
                    class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                    
                    <div class="text-center sm:ml-4 sm:text-left">
                        <div class="text-base font-medium">
                          Registered this month
                        </div>
                        <div class="mt-0.5 text-slate-500">
                         January
                        </div>
                    </div>
                    <div
                        class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                        <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50"></div>
                       January
                    </div>
                </div>
                <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Total Patients Registered</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">8</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                2%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Bed Ridden Patients</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">3</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                2%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Home Bound Patients</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">5</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                4%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronDown"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="box box--stacked mt-3.5 p-5">
                <div
                    class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                    
                    <div class="text-center sm:ml-4 sm:text-left">
                        <div class="text-base font-medium">
                           Monthly Visit
                        </div>
                        <div class="mt-0.5 text-slate-500">
                            Attended Patients
                        </div>
                    </div>
                    <div
                        class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                        <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50"></div>
                       January
                    </div>
                </div>
                <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Total Patients Visited</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">86</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                11%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Bed Ridden Patients</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">40</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                2%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronUp"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 border-dashed last:border-0 sm:border-r">
                        <div class="text-slate-500">Home Bound Patients</div>
                        <div class="mt-1 flex items-center justify-center">
                            <div class="text-base font-medium">46</div>
                            <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                4%
                                <x-base.lucide
                                    class="ml-px h-4 w-4"
                                    icon="ChevronDown"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



















        <div class="col-span-12 md:col-span-4 2xl:col-span-3">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                      Comfort Devices Provided
                    </div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <x-base.menu class="absolute top-0 right-0 mt-5 mr-5">
                        <x-base.menu.button class="w-5 h-5 text-slate-500">
                            <x-base.lucide
                                class="w-6 h-6 fill-slate-400/70 stroke-slate-400/70"
                                icon="MoreVertical"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Copy"
                                /> Copy Link
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Trash"
                                />
                                Delete
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                    <div class="pb-5 mb-6 border-b border-dashed border-slate-300/70">
                        <div class="text-base text-slate-500">Total Patients</div>
                        <div class="flex items-center mt-1">
                            <div class="text-xl font-medium">197</div>
                            <div class="flex items-center ml-2 -mr-1 text-xs text-danger">
                                4%
                                <x-base.lucide
                                    class="w-4 h-4 ml-px"
                                    icon="ChevronDown"
                                />
                            </div>
                        </div>
                    </div>
                    <div>
                     
                            <div
                                class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                                <div
                                    class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                                    
                                </div>
                                <div class="ml-2.5 truncate pr-8">Wheel Chair</div>
                                <div class="ml-auto">
                                  37
                                </div>
                            </div>

                            <div
                            class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                            <div
                                class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                                
                            </div>
                            <div class="ml-2.5 truncate pr-8">Air Bed</div>
                            <div class="ml-auto">
                              69
                            </div>
                        </div>
                        <div
                                class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                                <div
                                    class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                                    
                                </div>
                                <div class="ml-2.5 truncate pr-8">Water Beds</div>
                                <div class="ml-auto">
                                  23
                                </div>
                            </div>
                            <div
                            class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                            <div
                                class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                                
                            </div>
                            <div class="ml-2.5 truncate pr-8">Walker</div>
                            <div class="ml-auto">
                              42
                            </div>
                        </div>

                        <div
                        class="mb-[18px] flex items-center [&:nth-of-type(n+5)]:hidden [&:nth-of-type(n+5)]:2xl:flex">
                        <div
                            class="image-fit box h-[22px] w-[22px] overflow-hidden rounded-full border-2 border-slate-200/70">
                            
                        </div>
                        <div class="ml-2.5 truncate pr-8">Nebulizers</div>
                        <div class="ml-auto">
                          28
                        </div>
                    </div>
                       
                    </div>
                    <x-base.button class="mt-1.5 w-full border-dashed border-slate-300 hover:bg-slate-50">
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="ExternalLink"
                        />
                        See Full Report
                    </x-base.button>
                </div>
            </div>
        </div>





      
      
    </div>
@endsection
@push('custom-scripts')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>


    (function () {
    "use strict";

    // Chart
    const chartEl = $(".report-donut-chart-4");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");
            const chartData = [35, 65];

            const reportDonutChart4 = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: [
                        "83",
                        "130",
                        "",
                    ],
                    datasets: [
                        {
                            data: chartData,
                            backgroundColor: [
                                getColor("primary", 0.6),
                                getColor("success", 0.6),
                            ],
                            hoverBackgroundColor: [
                                getColor("primary", 0.6),
                                getColor("success", 0.6),
                            ],
                            borderWidth: 1,
                            borderColor: [
                                getColor("primary", 0.6),
                                getColor("success", 0.6),
                            ],
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    cutout: "89%",
                    rotation: -90,
                    circumference: 180,
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-primary", "color-success"],
                (newValues) => {
                    reportDonutChart4.data.datasets[0].borderColor[0] =
                        getColor("primary", 0.6);
                    reportDonutChart4.data.datasets[0].hoverBackgroundColor[0] =
                        getColor("primary", 0.6);
                    reportDonutChart4.data.datasets[0].backgroundColor[0] =
                        getColor("primary", 0.6);
                    reportDonutChart4.data.datasets[0].borderColor[1] =
                        getColor("success", 0.6);
                    reportDonutChart4.data.datasets[0].hoverBackgroundColor[1] =
                        getColor("success", 0.6);
                    reportDonutChart4.data.datasets[0].backgroundColor[1] =
                        getColor("success", 0.6);
                    reportDonutChart4.update();
                }
            );
        });
    }
})();

</script>
@endpush