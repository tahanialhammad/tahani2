@php
$navLinks= collect([
[
'name' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>'
],
[
'name' => 'My order',
'route' => 'user.order.myorders',
'icon' => '<ion-icon name="qr-code-outline"></ion-icon>'
],
[
'name' => 'Services Store',
'route' => 'user.services.index',
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
    <li>
        <a href="/">
            <span class="user-title">logo</span>
        </a>
    </li>
    @foreach ($navLinks as $navLink)
    <li class="{{ request()->routeIs($navLink['route']) ? 'hoverred' : ''}} mb-1">
    <a href="{{ route($navLink['route']) }}">
            <span class="user-icon">
                {!! $navLink['icon'] !!}
            </span>
            <span class="user-title">{{ $navLink['name']}}</span>
        </a>
    </li>
    @endforeach
</ul>