@extends('admin.admin_layouts')
@section('admin_content')


<link rel="stylesheet" href="{{asset('public/backend/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css')}}" crossorigin="anonymous">



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Abroad Mentor Blog Details Section</span>
      </nav>
      <div class="sl-pagebody">
      	   
         
  
         
          <div class="form-layout">
            <div class="row mg-b-25">


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"><h2>Blog Title: </h2></label></br>
                  <strong>{{ $blog->title }}</strong>
                </div>
              </div>


              <div class="col-lg-12">
                 <lebel><h2>Blog Image: </h2><span class="tx-danger">*</span></lebel><br>
                 <td><img src="{{URL::to($blog->image)}}" style="height: 400px; width: 1050px;"></td>
              </div>
          


          



             <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Blog Details: </h2></label></br>
                   <strong>{{ $blog->details }}</strong>                
                </div>
              </div>
        </div>     
      </div>
    </div>
  </div>





@endsection