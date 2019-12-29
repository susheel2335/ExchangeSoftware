<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Page;
use Auth;
use App\System_Deposit;
use App\Exchange_widthdraw;
use App\System_transactions;
use App\System_Currency ;

use DB;
use App\User;
class AdminCurrencies extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */ 
    public function __construct( Request $request)

    {$this->request = $request;

        $this->middleware('auth:admin');

    }
public function deletecurrency()

{
    $c =   System_Currency::find( $this->request['id']); 


    $c->delete();
            
     return back()->with('success','Request submitted.');
        
        
        
 
    }

public function disablecurrency()

{
    $c =   System_Currency::find( $this->request['id']); 


    
                       $c->status ='Inactive';
        
              
                 
            $c->save();
            
            
     return back()->with('success','Request submitted.');
        
        
        
 
    }
    
    
    
public function addcurrency()

{
    $c = new System_Currency;
       
       
            $c->currency =    $this->request['currency'];
            $c->masterwallet =    $this->request['masterwallet']; 
              
                        $c->symbol =    $this->request['symbol']; 
              
                       $c->status ='Active';
        
              
                 
            $c->save();
            
            
     return back()->with('success','added successfully.');
        
        
        
 
    }
    
    
    public function allcurrencies()

{
        $currencies = System_Currency::all();

        return view('backend.currency.currencies')
            ->with('currencies', $currencies);
    }
    
public function getallcurrencies()

{
        $currencies = System_Currency::all();


echo json_encode( $currencies);
    }
    
    

 
}