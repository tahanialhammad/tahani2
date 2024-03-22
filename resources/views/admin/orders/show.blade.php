@extends('admin.admin-template')
@section('content')

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

<div>
    <div class="col-xl-9 mb-4">
        <h3 class="fw-bold m-0">
            My order
        </h3>

    </div>

    <div class="row g-0">
        <div class="col-xl-9 mt-4 p-4 bg-white rounded">
            <div class="d-flex justify-content-between align-items-start mb-4">
                <div>
                    <h3 class="fw-bold">
                        Order {{$order->id}}
                    </h3>
                    <h6>
                        {{ $order->service->title }}
                    </h6>
                </div>
                <div>
                    <h3 class="fw-bold">
                        Complate
                        <div>
                            {{ $progress}} %

                            <!-- @switch($order->status)
                                @case(2)
                               25
                                @break
                                @case(3)
                                50
                                @default
                              0
                                @break
                            @endswitch -->
                        </div>
                    </h3>

                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar progress-bar-striped bg-success w-{{ $progress}}" role="progressbar"  aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
                <div>
                    <h3 class="fw-bold m-0">
                        Expected <br /> completion
                    </h3>
                    <div>
                        20 Augs 2024
                    </div>
                    <div class="text-muted">
                        15 Days
                    </div>
                </div>
            </div>

            <div class="py-2"></div>
            <div class="w-75 mx-auto my-4 position-relative">
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar progress-bar-striped bg-success w-{{ $progress}}" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="position-absolute top-0 start-0 translate-middle p-2 bg-dark border border-5 border-{{ $progress >= 0 ? 'success' : 'light'}}  rounded-circle"></div>
                        <div class="my-4 pe-3">Data Gathering and Requirements Analysis</div>
                    </div>
                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-{{ $progress >= 25 ? 'success' : 'light'}} rounded-circle" style="left:25%"></div>
                        <div class="my-4 pe-4">Price Agreement and Contract Negotiation</div>
                    </div>

                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-{{ $progress >= 50 ? 'success' : 'light'}}  rounded-circle" style="left:50%"></div>
                        <div class="my-4 pe-3">Planning and Design Phase</div>
                    </div>

                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-{{ $progress >= 75 ? 'success' : 'light'}} rounded-circle" style="left:75%"></div>
                        <div class="my-4 pe-3">Programming and Development</div>
                    </div>
                    <div>
                        <div class="position-absolute top-0 start-100 translate-middle p-2 bg-dark border border-5 border-{{ $progress >= 100 ? 'success' : 'light'}}  rounded-circle"></div>
                        <div class="my-4">Project Completion and Delivery</div>
                    </div>

                </div>

            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="step-1-tab" data-bs-toggle="tab" data-bs-target="#step-1" type="button" role="tab" aria-controls="step-1" aria-selected="true">step-1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="step-2-tab" data-bs-toggle="tab" data-bs-target="#step-2" type="button" role="tab" aria-controls="step-2" aria-selected="false">step-2</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="step-3-tab" data-bs-toggle="tab" data-bs-target="#step-3" type="button" role="tab" aria-controls="step-3" aria-selected="false">step-3</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="step-4-tab" data-bs-toggle="tab" data-bs-target="#step-4" type="button" role="tab" aria-controls="step-4" aria-selected="false">step-4</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="step-5-tab" data-bs-toggle="tab" data-bs-target="#step-5" type="button" role="tab" aria-controls="step-5" aria-selected="false">step-5</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="step-1-tab">tab1</div>
                <div class="tab-pane fade" id="step-2" role="tabpanel" aria-labelledby="step-2-tab">tab2</div>
                <div class="tab-pane fade" id="step-3" role="tabpanel" aria-labelledby="step-3-tab">tab3</div>
                <div class="tab-pane fade" id="step-4" role="tabpanel" aria-labelledby="step-4-tab">tab4</div>
                <div class="tab-pane fade" id="step-5" role="tabpanel" aria-labelledby="step-5-tab">tab5</div>

            </div>
        </div>
        <div class="col-xl-3 px-lg-4 mt-4">

        </div>
    </div>

</div>

@stop