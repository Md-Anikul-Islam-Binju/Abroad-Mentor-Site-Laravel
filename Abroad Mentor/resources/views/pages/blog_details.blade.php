@extends('layouts.app')
@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('public/frontend_blog/styles/blog_single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend_blog/styles/blog_single_responsive.css')}}">




        <div class="section-title">
          <h2>Blog Details Page</h2>
        </div>
	<!-- Single Blog Post -->


	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
                   <img src="{{URL::to($blog->image)}}" style="height: 450px; width: 700px;">
					<div class="single_post_title">{{$blog->title}}</div>
					<div class="single_post_text">
						<p>{{$blog->details}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	@php
	$blog=DB::table('blogs')->get();
	@endphp

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">

		
                       @foreach($blog as $row)
						<div class="blog_post">
							<div class="blog_image"><img src="{{URL::to($row->image)}}" style="height: 150px; width: 360px;"></div>
							<div class="blog_text">{{ $row->title }}</div>
							<div class="blog_button"><a href="{{URL::to('view/blog/'.$row->id)}}">Continue Reading</a></div>
						</div>
						@endforeach

					</div>
				</div>	
			</div>
		</div>
		
	</div>
   



<script src="{{asset('public/frontend_blog/js/blog_single_custom.js')}}"></script>


@endsection