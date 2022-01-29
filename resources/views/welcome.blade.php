<!DOCTYPE html>
<html> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="An Bình An">
  
  <meta name="author" content="">

  <title>ABA | Xây Dựng</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('public/frontend/images/logo-2969.png')}}" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{asset('public/frontend/plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('public/frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{asset('public/frontend/plugins/lightbox2/dist/css/lightbox.min.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('public/frontend/plugins/animate/animate.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('public/frontend/plugins/slick/slick.css')}}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">  
  <link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
</head>

<body id="body">

  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </div>
  </div> 

<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="{{URL::to('/trang-chu')}}">
        <img class="logo-default" src="{{URL::to('public/frontend/images/logo-2969.png')}}" alt="logo"/>
        <img class="logo-white" src="{{URL::to('public/frontend/images/logo-2969.png')}}" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="{{URL::to('/trang-chu')}}">Trang Chủ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.html">Giới Thiệu</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Xây Dựng
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{URL::to('/trang-chu')}}">dv1</a>
              <a class="dropdown-item" href="onepage-slider.html">dv2</a>
              <a class="dropdown-item" href="onepage-text.html">dv3</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dịch Vụ
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{URL::to('/trang-chu')}}">dv1</a>
              <a class="dropdown-item" href="onepage-slider.html">dv2</a>
              <a class="dropdown-item" href="onepage-text.html">dv3</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             Sửa Chữa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{URL::to('/trang-chu')}}">dv1</a>
              <a class="dropdown-item" href="onepage-slider.html">dv2</a>
              <a class="dropdown-item" href="onepage-text.html">dv3</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pricing.html">Tin Tức</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="contact.html">Liên Hệ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="404.html">404 Page</a>
              <a class="dropdown-item" href="blog.html">Blog Page</a>
              <a class="dropdown-item" href="single-post.html">Blog Single Page</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->


	<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url({{URL::to('public/frontend/images/slider-bg-1.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Crafting Digital <br>
						Experience</h1>
					<!-- <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
						officia quaerat eum corrupti, <br> ipsa aliquam velit.</p> -->
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url({{URL::to('public/frontend/images/slider-bg-2.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We Combine Design <br> and
						Creativity</h1>
					<!-- <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Create just what you need
						for your Perfect Website. Choose from a wide range
						<br> of Elements & simply put them on our Canvas.</p> -->
					<a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8"  class="btn btn-main" href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
</div>




<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    @yield('content')
	</div> 
</section> 

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
          <ul>
          <li><h3>An Bình An Construction</h3></li>
          <li><a href="#">Hotline: 0888 318 522</a></li>
          <li><a href="#"> Email: cskh.anbinhan@gmail.com</a></li>
          <li><a href="#"> Số ĐKKD: 0313168522 do sở KHĐT Tp. HCM</a></li>
          <li><a href="#">Cấp ngày: 19/03/2015</a></li>
</ul>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
          <ul>
            <li><h3>CHÍNH SÁCH - QUY ĐỊNH</h3></li>
            <li><a href="#">Chính sách bảo mật thông tin</a></li>
            <li><a href="#">Chính sách và quy định chung</a></li>
            <li><a href="#">Chính sách bảo hành bảo trì</a></li>
            <li><a href="#">Vận chuyển - Giao nhận - Cài đặt</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->


        {{-- <div class="col-sm-4 col-md-4 col-lg-4">
          <ul>
            <li><h3>Connect with Facebook</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
          </ul>
        </div> --}}
        <div class="col-sm-4 col-md-4 col-lg-4">
          <ul>
        <div style="margin-bottom: 20px">
            <button style="  background-color:black;
            height: 40px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 11px;" onclick="show1()">Trụ sở chính</button>
            <button style="  background-color:black; /* Green */
            border: none;
            height: 40px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 11px;" onclick="show2()">Quận 7</button>
            <button style="  background-color:black; /* Green */
            border: none;
            color: white;
            height: 40px;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display:inline-block;
            font-size: 11px;" onclick="show3()">Quận 7</button>
  
        </div>
            <div id="map1" style="width:200px;height:200px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9540678643425!2d106.67567691480046!3d10.738023592347597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad027e3727%3A0x2a77b414e887f86d!2zMTgwIMSQLiBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1sen!2s!4v1642402302996!5m2!1sen!2s" 
							width="200px" height="100px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             
						</div>
            <div id="map2" style="display: none">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5662846491814!2d106.68416721428704!3d10.767870962297255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fe0fc9241f1%3A0xe7b114042b40ad11!2zMTcwIELDuWkgVGjhu4sgWHXDom4sIFBoxrDhu51uZyBQaOG6oW0gTmfFqSBMw6NvLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1643359476521!5m2!1sen!2s" 	width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="map3" style="display: none">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6752602435636!2d106.67791001428681!3d10.759491462449397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1cefa4b079%3A0x5b05cd310facba83!2zMjIzIFRy4bqnbiBCw6xuaCBUcuG7jW5nLCBQaMaw4budbmcgMywgUXXhuq1uIDUsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1643363082469!5m2!1sen!2s" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div>
         
          </ul>
        </div>
        
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2022. All rights reserved.</h5>
    <h6>Lầu 1, 170-170 Bis Bùi Thị Xuân, Phường Phạm Ngũ Lão, Quận 1, Thành phố Hồ Chí Minh</h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    

    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{asset('public/frontend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="{{asset('public/frontend/plugins/google-map/gmap.js')}}"></script>

    <!-- Form Validation -->
    <script src="{{asset('public/frontend/plugins/form-validation/jquery.form.js')}}"></script> 
    <script src="{{asset('public/frontend/plugins/form-validation/jquery.validate.min.js')}}"></script>
    
    <!-- Bootstrap4 -->
    <script src="{{asset('public/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Parallax -->
    <script src="{{asset('public/frontend/plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <!-- lightbox -->
    <script src="{{asset('public/frontend/plugins/lightbox2/dist/js/lightbox.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('public/frontend/plugins/slick/slick.min.js')}}"></script>
    <!-- filter -->
    <script src="{{asset('public/frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{asset('public/frontend/plugins/smooth-scroll/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/prettify.js')}}"></script>
    <script src="{{asset('public/frontend/plugins/lightslider.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('public/frontend/js/script.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
$('#imageGallery').lightSlider({
  gallery:true,
  item:1,
  loop:true,
  thumbItem:3,
  slideMargin:0,
  enableDrag: false,
  currentPagerPosition:'left',
  onSliderLoad: function(el) {
      el.lightGallery({
          selector: '#imageGallery .lslide'
      });
  }   
});  
});
      </script>
  </body>
  </html>

  
