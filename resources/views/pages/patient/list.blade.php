@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Patients</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                   Patients
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
                        <table id="patients-table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Dob</th>
                                    <th>Phone No.</th>
                                    @if($list_type == 'pink_pending' || $list_type == 'blue_pending' || $list_type == 'white_pending')
                                        <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody></tbody> 
                        </table>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
{{-- @vite(['resources/js/app.js', 'resources/css/app.css']) --}}
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />  
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script>

jQuery(document).ready(function() {
    jQuery('#patients-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'getPatientsList',
                    type: 'GET',
                    data: function(d)
                    {
                        d.list_type="{{ $list_type }}"
                    }
                },
                columns: [
                        {  
                            data: null,
                            render: function(data, type, row) {
                                return `<a href="/patient_profile/${data.id}" >${data.patient_code}</a>`;
                            }
                        },
                        { data: 'name' },                  
                        { data: 'dob' },
                        { data: 'phone_no' },
                            @if($list_type=='pink_pending')
                            { 
                                data: null,
                                render: function(data, type, row) {
                                    return `  <x-base.button class="w-24" variant="primary"><a href="/edit_patient/${data.id}" class="btn btn-sm primary">Proceed</a></x-base.button>`;
                                },
                                orderable: false, 
                                searchable: false  
                            }                           
                          
                           
                            @elseif( $list_type=='blue_pending')
                            { 
                                data: null,
                                render: function(data, type, row) {
                                    return `  <x-base.button class="w-24" variant="primary"><a href="/patient_blue_form/${data.id}" class="btn btn-sm primary">Proceed</a></x-base.button>`;
                                },
                                orderable: false, 
                                searchable: false  
                            }  
                            @elseif( $list_type=='white_pending')
                            { 
                                data: null,
                                render: function(data, type, row) {
                                    return `  <x-base.button class="w-24" variant="primary"><a href="/edit_white_form/${data.id}" class="btn btn-sm primary">Proceed</a></x-base.button>`;
                                },
                                orderable: false, 
                                searchable: false  
                            }                          
                          
                            @endif
                    ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print' 
                ],
                pageLength: 10,
                language: {
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",  // Customize the info text
                    infoFiltered: "",  // Remove the "filtered from X total entries" text
                    search: "Search:",  // Customize the search label
                    lengthMenu: "Show _MENU_ entries",  // Customize the entries per page label
                },
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                stateSave: true, 
                drawCallback: function(settings) {
                    console.log("Draw callback triggered");
                }
            });
        });

</script>
@endpush