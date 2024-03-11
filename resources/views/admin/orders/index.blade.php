@extends('admin.admin-template')
@section('content')
<div>
<div class="col-xl-9 page-title mb-4">
        <h3 class="fw-bold m-0">
           Orders
        </h3>
    </div>

    <div class="d-flex">
        @include('admin.orders.partials.overview')
        <!-- orders https://www.behance.net/gallery/177825427/E-commerce-Dashboard-UI?tracking_source=search_projects|orders+dahboard+page&l=1 -->
    </div>

    <div class="row g-0">
        <div class="col-xl-9 p-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="col-xl-3 px-lg-4 p-4">
<orders-per-service :chartdata="[1,5,8,2]"></orders-per-service>
            other
        </div>
    </div>
</div>

@stop