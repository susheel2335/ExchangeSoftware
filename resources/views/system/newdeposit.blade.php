
 @extends('design1layout')
@section('content')
<style>
    
    .sic
    {
        width:50px;
    }
</style>
<div class="container">
    
    <table class='table card table-b table-bordered '>
        <tr ><td colspan="4"><h3  class="headings"><center> {{ __('p2p.Flexible Instant Crypto Credit Lines') }}</center></h3></td></tr>
        <tr>
            <Td><b>
                
                <div class="icons">
                    
                    <img src="/assets/currencies/BTC.png" class="img-fluid   account-page-banner-icon sic" alt="BTC">
                    
                    <img src="/assets/currencies/ETH.png" class="img-fluid    account-page-banner-icon sic" alt="ETH">
					
					<img src="/assets/currencies/amerikoin.png" class="account-page-banner-icon  img-fluid sic " alt="amerikoin">
                     
                    <img src="/assets/currencies/XRP.png" class="account-page-banner-icon  img-fluid sic " alt="XRP">
					
					<img src="/assets/currencies/akbank.png" class="account-page-banner-icon  img-fluid sic " alt="akbank">
					                    
                    
                    </div> 
            
            {{ __('p2p.  1. Deposit Crypto Assets to Your Insured & Secure Account ') }}
           </b><br/><br/>{{ __('p2p. Your assets are secured and insured up to $100M by audited custodian Akbank Insurance* policy ') }}
</Td>
            
           

<Td>   <b> {{ __('p2p. 2. Receive a Credit Line Instantly. Automated and No Credit Checks.') }}  </b><br/><br/>
{{ __('p2p. Your credit line limit is based on the value of your deposited crypto assets') }}
</Td>

<Td>  <b>{{ __('p2p. 3. Spend Money Instantly by Card or Withdraw to Bank Accoun ') }}</b>
<br/><br/>{{ __('p2p. Spend from the credit line at any time. From 8% per year APR on what you use ') }}
</Td>

<td> <b>{{ __('p2p. 4. No Minimum Loan Repayments No Hidden Fees - Open - Neultral Borderless ') }}</b><br/><br/>{{ __('p2p. Interest is debited from your available limit. Make repayments at any time ') }}</td> 
</tr>
        
    </table>
   
   
   
   <div class="row pad20 block3c">
   
   <div class="col-md-4">
    		      <div class="card">
                 
                     <div class="card-body text-center">
                         
                          <div class="row ">
   
   <div class="col-md-2 block3ci "> <i class=" fa fa-university"></i>    </div>
                      
              <div class="col-md-10 block3cw">          
                      <h6>
               <b>{{ __('p2p. Withdraw from Credit Line ') }}</b> </h6>
		       <p>{{ __('p2p.By Local Bank Transfer ') }} </p>
                      </div>  </div>
               
            </div>
            </div>
              </div>
			  
			  
			  
			  <div class="col-md-4">
    		      <div class="card">
                
                     <div class="card-body ">
                         
                             <div class="row ">
   
   <div class="col-md-2 block3ci "> <i class=" fa fa-undo"></i>    </div>
                      
              <div class="col-md-10 block3cw">          
                      <h6>
                        <b>{{ __('p2p.Repay Credit Line ') }} </b></h6>
		       <p>{{ __('p2p.By Bank Transfer or Crypto') }} </p>
                      </div>  </div>
               
               
               
                
                 
                    
            </div>     
            </div>
              </div>
			  
			  
			  <div class="col-md-4">
    		      <div class="card">
                
                     <div class="card-body ">
                         
                         
                         
                             <div class="row ">
   
   <div class="col-md-2 block3ci "> <i class=" fa fa-undo"></i>    </div>
                      
              <div class="col-md-10 block3cw">          
                      <h6>
                        <b> {{ __('p2p.Buy   Coinpagg') }} </b></h6>
		       <p>{{ __('p2p.Earn 30% (Y) Dividends') }}</p>
                      </div>  </div>
               
               
               
                
                    
              
            </div>
            </div>
              </div>
			  
     </div>
   

<div class="card" >


<table class="table table-bordered">
<thead>
<tr><th>{{ __('p2p.Method') }}</th><th>{{ __('p2p.Deposit method') }}</th><th>{{ __('p2p.Currencies accepted') }}</th><th>{{ __('p2p.Deposit limit') }}</th><th>{{ __('p2p.Deposit time') }}</th><th>{{ __('p2p.Fees') }}<sup>*</sup></th><th></th></tr>
</thead>
<tbody>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/mockup/psps/visa.png" class="img-responsive img-cell "></td>
<td>{{ __('p2p.Visa, Mastercard and major credit/debit cards') }}</td>
<td class="hidden-sm">{{ __('p2p.USD, EUR, GBP, AUD') }}</td>
<td>{{ __('p2p.varies') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/swift.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.Wire Transfer') }}</td>
<td class="hidden-sm">{{ __('p2p.USD, EUR, GBP') }},&nbsp;<span>{{ __('p2p.AUD' }}</span></td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.2-5 working days') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/skrill.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.Skrill/Moneybookers') }}</td>
<td class="hidden-sm">{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/cashu.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.CashU') }}</td>
<td class="hidden-sm">{{ __('p2p.USD ,EUR') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i>  {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/chinaunionpay.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.China Union Pay') }}</td>
<td class="hidden-sm">{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/moneta.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.Moneta') }}</td>
<td class="hidden-sm">{{ __('p2p.USD, EUR, GBP') }}</td>
<td>{{ __('p2p.min. 22 USD per transaction max. 4300 USD per day') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/yandex.png" class="img-responsive img-cell"></td>
<td>{{ __('p2p.Yandex Money') }}</td>
<td class="hidden-sm">{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.100 USD') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/paysafe.png" class="img-responsive img-cell"></td>
<td>Paysafe Card</td>
<td class="hidden-sm">USD</td>
<td>min. 100 USD, max. 1000 USD</td>
<td>instant</td>
<td>0</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> FUND HERE</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/alipay.png" class="img-responsive img-cell"></td>
<td>Ali Pay</td>
<td class="hidden-sm">USD</td>
<td>unlimited</td>
<td>instant</td>
<td>0</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> FUND HERE</a></td>
</tr>
<tr>
<td class="text-center"><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/webmoney.png" class="img-responsive img-cell"></td>
<td>WebMoney</td>
<td class="hidden-sm">USD</td>
<td>100 USD</td>
<td>instant</td>
<td>0</td>
<td><a class="btn btn-u btn-u-yellow btn-xs" href="/deposit"><i class="fa fa-arrow-right"></i> FUND HERE</a></td>
</tr>
</tbody>
</table>



 


 





</div>
 
</div>

















<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deposit </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Send payment to following address</p>
       
       <form method="post" action="/system/deposits"> {{ csrf_field() }}
       
         <input type="hidden"   name="coin"  id="coin" >
        
         
         
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Amount" name="amount" placeholder="Amount">
     
  </div>
      <div class="form-group"><button type="submit" class="btn btn-primary">Deposit</button>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModalWidthdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Widthdraw </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
     <form method="post" action="/system/widthdraw"> {{ csrf_field() }}
       
     
         
  <div class="form-group">
    <label for="exampleInputEmail1">Widthdraw Amount</label>
    <input type="number" step="any"  class="form-control"  name="amount"   id="amount" aria-describedby="emailHelp" placeholder="Widthdraw amount">
    <div id="max"></div>
  </div>
    
    
     <div class="form-group">
    <label for="exampleInputEmail1">Widthdraw Address</label>
    <input type="text" class="form-control"  name="widthdraw_address"   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Widthdraw Address">
    
  </div>
  
         <input type="hidden"   name="coin"  id="coin" >
         
    <div class="form-group"><button type="submit" class="btn btn-primary">Submit Widthdraw</button>
  </div>
  
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>







@endsection

 

