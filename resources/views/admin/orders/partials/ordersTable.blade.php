<div class="card p-4 rounded shadow">
    <div class="card-body">
        <div class="card-title d-flex justify-content-between align-items-center">
            <div class="fw-bold text-dark">Orders</div>
            <icon icon-name="add" class="icon-md icon-dark"></icon>
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
                        <th scope="col text-center">{{ trans("general.action")}}</th>
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
                        <td class="d-flex">
                        @include('admin.orders.partials.edit')
                        @include('admin.orders.partials.delete')
                        @include('admin.orders.partials.download') 
                        </td>
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