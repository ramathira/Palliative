@extends('../themes/base')

@section('head')
    <title>Palliative Care-Login</title>
@endsection

@section('content')
    <div
        class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
        <div @class([
            'relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0',
            "before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5",
        ])>
            <div class="relative z-10 flex flex-col justify-center w-full h-full py-2 lg:py-32">
                <div class="flex h-[55px] w-[55px] items-center justify-center rounded-[0.8rem] border border-primary/30">
                    <div
                        class="relative flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] bg-white bg-gradient-to-b from-theme-1/90 to-theme-2/90">
                        <div class="relative h-[26px] w-[26px] -rotate-45 [&_div]:bg-white">
                            <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                            <div class="absolute inset-0 m-auto h-[120%] w-[20%] rounded-full"></div>
                            <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[20%] rounded-full opacity-50"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="text-2xl font-medium">Sign In</div>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                 
                        <div class="mt-6">
                            <!-- <x-base.form-label>Email*</x-base.form-label>
                            <x-base.form-input
                                class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" id="email"
                                placeholder="Email ID"
                            /> -->
                            <x-base.form-label>Username*</x-base.form-label>
                            <x-base.form-input
                                class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                                type="test" name="username" :value="old('username')" required autofocus autocomplete="username" id="username"
                                placeholder="User Name"
                            />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            <x-base.form-label class="mt-4">Password*</x-base.form-label>
                            <x-base.form-input
                                class="block rounded-[0.6rem] border-slate-300/80 px-4 py-3.5"
                                type="password"
                                placeholder="************"
                                id="password"
                                name="password"
                                required autocomplete="current-password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="flex mt-4 text-xs text-slate-500 sm:text-sm">
                                <div class="flex items-center mr-auto">
                                    <x-base.form-check.input
                                        class="mr-2.5 border"
                                        id="remember-me"
                                        type="checkbox"
                                    />
                                    <label
                                        class="cursor-pointer select-none"
                                        for="remember-me"
                                    >
                                        Remember me
                                    </label>
                                </div>
                            
                            </div>
                            <div class="mt-5 text-center xl:mt-8 xl:text-left">
                                <x-base.button
                                    class="w-full bg-gradient-to-r from-theme-1/70 to-theme-2/70 py-3.5 xl:mr-3"
                                    variant="primary"
                                    rounded
                                >
                                    Sign In
                                </x-base.button>
                            
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div
        class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
        <div @class([
            'relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20',
            "after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]",
            "before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]",
        ])></div>
        <div @class([
            'h-full col-span-7 2xl:col-span-8 lg:relative',
            "before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%]",
            "after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat",
        ])>
            <div class="sticky top-0 z-10 flex-col justify-center hidden h-screen ml-16 lg:flex xl:ml-28 2xl:ml-36">
                <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
                    Palliative Care 
                </div>
                <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
                Supporting Lives with Compassion in Every Step of the Journey.
                </div>
                <div class="flex flex-col gap-3 mt-10 xl:flex-row xl:items-center">
                    <div class="flex items-center">                  
                       
                       
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  
@endsection
