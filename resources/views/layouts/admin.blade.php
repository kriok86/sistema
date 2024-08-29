@props(['breadcrumb'=>[]])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIRTEC') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--font-awesome-->
        <script src="https://kit.fontawesome.com/2700f5c95d.js" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Scripts sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        @livewireStyles
    <title>Document</title>
</head>
<body x-data="{
    open: false,
}"
:class="{'overflow-hidden': open,
}">

    
    @include('layouts.includes.admin.navigation')

    @include('layouts.includes.admin.siderbar')
  
    
  
    <div class="p-4 sm:ml-64">
        <div class="mt-14">
             @include('layouts.includes.admin.breadcrumb')

            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
               {{$slot}}
            </div>
        </div>
    </div>
    @stack('modals')

    @livewireScripts

    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script> 
    @endif
</body>
</html>