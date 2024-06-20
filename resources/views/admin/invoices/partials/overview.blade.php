<div class="mb-4 table-responsive">
    <h3>Invoices</h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Invoices No</th>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Price</th>
                <th scope="col">download</th>
            </tr>
        </thead>
        <tbody>
            @forelse($invoices as $invoice)

            <tr>
                <th scope="row">
                    {{ $invoice->user_id }} - {{ $invoice->user->name }}
                </th>
                <td>{{ $invoice->invoice_number }}</td>
                <td>website</td>
                <td>2{{ $invoice->invoice_date }}</td>
                <td>400 €</td>
                <td>{{$invoice->paid }}</td>
                <td><ion-icon name="arrow-down-outline"></ion-icon></td>
            </tr>
            @empty
            <tr>
                <td>no invoices</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>