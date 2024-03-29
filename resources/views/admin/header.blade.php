<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
      <!-- ============================================================== -->
      <!-- Logo -s->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="index.html">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="assets/images/logo_cph.png" alt="homepage" height="30" width="30" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
         <!-- dark Logo text -->
         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
         <!-- Light Logo text -->    
         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
       </span>
     </a>
     <!-- ============================================================== -->
     <!-- End Logo -->
     <!-- ============================================================== -->
     <!-- This is for the sidebar toggle which is visible on mobile only -->
     <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
   </div>
   <!-- ============================================================== -->
   <!-- End Logo -->
   <!-- ============================================================== -->
   <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-left mr-auto">
      <!-- ============================================================== -->
      <!-- Search -->
      <!-- ============================================================== -->
      <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
        <form class="app-search position-absolute">
          <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
        </form>
      </li>
    </ul>
    <!-- ============================================================== -->
    <!-- Right side toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-right">
      <!-- ============================================================== -->
      <!-- User profile and search -->
      <!-- ============================================================== -->
      @if(Auth::check())
      <li ><a style="font-weight: 5em; color: white; font-size: 2em" class="username" href="#">Chào bạn: {{Auth::user()->username}}</a></li>

      <li class="adminlogout"><a style="font-weight: 5em; color: white; font-size: 2em" href="{{route('adminlogout')}}">Đăng xuất</a></li>
      @else
      <li><a href="{{route('register')}}">Đăng kí</a></li>
      <li><a href="{{route('login')}}">Đăng nhập</a></li>
      @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
        <div class="dropdown-menu dropdown-menu-right user-dd animated">
          <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
          <a class="dropdown-item" href="{{route('adminlogout')}}"><i class="ti-wallet m-r-5 m-l-5"></i> adminlogout</a>
          <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i></a> -->
        </div>
      </li>
      <!-- ============================================================== -->
      <!-- User profile and search -->
      <!-- ============================================================== -->
    </ul>
  </div>
</nav>
</header>

<style type="text/css">

</style>
