@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Edit Role</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Edit the Role
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div
                                class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Role</div>
                            </div>
                           
                            <div>
                                <p class="leading-relaxed">
                                    Change the Role name
                                </p>

                                <!-- Display Error Message -->
                                @if (session('error'))                           
                                <x-base.alert variant="danger">
                                    {{ session('error') }}
                                </x-base.alert>
                                @endif

                                <!-- Update Form -->
                                <div class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                   <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Method Spoofing for PUT request -->

                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                        <x-base.preview>
                                            <div>
                                                <x-base.form-label for="regular-form-1">
                                                   Role Name
                                                </x-base.form-label>
                                                <x-base.form-input
                                                    id="regular-form-1"
                                                    type="text"
                                                    placeholder="Role"
                                                    name="role"
                                                    value="{{ old('role', $role->name) }}" 
                                                   
                                                />
                                            </div>

                                            <div class="mt-5">
                                                <x-base.form-label>Permissions</x-base.form-label>
                                                <div class="flex flex-col space-y-2">
                                                    @foreach ($permissions as $permission)
                                                        <div class="flex items-center">
                                                            <input
                                                                type="checkbox"
                                                                name="permissions[]"
                                                                value="{{ $permission->id }}"
                                                                id="permission-{{ $permission->id }}"
                                                                class="mr-2"
                                                                @if(in_array($permission->id, $role->permissions->pluck('id')->toArray())) checked @endif
                                                            />
                                                            <label for="permission-{{ $permission->id }}" class="text-sm">
                                                                {{ $permission->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- Display Validation Errors for 'permission' -->
                                            @error('role')                   
                                                <x-base.alert variant="danger">
                                                    {{ $message }}
                                                </x-base.alert>
                                            @enderror

                                            <!-- Submit Button -->
                                            <x-base.button
                                                class="mt-5"
                                                variant="primary"
                                            >
                                                Update
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
