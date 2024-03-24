@extends('user.user-template')

@section('content')

<div>
    <h1>user my orders</h1>
    @forelse($orders as $order)
    @php
    $progress = 0;
    switch($order->status){
    case 2 :
    $progress = 25;
    break;
    case 3 :
    $progress = 50;
    break;
    case 4 :
    $progress = 75;
    break;
    case 5 :
    $progress = 100;
    break;
    default :
    $progress = 0;
    break;
    }

    @endphp
    <div class="row p-3 bg-white border border-info mb-2 rounded align-items-center hover-shadow">
        <div class="col"># {{$order->id}}</div>
        <div class="col">{{ $order->service->title }} </div>
        <div class="col">{{$order->price}} €</div>
        <div class="col">{{ $order->status}}</div>
        <div class="col">
          
        <div class="progress" style="height: 5px;">
                        <div class="progress-bar progress-bar-striped bg-success w-{{ $progress}}" role="progressbar"  aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
        </div>

    </div>



    @empty
    <div class="d-flex flex-column justify-content-center align-items-center w-50 mx-auto" style="height: 75vh;">
        <h3 class="fw-bold">{{ trans('services.no-orders')}}</h3>

        <img src="/images/empty-box.svg" class="w-25 my-4" alt="no orders">

        <div class="">
            <button class="btn btn-outline-dark rounded-pill px-5 border-2 fw-bold mx-auto shadow-none">
                Add service
            </button>
        </div>
    </div>
    @endforelse
</div>
@stop