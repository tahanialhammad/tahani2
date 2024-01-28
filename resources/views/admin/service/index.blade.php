@extends('admin.admin-template')
@section('content')
<div>
  <div class="page-title d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold m-0"> All services</h3>

    @include('admin.service.partials.create')


  </div>




















  <div class="row p-0 g-0">
    <div class="col-xl-7">
      <div class="mb-4">
        @forelse ($services as $serviceItem)
        @php
        /** @var \Carbon\Carbon $created */
        $created = $serviceItem->created_at;
        @endphp
        <div class="card mb-3 p-4">
          <div class="card-body p-0" id="{{ $serviceItem->id }}">
            <h5 class="card-title fw-bold mb-3">
              {{ $serviceItem->title }}
            </h5>
            <p class="text-muted fw-bold fs-sm">{{ $created->format('d M Y') }}</p>
            <div class="card-text m-0">
               {{ $serviceItem->body }}
              <div>array of packages</div>
            </div>
          </div>
        </div>
        @empty

        <div class="card mb-3 p-4">
          <div class="card-body p-0 text-center">
            <h5>Ther is no services </h5>
            <icon-empty></icon-empty>
          </div>
        </div>
        @endforelse


      </div>
    </div>
  </div>
</div>
@stop