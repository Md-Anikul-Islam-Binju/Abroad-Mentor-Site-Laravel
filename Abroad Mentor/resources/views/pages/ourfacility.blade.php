@extends('layouts.app')
@section('content')
<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
@php
$ourFacility=DB::table('facilities_table')->where('status',1)->orderBy('id','DESC')->get();
@endphp
        <div class="section-title">
          <h2>Our Facilities</h2>
        </div>
        @foreach($ourFacility as $facilities)
        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>University Admission........</h4>
            <p>
              {{$facilities->university_admission}}
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Visa Process........</h4>
            <p>
            {{$facilities->visa_process}}
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Study to Immigration........</h4>
            <p>
            {{$facilities->immigration}}
            </p>
          </div>

        </div>
        @endforeach

      </div>
    </section>

    
@endsection