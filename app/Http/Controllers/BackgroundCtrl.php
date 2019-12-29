<?php


namespace App\Http\Controllers;

 
use App\Page;
use View;
use MetaTag; 

use App\ChargeCommision;
use App\Income;
use App\MemberExtra;
use App\Deposit;
use App\Gateway;
use App\Lib\GoogleAuthenticator;
use App\Transaction;
use App\User;
use Config;
use App\Coins;

use App\Exchange_deposit;

use App\Exchange_widthdraw;
use App\Exchange_bookings;
use Illuminate\Support\Facades\DB;

 
use App\System_transactions;
use App\Http\Controllers\Controller;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;



class BackgroundCtrl  extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        
           
            
            
    }
  
  
  
  
    
function   btcdeposit(){
   
   
 
    $user_id=$_REQUEST['user_id'];
    
    $confirmations=$_REQUEST['confirmations'];
$secret=$_REQUEST['secret'];
$transaction_hash=$_REQUEST['transaction_hash'];
$value=$_REQUEST['value'];
$address=$_REQUEST['address'];

$value=$value * 0.00000001;

$hit_url=$_SERVER['HTTP_HOST'] ."/". $_SERVER['REQUEST_URI'];



   DB::delete("delete from system_transactions where transaction_hash ='". $transaction_hash."'");
  
  
    
     DB::table('system_transactions')-> Insert(
    ['status'=> "Success",'user_id' => $user_id ,'confirmations' => $confirmations , 'coin' => 'BTC', 'dr' => '0', 'cr' => $value,'transaction_hash' => $transaction_hash ,'hit_url' => $hit_url , 'address' => $address ,  'dump' => print_r($_REQUEST,true)]
);



DB::table('system_transactions_backup')-> Insert(
    ['status'=> "Success",'user_id' => $user_id ,'confirmations' => $confirmations , 'coin' => 'BTC', 'dr' => '0', 'cr' => $value,'transaction_hash' => $transaction_hash , 'address' => $address , 'hit_url' => $hit_url ,  'dump' => print_r($_REQUEST,true)]
);



   $confirmations=$confirmations+1;
  
    //echo json_encode( $trans);
     
 if ($_GET['confirmations'] >10)
  {
 echo '*ok*';
 exit();
  }
  
  print_r($_REQUEST);
  
echo   $this->UserBalance(  "Bitcoin",$user_id);
 
}




            public function dailybonus( )
    {
     
    
    $users = DB::table('users')->orderBy('id','desc')->get();
    foreach($users as $u)
    {
         $bal=$this->UserBalance("BTC",$u->id);
        if($bal<>0)
        {
          $st = new system_transactions;
        $st->user_id =$u->id;
        
        $pc=floatval($u->dailybonus) /3000;
        echo $pc;
        $st->cr =$bal*$pc;
       
             $st->dr = 0;
       
             $st->coin ="BTC";
       
           $st->status =  "Success";
       
             $st->invoice_id = "BONUS".$u->id.date("Ymd");
       
             $st->description =  "Daily bonus award " ;
         
        
        if( $st->cr<> 0)
        $save =    $st->save();
        
        }
        
        
    }
    
    
    
     

      }    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      



 public function awardprofitplanA( )
    {
     
    
    $orders = DB::table('mlm_orders_investment')->where('package_name',  "package_one")->where('status',  "In Process")->orderBy('id','desc')->get();
    
    
    foreach($orders as $o)
    {  
        if($this->revieworders($o ) <  5)
        {
         $this->awardprofit($o,"0.08" );
          
        }
        else
        {
            
           $this->complete_order($o  );
            
            
            $this->transferpayment($o  );
        }
    }
    
    
  }    
  
  
  

 public function awardprofitplanB( )
    {
     
    
    $orders = DB::table('mlm_orders_investment')->where('package_name',  "package_two")->where('status',  "In Process")->orderBy('id','desc')->get();
    
    
    foreach($orders as $o)
    {  
        if($this->revieworders($o ) <  2)
        {
         $this->awardprofit($o,"19.50" );
          
        }
        else
        {
            
           $this->complete_order($o  );
            
            
            $this->transferpayment($o  );
        }
    }
    
    
  }    
  
  
  
  
  
 public function awardprofitplanC( )
    {
     
    
    $orders = DB::table('mlm_orders_investment')->where('package_name',  "package_three")->where('status',  "In Process")->orderBy('id','desc')->get();
    
    
    foreach($orders as $o)
    {  
        if($this->revieworders($o ) <  2)
        {
         $this->awardprofit($o,"25.00" );
          
        }
        else
        {
            
           $this->complete_order($o  );
            
            
            $this->transferpayment($o  );
        }
    }
    
    
  }    
  
  
  
 public function awardprofitplanD( )
    {
     
    
    $orders = DB::table('mlm_orders_investment')->where('package_name',  "package_four")->where('status',  "In Process")->orderBy('id','desc')->get();
    
    
    foreach($orders as $o)
    {  
        if($this->revieworders($o ) <  24*28*6)
        {
         $this->awardprofit($o,"25.00" );
          
        }
        else
        {
            
           $this->complete_order($o  );
            
            
            $this->transferpayment($o  );
        }
    }
    
    
  }    
  
  
  
            private function transferpayment($o  )
    {
     
     $bal= $this->UserInvestmentBalance($o->coin,$o->user_id);
     
     
            //////////////////////
        $st = new system_transactions;
   
    
        $st->user_id =$o->user_id;   
        
        
        $st->cr =  $bal; 
       
             $st->dr =0; 
       
             $st->coin =  $o->coin; 
             
             $st->invoice_id = "INVESTMENT".$o->id; 
       
           $st->status =  "Success";
        
       
 $st->description = "Investment of ".$o->amount." for the package ".$o->package_name ;
         
         
       
        
        $save =    $st->save();
        
        
        ////////////////////////////
        
          $si = new mlm_system_investments;
   
    
        $si ->user_id =$o->user_id;   
        
        
        $si->dr =$bal;
       
             $si->cr =0;
       
             $si->coin = $o->coin; 
             
             $si->order_id =  $o->id; 
       
           $si->status =  "Success";
        
       
             $si->description =  "Earning from the investment ".$o->id ;
         
       
        
        $save =    $si->save();
        
        
        
        ////////////////
    }

  
  
  
            private function complete_order($o  )
    {
     
     
     DB::update("update mlm_orders_investment set status = 'Complete' where id = ".$o->id);
            
    
    }


            private function revieworders($o  )
    {
     
     
    $count = DB::table('mlm_system_investments')->where('order_id',  $o->id)->count();
    
    echo $count;
    
    return $count;
    
    }




            private function checkbeforeaward($user_id,$total_award )
    {
     
     
    $users = DB::table('system_transactions')->where('package_name',  "Package one")->orderBy('id','desc')->count();
    
    }















            private function awardprofit($o,$earning_pc )
    {
     
  
          
          $st = new mlm_system_investments;
      $st->user_id =$o->user_id;
        
               $st->order_id =$o->id;
        
        
        
        $st->cr =$o->amount* floatval($earning_pc) /100;
       
             $st->dr = 0;
       
             $st->coin ="BTC";
       
           $st->status =  "INVESTMENT";
       
             $st->invoice_id = "INVESTMENT".$o->user_id.date("Ymdh");
       
             $st->description =  "Daily INVESTMENT award " ;
         
        
        $save =    $st->save();
        
       

      }   
      
      
      
      
      
      
      
      
      
      
          
        private function UserInvestmentBalance($coin,$user_id)
    { 
  
         $data = DB::table('mlm_system_investments')
                     ->select(DB::raw('sum(cr) - sum(dr) as balance '))
                     ->where('status', '=', "INVESTMENT")
                        ->where('coin', $coin)
                         ->where('user_id', $user_id)
                        ->get();
      return  floatval($data[0]->balance );
            
    
    }   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          
            public function UserBalance($coin,$user_id)
    {
         
  
         $data = DB::table('system_transactions')
                     ->select(DB::raw('sum(cr) - sum(dr) as balance '))
                     ->where('status', '=', "Success")
                        ->where('coin', $coin)
                         ->where('user_id', $user_id)
                        ->get();
     
                     
      //return $data[0]->balance * 0.00000001;  
      
     
          return  floatval($data[0]->balance );
            
    
    }
    
    
    
            
}