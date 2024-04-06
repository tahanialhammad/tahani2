@extends('admin.admin-template')
@section('content')
<div>
  <div class="page-title d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold m-0">
      {{ trans('services.all-services') }}
    </h3>

    @include('admin.service.partials.create')
  </div>

  <div class="row p-0 g-0">
    <div class="col-xl-7">
      @forelse ($services as $serviceItem)
      @php
      /** @var \Carbon\Carbon $created */
      $created = $serviceItem->created_at;
      @endphp
      <div class="card mb-3 p-4" id="{{ $serviceItem->id }}">
        <div class="card-body p-0">
          <div class="card-title mb-3 d-flex justify-content-between align-items-center">
            <h5 class="fw-bold">
              {{ $serviceItem->title }}
            </h5>
            <div class="d-flex">
              @include('admin.service.partials.edit')
              @include('admin.service.partials.deleteService')
            </div>
          </div>

          <p class="text-muted fw-bold fs-sm">{{ $created->format('d M Y') }}</p>
          <p class="card-text"> {{ $serviceItem->body }}</p>

        </div>
        <div class="card-footer">
          @if(count($serviceItem->packages ))
          <h6>{{ trans ('packages.package-list')}}</h6>
          <div class="d-flex">
            @foreach ( $serviceItem->packages as $package)
            <img src="/images/packages/{{ $package->code }}.svg" class="w-30" alt="{{$package->code}}">
            @endforeach
          </div>
          @endif
        </div>
      </div>
      @empty
      <div class="rounded text-center">
        <h5> {{ trans('services.no-services') }} </h5>
        <icon-empty></icon-empty>
      </div>
      @endforelse
    </div>

    <div class="col-xl-5 p-4">
      @include('admin.service.partials.packages')
    </div>
  </div>
</div>
@stop