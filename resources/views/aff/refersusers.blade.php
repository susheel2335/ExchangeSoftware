@extends('design1layout')
@section('content')
    

<div class="row">
    <div class="col-lg-12">
         <center> {{ __('p2p.Your refer id') }}  {{ Session::get('refer_id') }}   </center>
       
       
        <table class="table table-striped datatables table-hover">
           
            <thead>
            <tr>
                <th  >{{ __('p2p.Id') }}</th>
                <th>{{ __('p2p.name') }}</th>
                <th>{{ __('p2p.email') }}</th>
               <th>{{ __('p2p.Mobile Numer') }}</th>
			   <th>{{ __('p2p.Address') }}</th>
			   
			     
				 
				 
                <th>{{ __('p2p.Created At') }}</th>
                <th>{{ __('p2p.Updated At') }}</th> 
            </tr>
            </thead>
            <tbody>
               
@foreach ($users as $dt)
    <tr>  
    <td>  <a href="#" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->name }}</td>
    <td>   {{ $dt->email }}</td> 
    
	
	 <td>   {{ $dt->mobile }}</td>
  
    
	 <td>   {{ $dt->address1 }} <br />
     {{ $dt->address2 }}<br /> 
    
	   {{ $dt->state }}<br />  {{ $dt->country }}   {{ $dt->pin }}
	   
	   </td>     


	  
	
      <td>   {{ $dt->created_at }}</td>
    <td>   {{ $dt->updated_at }}</td>    
    
	 
  
  
    </tr>
    
    
@endforeach
            </tbody>
        </table>
      
    </div>
</div>
@endsection