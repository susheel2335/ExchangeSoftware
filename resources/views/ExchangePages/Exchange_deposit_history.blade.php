@extends('exchange')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
           
 
        
            <h2>Recent Deposit </h2>
            <table class="table">
                <tr><th>Coin</th>
                <th>Amount</th>
                <th>Deposit Address</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Status</th>
                </tr>
            @forelse ($data as $d)
            <tr> 
                 
                 
    <td>{{ $d->coin }}</td> 
    <td>{{ $d->amount }}</td>
        <td><a href="/exchange/deposit/{{ $d->id }}">{{ $d->deposit_address }}</a></td>    <td>{{ $d->created_at }}</td>
            <td>{{ $d->updated_at }}</td>   <td>{{ $d->status }}</td></tr>
            
@empty
    <p>No Requests Pending</p>
@endforelse
</table>

         

     
  </div></div></div>
@endsection