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
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
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

            <!-- <div class="w-75 mx-auto mb-4 position-relative">
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="position-absolute top-0 start-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle"></div>
                <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle" style="left:25%"></div>
                <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle" style="left:50%"></div>
                <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-light rounded-circle" style="left:75%"></div>
                <div class="position-absolute top-0 start-100 translate-middle p-2 bg-dark border border-5 border-light rounded-circle"></div>
            </div> -->


            <div class="py-2"></div>
            <div class="w-75 mx-auto my-4 position-relative">
                <div class="progress" style="height: 5px;">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="position-absolute top-0 start-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle"></div>
                        <div class="my-4 pe-3">Data Gathering and Requirements Analysis</div>
                    </div>
                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle" style="left:25%"></div>
                        <div class="my-4 pe-4">Price Agreement and Contract Negotiation</div>
                    </div>

                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-success rounded-circle" style="left:50%"></div>
                        <div class="my-4 pe-3">Planning and Design Phase</div>
                    </div>

                    <div>
                        <div class="position-absolute top-0 translate-middle p-2 bg-dark border border-5 border-light rounded-circle" style="left:75%"></div>
                        <div class="my-4 pe-3">Programming and Development</div>
                    </div>
                    <div>
                        <div class="position-absolute top-0 start-100 translate-middle p-2 bg-dark border border-5 border-light rounded-circle"></div>
                        <div class="my-4">Project Completion and Delivery</div>
                    </div>

                </div>

            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">tab1</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">tab2</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">tab3</div>
            </div>
        </div>
        <div class="col-xl-3 px-lg-4 mt-4">

        </div>
    </div>

    {{$order}}

</div>

@stop