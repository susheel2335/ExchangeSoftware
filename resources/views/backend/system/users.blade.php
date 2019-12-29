@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3>{{ __('p2p.Recent Deposits ') }} </h3>
            <table class="table   table-hover " >
 <tr> 
     <td>{{ __('p2p.txn ID') }}</td>
     <td>{{ __('p2p.Coin') }}/td> 
     <td>{{ __('p2p.Amount') }}</td>
     <td>{{ __('p2p.Status') }}</td>
     </tr> 
 
@foreach ($data as $dt)
    <tr>  
    <td>  <a href="/system/deposits/{{ $dt->id }}" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->name }}</td>
    <td>   {{ $dt->email }}</td> 
    <td>   {{ $dt->roles }}</td>  
    
    </tr>
    
    
@endforeach

</table>
  </div></div></div>
@endsection