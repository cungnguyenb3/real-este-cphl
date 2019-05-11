@extends('master')
@section('content')
    <div class="site-section">
      
      <div class="container">
          <h1 class="mb-2">Nhà Đất Đà Nẵng</h1>
        
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/about.jpg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>Công Ty Của Chúng Tôi</h2>
            </div>
            <p class="lead"><b>NHÀ ĐẤT ĐÀ NẴNG</b></p>
            <p>Là thương hiệu mở đường tiên phong cho xu hướng shophouse thông minh – xanh – năng lượng sạch tại thành phố Đà Nẵng. Sau thành công vang dội, Nhà Đất Đà Nẵng tiếp tục đầu tư phát triển các phân khúc nhà ở hạng sang mang đến cho khách hàng những sản phẩm hạng A tinh tế và xứng tầm. Đây sẽ là bước chuyển mình ngoạn mục của Nhà Đất Đà Nẵng với mục tiêu trở thành nhà phát triển bất động sản cao cấp hàng đầu tại khu vực Đà Nẵng và sẽ lấn sang các tỉnh thành trên cả nước trong thời gian sắp tới</p>

            
          </div>
          <p>Mỗi ngày, Nhà Đất Đà Nẵng có hơn 1.000 tin đăng mới bán nhà, bán đất, căn hộ bán, dự án chung cư, dự án biệt thự, đất nền … đa dạng về địa điểm, diện tích và mức giá; giúp bạn tìm kiếm căn nhà phù hợp thật nhanh chóng và thuận tiện. Nhà Đất Đà Nẵng còn mang đến cho bạn những thông tin hữu ích từ các chuyên gia bất động sản, tài chính và pháp lý… giúp việc mua nhà của bạn trở nên dễ dàng hơn.</p>
          <p><a href="{{route('user/about')}}" class="btn btn-outline-danger rounded-0 py-2 px-5">Đọc thêm</a></p>
        </div>
      </div>
    </div>

    <!-- chủ tịch công ty -->
    <!-- <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Leadership</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">

              <img src="{{ asset('images/person_1.jpg')}}" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">

              <img src="{{ asset('images/person_2.jpg')}}" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">

              <img src="{{ asset('images/person_3.jpg')}}" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>



        </div>
    </div>
    </div> -->
@endsection