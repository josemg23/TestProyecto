<!DOCTYPE html>
<html lang="es">
<!-- Copied from http://radixtouch.in/templates/admin/aegis/source/light/index.html by Cyotek WebCopy 1.7.0.600, Saturday, September 21, 2019, 2:51:57 AM -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Permisos y Roles</title>
    <!-- General CSS Files -->

    <link rel="stylesheet" href=" {{ asset('aegis/source/light/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aegis/source/light/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('aegis/source/light/assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('aegis/source/light/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('aegis/source/light/assets/bundles/izitoast/css/iziToast.min.css') }}">

    <!-- Template CSS -->
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('aegis/source/light/assets/img/favicon.ico') }}">

    @yield('style')

    @livewireStyles
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                        collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <form class="form-inline mr-auto">
                        </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"></i>
                            <span class="badge headerBadge2">
                                3 </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                        class="dropdown-item-icon bg-primary text-white"> <i class="fas
                                                          fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                        available now! <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i class="far
                                                          fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                            Sugiharto</b> are now friends <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-success text-white"> <i class="fas
                                                          fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                        moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i class="fas
                                                          fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Aegis
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <i data-feather="settings"></i>
                                <span class="d-sm-none d-lg-inline-block"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pullDown">
                                <div class="dropdown-title"> {{ Auth::user()->name }}</div>
                                <div class="dropdown-divider">{{ Auth::user()->roles[0]->name }}</div>
                                <a href="{{ url('/admin/mi-perfil') }}" class="dropdown-item has-icon"> <i class="far
                                            fa-user"></i> Perfil
                                </a>
                                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Cerrar Sesi??n') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ url('/') }}"> <img alt="image"
                                src="{{ asset('aegis/source/light/assets/img/logo.png') }}" class="header-logo">
                            <span class="logo-name">Ripzer</span>
                        </a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            @if (Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" class="img-fluid mr-2" alt="avatar">
                            @else
                                <img alt="image" src="{{ Avatar::create(Auth::user()->name)->setChars(2) }}">
                            @endif

                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name"> {{ Auth::user()->name }}</div>
                            <div class="user-role">{{ Auth::user()->roles[0]->name }}</div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MENU</li>
                     
                        {{-- aqui MENU JSON --}}                   
                            @foreach ($menuData[0]->menu as $menu)
                            @include('layouts.panels.menuVertical',['menu' => $menu])
                            @endforeach
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">

                @yield('content')

                {{-- <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Panel de Configuraci??n
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input select-layout" checked="">
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked="">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label>
                                        <span class="control-label p-r-20">Mini Sidebar</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="#">Redstar</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('aegis/source/light/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('aegis/source/light/assets/js/scripts.js') }}"></script>

    @livewireScripts
    <!-- Evento de Modales -->
    <script src="{{ asset('js/eventos.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('aegis/source/light/assets/js/custom.js') }}"></script>
    <script src="{{ asset('aegis/source/light/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('aegis/source/light/assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}">
    </script>

</body>

</html>
