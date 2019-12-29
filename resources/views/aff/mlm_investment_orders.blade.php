@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>   <center>  {{ __('p2p.Investment Order History') }}     </center>   </h3>
            
            
            <table class="table table-hover" >
 <tr> 
     <td> {{ __('p2p.Order ID') }} </td>
     <td> {{ __('p2p.Package Name') }} </td>
     <td> {{ __('p2p.Coin') }} </td>
     <td> {{ __('p2p.Amount') }}</td>
     <td> {{ __('p2p.Status') }} </td>
     
      <td> {{ __('p2p.Created At') }} </td>
     </tr> 
 
@foreach ($mlm_investment_orders as $dt)
    <tr>  
    
    <td>   {{ $dt->id }}</td>
    
    
    <td>   {{ $dt->package_name }}</td>
    <td>   {{ $dt->coin }}</td>
    
    <td>   {{ $dt->amount }}</td>
     
    
    <td>   {{ $dt->status }}</td>  
    
         <td>   {{ $dt->created_at }}</td>
         
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection