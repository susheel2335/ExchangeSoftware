@extends('exchange')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            <h2>Deposit Fund</h2>
        <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Bitcoin</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">xpagg</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Wibx</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">USD</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><H3>Bitcoin Depsoit Address
      </H3>
      <b>
         {{$data->address}}
         


         </b>
         </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><H3>xpagg Depsoit Address
      </H3>
      <b>
          
             <form action="/exchange/deposit" method="post">
 
  <div class="form-group">
    <label for="amount">Amount </label>
    <input type="text" name="amount" class="form-control" id="amount"  >
  </div>
  
  
    <div class="form-group">
    <label for="amountbtc">Deposit Address</label>
    <input type="text" value="{{$data->address}}" name="deposit_address" class="form-control" id="deposit_address"  >
  </div>
  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
         </b></div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><H3>WIBX Depsoit Address
      </H3>
      <b>
            coming soon...
         </b></div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><H3> USD deposit 
      </H3>
      <b>
       coming soon...
         </b></div>
    </div>
  </div>
</div>
        
     
  </div></div></div>
@endsection