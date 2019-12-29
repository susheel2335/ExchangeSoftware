 @extends('loginsignup')
@section('content')

 
                   
                          <form  method="post" action="/auth/systemlogin">
                        <div class="error alert alert-danger d-none"></div>
                    @csrf
                   
                    <!-- check if Authorization method is use username or email -->
                    @if(config('settings.authorization_method') == 0)
                        <div class="form-group">
                         
                            <input type="text" placeholder="Username" class="form-control" name="username">
                        </div>
                    @else
                        <div class="form-group">
                       
                            <input type="email"  placeholder="email"  class="form-control" name="email">
                        </div>
                    @endif
                    
                    
                    <div class="form-group">
                      
                        <input type="password"  placeholder="Password"   class="form-control" name="password">
                    </div>
                    
                    
                   wwwwwwwwwwwwwwwwwwwwwwww 
                  <div class="g-recaptcha" data-sitekey="6Lcqdb4UAAAAAAdQAReEMnTUFhvXfTwrA8dqHAit"></div>  
                  
                 
                  wwwwwwwwwwwwwwwwwww
                  
                     <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block border-0" value="Login" />
                        </div>
                    
                    </form> 
                    
                    
                    
@endsection



          
          @section('link')
           <p class="mb-1">{{ __('p2p. Dont have an account? ') }}</p>
         <h6> <a href="/system/register">{{ __('p2p.   Click me to create account ') }}</a></h6>
          @endsection
             
             
             
          