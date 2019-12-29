@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ Config::get('settings.admin_path') }}">{{ __('p2p.Control Panel') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('p2p.All System Widthdraw Requests.) }}</li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
            
             
            <table class="table   table-hover " >
 <tr> 
     <td>{{ __('p2p.Coin') }}</td>
     <td>{{ $widthdraw->coin }}</td> 
     </tr>
     
    <tr> 
     <td>{{ __('p2p.ID') }}</td>
     <td>{{ $widthdraw->id }}</td> 
     </tr>  
     
     
     
         <tr> 
     <td>{{ __('p2p.User ID') }}</td>
     <td>{{ $widthdraw->user_id }}</td> 
     </tr>  
     
         <tr> 
     <td>{{ __('p2p.Description') }}</td>
     <td>{{ $widthdraw->description }}</td> 
     </tr>   
     
     
         <tr> 
     <td>{{ __('p2p.Amount') }}</td>
     <td>{{ $widthdraw->amount }}</td> 
     </tr>  
     
     
     
     
         <tr> 
     <td>{{ __('p2p.Widthdraw Transaction ID') }}</td>
     <td>{{ $widthdraw->widthdraw_transaction_id }}</td> 
     </tr>  
     
     
     
     
     
         <tr> 
     <td>{{ __('p2p.Widthdraw Address') }}</td>
     <td>{{ $widthdraw->widthdraw_address }}</td> 
     </tr>  
     
     
     
     
         <tr> 
     <td>{{ __('p2p.Status') }}</td>
     <td>{{ $widthdraw->status }}</td> 
     </tr>  
     
     
     
     
     
         <tr> 
     <td>{{ __('p2p.IP') }}</td>
     <td>{{ $widthdraw->id }}</td> 
     </tr>   
     
     </table>
           <div class="col-lg-6">
               
               
               
               
               @if($widthdraw->status <> 'Processed')
               
               
          
        
        
            <form method="post" action="/admin/updatewidthdraw/{{ $widthdraw->id }}" >
              
                            {{ csrf_field() }}
                
  <div class="form-group">
      
      
      
       <select   class="form-control"   name="status" >
  <option value="Processed">{{ __('p2p.Processed') }}</option>
  <option value="Cancelled">{{ __('p2p.Cancelled') }}</option>
 
</select> 


    <label for="note">{{ __('p2p.Description') }}</label>
    
    
    <input type="text" class="form-control" name="description" id="description"   >
  
  
      
      
    
    
    <label for="exampleInputEmail1">{{ __('p2p.Widthdraw Transaction ID') }}</label>
    
    
    <input type="text" class="form-control" name="widthdrawtransactionid" id="widthdrawtransactionid"   >
     
    
    
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">{{ __('p2p.Submit') }}</button>
  
  
</form>    @endif
        

</div>
  
        </div>
    </div>
@endsection