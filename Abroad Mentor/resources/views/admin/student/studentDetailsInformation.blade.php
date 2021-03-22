@extends('admin.admin_layouts')
@section('admin_content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Student Application</span>
      </nav>
      <div class="sl-pagebody">
      	   
         
          <p class="mg-b-20 mg-sm-b-30">Application Details</p>
         
          <div class="form-layout">
            <div class="row mg-b-25">

      

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">First Name:</label></br>
                  <strong>{{ $application->fname }}</strong>
                </div>
              </div>


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Last Name:</label></br>
                  <strong>{{ $application->lname }}</strong>
                </div>
              </div>



              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Phone:</label></br>
                   <strong>{{$application->phone}}</strong>                
                </div>
              </div>



              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email</label></br>
                   <strong>{{$application->email}}</strong>
                </div>
              </div>



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Age:</label></br>
                  <strong>{{$application->age}}</strong>
                </div>
              </div>




              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Other Country:</label></br>
                  <strong>{{$application->other_country_name}}</strong>
                </div>
              </div>




     

<h2>Desired Country *</h2></br>             
<div class="row">

<div class="col-lg-4">
 <span>United Kingdom</span><br>
 <label class="">
     @if( $application->united_kingdom == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>

<div class="col-lg-4">
 <span>United State</span><br>
 <label class="">
     @if( $application->united_state == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Canada</span><br>
 <label class="">
     @if( $application->canada == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Newzealand</span><br>
 <label class="">
     @if( $application->newzealand == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>



<div class="col-lg-4">
 <span>Sweden</span><br>
 <label class="">
     @if( $application->sweden == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Denmark</span><br>
 <label class="">
     @if( $application->denmark == 1)
     <span class="badge badge-success">Apply</span>
    @else
     <span class="badge badge-danger">Not Apply</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>	Malaysia</span><br>
  <label class="">
      @if( $application->malaysia == 1)
      <span class="badge badge-success">Apply</span>
      @else
      <span class="badge badge-danger">Not Apply</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>China</span><br>
  <label class="">
      @if( $application->china == 1)
      <span class="badge badge-success">Apply</span>
      @else
      <span class="badge badge-danger">Not Apply</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>Germany</span><br>
  <label class="">
      @if( $application->germany == 1)
      <span class="badge badge-success">Apply</span>
      @else
      <span class="badge badge-danger">Not Apply</span>
      @endif   
  </label>
</div> 

<div class="col-lg-4">
 <span>Other</span><br>
  <label class="">
      @if( $application->other == 1)
      <span class="badge badge-success">Apply</span>
      @else
      <span class="badge badge-danger">Not Apply</span>
      @endif   
  </label>
</div></br></br></br></br></br>




     
           

<div class="col-lg-12">
    <h2>Educational Background (tick all that's completed) *</h2>
</div>

<div class="col-lg-4">
 <span>SSC</span><br>
 <label class="">
     @if( $application->ssc == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>

<div class="col-lg-4">
 <span>O Level</span><br>
 <label class="">
     @if( $application->o_level == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>HSC</span><br>
 <label class="">
     @if( $application->hsc == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>	A Level</span><br>
 <label class="">
     @if( $application->a_level == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>



<div class="col-lg-4">
 <span>Diploma</span><br>
 <label class="">
     @if( $application->diploma == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Honours</span><br>
 <label class="">
     @if( $application->honours == 1)
     <span class="badge badge-success">Completed</span>
    @else
     <span class="badge badge-danger">Not Completed</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Masters</span><br>
  <label class="">
      @if( $application->masters == 1)
      <span class="badge badge-success">Completed</span>
      @else
      <span class="badge badge-danger">Not Completed</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>PHD</span><br>
  <label class="">
      @if( $application->phd == 1)
      <span class="badge badge-success">Completed</span>
      @else
      <span class="badge badge-danger">Not Completed</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>None</span><br>
  <label class="">
      @if( $application->none == 1)
      <span class="badge badge-success">Completed</span>
      @else
      <span class="badge badge-danger">Not Completed</span>
      @endif   
  </label>
</div></br></br></br></br></br>





           

<div class="col-lg-12">
    <h2> Division You are in *</h2>
</div>


<div class="col-lg-4">
 <span>Dhaka</span><br>
 <label class="">
     @if( $application->dhaka == 1)
     <span class="badge badge-success">From</span>
    @else
     <span class="badge badge-danger">Not From</span>
    @endif   
  </label>
</div>

<div class="col-lg-4">
 <span>Chittagong</span><br>
 <label class="">
     @if( $application->chittagong == 1)
     <span class="badge badge-success">From</span>
    @else
     <span class="badge badge-danger">Not From</span>
    @endif   
  </label>
</div>



<div class="col-lg-4">
 <span>Sylhet</span><br>
 <label class="">
     @if( $application->sylhet == 1)
     <span class="badge badge-success">From</span>
    @else
     <span class="badge badge-danger">Not From</span>
    @endif   
  </label>
</div>



<div class="col-lg-4">
 <span>Rajshahi</span><br>
 <label class="">
     @if( $application->rajshahi == 1)
     <span class="badge badge-success">From</span>
    @else
     <span class="badge badge-danger">Not From</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Khulna</span><br>
 <label class="">
     @if( $application->khulna == 1)
     <span class="badge badge-success">From</span>
    @else
     <span class="badge badge-danger">Not From</span>
    @endif   
  </label>
</div>


<div class="col-lg-4">
 <span>Barisal</span><br>
  <label class="">
      @if( $application->barisal == 1)
      <span class="badge badge-success">From</span>
      @else
      <span class="badge badge-danger">Not From</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>Mymensingh</span><br>
  <label class="">
      @if( $application->mymensingh == 1)
      <span class="badge badge-success">From</span>
      @else
      <span class="badge badge-danger">Not From</span>
      @endif   
  </label>
</div> 



<div class="col-lg-4">
 <span>Rangpur</span><br>
  <label class="">
      @if( $application->rangpur == 1)
      <span class="badge badge-success">From</span>
      @else
      <span class="badge badge-danger">Not From</span>
      @endif   
  </label>
</div> 











</div>
<br><hr>
</form>
</div>
</div>
</div>





@endsection