@extends('design1layout')
@section('content')
    <caption><h2>{{ __('p2p.buybitcoin') }}</h2></caption>
    <table class="table table-striped" id="myTable">
      <thead>
        <tr>
          
          <th>{{ __('p2p.seller') }}</th>
          
          <th>{{ __('p2p.paymentmethod') }}</th>
          
          <th>{{ __('p2p.price/btc') }}</th>
          
          <th>{{ __('p2p.limits') }}</th>
        
        <th></th>
        </tr>
      </thead>
      <tbody>
        <?php //print_r($data);die; ?>
        @if(count($data) > 0)
          @foreach($data as $list)
          
          
          
          
          @if($list['trade_type']=="ONLINE_BUY")
          
          
          <tr>
              
            <td>{{ $list['username'] }}</td>
            
            <td>{{ $list['bank_name'] }}</td>     <td>{{ $list['rate'] }}   {{ $list['currency'] }} {{ __('p2p.for') }} 1 btc</td>
            
             
             

 
<td> {{ $list['min_trans_limit'] }} - {{ $list['max_trans_limit'] }} {{ $list['currency'] }} 

</td>


<td>
                
              <a href="/{{app()->getLocale()}}/p2p/trade/{{ $list['id'] }}" class="btn btn-outline-dark btn-xs"  >
                  
                  
                  
                  
                  
            {{ __('p2p.buy') }}
              </i></a>
            </td>
          </tr>
          
          
        @endif
        
        
          @endforeach
        @else
          
        @endif
      </tbody>
    </table><br>
    
  

@endsection

