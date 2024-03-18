<div class="card p-4 rounded shadow">
    <div class="card-body">
        <div class="card-title d-flex justify-content-between align-items-center">
            <div class="fw-bold text-dark">Orders</div>
            <icon icon-name="add" class="icon-md icon-dark"></icon>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">{{ trans("services.order-number")}}</th>
                        <th scope="col">{{ trans("general.customer")}}</th>
                        <th scope="col">{{ trans("general.price")}}</th>
                        <th scope="col">{{ trans("services.service")}}</th>
                        <th scope="col">{{ trans("general.status")}}</th>
                        <th scope="col" class="text-center bg-info">{{ trans("general.action")}}</th>
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
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.order.show', ['order' => $order->id]) }}"  class="btn btn-link">
                                <icon icon-name="show" class="icon-md icon-dark"></icon>
                            </a>
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