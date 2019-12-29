@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ Config::get('settings.admin_path') }}">{{ __('p2p.Control Panel') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('p2p.All System Requests.') }}</li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
            
             
            <table class="table   table-hover " >
 <tr> 
     <td>{{ __('p2p.Coin') }}</td>
     <td>{{ $transaction->coin }}</td> 
     </tr>
     
    <tr> 
     <td>{{ __('p2p.ID') }}</td>
     <td>{{ $transaction->id }}</td> 
     </tr>  
     
     
     
         <tr> 
     <td>{{ __('p2p.User ID') }}</td>
     <td>{{ $transaction->user_id }}</td> 
     </tr>  
     
         <tr> 
     <td>{{ __('p2p.Description') }}</td>
     <td>{{ $transaction->description }}</td> 
     </tr>   
     
     
         <tr> 
     <td>{{ __('p2p.Amount') }}</td>
     <td>{{ $transaction->amount }}</td> 
     </tr>  
     
     
     
     
      
     
     
     
         <tr> 
     <td>{{ __('p2p.Status') }}</td>
     <td>{{ $transaction->status }}</td> 
     </tr>  
     
     
     
     
     
         <tr> 
     <td>{{ __('p2p.IP') }}</td>
     <td>{{ $transaction->id }}</td> 
     </tr>   
     
     </table>
        
            
  
        </div>
    </div>
@endsection