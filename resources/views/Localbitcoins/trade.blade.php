@extends('design1layout')
@section('content')
     
    
    <div class="container xappcss">
        
         <div class="row">  <div class="col-md-12">
        <h1 class="title">{{ __('p2p.Buy bitcoins using  Bank Transfer') }}  </h1> 
          </div>  </div>
        
        
  <div class="row">
     <div class="col-md-6">
         
  <div class="row">
     <div class="col-md-12">
         {{ __('p2p.xpagg.com user') }}
      {{ $data->username  }} {{ __('p2p.wishes to trade bitcoins with you.') }}
      </div>  
      </div>
           
      <div class="row">
            <div class="col-md-6"> {{ __('p2p.price') }}</div>
       
       <div class="col-md-6" style="color:green;"> {{ $data->rate  }}  {{ $data->currency  }} / BTC</div>
       </div>
       
       
   <div class="row">
        <div class="col-md-6"><b>{{ __('p2p.paymentmethod') }}:</b></div>
        <div class="col-md-6"> {{ __('p2p.banktransfer') }} </div>
        
        
            </div> <div class="row">
 <div class="col-md-6"><bUser>:</b></div><div class="col-md-6" style="color:#0000FF;"><i class="fa fa-user"></i>	{{ $data->username  }}<p style="color:black; font-size:-1.5rem;"><small>(feedback score 99%,<a href=""> {{ __('p2p.see feeback') }}</a>)</small></p></div>
 
       </div> <div class="row">
 
 <div class="col-md-6"><b> {{ __('p2p.tradelemits') }}:</b></div><div class="col-md-6">	200 - 1,400 {{ $data->currency  }}</div>
 
       </div> <div class="row">
 <div class="col-md-6"><b> {{ __('p2p.location') }}:</b></div><div class="col-md-6"><a href=""> {{ __('p2p.brazil') }} </a>	</div>
 
       </div> <div class="row">
 <div class="col-md-6"><b> {{ __('p2p.paymentwindow') }}:</b></div><div class="col-md-6"> {{ __('p2p.2 hours') }}</div>
       </div>  
 

  <div class="row">
 <div class="col-md-12">



 <div class="card" ng-controller="myCtrl">
 
  <div class="card-body">
 
    <p class="card-text">
        
        {{ __('p2p.How much you wish to Buy?') }}
         
         
         
       
       
       @if ( $data->trade_type ==  "ONLINE_BUY")
       
<form action="/p2p/CreateTradeBuy" class="form-inline">
   @else
   
<form action="/p2p/CreateTradeSell" class="form-inline">
   @endif
 
 
 <input type="hidden" value="{{ $data->id  }}" name="trade_id" />
   
 
  
 
  <div class="input-group mb-2 mr-sm-2" >
     <table>
         <tr>
             <td>
    <div class="input-group-prepend" >
     
      <div class="input-group-text"style="background-color:#00bfff; border:1px solid #00bfff; width:80%; color:white;">
          <b>{{ $data->currency  }}</b>
          <input style="width:60%; margin-left:10px;" type="text" name="c1value" class="form-control" id="inlineFormInputGroupUsername2" placeholder=" "  
          ng-change="getPairRateC1Buy( '{{ $data->id  }}',c1value)"       ng-model="c1value">
          </div>
          
    </div>
    </td>


      <td>
    <div class="input-group-prepend">
      <div class="input-group-text" style="background-color:#00bfff; border:1px solid #00bfff; width:80%; color:white; "><b>{{ __('p2p.BTC') }}</b>
      
      
      <input style="width:60%; margin-left:10px;" type="text" name="btcvalue" class="form-control"id="inlineFormInputGroupUsername2"  ng-change="getPairRateC2Buy( '{{ $data->id  }}',btcvalue)"     placeholder=" " ng-model="btcvalue"  >  
      </div>
      
    </div>
    </td>
    </tr>
   </table>
  </div>
  <small><b>{{ __('p2p.Start trade request! Remember to write your payment details in the message box so that the buyer can pay you.') }}</b></small>
     
<br>

<div class="form-group">
    
    
    <br />
        <br />
        <br />
      <p>
    <textarea class="form-control  form-control-lg" id="exampleFormControlTextarea1" placeholder="Write your contact message and other information to the trader here...(optional) " name="trade_message" style="  max-width: 100% ;"  rows="3" ></textarea></p>
  </div> 
  
      <button type="submit" class="btn btn-success btn-lg btn-block">
          {{ __('p2p.Start trade request') }}</button> 
 



</form>
 </p>
    
  </div>
</div>


  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">{{ __('p2p.How to begin and contact the trader') }}
         
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">{{ __('p2p.Read the the terms of the trade and make sure you can comply with them. Use this form to send in a trade request with the sum you wish to trade. After opening the trade request it is possible to discuss with the trader in xpagg.com messaging system. Open trade requests and message inbox can be found under Dashboard under your user profile page. You can send and receive messages with the trader there. For more information see  quick buy guide.') }}
 
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">{{ __('p2p.How to pay online') }}
          
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">{{ __('p2p.After sending the trade request you get the payment details. Trader may not publish the payment details directly and asks you to contact to get the exact account name needed for the payment. In this case, send a xpagg.com message to the the trader and ask for the further details. When buying bitcoins online, the payment window is 90 minutes, but this may vary depending on the payment method and the terms of the trade. If you need help on how to make the payment use xpagg.com messaging to discuss with the trader how to make the payment.') }}
    
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">{{ __('p2p.Cancelling the trade') }}
          
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">{{ __('p2p.You can cancel the trade before making the payment. You find open trades under Dashboard in your user profile.') }}
      
      </div>
    </div>
  </div>
</div>



 <div class="card"  >
 
  <div class="card-body">
 
    <p class="card-text">
 
  </p>
    
  </div>
</div>
 
</div>
</div>


    </div>
    <div class="col-md-6">{{ __('p2p.termswithtrade') }}
    {{ $data->username  }}
      
      <div class="card" ><div class="card-body">
          {{$data->terms_of_trade}}
       </div>  </div>
       
       <a href="/{{app()->getLocale()}}/p2p/complain/{{ $data->id  }}"><i class="fa fa-flag"></i>{{ __('p2p.Report this advertisement') }}

</a>
       
    </div>
     
  </div>
</div>




@endsection

