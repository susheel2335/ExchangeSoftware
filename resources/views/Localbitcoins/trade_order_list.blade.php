@extends('design1layout')
@section('content')
    <caption><h2>{{ __('p2p.All Traders') }}</h2></caption>
    <table class="table table-striped" id="myTable">
      
      <tbody>
        
        
          
          @foreach($data_trade_user_id as $list)
          
          
          

          <tr>
              
            <td>{{ $list['username'] }}</td>
            <td>{{ __('p2p.contact') }} #{{ $list['id']  }}: {{ __('p2p.trade') }}  {{ $list['btcvalue']  }} {{ __('p2p.btcfor') }}  {{ $list['c1value']  }}  {{ $list['currency'] }}    </td>
            <td>{{ $list['id'] }}</td>
            
            <td>  
                
              <a href="/p2p/process_trade_sell/{{ $list['id'] }}" class="btn btn-outline-dark btn-xs"  >
                  {{ __('p2p.Details') }}
       
              </i></a>
            </td>
          </tr>
          @endforeach
          
      </tbody>
    </table><br>
    
    <br>
    <br>
     
      <table class="table table-striped" id="myTable">
      
      <tbody>
        
        
         
          @foreach($data_user_id as $list)
          <tr>
              
            <td>{{ $list['username'] }}     </td>
            <td>{{ $list['status'] }}</td>
            <td>Contact #{{ $list['id']  }}: trade {{ $list['btcvalue']  }} BTC for {{ $list['c1value']  }} {{ $list['currency'] }} {{ $list['trade']['currency'] }}  </td>
            
            
              
                <td> 
              <a href="/p2p/tradeinfo/{{ $list['id'] }}" class="btn btn-outline-dark btn-xs"  >
                {{ __('p2p.Details') }}
              </i></a>
            </td>
          </tr>
          @endforeach
      
      </tbody>
    </table><br>
    
    <br>
    <br>

@endsection

