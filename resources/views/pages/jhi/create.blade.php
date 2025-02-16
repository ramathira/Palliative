@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Add Junior Health Inspector</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Add a new JHI 
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">JHI</div>
                            </div>
                          
                            <div>
                                

                                @if (session('error'))
                                    <x-base.alert variant="danger">
                                        {{ session('error') }}
                                    </x-base.alert>
                                @endif
                                <div class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <form action="{{ route('jhi.store') }}" method="POST">
                                        @csrf
                                        <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                            <x-base.preview>
                                                <div>
                                                    <x-base.form-label for="role-name">
                                                       Name of JHI
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="jhi-name"
                                                        type="text"
                                                        placeholder="JHI name"
                                                        name="jhi_name"
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
                                                                id="subcentre-select" name="subcentre[]"  
                                                                multiple                                                            
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
                                                                multiple
                                                                id="ward-select"
                                                                name="ward[]"
                                                            >                                                                                                          
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
$('#subcentre-select').change(function() {
    var subcentreIds = $(this).val();  // Get all selected subcentres

    // Clear the ward select dropdown before adding new options
    var wardSelect = $('#ward-select')[0].tomselect;
    wardSelect.clearOptions();
    wardSelect.addOption({value: '', text: 'Select a Ward'});

    if (subcentreIds && subcentreIds.length > 0) { 
        // Send AJAX request to fetch wards for all selected subcentres
        jQuery.ajax({
            url: '/get_wards_of_subcentres',
            type: 'GET',
            dataType: 'json',
            data: { subcentres: subcentreIds },  // Send an array of selected subcentre IDs
            success: function(response) {
                // Loop through all the wards returned in the response
                response.forEach(function(ward) {
                    wardSelect.addOption({value: ward.id, text: ward.ward_name});
                });

                // Refresh the options in the dropdown
                wardSelect.refreshOptions();
            },
            error: function(xhr, status, error) {
                console.error("Error fetching wards: " + error);
            }
        });
    }
});




</script>
@endpush