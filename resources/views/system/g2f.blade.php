  @extends('loginsignup')
@section('content')

                    <h3>{{ __('p2p.login') }}</h3>
                    <form  method="post" action="/sendtologin2">
                        
                    @csrf
              <input type="hidden" value="{{$data['email']}}" name="email" />
              <input type="hidden" value="{{$data['password']}}" name="password" />
                 <div class="form-group">
                        <label for="message-text" class="col-form-label">{{ __('p2p.Auth code') }}:</label>
                        <input type="text" class="form-control" name="authcode">
                    </div>
                  
                  
                     <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    
                    
                    </form> 
                    
@endsection
          