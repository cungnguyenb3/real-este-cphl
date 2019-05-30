@extends('admin.master')
@section('content')

<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
      <div class="card">
        <div class="card-body">
          <center class="m-t-30"> <img src="assets/images/users/5.jpg" class="rounded-circle" width="150" />
            <h4 class="card-title m-t-10"> {{Auth::user()->username}}</h4>
            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
            <div class="row text-center justify-content-md-center">
              <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
              <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
            </div>
          </center>
        </div>
        <div>
          <hr> </div>
          <div class="card-body"> <small class="text-muted">Email address </small>
            <h6> {{Auth::user()->email}}</h6> <small class="text-muted p-t-30 db">Phone</small>
            <h6> {{Auth::user()->phone}}</h6> <small class="text-muted p-t-30 db">Address</small>
            <h6> {{Auth::user()->address}}</h6>

            <small class="text-muted p-t-30 db">Social Profile</small>
            <br/>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
            <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal form-material" action="{{route('adminEditProfile')}}" method="POST">
              @include('admin.error')
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="col-md-12">Full Name</label>
                <div class="col-md-12">
                  <input type="text" value="{{Auth::user()->username}}" name="username" class="form-control form-control-line">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                  <input type="email" value="{{Auth::user()->email}}"   class="form-control form-control-line" name="email" id="email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Phone No</label>
                <div class="col-md-12">
                  <input type="text" value="{{Auth::user()->phone}}" name="phone" class="form-control form-control-line">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-12">Address</label>
                <div class="col-md-12">
                  <input type="text" value="{{Auth::user()->address}}" name="address" class="form-control form-control-line">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-success">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
  </div>
  @endsection            
