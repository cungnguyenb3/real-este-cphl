@extends('layout/master') 
@section('content')
    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
             <h3 class="mb-2">Liên Hệ Với Chúng Tôi</h3>
          
            <form action="#" class="p-5 bg-white border">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Họ tên đầy đủ</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="subject">Chủ đề</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Subject">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Thông điệp</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-danger  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase"><b>Thông Tin Liên Lạc</b></h3>
              <p class="mb-0 font-weight-bold">Địa Chỉ</p>
              <p class="mb-4"><b>Cơ Sở 1:</b> 99 Tô Hiến Thành, Sơn Trà, Đà Nẵng, Việt Nam</p>
              <p class="mb-4"><b>Cơ Sở 2:</b> 66 Tô Hiến Thành, Sơn Trà, Đà Nẵng, Việt Nam</p>

              <p class="mb-0 font-weight-bold">Số Điện Thoại</p>
              <p class="mb-4"><a href="#">(+84) 236 3636 236</a></p>

              <p class="mb-0 font-weight-bold">Fax</p>
              <p class="mb-4"><a href="#">(+84) 236 3636 236</a></p>


              <p class="mb-0 font-weight-bold">Hotline</p>
              <p class="mb-4"><a href="#">(+84) 236 3636 236</a></p> 

              <p class="mb-0 font-weight-bold">Địa Chỉ Email</p>
              <p class="mb-0"><a href="#">nhadatdanang@cph.com</a></p>
              <br><br><br>
              <h4>Công ty TNHH MTV CPH </h4>
            </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection
