@extends('backend.index')
@section('content')
    
   
    
    <div class="row">
        <div class="col-lg-6">
<h5 class="mt-0">{{ $user->name }}</h5>
                <p>Username: {{ $user->username }}</p>
                <p>Email: {{ $user->email }}</p>
                
                
                
                            
       @if ( $user->kyc1 <>  "")
       
    <p>   <img src="data:image/png;base64,{{ $user->kyc1 }}" /></p></p>
     <p>  {{ $user->kyc_document_info1 }}
       </p>
                
                
                
@endif


            <form role="form" action="" enctype="multipart/form-data" method="post">
                
                
              
                    
                    <div class="form-group">
  <label for="usr">Daily Gain Percentage:</label>
  <input type="text" class="form-control" id="usr" value="{{ $user->dailybonus }}"     name="dailybonus">
</div> 
                            
                            
                            
                            
       @if ( $user->widthdrawal ==  "1")
        <div class="form-group">     <div class="checkbox">
  <label><input type="checkbox"   checked     name="widthdrawal" value=""> Stop widthdrawal for this user</label>
</div></div>

       
       @else
        <div class="form-group">     <div class="checkbox">
  <label><input type="checkbox"     name="widthdrawal" value=""> Stop widthdrawal for this user</label>
</div></div>

       
@endif



                        


                @csrf

                        
                  
                  
                 
                <input type="hidden" name="doEdit" value="true">
                
                
                
                <button type="submit" class="btn btn-primary">Update</button> 
            </form>
        </div>
    </div>
@endsection