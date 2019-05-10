  
  <base href="{{asset('public/public/')}}">
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
              <h1 class="mb-0"><a href="{{route('user/index')}}" class="text-white h2 mb-0"><strong>Nhà Đất Đà Nẵng<span class="text-danger">.</span></strong></a></h1>
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
                  <li><a href="{{route('user/register')}}"> Đăng Ký</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>
  
    
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Cho Thuê</span>
              <h1 class="mb-2">871 Crenshaw Blvd</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$2,250,500</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Xem Chi Tiết</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Bán</span>
              <h1 class="mb-2">625 S. Berendo St</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$1,000,500</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Xem Chi Tiết</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>