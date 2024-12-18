@extends('user.user-template')

@section('content')
<!-- https://dribbble.com/shots/20133194-Contact-Us-Day-28 -->
<div class="row bg-white rounded shadow m-4" style="height: 85vh;">
    <div class="col-4 bg-info rounded p-4 h-100 text-white">
        <h3> {{$service->title}}</h3>
        <p> {{$service->body}}</p>
    </div>
    <div class="col p-4 h-100">
        <h3> {{$service->title}}</h3>
        <form method="POST" role="form" action="{{ route('user.order.addNewOrder', ['service' => $service->id ]  ) }}">
            <x-bs-input type="text" name="serviceId" value="{{$service->id}}" />

            @csrf
            <x-bs-button type="submit">
                Save
            <icon icon-name="back" Class="icon-md icon-inverted icon-rotate ms-2"></icon>
            </x-bs-button>
        </form>
    </div>

</div>


@stop