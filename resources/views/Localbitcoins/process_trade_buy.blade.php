@extends('design1layout')
@section('content')



    <div class="container">
        
         <div class="row">  <div class="col-md-12">
             
 
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 
        
        
        
        {{ __('p2p.BuyBitcoinsinBrazil') }}
        
        
 
     <h1>  {{ __('p2p.contact') }} #{{ $po->id  }}:  {{ __('p2p.buy') }}  {{ $po->btcvalue  }}   {{ __('p2p.btcfor') }} {{ $po->c1value  }} BRS </h1> 

<h3>  {{ __('p2p.buyinadvertisement') }}#{{ $po->trade_id  }} (Other online payment)  {{ __('p2p.to') }}{{ $po->trade->username  }}   {{ __('p2p.attheexchangerate') }} {{ $po->rate  }} BRL .</h3> 

        
          </div>  </div>
        
        
      <div class="row"> 
<div class="col-md-6">
     
 
    <form action="">
        
        <textarea   class="form-control  form-control-lg"  id="m" ></textarea>
        
         
      
      
  
  <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('p2p.send') }}</button>
    </form>
    
    
    
    
     
     <div id="chatmsg"></div>
    
    
     </div>
    
    <div class="col-md-6"> 
      {{ __('p2p.termswithtrade') }} {{ $po->trade->username  }}
      
      <div class="card bg-light" >
          
          <div class="card-body">
          {{$po->trade->terms_of_trade }}
    
      <br /> 
      <br /> 
 {{ __('p2p.tradetype') }}   {{$po->trade->trade_type }} <br />
 {{ __('p2p.tradestatus') }} {{$po->status }}<br />
       
{{ __('p2p.userid') }}    {{$po->user_id }}<br />
  {{ __('p2p.tradeuserid') }}{{$po->trade->user_id }}

       
       
       

   </div>  </div>
   
   
   
       @if ( $po->status ==  "Success")
       
      <div class="card bg-light" ><div class="card-body">
   
       <pre>
       
====  {{ __('p2p.P2PTradeReceiptContac') }} #{{ $po->id  }} ==== 
{{ __('p2p.seller') }}: {{ $po->username  }}
{{ __('p2p.buyer') }}: {{ $po->trade->username  }}
{{ $po->username  }} {{ __('p2p.btcsenttobuyer ') }}{{ $po->updated_at  }} 
{{ __('p2p.xpagg.comfeebtc') }} : 0.00020000
{{ __('p2p.paymentshowonbuyer') }} : {}
{{ __('p2p.amount') }}:  {{ $po->username  }}
{{ __('p2p.referense/message') }}: {{ $po->id  }}
==== End ====
</pre>


   </div>  </div>
   
@endif
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


     <tr><td>
     <div class="form-check">  
     
     
       <input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  ><label style="color:green;  "><b>{{ __('p2p.trustworthy') }}</b></label></div>
 </td></tr>    <tr><td>
       
 
 
<div class="form-check">
    <input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy">  <label  style="color:green;"><b>{{ __('p2p.positive') }}</b></label>


 </div>
 <p>{{ __('p2p.Give your trading partner positive feedback to increase his reputation.') }}</p>
 
 
 
 </td></tr>    <tr><td>
<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  > <b>{{ __('p2p.nuteral') }}</b>

 </div>
 <p>{{ __('p2p.Give your trading partner neutral feedback that does not affect his reputation.') }}</p>
 
 </td></tr>    <tr><td>

<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"  > <label  style="color:red;" margin-left:5px;><b>{{ __('p2p.distructandblock') }}</b></label>
  
 </div>
 <p>{{ __('p2p.Give your trading partner negative feedback that decreases his reputation and block his account, this prevents him from trading with you again.') }}</p>
 </td></tr>    <tr><td>
 

<div class="form-check">
<input class="form-check-input" type="radio" name="feedback" id="feedback" value="Trustworthy"><label  style="color:red;"><b>{{ __('p2p.blockwithoutfeedback') }}</b></label><br>
   
 </div>
 <p >{{ __('p2p.Block your trading partner from trading with you, but dont give him any feedback') }}</p>
</td></tr>    </table>

      
     
     <div class="form-group">
     
    <textarea class="form-control  form-control-lg" id="exampleFormControlTextarea1" name="message"placeholder="enter your message (optional)"   ></textarea>

  </div>  
  
  <button type="submit" class="btn btn-primary mb-2"rows="3" cols="30"style="margin-left:20px;">{{ __('p2p.submitfeedback') }}</button>





      
      @endif
      
       
      
 @if ( $po->user_id ==  Auth::user()->id)
       
  @if ( $po->status <>  "Success"  and $po->status <>  "Disputed"  and   $po->status <>  "PaymentCompleted"  )
       
 
    <div class="card bg-light" ><div class="card-body">
    <a href="/p2p/mark_payment_as_paid/{{ $po->id  }}" type="submit" class="btn btn-primary mb-2">{{ __('p2p.Mark payment as paid') }} </a>
    </div>  </div>
      <br >  <br >
      
      
      
      @endif
      
      @endif
      
      
      
      
 @if ( $po->trade->user_id ==  Auth::user()->id)
       
 
               
  @if ( $po->status <>  "Success"     )
       
      {{$po->status }}
       <div class="card bg-light" ><div class="card-body">
    <a href="/p2p/release_coin/{{ $po->id  }}" type="submit" class="btn btn-primary mb-2">{{ __('p2p.releasecoin') }}</a>
    </div>  </div>
      <br >  <br >
      
    
      

       @endif
       @endif
       
      
       
     
     
       
    </div>
     
  </div>
</div>



 

	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
 

<script src="https://code.jquery.com/jquery-1.11.1.js"></script>





<script>
  $(function () {
      
      
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $.get("/p2p/socketchat/{{ $po->id  }}",    function(result){
      
      
      console.log(result);
      
      $("#chatmsg").html(result);
 });

    var socket = io("https://socket.xpagg.com/");
    $('form').submit(function(e){
      e.preventDefault(); // prevents page reloading
      socket.emit('chat message', $('#m').val());
	   socket.emit('newchatcall',  "{{ $po->id  }}");

  
 var txt = $("#m").val();
  
 
   
     $.ajax({
                     
                    url: '/p2p/socketchat',
                    type: 'POST',
                    
                    data: {  trade_id:{{ $po->trade_id  }},  trade_order_id:{{ $po->id  }},  trade_message:txt},
                    dataType: 'JSON',
                     
                    success: function (data) { 
                         
                    }
                }); 
                
                
                
  
      console.log("Send.");
          
    $('#m').val(''); 
      return false;
    });
	
	
	socket.on('newchatcall', function(msg,type){
	if(msg=="{{ $po->id  }}")
     
     {
         
  $.get("/p2p/socketchat/{{ $po->id  }}",    function(result){
      
      
      console.log(result);
      
      $("#chatmsg").html(result);
 });
  
  
     }
  
  
    });
	
	 
	
  });
</script>



@endsection

