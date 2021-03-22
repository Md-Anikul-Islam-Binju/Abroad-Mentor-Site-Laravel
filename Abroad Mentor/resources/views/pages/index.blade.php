@extends('layouts.app')
@section('content')
@include('layouts.menubar')

<main id="main">
<!-- ======= About Us Section ======= -->
@php
$aboutUs=DB::table('aboutus_table')->get();
@endphp
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">     
      @foreach($aboutUs as $aboutus)
        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{URL::to($aboutus->image)}}" style="height: 550px; width: 550px;">         
          </div>
        
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">    
            <div class="section-title">
              <h2>About Us</h2>
              <p>{{$aboutus->description}}</p>
            </div>
     
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title"><a href="">Director,Aboroad Mentor</a></h4>
              <p class="description">{{$aboutus->name}}</p>
            </div>

          </div>
        </div>
      </div>
      @endforeach
</section>



<!-- ======= Counts Section ======= -->
@php
$fact=DB::table('about_important_table')->get();
@endphp
    <section class="counts section-bg">
      <div class="container">
      @foreach($fact as $imf)
        <div class="row">
        <div class="section-title">
          <h2>SOME IMPORTANT FACTS ABOUT US</h2>
        </div>
                 
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <h1>{{$imf->total_countries}}</h1>
              <p>COUNTRIES</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-document-folder" style="color: #c042ff;"></i>
              <h1>{{$imf->total_project}}</h1>
              <p>PROJECT</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="bi bi-live-support" style="color: #46d1ff;"></i>
              <h1>{{$imf->total_universities}}</h1>
              <p>UNIVERSITIES</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
              <h1>{{$imf->total_courses}}</h1>
              <p>COURSES</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
</section>




<!-- ======= Services Section ======= -->
<section id="services" class="services">
   <div class="container" data-aos="fade-up">
@php
$workFlow=DB::table('workflow_table')->get();
@endphp
       <div class="section-title">
          <h2>Our Work Flow</h2>
        </div> 
        @foreach($workFlow as $workf)
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-pencil-square"></i></div>
            <h4 class="title"><a href="">Online Assessment</a></h4>
            <p class="description">{{$workf->online_assessment}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-people"></i></div>
            <h4 class="title"><a href="">Invited to meet</a></h4>
            <p class="description">{{$workf->invited_to_meet}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-receipt"></i></div>
            <h4 class="title"><a href="">Application Process Initiated</a></h4>
            <p class="description">{{$workf->application_process_initiated}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-pen-fill"></i></div>
            <h4 class="title"><a href="">Application Submitted</a></h4>
            <p class="description">{{$workf->application_submitted}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-justify"></i></div>
            <h4 class="title"><a href="">Visa Submitted</a></h4>
            <p class="description">{{$workf->visa_submitted}}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-telegram"></i></div>
            <h4 class="title"><a href="">Flights booked</a></h4>
            <p class="description">{{$workf->flights_booked}}</p>
          </div>
        </div>
        @endforeach
      </div> 
</section>




<!-- ======= Our Portfolio Section ======= -->
@php
$blog=DB::table('blogs')->get();
@endphp
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
          <h2>Abroad Mentor Blog</h2>
          <p>At ABROAD MENTOR Educational Limited, we come to work every day because we believe in creating a better future for our clients. Yes, we treat you as our client, not a student. We believe in creating a guideline through which you can decide your own career path, and embark on a journey that will change you for the better.</p>
        </div>
        <div class="row portfolio-container">        
           @foreach($blog as $bg)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{URL::to($bg->image)}}" style="height: 250px; width: 400px;">
              <div class="portfolio-info">
                <h4>{{$bg->title}}</h4>
                <p>Continue Reading</p>
                <div class="portfolio-links">
                  <a href="{{URL::to('view/blog/'.$bg->id)}}" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</section>





@php
$team=DB::table('team_member_table')->get();
@endphp
<!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Team</h2>
          <p>Welcome to ABROAD MENTOR Team Member.</p>
        </div>
        <div class="row">
          @foreach($team as $tm)
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic">
               <img src="{{URL::to($tm->image)}}" style="height: 260px; width: 250px;">
              </div>
              <div class="member-info">
                <h4>{{$tm->name}}</h4>
                <span>{{$tm->jobposition}}</span>
                <span>{{$tm->mail}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</section>




<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
         @php
         $contact=DB::table('contactus_table')->where('status',1)->orderBy('id','DESC')->get();
         @endphp
        <div class="row">        
          @foreach($contact as $contac)
          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>{{$contac->location}}</h3>
              <h5>Phone # +88{{$contac->phone}}</h5>
              <h6>Email {{$contac->	mail}}</h6>
              <p>{{$contac->address}}</p>
            </div>
          </div>
          @endforeach
    </div>
  </div>
</section>
</main>

@endsection

