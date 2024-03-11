@php
$navLinks= collect([
[
'name' => trans('menu.dashboard'),
'route' => 'dashboard',
'icon' => '<icon-home class="icon icon-inverted"></icon-home>'
],
[
'name' => trans('menu.customers'),
'route' => 'admin.accounts.index',
'icon' => '<icon-user class="icon icon-inverted"></icon-user>'
],
[
'name' => trans('menu.invoices'),
'route' =>   'admin.invoice.index',
'icon' => '<icon-invoices class="icon icon-inverted"></icon-invoices>'
],
[
'name' => trans('menu.orders'),
'route' =>  'admin.order.index',
'icon' => '<icon-shop class="icon icon-inverted"></icon-shop>'
],
[
'name' => trans('menu.services'),
'route' => 'admin.service.index',
'icon' => '<icon-service class="icon icon-inverted"></icon-service>'
],
[
'name' => trans('menu.helpcenter'),
'route' => 'admin.faq.index',
'icon' => '<icon-info class="icon icon-inverted"></icon-info>'
],
]);

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// $obj = json_decode($jsonobj);


@endphp

{{-- @foreach($obj as $key => $value) 
     {{ $key }} -{{ $value}}
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
            <li class="nav-item  {{ request()->routeIs($navLink['route']) ? 'active' : ''}}">
                <a class="nav-link d-flex align-items-center text-white" href="{{ route($navLink['route']) }}">
                    {!! $navLink['icon'] !!}
                    <span class="ps-3">{{ $navLink['name']}}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</nav>