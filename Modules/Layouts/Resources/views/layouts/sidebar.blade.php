<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title nav_title text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="border: 0;">
            <a href="{{ route('dashboard') }}" class="site_title">
                <img style="display: inline-block; max-width: 100px; height:auto" src="{{ asset('images/logo/logo.jpg') }}" alt="Logo">
            </a>
        </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    @php
                    $menu_admin = config('menu_admin');
                    $sort_menu_admin = Arr::sort($menu_admin, function ($value) {
                        return $value['priority'];
                    });
                    $menu_admin = array_values($sort_menu_admin);
                    @endphp
                    @include('layouts::layouts.sidebar-menu', $menu_admin)
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>