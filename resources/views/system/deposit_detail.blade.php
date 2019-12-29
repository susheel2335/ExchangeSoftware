@extends('design1layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-6">
            <h3> {{ __('p2p. Deposit ID ') }}{{ $data->id }}</h3>
            
            
            <table class="table ">
                <tr><td> {{ __('p2p.Deposit ID') }}   </td><td>{{ $data->id }}</td></tr>
                
                
                
                  <tr><td> {{ __('p2p.Amount') }} </td><td>{{ $data->amount }}</td></tr>
                    <tr><td> {{ __('p2p.Coin') }} </td><td>{{ $data->coin }}</td></tr>
                      <tr><td> {{ __('p2p.Created Time') }} </td><td>{{ $data->created_at }}</td></tr>
                        <tr><td> {{ __('p2p.Deposit Address') }} </td></td><td>{{ $data->deposit_address }}   {{ Config::get($data->coin) }}   </td></tr>
                        
                        <tr><td> {{ __('p2p.Status') }}   </td><td>{{ $data->status }}</td></tr>
            </table>
            </div>
            <div class="col-md-6"> 
             @if($data->coin=='BTC')
           {{ __('p2p.Plese send payment to following address') }} 
           
            
         <b>  {{ $data->deposit_address }} 
              
            </b> <br /><br /> <img src="https://blockchain.info/qr?data={{ $data->deposit_address }}&size=200"   /> 
        @endif
        
        
             </div></div></div>
@endsection