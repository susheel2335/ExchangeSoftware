@extends('design1layout')
@section('content')
    
 
 <center><h3>   @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif  </h3></center>
               
               
               
<div class="row">
@foreach ($packages as $dt)

<div class="col-md-3">
    
    <div class="card" style="width: 18rem;">
  <img src="https://www.evansinvestmentcounsel.com/wp-content/uploads/2017/04/philosophy-wealth-management.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $dt['label'] }}</h5>
   
    <p class="card-text">{{ __('p2p.Investment' ) }}  {{ $dt['min_invest'] }} - {{ $dt['max_invest'] }} USD</p>
     
    <form action="investnow"   method="post">
   
  
         @csrf

    <input type="hidden" class="form-control" value="{{ $dt['min_invest'] }}" name="plan">
    
    
    <input type="hidden" class="form-control" value="{{ $dt['name'] }}" name="package_name">
     
     
  
 
    <input type="number" min="{{ $dt['min_invest'] }}" max="{{ $dt['max_invest'] }}"    class="form-control" value="" name="invest_amount">
     
     
     
     
  <button type="submit" class="btn btn-primary">{{ __('p2p.Invest Now') }}  </button>
</form>


    
    
  </div>
</div></div>



    
    
    
@endforeach 
       
</div>
@endsection