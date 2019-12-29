
 @extends('design1layout')
@section('content')
<style>
    
    .sic
    {
        width:50px;
    }
</style>
<div class="container">
    
    
                        <div class="row">
    
                        <div class="col-md-8">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <div class="dashboard-info row">
                                        <div class="info-text col-md-6">
                                            <h5 class="card-title">Welcome back Anna!</h5>
                                            <p>Get familiar with dashboard, here are some ways to get started.</p>
                                            <ul>
                                                <li>Check some stats for your website bellow</li>
                                                <li>Sync content to other devices</li>
                                                <li>You now have access to File Manager app.</li>
                                            </ul>
                                            <a href="#" class="btn btn-warning m-t-xs">Learn More</a>
                                        </div>
                                        <div class="info-image col-md-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class=""><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <h5 class="card-title">Daily Visitors</h5>
                                            <canvas id="visitorsChart" style="display: block; width: 300px; height: 150px;" width="300" height="150" class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    
                    <div class="row">
                    
                    
                    
                    
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">New Customers</h5>
                                    <h2 class="float-right">45.6K</h2>
                                    <p>From last week</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Orders</h5>
                                    <h2 class="float-right">14.3K</h2>
                                    <p>Orders in waitlist</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <h5 class="card-title">Monthly Profit</h5>
                                    <h2 class="float-right">45.6$</h2>
                                    <p>For last 30 days</p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                      </div>
    <table class='table card table-b table-bordered '>
        <tr ><td colspan="4"><h3  class="headings"><center>{{ __('p2p.Flexible Instant Crypto Credit Lines') }}</center></h3></td></tr>
        <tr>
            <Td><b>
                
                <div class="icons">
                    
                    <img src="/assets/currencies/BTC.png" class="img-fluid   account-page-banner-icon sic" alt="BTC">
                    
                    <img src="/assets/currencies/ETH.png" class="img-fluid    account-page-banner-icon sic" alt="ETH">
					
					<img src="/assets/currencies/amerikoin.png" class="account-page-banner-icon  img-fluid sic " alt="amerikoin">
                     
                    <img src="/assets/currencies/XRP.png" class="account-page-banner-icon  img-fluid sic " alt="XRP">
					
					<img src="/assets/currencies/akbank.png" class="account-page-banner-icon  img-fluid sic " alt="akbank">
					                    
                    
                    </div> 
           1. {{ __('p2p.Deposit Crypto Assets to Your Insured & Secure Account') }}
           </b><br/><br/>{{ __('p2p.Your assets are secured and insured up to $100M by audited custodian Akbank Insurance policy') }}
</Td>
            
           

<Td>   <b>2. {{ __('p2p.Receive a Credit Line Instantly Automated and No Credit Checks') }}  </b><br/><br/>{{ __('p2p.Your credit line limit is based on the value of your deposited crypto assets') }}

</Td>

<Td>  <b>3.{{ __('p2p.Spend Money Instantly by Card or Withdraw to Bank Account') }}</b>
<br/><br/>{{ __('p2p.Spend from the credit line at any time From 8% per year APR on what you use') }}
</Td>

<td> <b>4. {{ __('p2p.No Minimum Loan Repayments No Hidden Fees  Open  Neultral Borderless') }}</b><br/><br/>{{ __('p2p.Interest is debited from your available limit Make repayments at any time') }}
</td> 
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
                <b>{{ __('p2p.Withdraw from Credit Line') }}</b> </h6>
		       <p>{{ __('p2p.By Local Bank Transfer') }}  </p>
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
                         <b>{{ __('p2p.Repay Credit Line') }} </b></h6>
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
    <table class='table    table-bordered '>
    
    <tbody>
        
         <tr>
            <th>
             
             
            </th>
            <th class="align-right">{{ __('p2p.Balance') }}</th>
            <th class="align-right  ">{{ __('p2p.Market Value') }}</th>
            <th class="align-right ">{{ __('p2p.Credit Line') }}</th>
            <th class="align-center  "> ..</th>
    
            
         

        </tr>
       @php
$sum=0;
@endphp  
        
@foreach ($coins as $coin) 
    
    <tr>
    <td>{{ $coin['name']  }}  
    
 
 @php
 
 try {
           
$sum=$sum+$coin['BalanceUSD'];
    } catch (\Exception $e) {
        
    }
    

@endphp
 


</td>
    <td> {{ $coin['Symbol']  }}  {{ $coin['Balance']  }}   </td> 
       
    <td>$ {{ number_format($coin['BalanceUSD'], 2) }}</td>  
    <td>{{ $coin['Symbol']  }}   {{ $coin['Credit Line']  }}</td>  
    <td class="clrbg"><button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $coin['Symbol']  }}"  data-deposit="{{ $coin['deposit']  }}"class="btn btn-info">{{ __('p2p.Deposit') }}</button></td> 
    
    
      
    <td><button type="button"  data-toggle="modal" data-target="#exampleModalWidthdraw" data-whatever="{{ $coin['Symbol']  }}" data-whatever="{{ $coin['Credit Line']  }}"     class="btn btn-light">{{ __('p2p.Saque') }}</button></td> 
 
    
   
    
    
        
        </tr>
@endforeach


       
        
    </tbody>
</table>







<table  class="table table-bordered" >
<thead>
<tr><th>{{ __('p2p.Method') }}</th><th>{{ __('p2p.Deposit method') }}</th><th>{{ __('p2p.Currencies accepted') }}</th><th>{{ __('p2p.Deposit limit') }}</th><th>{{ __('p2p.Deposit time') }}</th><th>{{ __('p2p.Fees') }}<sup>*</sup></th><th></th></tr>
</thead>
<tbody>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/mockup/psps/visa.png"></td>
<td>{{ __('p2p.Visa, Mastercard and major credit/debit cards') }}</td>
<td>{{ __('p2p.USD, EUR, GBP, AUD') }}</td>
<td>{{ __('p2p.varies') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/swift.png"></td>
<td>{{ __('p2p.Wire Transfer') }}</td>
<td>{{ __('p2p.USD, EUR, GBP') }},&nbsp;<span>{{ __('p2p.AUD') }}</span></td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.2-5 working days') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/skrill.png"></td>
<td>{{ __('p2p.Skrill/Moneybookers') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td><span>{{ __('p2p.unlimited') }}</span></td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/cashu.png"></td>
<td>{{ __('p2p.CashU') }}</td>
<td>{{ __('p2p.USD ,EUR') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/chinaunionpay.png"></td>
<td>{{ __('p2p.China Union Pay') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/moneta.png"></td>
<td>{{ __('p2p.Moneta') }}</td>
<td>{{ __('p2p.USD, EUR, GBP') }}</td>
<td>{{ __('p2p.min. 22 USD per transaction max. 4300 USD per day') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/yandex.png"></td>
<td>{{ __('p2p.Yandex Money') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.100 USD') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i> {{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/paysafe.png"></td>
<td>{{ __('p2p.Paysafe Card') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.min. 100 USD, max. 1000 USD') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }}</a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/alipay.png"></td>
<td>{{ __('p2p.Ali Pay') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.unlimited') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }} </a></td>
</tr>
<tr>
<td><img src="https://static-trade12-info-cdn.gnuhost.eu/themes/trade12.com/assets/img/en/accounts/payments/webmoney.png"></td>
<td>{{ __('p2p.WebMoney') }}</td>
<td>{{ __('p2p.USD') }}</td>
<td>{{ __('p2p.100 USD') }}</td>
<td>{{ __('p2p.instant') }}</td>
<td>{{ __('p2p.0') }}</td>
<td><a href="/deposit"><i></i>{{ __('p2p.FUND HERE') }} </a></td>
</tr>
</tbody>
</table>



 



<center>
<h3>{{ __('p2p.Total Value of Crypto Assets') }}: $ {{ number_format($sum, 2) }}</h3>

<p>{{ __('p2p.If the total value of your crypto assets reaches') }} :$ {{ number_format($sum, 2) }} {{ __('p2p.small partial loan repayments might be initiated automatically')}} 
</p>

</center>

</div>
 
</div>

















<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('p2p.Deposit') }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>{{ __('p2p.Send payment to following address')}}</p>
       
       <form method="post" action="/system/deposits"> {{ csrf_field() }}
       
         <input type="hidden"   name="coin"  id="coin" >
        
         
         
  <div class="form-group">
    <label for="exampleInputEmail1">{{ __('p2p.Amount')}}</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Amount" name="amount" placeholder="Amount">
     
  </div>
      <div class="form-group"><button type="submit" class="btn btn-primary">{{ __('p2p.Deposit') }}</button>
  </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('p2p.close') }}</button>
      
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModalWidthdraw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ __('p2p.Widthdraw') }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
     <form method="post" action="/system/widthdraw"> {{ csrf_field() }}
       
     
         
  <div class="form-group">
    <label for="exampleInputEmail1">{{ __('p2p.Widthdraw Amount') }}</label>
    <input type="number" step="any"  class="form-control"  name="amount"   id="amount" aria-describedby="emailHelp" placeholder="Widthdraw amount">
    <div id="max"></div>
  </div>
    
    
     <div class="form-group">
    <label for="exampleInputEmail1">{{ __('p2p.Widthdraw Address') }}</label>
    <input type="text" class="form-control"  name="widthdraw_address"   id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Widthdraw Address">
    
  </div>
  
         <input type="hidden"   name="coin"  id="coin" >
         
    <div class="form-group"><button type="submit" class="btn btn-primary">{{ __('p2p.Submit Widthdraw') }}</button>
  </div>
  
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('p2p.close') }}</button>
      
      </div>
    </div>
  </div>
</div>




<script>
    
    
    $('#exampleModalWidthdraw').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
 // modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input#coin').val(recipient)
})




    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
 // modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input#coin').val(recipient)
})


</script>


@endsection

 

