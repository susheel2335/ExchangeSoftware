<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
           <title>{{ __('p2p.TradePlateform') }}</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../../assets/css/lime.min.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body  ng-app="myApp">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        
        <div class="lime-sidebar">
            <div class="lime-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                   
                   
    
     <li class="sidebar-title">
                        Apps
                    </li>
                   
                   
                   
                   
                     <li>
                        <a href="/system/account"><i class="material-icons">dashboard</i>{{ __('p2p.Accounts') }}</a>
                    </li>
                    <li>
                        <a href="/auth/profile"><i class="material-icons">person_outline</i>Profile</a>
                    </li>  
                    
                    
                    <li>
                        <a href="/trade/BTC/USD"><i class="material-icons">person_outline</i>{{ __('p2p.Exchange') }}</a>
                    </li>
                    
                    
       
       
       
     <li class="active-page">
                        <a href=""><i class="material-icons">apps</i>{{ __('p2p.Peer to Peer Trade') }}<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                        <ul class="sub-menu">
                       
                           
        <li> <a  class="dropdown-item"  href="/p2p/buy_bitcoins">{{ __('p2p.Buy Bitcoin') }}</a></li>
         <li><a class="dropdown-item"  href="/p2p/sell_bitcoins" >{{ __('p2p.Sell Bitcoin') }}</a> </li>
        <li> <a class="dropdown-item"  href="/p2p/postTrade" >{{ __('p2p.postTrade') }}</a> </li>
    
         
         <li><a  class="dropdown-item"  href="/p2p/all_trade"> {{ __('p2p.Own Trades') }}</a>
                            </li>
                     
                        </ul>
                    </li>

     <li class="active-page">
                        <a href=""><i class="material-icons">apps</i>{{ __('p2p.Earning by Refer') }}<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                        <ul class="sub-menu">
                            <li>
                                       
    <a  class="dropdown-item"  href="/aff/packages">{{ __('p2p.Packages') }}</a> 
    </li>
    
    
    <li> <a  class="dropdown-item"  href="/aff/investment_order_history">{{ __('p2p.Investment Order History') }}</a> </li>
    
    <li> <a  class="dropdown-item"  href="/aff/investment_order_profit">{{ __('p2p.Investment Order Profit') }}</a>   <!--
    
    <a  class="dropdown-item"  href="/aff/up_earning">Up Earnings</a> 
    
    
    <a  class="dropdown-item"  href="/aff/ref_earning">Referral Earnings</a> 
    
    
    
    <a  class="dropdown-item"  href="/aff/refers">Direct Refer</a> 
    <a  class="dropdown-item"  href="/aff/refers/1">Refer Level 1</a>  
    
    <a  class="dropdown-item"  href="/aff/refers/2">Refer Level 2</a>  
    -->
    
                            </li>
                     
                        </ul>
                    </li>
                    
    
    
   
       
          <li class="active-page">
                        <a href=""><i class="material-icons">apps</i>{{ __('p2p.Other menu') }}<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a  class="dropdown-item"  href="/system/deposits">{{ __('p2p.Deposits') }}</a>
                            </li>
       <li>   <li><a class="dropdown-item"  href="/system/widthdraw">{{ __('p2p.Widthdraw') }}</a> 
 
                            </li>
    
      <li>  <a class="dropdown-item" href="/system/transactions">
         {{ __('p2p.Transactions') }}</a>
     
                            </li>
                     
                        </ul>
                    </li>
       
       
     
     
                    <li>
                        <a href="/logout"><i class="material-icons">person_outline</i>{{ __('p2p.logout') }}</a>
                    </li>
                    
                    
 
    
          <li class="active-page">
                        <a href=""><i class="material-icons">apps</i>{{ __('p2p.Language') }}<i class="material-icons has-sub-menu">keyboard_arrow_left</i></a>
                        <ul class="sub-menu">
               <li>                
   <a class="dropdown-item" href="/lang/en"> English</a></li>
                                
                          <li>         <a class="dropdown-item" href="/lang/es">  Spanish</a></li>
                          <li>         <a class="dropdown-item" href="/lang/pt"> Portuguese</a>
                                </li>
                                
                                </ul>
                                
                                </li>
      
                 
    
    
    
    
    
                </ul>
            </div>
        </div>
        
        
        <div class="theme-settings-sidebar">
            <div class="theme-settings-inner">
                <h3 class="theme-sidebar-title">Themes</h3>
                <p class="themes-info">Select a demo</p>
                
                <a class="theme-item active" href="#">
                    <img src="../../assets/images/themes/1.png" alt="">
                    <h4 class="theme-title">Classic</h4>
                </a>
                <a class="theme-item" href="../admin2/index.html">
                    
                    <img src="../../assets/images/themes/2.png" alt="">
                    <h4 class="theme-title">Dark Theme</h4>
                </a>
            </div>
        </div>
        
        <div class="lime-header">
            <nav class="navbar navbar-expand-lg">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="javascript:void(0)" class="button-collapse material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <a class="navbar-brand" href="#">Complex bank</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="material-icons">keyboard_arrow_down</i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0 search" id="search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search for projects, apps, pages..." aria-label="Search">
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle theme-settings-link" href="#">
                                <i class="material-icons">layers</i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="/auth/profile">Account</a></li>
                          
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="/logout">Log Out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="search-results">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-results-header">
                            <h4>Search Results</h4>
                            <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="search-result-list user-search">
                            <li>
                                <img src="../../assets/images/avatars/avatar2.png" alt="">
                                <p>Tom Manchester<br>(Works at <span class="search-input-value"></span>)</p>
                            </li>
                            <li>
                                <img src="../../assets/images/avatars/avatar5.png" alt="">
                                <p>Luke Williams<br>(Lives in <span class="search-input-value"></span>)</p>
                            </li>
                            <li>
                                <img src="../../assets/images/avatars/avatar4.png" alt="">
                                <p>People near:<br><span class="search-input-value"></span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="search-result-list social-search">
                            <li>
                                <div class="social-search-icon facebook-icon-bg">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="social-search-text">
                                    <p><span class="search-input-value"></span> on Facebook</p>
                                </div>
                            </li>
                            <li>
                                <div class="social-search-icon twitter-icon-bg">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="social-search-text">
                                    <p><span class="search-input-value"></span> on Twitter</p>
                                </div>
                            </li>
                            <li>
                                <div class="social-search-icon google-icon-bg">
                                    <i class="fab fa-google-plus-g"></i>
                                </div>
                                <div class="social-search-text">
                                    <p><span class="search-input-value"></span> on Google+</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="search-result-list article-search">
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value"></span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                                <span class="search-article-date">06 Dec, 2018</span>
                            </li>
                            <li>
                                <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value"></span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                                <span class="search-article-date">19 Nov, 2017</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="lime-container">
            <div class="lime-body">
            
				
				
				
				
				
				
                              
                              
                              
                              
                                   @yield('content')
                                   
                                   
                                   
                                   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				    
					
					
					
					
					
					
					
					
					
					
					
					
            </div>
            <div class="lime-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                           
                           
  
    <p class="float-right"><a href="#">{{ __('p2p.Back to top') }}</a></p>
    <p>&copy; {{ __('p2p.2017-2019 Company, Inc.') }}. &middot; <a href="#">{{ __('p2p.privacy') }}</a> &middot; <a href="#">{{ __('p2p.terms') }}</a></p>
 
  
  
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/js/lime.min.js"></script>
        
        
        
        
        
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        
<script>
    
      var app = angular.module("myApp", [], function($interpolateProvider) {
    $interpolateProvider.startSymbol("<%");
    $interpolateProvider.endSymbol("%>");
});



app.controller('submitforkyc', function($scope, $http) {
    
    
  $scope.submitforkyc = function ( ) {

        

$http.get("/auth/profile/submitforkyc" )
  .then(function(response) {
    $scope.res = "Successfully Submitted";
  });
  
  
           
  };

});
    
    
app.controller('myCtrl', function($scope, $http) {
    
    
    
    
    
  $http.get("/profile/enableg2f")
  .then(function(response) {
    $scope.g2f = response.data;
  });
  
   
  





  $scope.enableqrcode = function (g2f) {

       
          
      var config = {
        params: {
         secret: g2f.secret, authcode: g2f.authcode
        }
      };


$http.post("/profile/enableg2f", null, config)
  .then(function(response) {
    $scope.res = response.data;
  });
  
  
           
  };







     $scope.getPairRateC1Buy = function  (id,total)
    {
        
        
        $http.get("/p2p/getratec1/"+id+"/"+total )
  .then(function(response) {
  //  $scope.getPairRateRS = response.data ;
    
    console.log(response.data);
   $scope.btcvalue= response.data ;
  });
  
          
    };
    
    
    
     $scope.getPairRateC2Buy = function  (id,total)
    {
        
        
        $http.get("/p2p/getratec2/"+id+"/"+total )
  .then(function(response) {
  //  $scope.getPairRateRS = response.data ;
    
    console.log(response.data);
   $scope.c1value= response.data ;
  });
  
          
    };
    
    
});

    
    
    
    
</script>


    </body>
</html>












    
    
     
                                        
                                        
              
              
              
              
        
         

  