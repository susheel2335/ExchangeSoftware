@extends('loginsignup')

@section('content') 


 
                    <form method="POST" action="/sendtologin">
                        @csrf

                        <div class="form-group  ">
                           
 
                                <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group  ">
                             
                                <input placeholder="{{ __('Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        

                        <div class="form-group    ">
                            
                            
                            <div class="g-recaptcha" data-sitekey="6Lf4bL0UAAAAAIYAgQ3W2v00tiXgahwucKFCk66N"></div>  
                  
                 
                 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request', app()->getLocale()))
                                    <a class="btn btn-link" href="{{ route('password.request'   ) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    
                                    <a class="btn btn-link" href="/register">
                                        {{ __('Dont have account? Register') }}
                                    </a>
                                    
                                    
                                @endif
                            
                        </div>
                    </form> 
@endsection
