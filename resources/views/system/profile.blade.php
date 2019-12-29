@extends('design1layout')
@section('content')

  <div class="container">
      
      
       <div class="row">
        <div class="col-md-12">
       <div ng-controller="submitforkyc">
           <h3>Submit your profile for KYC verification   <a class="btn btn-primary"  ng-click="submitforkyc()" role="button">Verify</a>
           <% res %>
           </h3>
            
         </div> </div> </div>    
            

      <div class="row">
        <div class="col-md-6">
            
            
            
            
        <div class="card"><div class="card-header">      
Profile
 </div>
  <div class="card-body">      
   
<form action="" method="post">
    
     @csrf
     
     
  <div class="form-group row">
    <label for="fullname" class="col-4 col-form-label">Full Name</label> 
    <div class="col-8">
      <input id="fullname" name="fullname" value="{{ $user->name }}" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobile" class="col-4 col-form-label">Mobile Number</label> 
    <div class="col-8">
      <input id="mobile" name="mobile" type="text" value="{{ $user->mobile }}" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="country" class="col-4 col-form-label">Country</label> 
    <div class="col-8">
      <input id="country" name="country" type="text" value="{{ $user->country }}" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="state" class="col-4 col-form-label">State</label> 
    <div class="col-8">
      <input id="state" name="state" type="text" value="{{ $user->state }}" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-4 col-form-label">Address Line 1</label> 
    <div class="col-8">
      <input id="address" name="address1" type="text" value="{{ $user->address1 }}"  required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="address2" class="col-4 col-form-label">Address Line 2</label> 
    <div class="col-8">
      <input id="address2" name="address2"  value="{{ $user->address2 }}" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
 </div></div> 
 <br /><br /> 
 
 <div class="card">
  <div class="card-header">      
   Change Password
 </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="/auth/changePassword">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-12 control-label">Current Password</label>

                                
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-12 control-label">New Password</label>

                                 
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                              
                            </div>

                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-12 control-label">Confirm New Password</label>

                                 
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
 </div> 
 
 
 
 
 
 <br /><br /> 
 
 <div class="card">
  <div class="card-header">      
  Google Auth 
 </div>
 
 
 
                    <div class="card-body">
                     
                        <div   ng-controller="myCtrl">

<p>To Enable or Reset  Google 2F Auth scan this code and then type the code below</p>
<p><img src="<% g2f.qr %>"/>

<br /><% g2f.secret %>

</p>

  <form  ng-submit="enableqrcode(g2f)"  >
                          
                          

                            

                            <div class="form-group">
                              
                              

                                 
                                    <input id="new-password-confirm" type="text" ng-model="g2f.authcode" class="form-control" name="new-password_confirmation" required>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Set the auth code
                                    </button>
                                </div>
                            </div>
                            
                            <h3><% res %></h3>
                        </form>

</div>



                      
                        
  </div>
   </div> 
 
 
  </div>
  
  
  
  
  
  
  
  
  <div class="col-md-6">
      
      
        <div class="card">
          
           <div class="card-header">      
  KYC document 1
 </div>
 
 
  <div class="card-body">
      
      
      
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Document 1 </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Edit</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      
    
      @if ($user->kyc1 <> "")
   
       
       <img src="data:image/png;base64,{{ $user->kyc1 }}" />
       {{ $user->kyc_document_info1 }}
@endif
     
    


     
      
      </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">   
      
       
     
     
     <label>Upload Document</label>
     <form action="/auth/kyc/1"  class="dropzone">
     @csrf
      <input class="form-control"  placeholder="Document Name/Description" name="kycD" type="text"   />
  <div class="fallback">
    <input    name="file1" type="file"   />
  </div>
</form>

 
      
      </div>
   
</div>

 
      </div></div>
      
  
  
  
  
  
   <div class="card">
          
           <div class="card-header">      
  KYC document 2
 </div>
 
 
  <div class="card-body">
      
      
      
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home" aria-selected="true">Document 2 </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Edit</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
      
    
    
           @if ($user->kyc2 <> "")
   
       <img src="data:image/png;base64,{{ $user->kyc2 }}" />
       {{ $user->kyc_document_info2 }}
     @endif
    


     
      
      </div>
  <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab">   
      
       
     
     
     <label>Upload Document</label>
     <form action="/auth/kyc/2"  class="dropzone">
     @csrf
      <input class="form-control"  placeholder="Document Name/Description" name="kycD" type="text"   />
  <div class="fallback">
    <input    name="file2" type="file"   />
  </div>
</form>

 
      
      </div>
   
</div>

 
      </div></div>
      
      
      
      
      
       <div class="card">
          
           <div class="card-header">      
  KYC document 3
 </div>
 
 
  <div class="card-body">
      
      
      
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home3" role="tab" aria-controls="pills-home" aria-selected="true">Document 3 </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile3" role="tab" aria-controls="pills-profile" aria-selected="false">Edit</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab">
      
    
      
           @if ($user->kyc3 <> "")
       
       <img src="data:image/png;base64,{{ $user->kyc3 }}" />
       {{ $user->kyc_document_info3 }}
     
      @endif


     
      
      </div>
  <div class="tab-pane fade" id="pills-profile3" role="tabpanel" aria-labelledby="pills-profile-tab">   
      
       
     
     
     <label>Upload Document</label>
     <form action="/auth/kyc/3"  class="dropzone">
     @csrf
      <input class="form-control"  placeholder="Document Name/Description" name="kycD" type="text"   />
  <div class="fallback">
    <input    name="file3" type="file"   />
  </div>
</form>

 
      
      </div>
   
</div>

 
      </div></div>
      
      
      
      
      
      <div class="card">
  <div class="card-body">
      
      Verification is required to comply with KYC/AML regulations and to protect your account from unauthorized access. Client verifications are managed by Onfido - the world’s most advanced KYC enterprise, and are usually completed within minutes. In rare cases it may take up to 24 hours.

  <div class="nv"> No Verification</div> 
 <div class="style2">   Cryptocurrency Deposit Limit</div> 
    <div class="style3">    No Limit
</div> 
  <div class="style2">   Cryptocurrency Withdrawal Limit</div> 
    <div class="style3">  $20,000 / day (including loan withdrawals using stablecoins)
</div> 
  <div class="style2">   Bank Withdrawal Limit</div> 
   <div class="style3">   $0 / month</div> 
  
    <div class="nv">   Basic Verification</div> 
  
      <div class="style2"> Cryptocurrency Deposit Limit</div> 
  <div class="style3">    No Limit</div> 

   <div class="style2">   Cryptocurrency Withdrawal Limit</div> 
 <div class="style3">     $100,000 / day (including loan withdrawals using stablecoins)</div> 

   <div class="style2">   Bank Withdrawal Limit</div> 
  <div class="style3">  $0 / month</div> 
    <div class="nv">   Advanced Verification (required for dividends and cards)</div> 
    <div class="style2">   Cryptocurrency Deposit Limit</div>  
    <div class="style3">   No Limit</div> 

  <div class="style2">    Cryptocurrency Withdrawal Limit</div> 
    <div class="style3">  No Limit (including loan withdrawals using stablecoins)</div> 

   <div class="style2">   Bank Withdrawal Limit</div> 
  <div class="style3">    $10,000.00 / month (can be increased to $100,000.00 on request)</div> 
  
<div class="nv">
Please contact YouseBank Support to request larger loan and withdrawal limits or to open a Business Wallet.</div> 

  </div>
  </div></div>
  
  
  
  </div>
  
  
  </div>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css"  crossorigin="anonymous" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"   crossorigin="anonymous"></script>


   

 
@endsection