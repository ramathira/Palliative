@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Patient Diagnosis</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Diagnosis
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <a href="{{ route('diagnosis.create') }}">
                    <x-base.button
                        class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                        variant="primary"
                    >
                        <x-base.lucide
                            class="mr-2 h-4 w-4 stroke-[1.3]"
                            icon="PenLine"
                        />
                        Add New Diagnosis
                    </x-base.button>
                </a>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-8">
               
                <div class="box box--stacked flex flex-col">
                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                        {{-- <div>
                            <div class="relative">
                                <x-base.lucide
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"
                                    icon="Search"
                                />
                                <x-base.form-input3
                                    class="rounded-[0.5rem] pl-9 sm:w-64"
                                    type="text"
                                    placeholder="Search users..."
                                />
                            </div>
                        </div> --}}
                        {{-- <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                            <x-base.menu>
                                <x-base.menu.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="Download"
                                    />
                                    Export
                                    <x-base.lucide
                                        class="ml-2 h-4 w-4 stroke-[1.3]"
                                        icon="ChevronDown"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        PDF
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="mr-2 h-4 w-4"
                                            icon="FileBarChart"
                                        />
                                        CSV
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.popover class="inline-block">
                                <x-base.popover.button
                                    class="w-full sm:w-auto"
                                    as="x-base.button"
                                    variant="outline-secondary"
                                >
                                    <x-base.lucide
                                        class="mr-2 h-4 w-4 stroke-[1.3]"
                                        icon="ArrowDownWideNarrow"
                                    />
                                    Filter
                                    <span
                                        class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium"
                                    >
                                        3
                                    </span>
                                </x-base.popover.button>
                                <x-base.popover.panel>
                                    <div class="p-2">
                                        <div>
                                            <div class="text-left text-slate-500">
                                                Position
                                            </div>
                                            <x-base.form-select class="mt-2 flex-1">
                                                @foreach ($users->take(5) as $fakerKey => $faker)
                                                    <option value="{{ $faker['position'] }}">
                                                        {{ $faker['position'] }}
                                                    </option>
                                                @endforeach
                                            </x-base.form-select>
                                        </div>
                                        <div class="mt-3">
                                            <div class="text-left text-slate-500">
                                                Department
                                            </div>
                                            <x-base.form-select class="mt-2 flex-1">
                                                @foreach ($users->take(5) as $fakerKey => $faker)
                                                    <option value="{{ $faker['department'] }}">
                                                        {{ $faker['department'] }}
                                                    </option>
                                                @endforeach
                                            </x-base.form-select>
                                        </div>
                                        <div class="mt-4 flex items-center">
                                            <x-base.button
                                                class="ml-auto w-32"
                                                variant="secondary"
                                            >
                                                Close
                                            </x-base.button>
                                            <x-base.button
                                                class="ml-2 w-32"
                                                variant="primary"
                                            >
                                                Apply
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.popover.panel>
                            </x-base.popover>
                        </div> --}}
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
                                    Diagnosis
                                    </x-base.table.td>
                                   
                                   
                                   
                                   
                                    <x-base.table.td
                                        class="w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500"
                                    >
                                        Action
                                    </x-base.table.td>
                                </x-base.table.tr>
                            </x-base.table.thead>
                            <x-base.table.tbody>
                                @foreach ($diagnosis as $diagnos)
                                    <x-base.table.tr class="[&_td]:last:border-b-0">
                                        <x-base.table.td class="border-dashed py-4 dark:bg-darkmode-600">
                                            <x-base.form-check.input type="checkbox" />
                                        </x-base.table.td>
                                        <x-base.table.td class="w-80 border-dashed py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                               
                                                <div class="ml-3.5">
                                                    <a
                                                        class="whitespace-nowrap font-medium"
                                                        href=""
                                                    >
                                                        {{ $diagnos['diagnosis'] }}
                                                    </a>
                                                  
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
                                                        <x-base.menu.item :href="route('roles.edit', $diagnos->id)">
                                                            <x-base.lucide
                                                                class="mr-2 h-4 w-4"
                                                                icon="CheckSquare"
                                                            />
                                                            Edit
                                                        </x-base.menu.item>
                                                        <x-base.menu.item 
                                                            class="text-danger delete-permission"
                                                            data-id="{{ $diagnos->id }}"
                                                            href="javascript:void(0);">
                                                            <x-base.lucide class="mr-2 h-4 w-4" icon="Trash2" />
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
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script>
// $(document).ready(function() { 
//     // When the delete button is clicked
//     $('.delete-permission').click(function(e) { 
//         e.preventDefault();

//         // Get the ID of the permission
//         var permissionId = $(this).data('id');
        
//         // Show confirmation popup
//         if (confirm('Are you sure you want to delete this permission?')) {
//             // Send AJAX request to delete the permission
//             $.ajax({
//                 url: '/permissions/' + permissionId,  // Adjust the URL if necessary
//                 method: 'DELETE',
//                 data: {
//                     _token: '{{ csrf_token() }}',  // CSRF token for security
//                 },
//                 success: function(response) {
//                     if (response.success) {
//                         // Remove the permission from the DOM
//                         $('#permission-item-' + permissionId).remove();  // Make sure the element has the correct ID
//                         alert(response.message);  // Show success message
//                     } else {
//                         alert('Error: ' + response.message);  // Show error message if permission deletion failed
//                     }
//                 },
//                 error: function(xhr, status, error) {
//                     // Handle errors in AJAX request
//                     alert('Error: ' + error);
//                 }
//             });
//         }
//     });
// });


</script>
@endpush