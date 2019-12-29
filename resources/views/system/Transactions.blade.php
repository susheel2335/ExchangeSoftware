@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>Transactions Report</h3>
            
            
            <table class="table table-hover" >
 <tr> 
     <td>Txn ID</td>
     <td>Coin</td>
     <td>Credit</td>
     <td>Debit</td> <td>Description</td>
     <td>Transaction Hash</td>
     </tr> 
 
@foreach ($data as $dt)
    <tr>  
    <td>   {{ $dt->id }}</td>
    <td>   {{ $dt->coin }}</td>
    <td>   {{ $dt->cr }}</td>
    <td>   {{ $dt->dr }}</td><td>   {{ $dt->description }}</td>  
    <td>   {{ $dt->transaction_hash }}</td>  
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection