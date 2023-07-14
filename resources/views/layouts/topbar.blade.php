<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-sm.svg') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">SYS</span>
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-sm.svg') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">SYS</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
         <!--Naoremover-->
        </div>
        <!-- fimnaoremover-->
        <div class="d-flex">

{{--            <div class="dropdown d-inline-block d-lg-none ms-2">--}}
{{--                <button type="button" class="btn header-item" id="page-header-search-dropdown"--}}
{{--                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i data-feather="search" class="icon-lg"></i>--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"--}}
{{--                    aria-labelledby="page-header-search-dropdown">--}}

{{--                    <form class="p-3">--}}
{{--                        <div class="form-group m-0">--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">--}}

{{--                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>

{{--            <div class="dropdown d-none d-lg-inline-block ms-1">--}}
{{--                <button type="button" class="btn header-item"--}}
{{--                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i data-feather="grid" class="icon-lg"></i>--}}
{{--                </button>--}}

{{--            </div>--}}


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item right-bar-toggle me-2">
                    <i data-feather="settings" class="icon-lg"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="@if (Auth::user()->avatar != ''){{ URL::asset('images/'. Auth::user()->avatar) }}@else{{ URL::asset('assets/images/users/avatar-1.png') }}@endif" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="apps-contacts-profile"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> @lang('translation.Profile')</a>
                    <a class="dropdown-item" href="auth-lock-screen"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> @lang('translation.Lock_Screen')</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1"></i> <span key="t-logout">@lang('translation.Logout')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
