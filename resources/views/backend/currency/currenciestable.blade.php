
       <h3>  Currency Table </h3>
       
        <table class="table table-striped datatables table-hover">
           
            <thead>
            <tr>
    
                <th>Currency</th>
            
               <th>Master Wallet</th>
			   <th>Status (Enable/disable)</th>
			   
			     
			     
                <th>Created At</th>
                <th>Updated At</th> 
            </tr>
            </thead>
            <tbody>
               
@foreach ($currencies as $dt)
    <tr>  
   
   

	   <td>   {{ $dt->currency }}</td> 
	   

	   <td>   {{ $dt->masterwallet }}</td> 
	   

	   <td>   {{ $dt->status }}</td> 
	   


	
      <td>   {{ $dt->created_at }}</td>
	
      <td>   {{ $dt->updated_at }}</td>
      
    
	
	 <td> 
       <form action="/admin/disablecurrency" method="post">@csrf  
       
       <input type="hidden" name="id" value="{{ $dt->id }}" />
       
       
        <button class="btn btn-primary" type="submit" >Disable</button>
       
       </form> <form action="/admin/deletecurrency" method="post">@csrf  
       
       <input type="hidden" name="id" value="{{ $dt->id }}" />
       
       
        <button class="btn btn-primary" type="submit" >Delete</button>
       
       </form>
       
       </td>
  
  
    </tr>
    
    
@endforeach
            </tbody>
        </table>
      