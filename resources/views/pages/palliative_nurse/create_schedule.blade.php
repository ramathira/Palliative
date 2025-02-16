@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Sparshamaay-Monthly Schedule</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col mt-4 gap-y-3 md:mt-0 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Monthly Plan
                </div>
            </div>

            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide class="mr-2 h-5 w-5 stroke-[1.3]" icon="ChevronDown" />
                                Schedule Monthly Visits
                            </div>

                            <div class="mt-5">
                                <x-base.alert class="flex items-center px-4 mb-2 border-warning/30 bg-warning/5" variant="outline-warning">
                                    <div>
                                        <x-base.lucide class="mr-3 h-4 w-4 stroke-[1.3] 2xl:mr-2" icon="Lightbulb" />
                                    </div>
                                    <div class="mr-5 leading-relaxed">
                                        Enter a one-month plan ahead of the month.
                                        <x-base.alert.dismiss-button class="inset-y-0 btn-close">
                                            <x-base.lucide class="w-4 h-4" icon="X" />
                                        </x-base.alert.dismiss-button>
                                    </div>
                                </x-base.alert>
                                
                                @if (session('error'))
                                    <x-base.alert variant="danger">
                                        {{ session('error') }}
                                    </x-base.alert>
                                @endif
                                @if (session('success'))                    
                                <x-base.alert variant="success">
                                    {{ session('success') }}
                                </x-base.alert>
                                @endif

                                <!-- Form Starts Here -->
                                <form method="POST" action="{{ route('palliative_nurse.save_schedule') }}">
                                    @csrf

                                    <div class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                        <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Date</div>
                                                    <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                    Enter the date you are planning to visit
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 w-full mt-3 xl:mt-0">
                                            <x-base.litepicker class="mx-auto block" data-single-mode="true" name="plan_date" data-min-date="{{ date('Y-m-d') }}" />
                                        </div>
                                    </div>

                                    <!-- Time Selection -->
                                    <div class="flex-col block pt-5 mt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium">Time</div>
                                                    <div class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                        Required
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex w-full mt-3 xl:mt-0 space-x-3">
                                            <x-base.form-select id="plan_hour" name="plan_hour" class="w-1/3">
                                                <option value="">Select Hour</option> 
                                                @for ($i = 1; $i <= 12; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </x-base.form-select>
                                            <x-base.form-select id="plan_minute" name="plan_minute" class="w-1/3">
                                                <option value="">Select Minute</option> 
                                                <option value="00">00</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                                <option value="45">45</option>
                                            </x-base.form-select>
                                            <x-base.form-select id="plan_meridiem" name="plan_meridiem" class="w-1/3">
                                                <option value="">Select Meridiem</option> 
                                                <option value="AM">AM</option>
                                                <option value="PM">PM</option>
                                            </x-base.form-select>
                                        </div>
                                    </div>

                                    <!-- Subcentre Selection -->
                                    <div class="flex-col block pt-5 mt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="font-medium">Sub Centre</div>
                                            </div>
                                        </div>
                                        <div class="flex-1 w-full mt-3 xl:mt-0">
                                            <x-base.form-select id="subcentre-select" name="subcentre">
                                                <option value="">Select</option> 
                                            </x-base.form-select>
                                        </div>
                                    </div>

                                    <!-- Ward Selection -->
                                    <div class="flex-col block pt-5 mt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="font-medium">Ward</div>
                                            </div>
                                        </div>
                                        <div class="flex-1 w-full mt-3 xl:mt-0">
                                            <x-base.form-select id="ward-select" name="ward">
                                                <option value="">Select</option> 
                                            </x-base.form-select>
                                        </div>
                                    </div>

                                    <!-- Patient Selection -->
                                    <div class="flex-col block pt-5 mt-5 sm:flex xl:flex-row xl:items-center">
                                        <div class="inline-block mb-2 sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                            <div class="text-left">
                                                <div class="font-medium">Patient</div>
                                            </div>
                                        </div>
                                        <div class="flex-1 w-full mt-3 xl:mt-0">
                                            <x-base.form-select id="patient-select" name="patient">
                                                <option value="">Select</option> 
                                            </x-base.form-select>
                                        </div>
                                    </div>

                                    <!-- Save Button Inside Form -->
                                    <div class="flex flex-col justify-end gap-3 mt-5 md:flex-row">
                                        <x-base.button type="submit" class="w-full rounded-[0.5rem] py-2.5 md:w-56" variant="primary">
                                            <x-base.lucide class="mr-2 h-4 w-4 stroke-[1.3]" icon="PenLine" />
                                            Save
                                        </x-base.button>
                                    </div>
                                </form>
                                <!-- Form Ends Here -->
                            </div>
                        </div>
                    </div>  

                    <div class="flex flex-col p-5 box box--stacked">
                        <div class="rounded-[0.6rem] border border-slate-200/60 p-5 dark:border-darkmode-400">
                            <div
                                class="flex items-center border-b border-slate-200/60 pb-5 text-[0.94rem] font-medium dark:border-darkmode-400">
                                <x-base.lucide
                                    class="mr-2 h-5 w-5 stroke-[1.3]"
                                    icon="ChevronDown"
                                />
                                Plan for {{ date('F') }}
                            </div>
                            <div class="mt-5">
                               
                                
                                
                               
                                <div
                                    class="flex-col block pt-5 mt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                   
                                    <div class="flex-1 w-full mt-3 xl:mt-0">
                                        <div class="overflow-x-auto">
                                            <x-base.table class="border">
                                                <x-base.table.thead>
                                                    <x-base.table.tr>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Date
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            <div class="flex items-center">
                                                                Time                                                                                                                            </div>
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !px-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Sub Centre
                                                        </x-base.table.th>
                                                        <x-base.table.th
                                                            class="whitespace-nowrap bg-slate-50 !pl-2 text-slate-500 dark:bg-darkmode-800"
                                                        >
                                                            Patient
                                                        </x-base.table.th>
                                                    </x-base.table.tr>
                                                </x-base.table.thead>
                                                <x-base.table.tbody>
                                                    @foreach($schedules as $schedule) 
                                                    <x-base.table.tr> 
                                                        <x-base.table.td class="border-r" >  {{ \Carbon\Carbon::parse($schedule->plan_date)->format('d-M-Y') }}</x-base.table.td>
                                                        <x-base.table.td  class="border-r"   >{{ $schedule->plan_time }} </x-base.table.td>
                                                        <x-base.table.td  class="border-r"   >
                                                            @if($schedule->patient_details && $schedule->patient_details->subCentres->isNotEmpty())                                                           
                                                                @foreach($schedule->patient_details->subCentres as $subCentre)
                                                                    {{ $subCentre->sub_centre }}
                                                                @endforeach                                                           
                                                            @else
                                                                No SubCentres Assigned
                                                            @endif
                                                        </x-base.table.td>
                                                         <x-base.table.td  class="border-r"   >{{ $schedule->patient_details->first_name ?? 'N/A' }} </x-base.table.td>
                                                    </x-base.table.tr>
                                                    @endforeach
                                                    
                                                   
                                                  
                                                 
                                                  
                                                  
                                                   
                                                </x-base.table.tbody>
                                            </x-base.table>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


<script>

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
          
         } else {
           
            jQuery('#ward-select').empty();
            jQuery('#ward-select').append('<option value="">Select a Ward</option>');
        }
    });
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
                    jQuery('#ward_no').val(response.ward_no); 
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
                url: '/get-patients-of-ward/' + wardId, 
                type: 'GET',
                dataType: 'json',
                success: function(response) {                                
                    jQuery('#patient-select').empty();
                    jQuery('#patient-select').append('<option value="">Select Patient</option>');                            
                    response.forEach(function(patient) { 
                        jQuery('#patient-select').append('<option value="' + patient.id + '">' + patient.first_name + ' [ '+patient.patient_code+ ' ]'+'</option>');
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

</script>
@endpush