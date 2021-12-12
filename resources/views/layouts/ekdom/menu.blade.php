<nav id="compactSidebar">
    <ul class="menu-categories">
        <li class="menu menu-single">
            <a href="{{ route('dashboard') }}" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <span>Beranda</span>
                </div>
            </a>
        </li>
        @switch(Auth::user()->Role_idRole)
        @case(3)
        <li class="menu">
            <a href="#app" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </div>
                    <span>Pertanyaan</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#uiKit" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <span>Users <br> Management</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#jurusan" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <span>Jurusan</span>
                </div>
            </a>
        </li>

        <li class="menu menu-single">
            <a href="{{ ('#') }}" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                            <polyline points="7 3 7 8 15 8"></polyline>
                        </svg>
                    </div>
                    <span>Hasil <br> Evaluasi</span>
                </div>
            </a>
        </li>
        @break
        @case(2)
        <li class="menu">
            <a href="#app" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                    </div>
                    <span>Pertanyaan</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="#forms" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </div>
                    <span>Kirim Evaluasi</span>
                </div>
            </a>
        </li>

        <li class="menu menu-single">
            <a href="{{ ('#') }}" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                    </div>
                    <span>Hasil Evaluasi <br> Kinerja Dosen</span>
                </div>
            </a>
        </li>
        @break
        @case(1)
        <li class="menu">
            <a href="#pages" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </div>
                    <span>Kirim Evaluasi</span>
                </div>
            </a>
        </li>
        <li class="menu menu-single">
            <a href="widgets.html" data-active="false" class="menu-toggle">
                <div class="base-menu">
                    <div class="base-icons">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <span>Profile</span>
                </div>
            </a>
        </li>
        @break
        @endswitch
    </ul>
</nav>

<div id="compact_submenuSidebar" class="submenu-sidebar">

    <div class="submenu" id="app">
        <ul class="submenu-list menu-block-submenu" data-parent-element="#app">
            <li class="menu-block">
                <a href="{{ route('allPertanyaan') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg> Pertanyaan</a>
            </li>
            <li class="menu-block">
                <a href="{{ route('formPertanyaan') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="12" y1="18" x2="12" y2="12"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>Tambah
                    <br>Pertanyaan</a>
            </li>
            @if(Auth::user()->Role_idRole == 3)
            <li class="menu-block">
                <a href="{{ route('kategori-evaluasi') }}"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg> Kategori</a>
            </li>
            <li class="menu-block">
                <a href="{{ route('kategori-evaluasi-forms') }}"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>Tambah
                    <br>Kategori </a>
            </li>
            @endif
        </ul>
    </div>

    <div class="submenu" id="uiKit">
        <ul class="submenu-list" data-parent-element="#uiKit">
            <li>
                <a href="{{ route('lihat_users') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Users </a>
            </li>
            <li>
                <a href="{{ route('form_users') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Tambah Users</a>
            </li>
        </ul>
    </div>

    <div class="submenu" id="jurusan">
        <ul class="submenu-list" data-parent-element="#jurusan">
            <li>
                <a href="{{ route('jurusan') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Jurusan </a>
            </li>
            <li>
                <a href="{{ route('forms_jurusan') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Tambah Jurusan</a>
            </li>
        </ul>
    </div>

    <div class="submenu" id="components">
        <ul class="submenu-list" data-parent-element="#components">
            <li>
                <a href="component_tabs.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Tabs </a>
            </li>
            <li>
                <a href="component_accordion.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Accordions </a>
            </li>
            <li>
                <a href="component_modal.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Modals </a>
            </li>
            <li>
                <a href="component_cards.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Cards </a>
            </li>
            <li>
                <a href="component_bootstrap_carousel.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Carousel</a>
            </li>
            <li>
                <a href="component_blockui.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Block UI </a>
            </li>
            <li>
                <a href="component_countdown.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Countdown </a>
            </li>
            <li>
                <a href="component_counter.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Counter </a>
            </li>
            <li>
                <a href="component_sweetalert.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Sweet Alerts </a>
            </li>
            <li>
                <a href="component_timeline.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Timeline </a>
            </li>
            <li>
                <a href="component_snackbar.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Notifications </a>
            </li>
            <li>
                <a href="component_session_timeout.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Session Timeout </a>
            </li>
            <li>
                <a href="component_media_object.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Media Object </a>
            </li>
            <li>
                <a href="component_list_group.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> List Group </a>
            </li>
            <li>
                <a href="component_pricing_table.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Pricing Tables </a>
            </li>
            <li>
                <a href="component_lightbox.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Lightbox </a>
            </li>
        </ul>
    </div>

    <div class="submenu" id="forms">
        <ul class="submenu-list" data-parent-element="#forms">
            <li>
                <a href="form_bootstrap_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Basic </a>
            </li>
            <li>
                <a href="form_input_group_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Input Group </a>
            </li>
            <li>
                <a href="form_layouts.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Layouts </a>
            </li>
            <li>
                <a href="form_validation.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Validation </a>
            </li>
            <li>
                <a href="form_input_mask.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Input Mask </a>
            </li>
            <li>
                <a href="form_bootstrap_select.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Bootstrap Select </a>
            </li>
            <li>
                <a href="form_select2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Select2 </a>
            </li>
            <li>
                <a href="form_bootstrap_touchspin.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> TouchSpin </a>
            </li>
            <li>
                <a href="form_maxlength.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Maxlength </a>
            </li>
            <li>
                <a href="form_checkbox_radio.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Checkbox &amp; Radio </a>
            </li>
            <li>
                <a href="form_switches.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Switches </a>
            </li>
            <li>
                <a href="form_wizard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Wizards </a>
            </li>
            <li>
                <a href="form_fileupload.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> File Upload </a>
            </li>
            <li>
                <a href="form_quill.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Quill Editor </a>
            </li>
            <li>
                <a href="form_markdown.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Markdown Editor </a>
            </li>
            <li>
                <a href="form_date_range_picker.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Date &amp; Range Picker </a>
            </li>
            <li>
                <a href="form_clipboard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Clipboard </a>
            </li>
            <li>
                <a href="form_typeahead.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Typeahead </a>
            </li>
        </ul>
    </div>

    <div class="submenu" id="tables">
        <ul class="submenu-list" data-parent-element="#tables">
            <li>
                <a href="table_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Basic Tables</a>
            </li>
            <li class="sub-submenu">
                <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables" aria-expanded="true">
                    <div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            </svg></span> Datatables</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
                <ul id="datatables" class="collapse show" data-parent="#compact_submenuSidebar">
                    <li>
                        <a href="table_dt_basic.html"> Basic </a>
                    </li>
                    <li>
                        <a href="table_dt_striped_table.html"> Striped Table </a>
                    </li>
                    <li>
                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                    </li>
                    <li>
                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                    </li>
                    <li>
                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                    </li>
                    <li>
                        <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                    </li>
                    <li>
                        <a href="table_dt_custom.html"> Custom </a>
                    </li>
                    <li>
                        <a href="table_dt_range_search.html"> Range Search </a>
                    </li>
                    <li>
                        <a href="table_dt_html5.html"> HTML5 Export </a>
                    </li>
                    <li>
                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                    </li>
                    <li>
                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="submenu" id="pages">
        <ul class="submenu-list" data-parent-element="#pages">
            <li>
                <a href="pages_helpdesk.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Helpdesk </a>
            </li>
            <li>
                <a href="pages_contact_us.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Contact Form </a>
            </li>
            <li>
                <a href="pages_faq.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> FAQ </a>
            </li>
            <li>
                <a href="pages_faq2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> FAQ 2 </a>
            </li>
            <li>
                <a href="pages_privacy.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Privacy Policy </a>
            </li>
            <li>
                <a href="pages_coming_soon.html" target="_blank"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Coming Soon </a>
            </li>
            <li>
                <a href="user_profile.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Profile </a>
            </li>
            <li>
                <a href="user_account_setting.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Account Settings </a>
            </li>
            <li>
                <a href="fonticons.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Font Icons </a>
            </li>

            <li>
                <a href="pages_error404.html" target="_blank"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Error 404 </a>
            </li>
            <li>
                <a href="pages_error500.html" target="_blank"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Error 500 </a>
            </li>

            <li>
                <a href="pages_error503.html" target="_blank"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Error 503 </a>
            </li>
            <li>
                <a href="pages_maintenence.html" target="_blank"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="1.05" y1="12" x2="7" y2="12"></line>
                            <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                        </svg></span> Maintanence </a>
            </li>

        </ul>
    </div>

</div>
