<div class="mt-4">
    <!-- <orders-per-month-chart :chartdata="[1,5,8,2]" ></orders-per-month-chart> -->
    <orders-per-month-chart :chartdata="{{ json_encode($monthCount) }}"></orders-per-month-chart>

    <div class="card p-4 mt-4 rounded shadow">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <div class="fw-bold text-dark">Invoices</div>
                <icon icon-name="arrowBold" class="icon-md icon-dark icon-rotate"></icon>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">{{ trans("services.invoice-number")}}</th>
                            <th scope="col">{{ trans("general.customer")}}</th>
                            <th scope="col">{{ trans("general.price")}}</th>
                            <th scope="col">{{ trans("general.status")}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- If i use Eloquent models and the InvoiceResource class i'll access the invoice properties using object syntax $invoice->user->name : rather than array syntax with InvoiceRepository -->
                        @forelse($invoices as $invoice)
                        <tr>
                            <th scope="row">{{ $invoice['id'] }}</th>
                            <td>{{ $invoice['invoice_number'] }}</td>
                            <td>{{ $invoice['user_id'] }} - {{ $invoice['user_name'] }} </td>
                            <td>{{ $invoice['amount'] }} €</td>
                            <td>
                                <span class="badge rounded-pill {{ $invoice['paid'] ? ' bg-success' :' bg-secondary' }}">
                                    <span class="visually-hidden">{{ $invoice['paid'] ? 'Paid' :'Not paid' }} </span>
                                </span>
                            </td>
                            <td>{{$invoice['service_ids'] ? implode(', ', $invoice['service_ids']) : "-"}}</td>
                        </tr>

                        @empty
                        <tr>
                            <td>
                                {{ trans("services.no-invoices")}} </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>