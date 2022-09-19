<ul class="nav child_menu">
    @foreach ($items as $sub)
    <li>
        <a class="nav-link {{ (isset($path_here[3]) ==  $sub['name']) ? 'active' : '' }}"
            href="{!! $sub['url'] !!}"
            >
            {!! $sub['title'] !!}
        </a>
    </li>
    @endforeach
</ul>