@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('backend.dashboard') }}">Control Panel</a>
        </li>
        <li class="breadcrumb-item active"><a href="{{ route('backend.users') }}">Users</a></li>
        <li class="breadcrumb-item active">{{ $user->name }}</li>
    </ol>
    <div class="row col-lg-12 media-info mb-3 user">
        <div class="media">
            <img class="mr-3" src="{{ $user->artwork }}">
            <div class="media-body">
                <h5 class="mt-0">{{ $user->name }}</h5>
                <p>Username: {{ $user->username }}</p>
                <p>Email: {{ $user->email }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <form role="form" action="" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="username" value="{{ $user->username }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Artwork</label>
                    <div class="col-sm-10">
                        <div class="input-group col-xs-12">
                            <input type="file" name="file" class="file-selector" accept="image/*">
                            <span class="input-group-addon"><i class="fas fa-fw fa-image"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                            <span class="input-group-btn"><button class="browse btn btn-primary input-lg" type="button"><i class="fas fa-fw fa-file"></i> Browse</button></span>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Min width, height 300x300, Image will be auto crop and resize to 300/176 pixel.</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                        <input class="form-control" name="email"  value="{{ $user->email }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Do not receive emails</label>
                    <div class="col-sm-10 col-3">
                        <label class="switch"><input type="checkbox" name="blockEmail"><span class="slider round"></span></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password </label>
                    <div class="col-sm-10">
                        <input class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Banned</label>
                    <div class="col-sm-10 col-3">
                        <label class="switch">
                            {!! makeCheckBox('banned', $user->banned) !!}
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">End time for the ban</label>
                    <div class="col-sm-10 col-3">
                        <input class="form-control datepicker-no-mask" name="ban_end_at" value="{{ \Carbon\Carbon::parse(($user->ban_end_at))->format('Y/m/d H:i') }}"  autocomplete="off">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Reason</label>
                    <div class="col-sm-10 col-3">
                        <textarea class="form-control editor" rows="2" name="ban_reason">{{ isset($user->ban_reason) ? $user->ban_reason : ''}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Group</label>
                    <div class="col-sm-10">
                        {!! makeRolesDropDown('role', $user->role, 'required') !!}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Remove avatar?</label>
                    <div class="col-sm-10 col-3">
                        <label class="switch"><input type="checkbox" name="removeArtwork"><span class="slider round"></span></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Delete all comments?</label>
                    <div class="col-sm-10">
                        <label class="switch"><input type="checkbox" name="deleteComments"><span class="slider round"></span></label>
                    </div>
                </div>
                
                
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Stop widthdrawal fro this user</label>
                    <div class="col-sm-10">
                        <label class="switch"><input type="checkbox" name="stopwidthdrawal"><span class="slider round"></span></label>
                    </div>
                </div>
                
                
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">About me</label>
                    <div class="col-sm-10">
                        <textarea class="form-control editor" rows="2" name="about"></textarea>
                    </div>
                </div>
                <input type="hidden" name="doEdit" value="true">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-info">Reset</button>
            </form>
        </div>
    </div>
@endsection