
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
Include the above in your HEAD tag

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
 -->
@extends('admin.master')
@section('content')
<div class="container-fluid">
<div class="container">
<article class="card-body mx-auto" style="max-width: 1200px;">
	<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

	
	<form action="{{route('adminCreate')}}" method="post" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
				{{$err}}
				@endforeach
			</div>
			@endif
			@if(Session::has('thanhcong'))
				<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
			@endif
    	<div class="form-group input-group">
    		<div class="input-group-prepend">
    		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
    		 </div>
            <input name="username" class="form-control" placeholder="User name" type="text">
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
            <button type="submit" style="width: 20%; float: right;" class="btn btn-primary btn-block"> <h5>Create Account</h5>  </button>
        </div> <!-- form-group// -->      
                                                                   
    </form>
    </div>
</article> <!-- card.// -->

</div> 
</div>
<!--container end.//-->



<style type="text/css">
	.divider-text {
    position: relative;
    text-align: center;
    margin-top: 200px;
    margin-bottom: 170px;
}
.divider-text span {
    padding: 4px;
    font-size: 15px;
    position: relative;   
    z-index: 3;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 80%;
    border-bottom: 2px solid #ddd;
    top: 55%;
    left: 10px;
    z-index: 3;
}

.btn-facebook {
    background-color: white;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
.container{
    left: 100px;
}
</style>
@endsection