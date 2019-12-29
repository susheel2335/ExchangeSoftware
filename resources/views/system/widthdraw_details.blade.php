@extends('layout')
@section('content')

  <div class="container">

      <div class="row">
        <div class="col-md-12">
            
            <h3> Widthdraw ID   {{ $data->id }}</h3>
            
            <table class="table ">
                <tr><td>Deposit ID  </td><td>{{ $data->id }}</td></tr>
                  <tr><td>Amount</td><td>{{ $data->amount }}</td></tr>
                    <tr><td>Coin</td><td>{{ $data->coin }}</td></tr>
                      <tr><td>Created Time</td><td>{{ $data->created_at }}</td></tr>
                        <tr><td>Widthdraw Address</td></td><td>{{ $data->widthdraw_address }}</td></tr>
                        
                        <tr><td>Status  </td><td>{{ $data->status }}</td></tr>
            </table>
             
@endsection