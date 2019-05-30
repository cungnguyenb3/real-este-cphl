@extends('layout/blog/master')
@section('content')
<div class="content-area change-password">
    <div class="container">
        <div class="row">   
            @include('layout.left-property-content')    
            <div class="col-lg-8 col-md-8 col-sm-7">
                <!-- My address start -->
                <div class="my-address">
                    <div class="main-title-2">
                        <h1><span>Change</span> Password</h1>
                    </div>
                    <form action="{{route('change-password')}}" method="POST">
                        @if(Auth::check())
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        @endif
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="input-text" name="current-password" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="input-text" name="new-password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="input-text" name="password_confirmation" placeholder="Confirm New Password">
                        </div>
                        <button type="submit" class="btn button-md button-theme">Save Changes</button>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
@endsection