@extends('design1layout')
@section('content')
     <meta http-equiv="refresh" content="5" />
    
    <div class="container">
        
         <div class="row">  <div class="col-md-12">
             
 
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 
 
     <h1>   {{ __('p2p.contact') }}#{{ $po->id  }}:   {{ __('p2p.selling') }} {{ $po->btcvalue  }}  {{ __('p2p.Btcfor') }} {{ $po->c1value  }} BRS </h1> 

<h3>  {{ __('p2p.sellinginadvirtisement') }} #{{ $po->trade_id  }} (Other online payment)  {{ __('p2p.to') }} {{ $po->trade->username  }}   {{ __('p2p.at the bit rate') }}30,642.55 BRL .</h3> 

        
          </div>  </div>
        
        
      <div class="row"> 
<div class="col-md-6">
    
    
    
    <form action="/p2p/process_trade_chat" method="post" class="form-inline">
   @csrf
 
 
 <input type="hidden" value="{{ $po->id  }}" name="trade_order_id" />
 
 <input type="hidden" value="{{ $po->trade_id  }}" name="trade_id" />
  
  
<div class="form-group">
    
    
    
    
      <p>
    <textarea class="form-control  form-control-lg" id="exampleFormControlTextarea1" name="trade_message" style="  max-width: 100% ;"  rows="3" ></textarea>
    </p>
  </div>  
  
  <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('p2p.send') }}</button>
  
</form>

 
 
@foreach ($data as $d)
    <p> {{ $d->trade_message }} <br> <br> <br> <br> {{ $d->username }} -- {{ $d->created_at }}</p> <hr/>
@endforeach

    
    
     </div>
    
    <div class="col-md-6"> 
  {{ __('p2p.termswithtrade') }} {{ $po->trade->username  }}
      
      <div class="card bg-light" ><div class="card-body">
          {{$po->trade->terms_of_trade }}
    
       
       
       
       
       @if ( $po->status ==  "Success")
       
       <pre>
       
===={{__('p2p.P2PTradeReceiptContact')}} #{{ $po->id  }} ==== 
  {{ __('p2p.seller') }}: {{ $po->username  }}
  {{ __('p2p.Buyer') }}: {{ $po->trade->username  }}
{{ $po->username  }}   {{ __('p2p.btcsentonbuyer') }} 2019-11-29 07:17:35+00:00
{{ __('p2p.xpagg.comfeebtc') }}: 0.00020000
  {{ __('p2p.paymentshowonbuyer') }}: {}
  {{ __('p2p.amount') }}:  {{ $po->username  }}
  {{ __('p2p.refrense/message') }}: {{ $po->id  }}
==== End ====
</pre>
@endif

   </div>  </div>
         <br >  <br >
 
 
    
      
      
      
      
       @if ( $po->status ==  "PaymentCompleted")
       
       
       
   
    
       <div class="card  bg-light" ><div class="card-body">
           
          
    <form action="/p2p/dispute_trade" method="post" class="form-inline">
   @csrf
 
 
 <input type="hidden" value="{{ $po->id  }}" name="trade_order_id" />
 
 <input type="hidden" value="{{ $po->trade_id  }}" name="trade_id" />
  
   
  
  
  <button type="submit" class="btn btn-primary mb-2">{{ __('p2p.disputetrade') }}</button>
</form>
       </div>  </div>
       
       
       
      
   
      
      
@endif

       
      
       
       @if ( $po->status  ==  "Success")
     
     
      <form action="/p2p/leave_feedback" method="post" class="form-inline">
   @csrf
 
 
 <input type="hidden" value="{{ $po->id  }}" name="trade_order_id" />
 
 <input type="hidden" value="{{ $po->trade_id  }}" name="trade_id" />
 
  <input type="hidden" value="{{ $po->feedback_id  }}" name="feedback_id" />
 
 
 
     <table class="table table-bordered"> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >
     
     <tr><td>
     <div class="form-check">  
     
     
       <input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  ><label style="color:green;  "><b>{{ __('p2p.trustworthy')}}</b></label></div>
 </td></tr>    <tr><td>
       
 
 
<div class="form-check">
    <input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy">  <label  style="color:green;"><b>{{ __('p2p.positive')}}</b></label>


 </div>
 <p>{{ __('p2p.Give your trading partner positive feedback to increase his reputation.') }}</p>
 
 
 
 </td></tr>    <tr><td>
<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  > <b>{{ __('p2p.neutral') }}</b>

 </div>
 <p>{{ __('p2p.Give your trading partner neutral feedback that does not affect his reputation.') }}</p>
 
 </td></tr>    <tr><td>

<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  > <label  style="color:red;" margin-left:5px;><b> {{ __('p2p.distructandblock') }}</b></label>
  
 </div>
 <p>{{__('p2p.Give your trading partner negative feedback that decreases his reputation and block his account, this prevents him from trading with you again.')}}</p>
 </td></tr>    <tr><td>
 

<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"><label  style="color:red;"><b>  {{ __('p2p.blockwithoutfeedback') }}</b></label><br>
   
 </div>
 <p >  {{ __('p2p.Block your trading partner from trading with you, but dont give him any feedback') }}.</p>
</td></tr>    </table>

      
     
     <div class="form-group">
     
    <textarea class="form-control  form-control-lg" id="exampleFormControlTextarea1" name="message"placeholder="enter your message (optional)"   ></textarea>

  </div>  
  
  <button type="submit" class="btn btn-primary mb-2"rows="3" cols="30"style="margin-left:20px;">  {{ __('p2p.submitfeedback') }}</button>


       @else
      
 @if ( $po->trade->user_id ==  Auth::user()->id)
       
 
 
 
    <div class="card bg-light" ><div class="card-body">
    <a href="/p2p/mark_payment_as_paid/{{ $po->id  }}" type="submit" class="btn btn-primary mb-2">  {{ __('p2p.markpaymentaspaid') }} </a>
    </div>  </div>
      <br >  <br >
      
      
      
      
       @else
      
       <div class="card bg-light" ><div class="card-body">
    <a href="/p2p/release_coin/{{ $po->id  }}" type="submit" class="btn btn-primary mb-2">  {{ __('p2p.releasecoin') }}</a>
    </div>  </div>
      <br >  <br >
      
      
      @endif
      
      

       @endif
       
      
       
     
     
       
    </div>
     
  </div>
</div>


@endsection

