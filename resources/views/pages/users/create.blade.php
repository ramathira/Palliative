@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Add a new user</title>
@endsection

@section('breadcrumb') dfdf
@endsection

@section('subcontent')

    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Add a new User
                </div>
                
            </div>
            <div class="mt-7">
                <form action="{{ route('users.store')  }}" method="POST">
                    @csrf
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        {{-- @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Role</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-select id="role-select" name="role">
                                        <option value="">Select</option> 
                                        </x-base.form-select>
                                  
                                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                        
                                  
                                </div>
                            </div>
                        </div>      
                       
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center" id="mlsp_block" style="display:none">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">MLSP</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-select id="mlsp-select" name="mlsp">
                                            <option value="">Select</option> 
                                            </x-base.form-select>
                                    
                                        <x-input-error :messages="$errors->get('mlsp')" class="mt-2" />
                                            
                                    
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center" id="jhi_block" style="display:none">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">JHI</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-select id="jhi-select" name="jhi">
                                            <option value="">Select</option> 
                                            </x-base.form-select>
                                    
                                        <x-input-error :messages="$errors->get('jhi')" class="mt-2" />
                                            
                                    
                                    </div>
                                </div>
                            </div>  

                            <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center" id="jphn_block" style="display:none">
                                <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">JPHN</div>
                                            <div
                                                class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                Required
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="mt-3 w-full flex-1 xl:mt-0">
                                    <div class="flex flex-col items-center md:flex-row">
                                        <x-base.form-select id="jphn-select" name="jphn">
                                            <option value="">Select</option> 
                                            </x-base.form-select>
                                    
                                        <x-input-error :messages="$errors->get('jphn')" class="mt-2" />
                                            
                                    
                                    </div>
                                </div>
                            </div>  
                        
                       
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Full Name</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Full Name"
                                        id="name"
                                        name="name" :value="old('name')"
                                        required
                                        id="name"
                                    />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                  
                                </div>
                            </div>
                        </div>                     
                        
                      

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">User Name</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="User Name"
                                        name="username" :value="old('username')" 
                                        required
                                        id="username"
                                    />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                  
                                </div>
                            </div>
                        </div> 
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Password</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"                                      
                                        placeholder="Password"
                                        type="password"
                                        name="password"
                                         id="password"
                                    />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                  
                                </div>
                            </div>
                        </div> 
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Confirm Password</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        type="password"
                                        name="password_confirmation"  
                                        id="password_confirmation"
                                       
                                        required
                                    />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                        <x-base.button
                            class="w-full border-primary/50 px-10 md:w-auto"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                                icon="Pocket"
                            />
                            Submit
                        </x-base.button>
                    </div>
                </div>
            </form>
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
            url: '/get_all_roles',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                const $select = jQuery('#role-select');
    
               
                if ($select.length) {
                    $select.empty().append('<option value="">Select</option>');
    
                    response.forEach(function (data) {
                        $select.append('<option value="' + data.id + '">' + data.name + '</option>');
                    });
                } else {
                    console.error('Subcentre select element not found.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching subcentres:', error);
            }
        });


        jQuery('#role-select').change(function () {
                if (jQuery(this).val() == '10') 
                { 
                    hide_all_blocks();
                    //  "MLSP"
                    jQuery('#mlsp_block').show();
                    jQuery.ajax({
                        url: '/get_all_mlsp',
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            const $select = jQuery('#mlsp-select');  
                            if ($select.length) {
                                $select.empty().append('<option value="">Select</option>');    
                                response.forEach(function (data) {
                                    $select.append('<option value="' + data.id + '">' + data.mlsp_name + '</option>');
                                });
                            } else {
                                console.error('Subcentre select element not found.');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching subcentres:', error);
                        }
                    });
                }
                else if (jQuery(this).val() == '9') 
                { //  "Jhi"
                    hide_all_blocks();
                    jQuery('#jhi_block').show();
                   
                    jQuery.ajax({
                        url: '/get_all_jhis',
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            const $select = jQuery('#jhi-select');  
                            if ($select.length) {
                                $select.empty().append('<option value="">Select</option>');    
                                response.forEach(function (data) {
                                    $select.append('<option value="' + data.id + '">' + data.jhi_name + '</option>');
                                });
                            } else {
                                console.error('JHI select element not found.');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching subcentres:', error);
                        }
                    });
                }

                else if (jQuery(this).val() == '11') 
                { //  "Jhi"
                    hide_all_blocks();
                    jQuery('#jphn_block').show();
                   
                    jQuery.ajax({
                        url: '/get_all_jphns',
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            const $select = jQuery('#jphn-select');  
                            if ($select.length) {
                                $select.empty().append('<option value="">Select</option>');    
                                response.forEach(function (data) {
                                    $select.append('<option value="' + data.id + '">' + data.jphn_name + '</option>');
                                });
                            } else {
                                console.error('JHI select element not found.');
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching subcentres:', error);
                        }
                    });
                }
                
                 else {
                    jQuery('#jphn_block').hide();
                }
            });

        });

        function hide_all_blocks()
        {
            jQuery('#mlsp_block').hide();
            jQuery('#jhi_block').hide();
            jQuery('#jphn_block').hide();
        }
    </script>
    @endpush