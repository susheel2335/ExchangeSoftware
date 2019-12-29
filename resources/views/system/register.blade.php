   @extends('loginsignup')
@section('content')
                    
                     <form class="ajax-form" method="post" action="{{ route('frontend.auth.signup') }}">
                @csrf
                <div class="modal-body">
                    <div class="error alert alert-danger d-none"></div>
                 
                    <div class="form-group row">
                       
                            <input type="text"  placeholder="Your name"   class="form-control" name="displayName">
                        </div>
                  
                    <div class="form-group row">
                          
                            <input type="text"  placeholder="Email"   class="form-control" name="email">
                        
                    </div>
                    <!-- check if Authorization method is use username -->
                    @if(config('settings.authorization_method') == 0)
                        <div class="form-group row">
                         
                           
                                <input type="text"   placeholder="Username"   class="form-control" name="username">
                           
                        </div>
                    @endif
                    <div class="form-group row">
                      
                       
                            <input type="password"  placeholder="Password"   class="form-control" name="password">
                      
                    </div>
                    <div class="form-group row">
                      
                        
                            <input type="password"   placeholder="Retype password"  class="form-control" name="password_confirmation">
                        
                    </div>
              
                
                <div class="form-group row">
               
 <button type="submit" class="btn btn-primary btn-block border-0">Signup</button>
                      </div>   </div>   
            </form>         
@endsection
          
          
          @section('link')
          
          <p class="mb-1">Already have an account?</p>
          
          
            <a href="/system/login">Click me to Login</a>
            
            
          @endsection
             