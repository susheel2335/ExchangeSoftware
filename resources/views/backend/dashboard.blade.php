@extends('backend.index')
@section('content')


<div class="row">
    <div class="col-md-4">
         
         
         <div class="card">
  <h5 class="card-header">Total users</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $total_users  }}</h5>
    
    
    <a href="/admin/users" class="btn btn-primary">Users </a>
  </div>
</div>
</div> 


   <div class="col-md-4">
         
         
         <div class="card">
  <h5 class="card-header">Total users</h5>
  <div class="card-body">
    <h5 class="card-title">{{ $total_users  }}</h5>
    
    
    <a href="/admin/users" class="btn btn-primary">Users </a>
  </div>
</div>

</div> 



      
    </div>
</div>
@endsection