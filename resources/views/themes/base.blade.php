<!DOCTYPE html>

<html
    class="opacity-0"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="description"
        content="Palliative Care Programme"
    >
    <meta
        name="keywords"
        content="palliative care, elderly"
    >
    <meta
        name="author"
        content="Dr. Sreehari M"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')

    <!-- BEGIN: CSS Assets-->
    @stack('styles')
    <!-- END: CSS Assets-->

    @vite('resources/css/app.css')
<style>
    .error-message {
    color: rgb(93, 13, 13);
    font-size: 12px;
    margin-top: 5px;
}
    </style>
</head>
<!-- END: Head -->

<body>
    <x-theme-switcher />

    @yield('content')

    <!-- BEGIN: Vendor JS Assets-->
    @vite('resources/js/vendors/dom.js')
    @vite('resources/js/vendors/tailwind-merge.js')

    @stack('vendors')
    <!-- END: Vendor JS Assets-->

    <!-- BEGIN: Pages, layouts, components JS Assets-->
    @vite('resources/js/components/base/theme-color.js')
    @stack('scripts')
    <!-- END: Pages, layouts, components JS Assets-->
    @stack('custom-scripts')
</body>

</html>
