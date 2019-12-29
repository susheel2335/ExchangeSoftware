@extends('backend.index')
@section('content')


<div class="row">
    <div class="col-lg-12">
         
       
       <h3>  KYC not applied </h3>
       
        <table class="table table-striped datatables table-hover">
           
            <thead>
            <tr>
                <th  >ID</th>
                <th>Name</th>
            
               <th>Uploaded Document</th>
			   <th>Address</th>
			   
			     <th>Daily bonus</th>
				  <th>widthdrawal</th>
				 
				 
                <th>Created At</th>
                <th>Updated At</th> 
            </tr>
            </thead>
            <tbody>
               
@foreach ($users as $dt)
    <tr>  
    <td>  <a target="_blank" href="/admin/users/profile/{{ $dt->id }}" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->name }}  <br /> {{ $dt->email }}   <br />{{ $dt->mobile }}</td>
	 
	 <td>    @if ( $dt->kyc1 <>  "")  {{ $dt->kyc_document_info1 }}<br />  {{ $dt->kyc_document_info2 }} <br />  {{ $dt->kyc_document_info3 }}  @endif</td>
   
	 <td>   {{ $dt->address1 }} <br />
     {{ $dt->address2 }}<br /> 
    
	   {{ $dt->state }}<br />  {{ $dt->country }}   {{ $dt->pin }}
	   
	   </td>     


	   <td>   {{ $dt->dailybonus }}</td> 
	   
	   
       @if ( $dt->widthdrawal ==  "1")
        <td> Stopped</td>
       
       @else
       <td>Allowed</td>
       
@endif
 
	
      <td>   {{ $dt->created_at }}</td>
      
    
	
	 <td>  <a href="/admin/autologin/{{ $dt->id }}" > Login as this user </a></td>
  
  
    </tr>
    
    
@endforeach
            </tbody>
        </table>
      
    </div>
</div>
@endsection