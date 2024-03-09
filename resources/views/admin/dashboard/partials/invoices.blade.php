<div class="mt-4">
    <!-- <orders-per-month-chart :chartdata="[1,5,8,2]" ></orders-per-month-chart> -->
    <orders-per-month-chart :chartdata="{{ json_encode($monthCount) }}"></orders-per-month-chart>

    <h3>Invoices</h3>
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