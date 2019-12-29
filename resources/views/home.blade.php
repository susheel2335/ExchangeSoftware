@extends('layouts.design1layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('p2p.Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{ __('p2p.You are logged in!') }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
