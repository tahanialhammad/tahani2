@php
$cards= collect([
[
'title' => "Total Orders",
'price' => '122',
'icon' => '<icon-shop class="icon icon-inverted"></icon-shop>'
],
[
'title' => "Total sale",
'price' => '122',
'icon' => '<icon-invoices class="icon icon-inverted"></icon-invoices>'
],
[
'title' => "Refunded",
'price' => '122',
'icon' => '<icon-rotate class="icon icon-inverted"></icon-rotate>'
],

]);

@endphp


<div class="card-group col-12">
    @foreach ($cards as $card)
    <div class="card p-4 bg-info bg-gradient border border-end border-light" onmouseover="this.classList.add('bg-success')" onmouseout="this.classList.remove('bg-success')">
        <div class="card-body">
            <div class="card-title d-flex align-items-center">
                <div class="d-flex justify-content-center bg-dark p-2 w-30 h-30 rounded-circle ">
                    {!! $card['icon'] !!}
                </div>
                <h5 class="ms-2 fw-bold text-dark">{{ $card['title']}}</h5>
            </div>
            <h2 class="card-text">{{ $card['price']}} €</h2>
        </div>
        <div class="card-footer">
            <small class="text-muted d-flex justify-content-between align-items-center">
                <span>20%</span>
                <span>+27 this month</span>
            </small>
        </div>
    </div>
    @endforeach
</div>