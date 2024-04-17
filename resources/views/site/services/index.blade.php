@extends('site.site-template')

@section('header')
<div class="col-8 mx-auto my-4 py-5 bg-light rounded ">
    <h1 class="fw-bold text-center mb-4">
        Ur services
    </h1>
</div>
@stop

@section('content')
<div class="row p-4">
    <div class="col-2">
        category
    </div>
    <div class="row col-10">
        <div class="col-6">
            <div class="card position-relative" style="background: rgb(238,174,202); background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
                <img src="images/m-dashboard.png" class="position-absolute " alt="..." style="width:100px; right:50px; top: -50px">
                <div class="card-body w-75 text-dark p-4">
                    <div class="d-flex flex-column g-3 p-4">
                        <h3 class="fw-bold">Web app</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-block text-center">
                            <button class="btn btn-sm btn-dark rounded-pill px-4 py-2 border-2 fw-bold shadow-none">
                                More info
                            </button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="col-4">
        <div class="card mb-3 " style="background: rgb(225,209,231);background: radial-gradient(circle, rgba(225,209,231,1) 15%, rgba(148,187,233,1) 64%);">
                <div class="card-body w-75 text-dark">
                    <div class="d-flex flex-column g-3 p-4">
                        <h3 class="fw-bold">Get up to <span class="text-danger">20 %</span> off website</h3>
                    </div>
                </div>
            </div>

            <div class="card position-relative" style="background: rgb(74,196,235); background: radial-gradient(circle, rgba(74,196,235,1) 15%, rgba(148,187,233,1) 64%);">
                <img src="images/m-dashboard.png" class="position-absolute top-0 end-0 m-2 " alt="..." style="width:50px">
                <div class="card-body w-75 text-dark">
                    <div class="d-flex flex-column g-3 p-4">
                        <h3 class="fw-bold">Web app</h3>
                        <div class="d-block">
                            <button class="btn btn-sm btn-dark rounded-pill px-4 py-2 border-2 fw-bold shadow-none">
                                More info
                            </button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

@stop