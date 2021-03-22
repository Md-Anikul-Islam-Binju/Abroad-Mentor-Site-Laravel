@extends('layouts.app')
@section('content')


<section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ $country_detail_info->name }}</h2>
        </div>
      
        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>The Country Information:</h4>
            <p>
             {{$country_detail_info->country_info}}
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>The Locals Information: </h4>
            <p>
            {{ $country_detail_info->locals_info }}
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Job opportunities Information:</h4>
            <p>
            {{ $country_detail_info->job_opportunities_info }}
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Language Information: </h4>
            <p>
            {{ $country_detail_info->language_info }}
            </p>
          </div>

        </div>

       
        <a href="{{route('page.student.apply')}}">
           <button type="button" class="btn btn-primary">Apply to Abroad Mentor</button>
        </a>

        <a href="{{route('page.application')}}">
            <button type="button" class="btn btn-success">Application process</button>
        </a>

 
    
   
       

      </div>

    </section>

 
              <div class="col-lg-12">
         
                 <td><img src="{{URL::to($country_detail_info->image)}}" style="height: 350px; width: 1550px;"></td>
              </div>                 



@endsection
