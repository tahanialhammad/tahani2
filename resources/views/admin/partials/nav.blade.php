@php
     $navLinks= collect([
            [
                'name' => 'Dashboard',
                'route' => 'dashboard',
                'icon' => '<icon-home class="icon icon-inverted"></icon-home>'
            ],
            [
                'name' => 'Helpcenter',
                'route' => 'admin.faq.index',
                'icon' => '<icon-info class="icon icon-inverted"></icon-info>'
            ],
        ]);    
// $arraylink  = ['hh', 'kk'];

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);



@endphp

{{-- @foreach($obj as $key => $value) 
     {{ $key }} -{{ $value}}
    @endforeach

@foreach ($arraylink as $item)
    {{ $item}}
@endforeach --}}

<nav class="h-100 overflow-hiddenttt overflow-auto">
    <div>
        <!-- brand -->
        <div class="mt-4">
            <a href="/">
                <div class="SidebarLogo"></div>
            </a>
        </div>
        <!-- / brand -->

        <ul class="nav flex-column flex-nowrap text-capitalize mt-5">
            @foreach ($navLinks as $navLink)
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white" href="{{ route($navLink['route']) }}">
                    {!! $navLink['icon'] !!}
                    <span class="ps-3">{{ $navLink['name']}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>