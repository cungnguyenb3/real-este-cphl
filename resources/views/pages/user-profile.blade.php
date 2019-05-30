@extends('layout/login/master')
@section('content')
<div class="content-area my-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="header clearfix">
                        <div class="edit-profile-photo">
                            <img src="img/avatar/avatar-{{rand(1,4)}}.jpg" alt="agent-1" class="img-responsive">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div>
                        <h3>{{Auth::user()->username}}</h3>
                        <p>{{Auth::user()->email}}</p>

                        <ul class="social-list clearfix">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="user-profile.html" class="active">
                                    <i class="flaticon-social"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{route('my-properties')}}">
                                    <i class="flaticon-apartment"></i>My Properties
                                </a>
                            </li>
                            <li>
                                <a href="favorited-properties.html">
                                    <i class="fa fa-heart"></i>Favorited Properties
                                </a>
                            </li>
                            <li>
                                <a href="submit-property.html">
                                    <i class="fa fa-plus"></i>Submit New Property
                                </a>
                            </li>
                            <li>
                                <a href="change-password.html">
                                    <i class="flaticon-security"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-sign-out-option"></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                

                <!-- My address start-->
                <div class="my-address">
                    <div class="main-title-2">
                        <h1><span>Advanced</span> Search</h1>
                    
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('thanhcong'))
                        <div class="alert alert-success">
                            {{Session::get('thanhcong')}}    
                        </div>
                    @endif
                    </div>
                    <form action="{{route('update_profile')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                           <label>Your Name</label>
                           <input type="text" class="input-text" name="username" placeholder="John Antony" value="{{Auth::user()->username}}" required>
                        </div>
                        <div class="form-group">
                            <label>Your address</label>
                            <input type="text" class="input-text" name="address" placeholder="Your address" value="{{Auth::user()->address}}" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="input-text" name="phone" placeholder="0905 055 055" value="{{Auth::user()->phone}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="input-text" name="email" placeholder="Your email" value="{{Auth::user()->email}}" required>
                        </div>
                        
                        <button type="Submit" class="btn button-md button-theme">Save Changes</button>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
@endsection