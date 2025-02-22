<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">
            <a href="{{ route('home', ['filter' => 'this_month']) }}" class="logo">
                <img src="{{ asset('uploads/all_photo/' . session('business_logo')) }}" {{-- {{
                    asset('backends/assets/img/kaiadmin/logo_light.svg') }} --}}
                    class="navbar-brand" alt="AdminLTE Logo" class="brand-image"
                    style="width: 80%;object-fit: cover;margin-left: 12px;height: 190px;max-height: 105px;" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item @if (Route::is('home')) active @endif">
                    <a href="{{ route('home', ['filter' => 'this_month']) }}">
                        <i class="fas fa-home"></i>
                        <p>@lang('Home')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms"
                        @if (Route::is('roles.*') || Route::is('permission.*')) aria-expanded="true" @else aria-expanded="false" @endif>
                        <i class="fas fa-users"></i>
                        <p>@lang('User Management')</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (Route::is('roles.*') || Route::is('permission.*') || Route::is('users.*') || Route::is('user_contracts.*')) show @endif" id="forms">
                        <ul class="nav nav-collapse">
                            <li class="@if (Route::is('users.*')) active @endif">
                                <a href="{{ route('users.index') }}">
                                    <span class="sub-item">@lang('Users')</span>
                                </a>
                            </li>
                            <li class="@if (Route::is('roles.*')) active @endif">
                                <a href="{{ route('roles.index') }}">
                                    <span class="sub-item">@lang('Roles')</span>
                                </a>
                            </li>
                            <li class="@if (Route::is('permission.*')) active @endif">
                                <a href="{{ route('permission.index') }}">
                                    <span class="sub-item">@lang('Permissions')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables"
                        @if (Route::is('business_setting.*')) aria-expanded="true" @else aria-expanded="false" @endif>
                        <i class="fa fas fa-cog"></i>
                        <p>@lang('Setting')</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse @if (Route::is('business_setting.*')) show @endif" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="@if (Route::is('business_setting.*')) active @endif">
                                <a href="{{ route('business_setting.index') }}">
                                    <span class="sub-item">@lang('General Setting')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
