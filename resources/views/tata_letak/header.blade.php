<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <div class="theme-logo">
            <a href="index.html">
                <img src="{{ asset('assets/uho-min.png') }}" class="navbar-logo" alt="logo">
                <span class="admin-logo">EKDOM FIB.<span></span></span>
            </a>
        </div>

        <div class="sidebarCollapseFixed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </div>
        @include('layouts.ekdom.menu')
    </div>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="content-container">

                <div class="col-left layout-top-spacing">
                    <div class="col-left-content">

                        <div class="header-container">
                            <header class="header navbar navbar-expand-sm">
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                        <div class="bt-menu-trigger">
                                            <span></span>
                                        </div>
                                    </a>
                                    <div class="page-header">
                                        <div class="page-title">
                                            <h3>Dashboard</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-actions">
                                    <div class="nav-item dropdown language-dropdown more-dropdown">
                                        <div class="dropdown custom-dropdown-icon">
                                            <a class="dropdown-toggle btn" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/uho-min.png') }}" class="flag-width" alt="{{ Auth::user()->username }}"><span>{{ Auth::user()->name }}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                               <p class="dropdown-item">Role:
                                                   @switch(Auth::user()->Role_idRole)
                                                       @case(1)
                                                            {{ __('mahasiswa') }}
                                                            @break
                                                       @case(2)
                                                            {{ __('dosen') }}
                                                            @break
                                                       @case(3)
                                                            {{ __('administrator') }}
                                                            @break
                                                   @endswitch
                                               </p>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('keluar')  }}</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="toggle-notification-bar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                    </div>
                                </div>
                            </header>
                        </div>
