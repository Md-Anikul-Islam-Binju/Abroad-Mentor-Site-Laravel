@extends('admin.admin_layouts')
@section('admin_content')


<link rel="stylesheet" href="{{asset('public/backend/https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css')}}" crossorigin="anonymous">



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Abroad Mentor Country Information Section</span>
      </nav>
      <div class="sl-pagebody">
      	   
         
  
         
          <div class="form-layout">
            <div class="row mg-b-25">



              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Country Name: </h2></label></br>
                  <strong>{{ $view_country_details->name }}</strong>
                </div>
              </div>

              <div class="col-lg-12">
                 <lebel><h2>Country Image: </h2><span class="tx-danger">*</span></lebel><br>
                 <td><img src="{{URL::to($view_country_details->image)}}" style="height: 400px; width: 1050px;"></td>
              </div>       
              
              
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>The Country Information: </h2></label></br>
                  <strong>{{ $view_country_details->country_info }}</strong>
                </div>
              </div>


              
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>The Locals Information: </h2></label></br>
                  <strong>{{ $view_country_details->locals_info }}</strong>
                </div>
              </div>

              
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Job opportunities Information: </h2></label></br>
                  <strong>{{ $view_country_details->job_opportunities_info }}</strong>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Language Information: </h2></label></br>
                  <strong>{{ $view_country_details->language_info }}</strong>
                </div>
              </div>
          
        </div>     
      </div>
    </div>
  </div>





@endsection