@foreach ($menu_admin as $menu)
@php
    $has_sub_menu = false;
    if(isset($menu['sub'])){
        $has_sub_menu = true;
    }
    // $has_sub_menu = isset($menu['sub']) ? true : false;
    $path_here = explode('/', $_SERVER['REQUEST_URI']);
@endphp


<li class="{{ ($path_here[2] ==  $menu['name']) ? 'active' : '' }}">
    <a><i class="{{ $menu['icon'] }}"></i> {{ $menu['title'] }}
        @if ($has_sub_menu)
            <span class="fa fa-chevron-down"></span>
        @endif
    </a>
    @if($has_sub_menu)
        @php
        $sort_admin_sub = Arr::sort($menu['sub'], function ($value) {
            return $value['priority'];
        });
        $menu['sub'] = array_values($sort_admin_sub);
        @endphp
        @include('layouts::layouts.sidebar-menu-item', [
            'items' => $menu['sub'],
            'path_here' => $path_here,
        ])
    @endif
    
</li>
@endforeach