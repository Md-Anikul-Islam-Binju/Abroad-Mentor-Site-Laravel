<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abroad Mentor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/frontend/img/Abrod.png')}}" rel="icon">
  <link href="{{asset('public/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
  


</head>


@php
$setting=DB::table('settings')->get();
@endphp
<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
  @foreach($setting as $row)
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{$row->mail}}</a>
        <i class="bi bi-phone-fill phone-icon"></i> +880{{$row->phone}}
      </div>
      <div class="social-links d-none d-md-block">
        <a href="{{($row->link1)}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$row->link2}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{$row->link3}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$row->link4}}" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  @endforeach
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
    @foreach($setting as $row)
      <div class="logo me-auto">
        <h1><a href="{{url('/')}}">{{$row->name}}</a></h1>
      </div>
   @endforeach
@php
$countries=DB::table('countries_details_table')
                     ->join('countries_table','countries_details_table.country_id','countries_table.id')
                     ->select('countries_details_table.*','countries_table.name')              
                     ->get();
        
@endphp
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Our Workflow</a></li>
              <li><a href="{{route('page.ourfacilities')}}">Our Facilities</a></li>
            </ul>
          </li>
          
       
          <li class="dropdown"><a href="#"><span>Countries</span> <i class="bi bi-chevron-down"></i></a>

            <ul>
            @foreach($countries as $con)
              <li><a href="{{url('countries/detail/'.$con->id)}}">{{$con->name}}</a></li>
            @endforeach
            </ul>
 
          </li>
       


          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Blog</a></li>
          <li><a class="nav-link scrollto" href="#team">Our Team</a></li>
          <li><a class="nav-link scrollto" href="{{route('page.ielts')}}">IELTS</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  </div>
  </header>



  @yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>{{ $row->name }}</h3>
            <p>
            {{$row->address}}<br>
            
              <strong>Phone:</strong>  +880{{$row->phone}}<br>
              <strong>Email:</strong> {{$row->mail}}<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Our Team</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </footer>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{asset('public/frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('public/frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/main.js')}}"></script>


  <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
  </script> 

</body>

</html>