@extends('exchange')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
           
<h2>Deposit Detail</h2>
 <table class="table">    
         
<tr> <td>Coin</td>  <td>{{ $d->coin }}</td> </tr>
<tr> <tr> <tr> <td>Amount</td>    <td>{{ $d->amount }}</td></tr>
 <tr> <tr>   <td>Deposit Address</td>     <td>{{ $d->deposit_address }}</td> </tr>
 <tr>        
 <tr>   <td>Deposit Status</td>         <td>{{ $d->status }}</td></tr>
            
  
</table>
    
     
  </div></div></div>
@endsection