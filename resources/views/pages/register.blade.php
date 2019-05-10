@include('layout/css')
  <div class="site-loader">
  </div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="{{route('user/index')}}" class="text-white h2 mb-0"><strong>Nhà Đất</strong></a></h1>
              <h1 class="mb-0"><a href="{{route('user/index')}}" class="text-white h2 mb-0"><strong>Đà Nẵng</strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{route('user/index')}}">Trang Chủ</a>
                  </li>
                  <li><a href="{{route('user/buy')}}">Mua</a></li>
                  <li><a href="{{route('user/rent')}}">Cho Thuê</a></li>
                  <li class="has-children">
                    <a href="{{route('user/index')}}">Thể Loại</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Chung Cư</a></li>
                      <li><a href="#">Đất Bất Động Sản</a></li>
                      <li><a href="#">Tòa Nhà Thương Mại</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('user/blog')}}">Blog</a></li>
                  <li><a href="{{route('user/about')}}">Giới Thiệu</a></li>
                  <li><a href="{{route('user/contact')}}">Liên Hệ</a></li>
                  <li ><a href="{{route('user/login')}}"> Đăng Nhập</a></li>
                </ul>
              </nav>
            </div> 
          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <!-- code login form here  -->
            
            <div class="col-md-10">
            <div class="limiter">
              <div class="container-login100">
                <div class="wrap-login100">
                  <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                  </div>

                  <form class="login100-form validate-form">
                    <span class="login100-form-title">
                      Đăng Ký
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
                      <input class="input100" type="text" name="username" placeholder="username">
                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                      </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                      <input class="input100" type="password" name="pass" placeholder="Password">
                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                      <button class="login100-form-btn">
                        Login
                      </button>
                    </div>

                    <div class="text-center p-t-12">
                      <span class="txt1">
                        Forgot
                      </span>
                      <a class="txt2" href="#">
                        Password?
                      </a>
                    </div>

                    <div class="text-center p-t-136">
                      <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            </div>

          </div>
        </div>
      </div>  
    </div>
@include('layout/script')