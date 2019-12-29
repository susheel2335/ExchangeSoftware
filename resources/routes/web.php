<?php 
Route::get('lang/{locale}', 'FrontSystemCtrl@lang');
 
//Auth::routes(['verify' => true]);
  

    Route::get('/welcome', function () {
        return view('welcome');
    });

 Route::get('home', 'SystemCtrl@index')->name('auth.profile');
 
 Route::get('/', 'SystemCtrl@index')->name('auth.profile');
 


Auth::routes(['verify' => true]);
 //Auth::routes(['verify' => true]);
 

//Route::get('/', function () {
//    return view('welcome');
//});

 //Route::get('/home', 'HomeController@profileIndex')->name('profile.index');
    
    
//Route::get('home', 'SystemCtrl@index')->name('auth.profile');
 
Route::any('sendtologin', 'AuthController@systemlogin') ;
 

Route::any('sendtologin2', 'AuthController@systemlogin2') ;
 
 
//Auth::routes();

//Auth::routes(['verify' => true]);
 
  
 
    
    Route::get('/profile/enableg2f', 'GoogleAuthCtrl@getenableg2f')->name('profile.enableg2f');
    
    Route::post('/profile/enableg2f', 'GoogleAuthCtrl@postenableg2f')->name('profile.enableg2f');
    
    
    Route::get('/profile/getQRCodeGoogleUrl', 'GoogleAuthCtrl@getQRCodeGoogleUrl')->name('profile.getQRCodeGoogleUrl');
    
    
    
    Route::get('/profile', 'HomeController@profileIndex')->name('profile.index');
    
    
    
    
Route::get('auth/profile/submitforkyc', 'AuthController@submitforkyc')->name('auth.AuthControllersubmitforkyc');


    
Route::post('auth/kyc/{id}', 'AuthController@postkyc')->name('auth.AuthControllerpostkyc');
    
Route::get('auth/profile', 'AuthController@profile')->name('auth.AuthControllerprofile');

Route::post('auth/profile', 'AuthController@postprofile')->name('auth.AuthControllerpostprofile');

Route::post('auth/changePassword','AuthController@postchangePassword')->name('auth.changePassword');





Route::get('/logout', 'FrontSystemCtrl@logout')->name('auth.FrontSystemCtrllogout');;




Route::get('system/bonusprocess','FrontSystemCtrl@ProcessBonus') ->name('auth.FrontSystemCtrlProcessBonus');;



Route::prefix('aff')->group(function() {


// awardreferincome($amount,$m)
 
 
 
Route::get('packages','ReferCtrl@getPackages')->name('system.ReferCtrlgetPackages');

 
Route::post('investnow','ReferCtrl@investnow')->name('system.ReferCtrlinvestnow');




Route::get('refers','ReferCtrl@getrefer')->name('system.ReferCtrlgetrefer');
Route::get('up_earning','ReferCtrl@up_earning')->name('system.ReferCtrlup_earning');

Route::get('ref_earning','ReferCtrl@ref_earning')->name('system.ReferCtrlref_earning');

 
Route::get('testrefers','ReferCtrl@test_awardreferincome')->name('system.ReferCtrltest_awardreferincome');

 
Route::get('refers/{i}','ReferCtrl@getreferbylevelid')->name('system.ReferCtrlgetreferbylevelid');




Route::get('investment_order_history','ReferCtrl@investment_order_history')->name('system.ReferCtrlinvestment_order_history');

Route::get('investment_order_profit','ReferCtrl@investment_order_profit')->name('system.ReferCtrlinvestment_order_profit') ;



});
    
    
    
Route::prefix('background')->group(function() {


Route::get('dailybonus','BackgroundCtrl@dailybonus')->name('system.BackgroundCtrldailybonus') ;



});
    


Route::prefix('system')->group(function() {


Route::get('btcdeposit','BackgroundCtrl@btcdeposit')->name('system.btcdeposit')  ;





 Route::get('account','SystemCtrl@index')->name('system.account')  ;


Route::get('widthdraw/{i}','SystemCtrl@getwidthdrawbyid')->name('system.widthdraw')  ;

Route::get('deposits/{i}','SystemCtrl@getdepositsbyid') ->name('system.deposits.i')  ;


Route::get('widthdraw','SystemCtrl@getwidthdraw') ->name('system.getwidthdraw')  ;
Route::post('widthdraw','SystemCtrl@postwidthdraw') ->name('system.postwidthdraw')  ;

Route::get('deposits','SystemCtrl@getdeposits')->name('system.getdeposits')  ;
Route::post('deposits','SystemCtrl@postdeposits') ->name('system.postdeposits')  ;

Route::get('transactions','SystemCtrl@LedgetTransactions')->name('system.SystemCtrlLedgetTransactions')  ;


Route::get('coins','SystemCtrl@CoinsMaster')->name('system.SystemCtrlCoinsMaster')  ;



Route::get('Xpub','SystemCtrl@getBtcAddress')->name('system.SystemCtrlgetBtcAddress')  ;






 	});




    
 Route::get('/trade/{c1}/{c2}', 'TradeController@trade_theme_one')->name('system.radeControllertrade_theme_one')  ;
 
  Route::any('store','P2PTradeCtrl@posttradesubmit')->name('system.P2PTradeCtrlposttradesubmit')  ;
  
  
Route::prefix('p2p')->group(function() {

        
 Route::get('postTrade', 'P2PTradeCtrl@posttrade')->name('p2p.P2PTradeCtrlpostTrade')   ;
 
 	Route::get('getratec1/{id}/{c1value}','P2PTradeCtrl@getratec1')->name('p2p.P2PTradeCtrlgetratec1')   ;
 
 	Route::get('getratec2/{id}/{c1value}','P2PTradeCtrl@getratec2')->name('p2p.P2PTradeCtrlgetratec2') ;
 
 	Route::post('postTrade','P2PTradeCtrl@posttradesubmit')->name('p2p.P2PTradeCtrlposttradesubmit');
 	
 	
 	Route::get('store','P2PTradeCtrl@posttradesubmit')->name('p2p.P2PTradeCtrlposttradesubmit');
 
 
 
 	Route::get('buy_bitcoins','P2PTradeCtrl@buy_bitcoins')->name('p2p.P2PTradeCtrlbuy_bitcoins');
 
 
 	Route::get('sell_bitcoins','P2PTradeCtrl@sell_bitcoins')->name('p2p.P2PTradeCtrlsell_bitcoins');
 	
 	
 //	Route::get('CreateTrade','P2PTradeCtrl@createtradePost');
 
 	Route::get('CreateTradeBuy','P2PTradeCtrl@createtradeBuy')->name('p2p.P2PTradeCtrlcreatetradeBuy');
 	;
 	Route::get('CreateTradeSell','P2PTradeCtrl@createtradeSell')->name('p2p.P2PTradeCtrlcreatetradeSell');
 
 
 	Route::get('trade/{id}','P2PTradeCtrl@startTrade')->name('p2p.P2PTradeCtrlstartTrade219');
 
 	
 	Route::get('all_trade','P2PTradeCtrl@all_trades')->name('p2p.P2PTradeCtrlall_trades');
 	
 	Route::get('tradeinfo/{id}','P2PTradeCtrl@process_trade_order')->name('p2p.P2PTradeCtrlprocess_trade_order');
 	
 	
 	
 //	Route::get('process_trade/{id}','P2PTradeCtrl@process_trade');
 	
 	
 	Route::get('process_trade_buy/{id}','P2PTradeCtrl@process_trade_buy')->name('p2p.P2PTradeCtrlprocess_trade_buy');
 	
 	Route::get('process_trade_sell/{id}','P2PTradeCtrl@process_trade_sell')->name('p2p.P2PTradeCtrlprocess_trade_sell');
 	
 	
 	Route::post('process_trade_chat','P2PTradeCtrl@submit_process_trade_chats')->name('p2p.P2PTradeCtrlsubmit_process_trade_chats');;
 	
 	 	Route::get('release_coin/{id}','P2PTradeCtrl@get_release_coin')->name('p2p.P2PTradeCtrlget_release_coin'); 
 	 	
 	 	
 	 	
 	 	Route::post('release_coin','P2PTradeCtrl@release_coin')->name('p2p.P2PTradeCtrlrelease_coin');
 	 	
 	 	Route::get('mark_payment_as_paid/{id}','P2PTradeCtrl@mark_payment_as_paid')->name('p2p.P2PTradeCtrlmark_payment_as_paid');;
 	 	
 	 	Route::post('dispute_trade','P2PTradeCtrl@dispute_trade')->name('p2p.P2PTradeCtrldispute_trade');
 	
 	  	Route::post('leave_feedback','P2PTradeCtrl@leave_feedback')->name('p2p.P2PTradeCtrlleave_feedback');
 	
 	 
        
 Route::post('socketchat', 'P2PTradeCtrl@submitsocketchat')->name('p2p.P2PTradeCtrlsubmitsocketchat');
 Route::get('socketchat/{id}', 'P2PTradeCtrl@socketchat')->name('p2p.P2PTradeCtrlsocketchat');
 
 
 	});
 
Route::prefix('exchange')->group(function() {

        
 Route::get('/Ticker', 'TickerController@GetTickerCoins')->name('user.TickerControllerGetTickerCoins') ;
 
    
     
   
 Route::get('/sending', 'RedirectManagementController@ipredirect')->name('user.RedirectManagementControlleripredirect') ;
   
     
      
 Route::get('/UserBalance', 'TradeController@getUserBalance')->name('user.TradeControllergetUserBalance') ;
 
 
 Route::get('/Withdraw_Fund_History', 'ExchangeCtrl@Withdraw_Fund_History')->name('user.ExchangeCtrlWithdraw_Fund_History') ; 
 
 
 
 Route::get('/Withdraw_Fund', 'ExchangeCtrl@Withdraw_Fund')->name('user.ExchangeCtrlWithdraw_Fund') ; 
 
 
 Route::post('/Withdraw_Fund', 'ExchangeCtrl@SubmitWithdraw_Fund')->name('user.ExchangeCtrlSubmitWithdraw_Fund') ; 
 
 
  Route::get('/deposit/{deposit_id}', 'ExchangeCtrl@getdepositdetails')->name('user.ExchangeCtrlgetdepositdetails') ; 
  
  
 Route::get('/deposit', 'ExchangeCtrl@getBtcAddress')->name('user.ExchangeCtrlgetBtcAddress') ; 
  
  Route::post('/deposit', 'ExchangeCtrl@getDepositSubmit')->name('user.getDepositSubmitgetDepositSubmit') ; 
  
 
 
   Route::any('/deposit_history', 'ExchangeCtrl@getDepositList')->name('user.ExchangeCtrlgetDepositList') ; 
  
 
 
 Route::get('/deposit/process', 'ExchangeCtrl@getBtcProcess')->name('user.ExchangeCtrlgetBtcProcess') ; 
  
  
  
  
 Route::get('/transactions', 'ExchangeCtrl@LedgetTransactions')->name('user.ExchangeCtrlLedgetTransactions') ; 
  
  
    
    
 Route::get('/tradeMarketBuy', 'TradeController@FinishTradeBuyOrderTest')->name('user.TradeControllerFinishTradeBuyOrderTest') ;
 
  Route::get('/tradeMarketSell', 'TradeController@FinishTradeSellOrderTest')->name('user.TradeControllerFinishTradeSellOrderTest') ;
 
 
    
     
 
 

Route::get('/newsfeed', 'TradeController@newsfeed')->name('user.TradeControllernewsfeed') ;


 Route::get('/ticker/{c1}/{c2}', 'TradeController@GetTicker')->name('user.TradeControllerGetTicker') ; 
 
 
 Route::get('/tickerValueBuy/{c1}/{c2}/{total}', 'TradeController@GetTValueBuy')->name('user.TradeControllerGetTValueBuy') ; 
 
  Route::get('/tickerValueSell/{c1}/{c2}/{total}', 'TradeController@GetTValueSell')->name('user.manage') ; 
 
 
  
 Route::get('/tickerValueBuyR/{c1}/{c2}/{total}', 'TradeController@GetTValueBuyR')->name('user.TradeControllerGetTValueBuyR') ; 
 
  Route::get('/tickerValueSellR/{c1}/{c2}/{total}', 'TradeController@GetTValueSellR')->name('user.TradeControllerGetTValueSellR') ; 
 
 
 
 Route::post('/tradeorder', 'TradeController@CreateTradeOrder')->name('user.TradeControllerCreateTradeOrder') ; 
  
  
  
 Route::get('/trades/{type}/{c2}', function ($type,$c2) { 
      
      if($type=="buy")
      {
    return  response(DB::table('exchange_bookings')->where('pair',"BTC".$c2)->where('type',$type)->where('status',"Pending")->orderBy('rate', 'desc')->limit(5)->get()->toJson())->header('Content-Type', 'application/json');  
    
      }
      
      else
      {
          
          return  response(DB::table('exchange_bookings')->where('pair',"BTC".$c2)->where('type',$type)->where('status',"Pending")->orderBy('rate', 'asc')->limit(5)->get()->toJson())->header('Content-Type', 'application/json');  
    
      }
});



 Route::get('/owntrades', function () { 
      
      
    return  response(DB::table('exchange_bookings')->where('user_id', Auth::user()->id)->where('status',"Pending")->orderBy('id', 'desc')->limit(5)->get()->toJson())->header('Content-Type', 'application/json');  ;
});





Route::get('/ticker', 'TickerController@SelfDBTicker')->name('user.TickerControllerSelfDBTicker') ; 
  
  
  
  
Route::get('/ticker/buy', function () { 
      
      
    return  response(DB::table('exchange_rate_buy')->select("pair","rate")->where('pair',"BTCUSD")->orderBy('timest', 'desc')->limit(1)->get()->toJson())->header('Content-Type', 'application/json');  ;
});



Route::get('/ticker/sale', function () { 
      
      
    return  response(DB::table('exchange_rate_sale')->select("pair","rate")->where('pair',"BTCUSD")->orderBy('timest', 'desc')->limit(1)->get()->toJson())->header('Content-Type', 'application/json');  ;
});


 
  Route::get('/widthdraw_crypto', 'Trade_TransactionController@withdraw')->name('user.Trade_TransactionControllerwithdraw');
  
  
  	});





Route::prefix('admin')->group(function() {

   		Route::get('/login',

   		'Auth\AdminLoginController@showLoginForm')->name('admin.AdminLoginControllershowLoginForm');

   		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.AdminLoginController.login');

   		Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.AdminLoginControllerlogout');
 //Route::get('/', 'AdminController@allwidthdraw')->name('admin.dashboard');
    		
    // Route::post('/', 'AdminController@allwidthdraw')->name('admin.dashboard');
    		
    		
    			
  
    Route::get('/settings', 'AdminController@systemsettings')->name('admin.AdminControllersystemsettings') ;
	
	
    Route::get('/', 'AdminController@dashboard')->name('admin.AdminControllerdashboard') ;
	
	
  
Route::get('/autologin/{id}', 'AdminController@autoLoginbyID')->name('AdminControllerautologin');

 

    Route::get('/kycs/no', 'AdminController@getnokycall')->name('AdminControllerkycs');
    
    
    Route::get('/kycs/approved', 'AdminController@getapprovedkycall')->name('AdminControllergetapprovedkycall');
    
    
    
    Route::get('/kycs/pending', 'AdminController@getpendingkycall')->name('AdminControllergetpendingkycall');
    
    
  
    Route::get('/kycs', 'AdminController@getkycsall')->name('AdminControllergetkycsall');
    
  
    
    Route::get('/g2f', 'AdminController@getg2fall')->name('AdminControllergetg2fall');
    
       
    Route::get('/g2f/delete/{id}', 'AdminController@g2fdelete') ->name('AdminControllerg2fdelete');
    
    
    Route::get('/deposits', 'AdminController@alldeposits')->name('AdminControlleralldeposits');
    
    
    
    Route::get('/deposits/{id}', 'AdminController@depositsdetails')->name('AdminControllerdepositsdetails');
    
  //  Route::get('deposits_details', 'SystemCtrl@alldeposits')->name('deposits');
    
    
    
    
    
    Route::get('/widthdraw', 'AdminController@allwidthdraw')->name('AdminControllerallwidthdraw');
    
  Route::get('/widthdraw/{id}', 'AdminController@widthdrawdetails'  )->name('AdminControllerallwidthdraw');
    
  Route::post('/updatewidthdraw/{id}', 'AdminController@updatewidthdraw'  )->name('AdminControllerallwidthdraw');
    
    Route::get('/transactions', 'AdminController@alltransactions')->name('transactions');
    
      Route::get('/transactions/{id}', 'AdminController@transactionsdetails'  )->name('AdminControllerallwidthdraw');
      
    
    Route::get('/currencies', 'AdminCurrencies@allcurrencies')->name('currencies');
      
      
         
    Route::post('/addcurrency', 'AdminCurrencies@addcurrency')->name('addcurrency');
      
      
    Route::post('/disablecurrency', 'AdminCurrencies@disablecurrency')->name('disablecurrency');
      
      
    Route::post('/deletecurrency', 'AdminCurrencies@deletecurrency')->name('deletecurrency');
      
      
      
    
    Route::get('/getallcurrencies', 'AdminCurrencies@getallcurrencies')->name('AdminCurrenciesgetallcurrencies');
      
     
   
 //  Route::get('/users', 'AdminController@index');
    
   Route::get('/users', 'AdminController@index')->name('backend.users');
    
    
    Route::get('/users/add', 'AdminController@add')->name('backend.users.add');
    Route::post('/users/add', 'AdminController@addPost')->name('backend.users.add.post');
    
    Route::get('/users/edit/{id}', 'AdminController@edit')->name('backend.users.edit');
    
    
    Route::post('/users/profile/{id}', 'AdminController@editprofile')->name('backend.users.edit');
    Route::get('/users/profile/{id}', 'AdminController@profile')->name('backend.users.edit');
    
    Route::post('/users/edit/{id}', 'AdminController@editPost')->name('backend.users.edit.post');
    
    
    Route::get('/users/delete/{id}', 'AdminController@delete')->name('AdminControllerdelete');
    
    

  	});


 

