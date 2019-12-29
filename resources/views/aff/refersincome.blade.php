@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>   <center>   {{ Session::get('pagetitle') }}   </center>   </h3>
            
            
            <table class="table table-hover" >
 <tr> 
     <td>{{ __('p2p.txn ID') }}</td>
     <td>{{ __('p2p.Coin') }} </td>
     <td> {{ __('p2p.Amount') }}</td>
     
     <td>{{ __('p2p.Description') }}</td>
      <td> {{ __('p2p.User ID') }}</td>
     </tr> 
 
@foreach ($trans as $dt)
    <tr>  
    
    <td>   {{ $dt->id }}</td>
    
    <td>   {{ $dt->coin }}</td>
    
    <td>   {{ $dt->cr }}</td>
     
    
    <td>   {{ $dt->description }}</td>  
    
         <td>   {{ $dt->user_id }}</td>
         
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection