@extends('layouts.app')
@section('content')

<section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Thanks To Apply Abroad Mentor</h2>
          <p>Your Application Success Fully Submited by Abroad  Mentor</p>
     
          <button href="{{route('page.student.apply')}}" type="button" class="btn btn-dark"><a href="{{route('page.student.apply')}}">Apply to Another User Abroad Mentor</a></button>
          <button type="button" class="btn btn-dark"><a href="{{url('/')}}">Back to Home Abroad Mentor</a></button>
        </div>
      </div>
</section>

    
@endsection