<!DOCTYPE html>
<html lang="fr" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />


    <!-- Css -->
    <!-- Main Css -->
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-gray-100 dark:bg-gray-900">

    <!-- leftbar-tab-menu -->
    <div class="leftbar-tab min-w-[260px] z-[99] duration-300 print:hidden">
       
        <div class="main-menu-inner h-full w-[200px] my-4  fixed top-0 z-[99] rtl:left-0 rounded-lg transition delay-150 duration-300 ease-in-out">
            <div class="main-menu-inner-logo">
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="leading-[60px]">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt=""
                            class="inline-block dark:hidden h-[75px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt=""
                            class=" hidden dark:inline-block h-[75px] ltr:ml-4 rtl:ml-0 rtl:mr-4">
                    </a>
                    <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-auto block xl:hidden">
                        <button id="toggle-menu-hide-2"
                            class="button-menu-mobile-2 flex rounded-full md:mr-0 relative">
                            <i class="ti ti-chevrons-left top-icon text-3xl"></i>
                        </button>
                    </div>
                </div>
                <div class="menu-body h-[calc(100vh-60px)] p-4" data-simplebar>
                    <div id="Icon-menu">
                        <div class="hidden" id="Dashboards" role="tabpanel" aria-labelledby="Dashboards-tab">

                            <ul class="nav flex-col flex flex-wrap pl-0 mb-0">
                                <li class="nav-item relative block">
                                    <a href="{{ route('dashboard') }}"
                                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                                        <h6 class="text-sm font-medium uppercase text-slate-400">Tableau de bord</h6>
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="{{ route('users') }}"
                                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                                        Gestion des utilisateurs
                                    </a>
                                </li>

                                <li class="nav-item relative block">
                                    <a href="#"
                                        class="nav-link hover:bg-gray-50 hover:text-primary-500 dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                                        Gestion des tâches
                                    </a>
                                </li>

                                <li class="nav-item relative block">
                                    <a href="#"
                                        class="nav-link hover:bg-gray-50 hover:text-primary-500  dark:hover:bg-gray-800/20 rounded-md dark:hover:text-primary-500 relative font-medium text-sm flex items-center h-[38px] decoration-0 px-2 py-4">
                                        Gestion des présences
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed ltr:left-0 ltr:right-4 rtl:right-0 rtl:left-4 print:hidden z-50">
        <nav id="topbar"
            class="topbar border-gray-200  relative ltr:ml-0 rtl:ml-0 ltr:lg:ml-0  rtl:lg:mr-0   ltr:xl:ml-[calc(260px+32px)]  rtl:xl:mr-[calc(260px+32px)] duration-300
             block ">
            <div class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
                <div class="ltr:mr-2 ltr:lg:mr-4 rtl:mr-0 rtl:ml-2 rtl:lg:mr-0 rtl:lg:ml-4 ml-4 xl:ml-0">
                    <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:mr-0 relative">
                        <i class="ti ti-chevrons-left text-3xl  top-icon"></i>
                    </button>
                </div>
                
                <div class="order-1 ltr:ml-auto rtl:ml-0 rtl:mr-auto flex items-center md:order-2">
                   
                    <div class="mr-2 lg:mr-0 dropdown relative">
                        <button type="button"
                            class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
                            id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
                            <img class="h-8 w-8 rounded-full" src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                alt="user photo" />
                            <span class="ltr:ml-2 rtl:ml-0 rtl:mr-2 hidden text-left xl:block">
                                <span class="block font-medium text-slate-600 dark:text-gray-400"> {{ Auth::user()->prenom }} {{ Auth::user()->nom }} </span>
                                <span class="-mt-1 block text-xs text-slate-500 dark:text-gray-500"> {{ Auth::user()->getRoleNames()->first() }} </span>
                            </span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border-slate-700 md:border-white
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                            id="navUserdata">
                            <div class="py-3 px-4">
                                <span class="block text-sm font-medium text-gray-900 dark:text-white">
                                    {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                                </span>
                                <span class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">
                                    {{ Auth::user()->email }}
                                </span>
                            </div>
                            <ul class="py-1" aria-labelledby="navUserdata">
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Tableau de bord</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit') }}"
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Profile</a>
                                </li>
                              
                                <li>
                                    <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">Se déconnecter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div
            class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
            <div class="mt-5 xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">

                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="sm:col-span-12  md:col-span-12">
                        <div class="dark:bg-slate-800 shadow rounded-md w-full relative mb-4">
                            <div class="flex-auto">

                                @isset($header)
                                    <header class="shadow">
                                        <div class="max-w-7xl mx-auto py-6 px-6">
                                            {{ $header }}
                                        </div>
                                    </header>
                                @endisset

                                <!-- Page Content -->
                                <main>
                                    {{ $slot }}
                                </main>


                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end inner-grid-->
            </div><!--end container-->
        </div>
    </div>




    <!-- JAVASCRIPTS -->
    <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/components.js') }}"></script>

    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crm-index.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
