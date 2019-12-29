@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>Recent Widthdraw Request </h3>
            <table class="table  table-hover " >
 <tr> 
     <td>Txn ID</td>
     <td>Coin</td> 
     <td>Amount</td>
     <td>Widthdraw Address</td>
     <td>Status</td>
     </tr> 
 
@foreach ($data as $dt)
    <tr>  

    <td>  <a href="/system/widthdraw/{{ $dt->id }}'" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->coin }}</td>
    <td>   {{ $dt->amount }}</td> 
    <td>   {{ $dt->widthdraw_address }}</td> 
    <td>   {{ $dt->status }}</td>  
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection