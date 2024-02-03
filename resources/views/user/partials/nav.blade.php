@php
$navLinks= collect([
[
'name' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>'
],
[
'name' => 'My order',
'route' => 'admin.service.index',
'icon' => '<ion-icon name="qr-code-outline"></ion-icon>'
],
[
'name' => 'Helpcenter',
'route' => 'admin.faq.index',
'icon' => '<ion-icon name="information-circle-outline"></ion-icon>'
],
]);

@endphp

    <ul>
        @foreach ($navLinks as $navLink)
        <li>
            <a href="{{ route($navLink['route']) }}">
                <span class="user-icon">
                    {!! $navLink['icon'] !!}
                </span>
                <span class="user-title">{{ $navLink['name']}}</span>
            </a>
        </li>
        @endforeach
    </ul>
