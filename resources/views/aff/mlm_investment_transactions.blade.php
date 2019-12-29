@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>   <center> {{ __('p2p.mlm_investment_transactions Earning Report') }}  </center>   </h3>
            
            
            <table class="table table-hover" >
 <tr> 
     <td> {{ __('p2p.Id') }}</td> <td>{{ __('p2p.Investment Order ID') }}</td>
     <td>{{ __('p2p.Description') }}</td>
     <td>{{ __('p2p.Credit Amount') }}</td>
     <td>{{ __('p2p.Debit Amount') }}</td>
    
     <td>{{ __('p2p.Coin') }}</td>
     <td>{{ __('p2p.Status') }}</td>
     
      <td>{{ __('p2p.Created At') }}</td>
     </tr> 
 
@foreach ($mlm_investment_transactions as $dt)
    <tr>  
    
    <td>   {{ $dt->id }}</td>
     <td>   {{ $dt->order_id }}</td>
     <td>   {{ $dt->description }}</td>
    <td>   {{ $dt->cr }}</td>
    <td>   {{ $dt->dr }}</td>
    
   
    
    
    <td>   {{ $dt->coin }}</td>
     
     
    
    <td>   {{ $dt->status }}</td>  
    
         <td>   {{ $dt->created_at }}</td>
         
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection