<div class="card p-4 rounded shadow">
    <div class="card-body">
        <div class="card-title d-flex justify-content-between align-items-center">
            <div class="fw-bold text-dark">orders</div>
            <icon-add  class="icon-md icon-dark"></icon-add>
            <icon-arrow-bold class="icon-md icon-dark icon-rotate"></icon-arrow-bold>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans("services.order-number")}}</th>
                        <th scope="col">{{ trans("general.customer")}}</th>
                        <th scope="col">{{ trans("general.price")}}</th>
                        <th scope="col">{{ trans("services.service")}}</th>
                        <th scope="col">{{ trans("general.status")}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->user_id }} - {{ $order->user->name }} </td>
                        <td>{{ $order->price }} €</td>
                        <td>{{ $order->service->title }} </td>
                        <td>{{ $order->status }} </td>
                    </tr>
                    @empty
                    <tr>
                        <td>no order</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>