@extends('user.user-template')

@section('content')
<div>
    <div class="page-title d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0">
            {{ trans('services.all-services') }}
        </h3>
        @include('user.services.partials.filter')
    </div>

    <div class="row p-0 g-0">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($services as $serviceItem)
            @php
            /** @var \Carbon\Carbon $created */
            $created = $serviceItem->created_at;
            @endphp
            <div class="col">
                <div class="card h-100 p-4">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center"> {{ $serviceItem->title }}</h5>
                        <p class="card-text"> {{ $serviceItem->body }}</p>
                        @if(count($serviceItem->packages ))
                        <h6>{{ trans ('packages.package-list')}}</h6>
                        <ul>
                            @foreach ( $serviceItem->packages as $package)
                            <li> <img src="/images/packages/{{ $package->code }}.svg" class="w-30" alt="{{$package->code}}"></li>
                            @endforeach
                        </ul>
                        @endif

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last boeked 3 mins ago</small>
                    </div>
                </div>
            </div>
            @empty

            <div class="card mb-3 p-4">
                <div class="card-body p-0 text-center">
                    <h5> {{ trans('services.no-services') }} </h5>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@stop