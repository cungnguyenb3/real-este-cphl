
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
Include the above in your HEAD tag

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
 -->
@extends('admin.master')
@section('content')
<div class="container">

<div class="container">



<div class="row">
<article class="card-body mx-auto" >
   
    <form action="{{route('register')}}" method="post" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        @include('admin.error')
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="username" class="form-control" placeholder="username" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        
        <input name="phone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
        </div>
        <select name="role_id" class="form-control">
            <option selected=""> Select user type</option>
            <option value="1">Superadmin</option>
            <option value="2">Admin</option>
            <option value="3">user</option>
        </select>
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="address" class="form-control" placeholder="Address" type="text">
    </div>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" name="password" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control " name="re_password" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="{{route('login')}}">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 

</div> 
<!--container end.//-->



<style type="text/css">
	.divider-text {
    position: relative;
    text-align: center;
    margin-top: 100px;
    margin-bottom: 150px;
}
.divider-text span {
    padding: 2px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

</style>
@endsection