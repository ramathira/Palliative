@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Add Asha Worker</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Add a new Asha Worker
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Asha Worker</div>
                            </div>
                          
                            <div>
                                

                                @if (session('error'))
                                    <x-base.alert variant="danger">
                                        {{ session('error') }}
                                    </x-base.alert>
                                @endif
                                <div class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <form action="{{ route('asha_worker.store') }}" method="POST">
                                        @csrf
                                        <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                            <x-base.preview>
                                                <div>
                                                    <x-base.form-label for="asha_worker">
                                                     Asha Worker
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="asha_worker"
                                                        type="text"
                                                        placeholder="Asha Woker Name"
                                                        name="asha_worker"
                                                    />
                                                </div>
                                                <br>

                                                <div>
                                                    <x-base.form-label for="ward-name">
                                                        Contact No
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="contact_no"
                                                        type="text"
                                                        placeholder="Contact No"
                                                        name="contactno"
                                                    />
                                                </div>
                                                <br>
                                                <div>
                                                    <x-base.form-label>
                                                       Sub Centre
                                                    </x-base.form-label>
                                                    <br>
                                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                                        <x-base.preview>
                                                            <x-base.tom-select
                                                                class="w-full"
                                                                data-placeholder="Select the subcentre"      
                                                                id="subcentre-select" name="subcentre"                                                              
                                                            >
                                                            <option value="0">--Select--</option>
                                                            @foreach ($subcentres as $subcentre)
                                                            <option value="{{$subcentre->id  }}">{{ $subcentre->sub_centre}}</option>
                                                            @endforeach                                                                
                                                            </x-base.tom-select>
                                                        </x-base.preview>                                                          
                                                    </div>                                                                                                         
                                                </div>
                                                <div>
                                                    <x-base.form-label>
                                                      Ward
                                                    </x-base.form-label>
                                                    <br>
                                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                                        <x-base.preview>
                                                                                                                                                                    
                                                            <x-base.tom-select
                                                            class="w-full"
                                                            data-placeholder="Select the ward"      
                                                            id="ward-select" name="ward"                                                              
                                                        >
                                                        <option value="0">--Select--</option>
                                                                                                                      
                                                        </x-base.tom-select>
                                                        </x-base.preview>                                                      
                                                    </div>
                                                </div>                      

                                                <x-base.button class="mt-5" variant="primary">
                                                    Add
                                                </x-base.button>
                                            </x-base.preview>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </x-base.preview-component>
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
jQuery('#subcentre-select').change(function() {
    var subcentreId = $(this).val(); 
    if (subcentreId) { 
        jQuery.ajax({
            url: '/get_wards/' + subcentreId, 
            type: 'GET',
            dataType: 'json',
            success: function(response) { 
                var wardSelect = jQuery('#ward-select')[0].tomselect; 
                wardSelect.clearOptions(); 
                wardSelect.addOption({value: '', text: 'Select a Ward'}); 

                response.forEach(function(ward) { 
                    wardSelect.addOption({value: ward.id, text: ward.ward_name});
                });

                wardSelect.refreshOptions(); 
            },
            error: function(xhr, status, error) {
                console.error("Error fetching wards: " + error);
            }
        });
    } else {
        var wardSelect = jQuery('#ward-select')[0].tomselect; 
        wardSelect.clearOptions(); 
        wardSelect.addOption({value: '', text: 'Select a Ward'}); 
    }
});


</script>
@endpush