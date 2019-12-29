@extends('design1layout')
@section('content')
    
    
    <div class="container">
        
         <div class="row"> 
    
    <div class="col-md-6">
       
  
       
      <div class="card  bg-light" ><div class="card-body">
           
          
    <form action="/p2p/release_coin" method="post" class="form-inline">
   @csrf
 
 
 <input type="hidden" value="{{ $po->id  }}" name="trade_order_id" />
 
 <input type="hidden" value="{{ $po->trade_id  }}" name="trade_id" />
  
   <table class="table table-borderless">
       
       <tr><td>{{ __('p2p.Amount in BTC') }} </td><td>{{ $po->btcvalue  }}</td></tr>
       <tr><td>{{ __('p2p.Amount IN your USD') }}  </td><td>{{ $po->c1value  }}</td></tr>
       
        <tr><td colspan=2>   
  <label><input type="checkbox" name="confirmchbox" required value="">{{ __('p2p.I confirm I have received the payment') }} </label>
 
</td></tr>
   <tr><td colspan=2>
  <button type="submit" class="btn btn-primary mb-2">{{ __('p2p.releasecoin') }}</button></td></tr>
   </table>

  
</form>
       </div>  </div>
       
     
     
       
    </div>
     
  </div>
</div>


@endsection

