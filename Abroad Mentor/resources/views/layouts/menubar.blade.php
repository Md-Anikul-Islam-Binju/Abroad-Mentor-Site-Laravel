@php
$slider=DB::table('sliders')->where('status',1)->orderBy('id','DESC')->get();
@endphp
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->

          @foreach($slider as $row)
          <div class="carousel-item" style="background-image: url('{{URL::to($row->slider)}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Abroad Mentor</span></h2>
                <a href="{{route('page.student.apply')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Apply to Abroad Mentor</a>
              </div>
            </div>
          </div>
          @endforeach


          <div class="carousel-item active" style="background-image: url('{{asset('public/frontend/img/slide/slide-1.jpg')}}');">  
          <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Abroad Mentor</span></h2>
                <a href="{{route('page.student.apply')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Apply to Abroad Mentor</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->