<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'User Management System') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>
        <!-- BEGIN GLOBAL MANDATORY CUSTOM STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">

        <!-- JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- BEGIN GLOBAL MANDATORY CUSTOM SCRIPTS -->
        <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        
        <!-- END GLOBAL MANDATORY CUSTOM SCRIPTS -->
        <script src="{{ asset('assets/js/authentication/form-2.js') }}"></script>

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
    

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
        <script src="{{  asset('assets/js/dashboard/dash_1.js') }}"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    </head>

    <body class="Resend verification email">
            <div class="header-container">
                <header class="header navbar navbar-expand-sm">

                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                    <div class="nav-logo align-self-center">
                        <a class="navbar-brand" href="#"><img alt="logo" src="{{  asset('assets/img/90x90.jpg')}}"> <span class="navbar-brand-name">Laravel</span></a>
                    </div>

                    <ul class="navbar-item flex-row mr-auto">
                        <li class="nav-item align-self-center search-animated">
                            <form class="form-inline search-full form-inline search" role="search">
                                <div class="search-bar">
                                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                                </div>
                            </form>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </li>
                    </ul>

                    <ul class="navbar-item flex-row nav-dropdowns">
                        <li class="nav-item dropdown message-dropdown">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                            </a>
                            <div class="dropdown-menu p-0 position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                                <div class="">
                                    <a class="dropdown-item">
                                        <div class="">

                                            <div class="media">
                                                <div class="user-img">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title rounded-circle">KY</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h5 class="usr-name">Kara Young</h5>
                                                        <p class="msg-title">ACCOUNT UPDATE</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="">
                                            <div class="media">
                                                <div class="user-img">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title rounded-circle">DA</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h5 class="usr-name">Daisy Anderson</h5>
                                                        <p class="msg-title">ACCOUNT UPDATE</p>
                                                    </div>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="">

                                            <div class="media">
                                                <div class="user-img">
                                                    <div class="avatar avatar-xl">
                                                        <span class="avatar-title rounded-circle">OG</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h5 class="usr-name">Oscar Garner</h5>
                                                        <p class="msg-title">ACCOUNT UPDATE</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown notification-dropdown">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                            </a>
                            <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                                <div class="notification-scroll">

                                    <div class="dropdown-item">
                                        <div class="media server-log">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Server Rebooted</h6>
                                                    <p class="">45 min ago</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="media ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Licence Expiring Soon</h6>
                                                    <p class="">8 hrs ago</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="media file-upload">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Kelly Portfolio.pdf</h6>
                                                    <p class="">670 kb</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        
                        <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                           @if(Route::has('login'))
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media">
                                   @guest
                                    <img src="{{ asset('assets/img/90x90.jpg') }}" class="img-fluid" alt="admin-profile">
                                    @else
                                    <div class="media-body align-self-center">
                                        <h6><span>Hi, </span>{{ Auth::user()->name }}</h6>
                                    </div>
                                    @endguest
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            @endif
                            <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                                <div class="">
                                    @if(Route::has('login'))
                                        <div class="dropdown-item">
                                            @auth
                                            <a href="{{ route('user.profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>My Profile</a>
                                        </div>
                                        <div class="dropdown-item">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                            document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                                @csrf                                        
                                            </form>
                                            @else
                                                <div class="dropdown-list">
                                                    <a class="" href="{{ route('login') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Login</a>
                                                </div>
                                                @if (Route::has('register'))
                                                <div class="dropdown-list">
                                                    <a href="{{ route('register') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Register</a>
                                                </div>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>

     @can('logged-in')
            <!--  BEGIN MAIN CONTAINER  -->
            <div class="main-container" id="container">

                <div class="overlay"></div>
                <div class="search-overlay"></div>

                <!--  BEGIN TOPBAR  -->
                <div class="topbar-nav header navbar" role="banner">
                    <nav id="topbar">
                        <ul class="navbar-nav theme-brand flex-row  text-center">
                            <li class="nav-item theme-logo">
                                <a href="#">
                                    <img src="{{ asset('assets/img/90x90.jpg') }}" class="navbar-logo" alt="logo">
                                </a>
                            </li>
                            <li class="nav-item theme-text">
                                <a href="#" class="nav-link"> Laravel </a>
                            </li>
                        </ul>

                        <ul class="list-unstyled menu-categories" id="topAccordion">

                            <li class="menu single-menu active">
                                <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        <span>Home</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>
                                <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                                    <li>
                                        <a href="#"> Dashboard </a>
                                    </li>
                                </ul>
                            </li>

                            @can('is-admin')
                                <li class="menu single-menu">
                                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                            <span>View</span>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </a>
                                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                                        <li>
                                            <a href="{{ route('admin.users.index') }}"> Users </a>
                                        </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </nav>
                </div>
            </div>
            <br>
       
        <main class="container">
            @include('partials.alerts')
            @yield('content')
        </main>
    </body>
</html>
