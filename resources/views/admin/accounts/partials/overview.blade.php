<div>
    <h1>customers</h1>
    @foreach($accounts as $account) 
{{ $account->name}}
    @endforeach

    <accounts-table></accounts-table>
</div>