@extends('exchange')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>Transactions Report</h3>
            <table class="table table-dark  table-hover table-sm" >
 <tr> 
     <td>Txn ID</td>
     <td>Coin</td>
     <td>Credit</td>
     <td>Debit</td>
     <td>Type</td>
     </tr> 
 
@foreach ($data as $dt)
    <tr>  
    <td>   {{ $dt->id }}</td>
    <td>   {{ $dt->coin }}</td>
    <td>   {{ $dt->cr }}</td>
    <td>   {{ $dt->dr }}</td>
    <td>   {{ $dt->type }}</td>  
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection