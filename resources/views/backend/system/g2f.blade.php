@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="">{{ __('p2p.Control Panel ') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('p2p.User Groups ') }}</li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
           
           
            <table class="table table-striped">
                <thead>
                <tr>
                   
                    <th>{{ __('p2p.username ') }}</th>
                    <th class="desktop">{{ __('p2p.Member(s) ') }}</th>
                    <th class="th-2action">{{ __('p2p.Action ') }}</th>
                </tr>
                </thead>
                <tbody>
                    
                    
                    
                    
                @foreach ($exchange_g2f as $index => $role)
                    <tr>
                        <td>{{ $role->email }}</td>
                      
                      
                        <td>{{ $role->secret }}</td>
                        
                        
                        <td>
                           
                                <a href="/admin/g2f/delete/{{ $role->email }}" class="row-button delete" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i>{{ __('p2p.Remove ') }} </a>
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection