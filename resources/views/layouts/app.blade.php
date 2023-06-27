<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <!-- Material Icons Link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script src="https://kit.fontawesome.com/cf97dad6a5.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <livewire:styles />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">
</head>

<body class="font-sans antialiased flex flex-col min-h-screen">
    <div class="bg-gray-100 dark:bg-gray-900">
        <x-navigation-layout></x-navigation-layout>

        <!-- Page Heading -->
        <!-- @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }} 
            </div>
        </header>
        @endif -->
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>

    <div class="bg-white px-6 shadow-sm py-10 text-center  text-neutral-800 dark:bg-neutral-700 dark:text-neutral-200 mt-10">
        @if( ! Auth::check() || Auth::user()->role == 1 )
        <a href="{{route('employee-request')}}" class="flex items-center rounded-full space-x-1 bg-blue-900 text-center mx-auto w-fit px-6 pb-1 pt-1 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
            </svg>
            <p>For employee</p>
        </a>
        @endif
        <div class="text-center mx-auto lg:w-1/2 mt-3">
            <h3 class="mb-8 text-sm font-sans ">SoftwareJobs in best place to search and post jobs for both proffessionals and employers.we have quality and trusted opportunities, Let's start a career with us</h3>
        </div>

        <hr class="my-2">

        <div class="">
            <a href="/" class="text-slate-600 text-lg font-sans font-bold" style="font-family: 'Belanosima', sans-serif;">SoftwareJobs</a>

            <div class="space-x-3 my-2">
                <a class="bg-gray-100 shadow-md rounded-full py-2 px-2.5 text-pink-600" href=""> <i class="fa-brands fa-instagram"></i></a>
                <a class="bg-gray-100 shadow-md rounded-full py-2 px-2.5 text-blue-600" href=""><i class="fa-brands fa-telegram"></i></a>
                <a class="bg-gray-100 shadow-md rounded-full py-2 px-2.5 text-green-600" href=""><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- from cdn -->
    <!-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js.map"></script> -->
    <livewire:scripts />

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>

    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>

    <!-- from cdn -->
    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>

    <!-- from cdn -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


    <!-- from cdn -->
    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/tooltip.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <!-- from cdn -->
    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>

    @stack('scripts')

</body>

</html>