<div class="mt-4">
    <!-- <orders-per-month-chart :chartdata="[1,5,8,2]" ></orders-per-month-chart> -->
    <orders-per-month-chart :chartdata="{{ json_encode($monthCount) }}"></orders-per-month-chart>

    <div class="card p-4 mt-4 rounded shadow">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <div class="fw-bold text-dark">Invoices</div>
                <svg id="icon-arrow-bold" class="icon-md icon-dark icon-rotate" viewBox="0 0 16.1 13.1">
                    <path d="M.1 6.9c0 .1.1.1.1.2l6.2 5.8c.1.1.3.2.5.2s.4-.1.5-.2c.3-.3.3-.8 0-1.1L2.6 7.3h12.7c.4 0 .8-.3.8-.8s-.3-.7-.7-.7H2.7l4.8-4.5c.3-.3.3-.8 0-1.1s-.8-.3-1.1 0L.2 6c-.1.1-.1.1-.1.2v.1c0 .1-.1.2-.1.3s.1.2.1.3z" />
                </svg>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Invoices No</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stats</th>
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

                        no invoice
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>