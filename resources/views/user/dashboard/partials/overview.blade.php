@php
$cardInfos= collect([
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
[
'title' => 'Dashboard',
'route' => 'dashboard',
'icon' => '<ion-icon name="speedometer-outline"></ion-icon>',
'text' => 'This is a wider card with supporting te'
],
]);

@endphp

<div id="user-overview" class="p-4">
  <h5 class="fw-bold mb-4">
    {{ trans('menu.actions') }}
  </h5>

  <div class="d-flex overflow-auto pb-4">
    @foreach ($cardInfos as $cardInfo)
    <div class="card p-4 rounded shadow me-4">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-between align-items-center">
          {{ $cardInfo['title']}}
          {!! $cardInfo['icon'] !!}
        </h5>
        <p class="card-text">{{ $cardInfo['text']}}</p>
      </div>
    </div>
    @endforeach
  </div>
</div>