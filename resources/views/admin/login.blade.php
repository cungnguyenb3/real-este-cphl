<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Admin - Register</title>
 <base href="{{asset('')}}"></base>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 ads">
          <h1><span id="fl">Welcome to CPH</span><span id="sl"></span></h1>
        </div>
        <div class="col-md-6 login-form">
          <div class="profile-img">
          	<!-- <i class="mdi mdi-account-box"></i> -->
            <img src="assets/images/account.png" alt="profile_img"  height="140px" width="140px;">
          </div>
          <h3>Login</h3>
          <form action="{{route('login')}}" method="post">
		
			<input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
            	
              <input type="mail" class="form-control" name="email" placeholder="abc@gmail.com">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="******">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
            <div class="form-group forget-password">
                <a href="#">Forget Password</a>
            </div>
            <div>
            	@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
				@endif
            </div>
          </form>
        </div>
      </div>
    </div>
    <style type="text/css" media="screen">
      body {
  font-family: 'Montserrat', sans-serif;
  transition: 3s;
}

.login-container {
  margin-top: 10%;
  border: 1px solid #CCD1D1;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  max-width: 50%;
}

.ads {
  background-color: #A569BD;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  color: #fff;
  padding: 15px;
  text-align: center;
}

.ads h1 {
  margin-top: 20%;
}

#fl {
  font-weight: 600;
}

#sl {
  font-weight: 100 !important;
}

.profile-img {
  text-align: center;
}

.profile-img img {
  border-radius: 50%;
  /* animation: mymove 2s infinite; */
}

@keyframes mymove {
  from {border: 1px solid #F2F3F4;}
  to {border: 8px solid #F2F3F4;}
}

.login-form {
  padding: 15px;
}

.login-form h3 {
  text-align: center;
  padding-top: 15px;
  padding-bottom: 15px;
}

.form-control {
  font-size: 14px;
}

.forget-password a {
  font-weight: 500;
  text-decoration: none;
  font-size: 14px;
}
    </style>