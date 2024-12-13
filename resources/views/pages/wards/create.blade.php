@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Add Ward</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex items-center h-10">
                <div class="text-lg font-medium group-[.mode--light]:text-white">
                    Add a new Ward
                </div>
            </div>
            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7 lg:gap-y-10 xl:grid-cols-10">
                <div class="relative flex flex-col col-span-12 gap-y-7 lg:col-span-9 xl:col-span-8">
                    <div class="flex flex-col p-5 box box--stacked">
                        <x-base.preview-component>
                            <div class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
                                <div class="text-[0.94rem] font-medium">Ward</div>
                            </div>
                            
                            <div>
                                

                                @if (session('error'))
                                    <x-base.alert variant="danger">
                                        {{ session('error') }}
                                    </x-base.alert>
                                @endif
                                <div class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">
                                    <form action="{{ route('wards.store') }}" method="POST">
                                        @csrf
                                        <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                                            <x-base.preview>
                                                <div>
                                                    <x-base.form-label for="ward-name">
                                                        Ward Name
                                                    </x-base.form-label>
                                                    <x-base.form-input
                                                        id="ward-name"
                                                        type="text"
                                                        placeholder="Ward"
                                                        name="ward"
                                                    />
                                                </div>
<br>
                                                <div>
                                                    <x-base.form-label>
                                                         Sub Centre
                                                    </x-base.form-label>
                                                    <br>
                                                    <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
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
