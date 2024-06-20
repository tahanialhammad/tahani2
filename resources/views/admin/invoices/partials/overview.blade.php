<div class="mb-4 table-responsive">
    <h3>Invoices</h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Invoice No</th>
                <th scope="col">Order_id</th>
                <th scope="col">Payment part</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
                <th scope="col">paid</th>
                <th scope="col">Download</th>
            </tr>
        </thead>
        <tbody>
            @forelse($invoices as $invoice)
            <tr>
                <th scope="row">
                    {{ $invoice->user_id }} - {{ $invoice->user->name }}
                </th>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->order_id }}</td>
                <td>{{ $invoice->payment_parts }} / {{ $invoice->payment_parts }} </td>
                <td>{{ $invoice->invoice_date }}</td>
                <td>{{ $invoice->amount }} €</td>
                <td>{{ $invoice->paid }}</td>
                <td><ion-icon name="arrow-down-outline"></ion-icon></td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No invoices</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>