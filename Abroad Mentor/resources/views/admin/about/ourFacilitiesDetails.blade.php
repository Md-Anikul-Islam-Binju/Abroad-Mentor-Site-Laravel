@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">





    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Abroad Mentor Our Facilites Details Section</span>
      </nav>
      <div class="sl-pagebody">
      	   
         
  
         
          <div class="form-layout">
            <div class="row mg-b-25">

            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>University Admission: </h2></label></br>
                   <strong>{{ $ourFaciliti->university_admission }}</strong>                
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Visa Process: </h2></label></br>
                   <strong>{{ $ourFaciliti->visa_process }}</strong>                
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label"><h2>Study to Immigration: </h2></label></br>
                   <strong>{{ $ourFaciliti->immigration }}</strong>                
                </div>
            </div>


        </div>     
      </div>
    </div>
  </div>
