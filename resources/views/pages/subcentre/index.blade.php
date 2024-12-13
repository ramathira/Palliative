@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Sub Centres</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Sub Centres
                </div>
                
            </div>
            <div class="mt-3.5 flex flex-col gap-8">
               
                <div class="box box--stacked flex flex-col">
                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                       
                    </div>
                    @if (session('success'))                    
                    <x-base.alert variant="success">
                        {{ session('success') }}
                    </x-base.alert>
                @endif
                    <div class="overflow-auto xl:overflow-visible">
                       
                        <x-base.table class="border-b border-slate-200/60">
                            <x-base.table.thead>
                                <x-base.table.tr>
                                    <x-base.table.td
                                        class="w-5 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                    >
                                        <x-base.form-check.input type="checkbox" />
                                    </x-base.table.td>
                                    <x-base.table.td
                                        class="border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500"
                                    >
                                       Sl No.
                                    </x-base.table.td>
                                   
                                   
                                   
                                   
                                    <x-base.table.td
                                        class="w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500"
                                    >
                                    Sub Centres
                                    </x-base.table.td>
                                </x-base.table.tr>
                            </x-base.table.thead>
                            <x-base.table.tbody> <?php $i=1; ?>
                                @foreach ($subcentres as $subcentre)
                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                        <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                            <x-base.form-check.input type="checkbox" />
                                        </x-base.table.td>
                                        <x-base.table.td class="w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                               
                                                <div class="ml-3.5">
                                                   <?php echo $i; ?>
                                                  
                                                </div>
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td class="w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                               
                                                <div class="ml-3.5">
                                                    <a
                                                        class="whitespace-nowrap font-medium"
                                                        href=""
                                                    >
                                                        {{ $subcentre['sub_centre'] }}
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                        </x-base.table.td>

                                       
                                       
                                       
                                     
                                      
                                    </x-base.table.tr>
                                    <?php $i++; ?>
                                @endforeach
                            </x-base.table.tbody>
                        </x-base.table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
<script>



</script>
@endpush