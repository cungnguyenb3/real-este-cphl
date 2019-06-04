@extends('layout/my-properties/master')
@section('content')
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- User account box start -->
            <div class="user-account-box">
                <div class="header clearfix">
                    <div class="edit-profile-photo">
                        <img src="img/avatar/avatar-3.jpg" alt="agent-1" class="img-responsive">
                        <div class="change-photo-btn">
                            <div class="photoUpload">
                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                <input type="file" class="upload">
                            </div>
                        </div>
                    </div>
                    @if(Auth::check())
                    <h3>{{Auth::user()->username}} </h3>
                    <p>{{Auth::user()->email}}</p>
                    @else
                    <h3>Your Name </h3>
                    <p>Your Email</p>
                    @endif
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
                            <a href="user-profile.html">
                                <i class="flaticon-social"></i>Profile
                            </a>
                        </li>
                        <li>
                            <a href="my-properties.html" class="active">
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
                            <a href="{{route('change-password')}}">
                                <i class="flaticon-security"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="{{route('getLogout')}}">
                                <i class="flaticon-sign-out-option"></i>Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- User account box end -->
        </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="main-title-2">
                     <h1><span>My</span> Properties</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>
                    @foreach($post as $value)
                    <tr>
                        <td class="title-container">
                            <img src="{!! $value->main_image !!}" alt="my-properties-1" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="{{route('products',$value->slug)}}">{!! $value->name !!}</a></h4>
                                <span><i class="fa fa-map-marker"></i> {!! $value->location !!}, </span>
                                <span class="table-property-price">${!! $value->price !!}</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
@endsection