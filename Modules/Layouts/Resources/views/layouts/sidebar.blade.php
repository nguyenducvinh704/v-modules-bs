<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>
        <div class="clearfix"></div>
        <br />
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