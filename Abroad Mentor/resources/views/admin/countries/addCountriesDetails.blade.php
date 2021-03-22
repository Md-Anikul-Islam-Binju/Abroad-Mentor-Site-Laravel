@extends('admin.admin_layouts')

@section('admin_content')


    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Countries Details Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">

          <p class="mg-b-20 mg-sm-b-30">Countries Details add form</p>


          <form action="{{route('admin.countriesdetailsInfo')}}" method="post" enctype="multipart/form-data">
          @csrf
          
          <div class="form-layout">
            <div class="row mg-b-25">


            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country Name: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Name" name="country_id">
                    <option label="Choose Country"></option>
                    @foreach($country as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach 
                  </select>
                </div>
              </div>




              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">The Country Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="country_info"></textarea>
                </div>	
              </div>

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">The Locals Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="locals_info"></textarea>
                </div>	
              </div>

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Job opportunities Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="job_opportunities_info"></textarea>
                </div>	
              </div>

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Language Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="language_info"></textarea>
                </div>	
              </div>



              <div class="col-lg-4">
              <lebel>Country Picture<span class="tx-danger">*</span></lebel>
              	<label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);" required="" accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="one">
      				</label>
              </div> 

        </div>


        <div class="col-lg-4">
          <br><br><hr>
          <div class="form-layout-footer">
              <button class="btn btn-success" type="submit">Submit</button>
          </div>
          </div>
          </form>
        </div>
       
      </div>
    </div>




<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

 

@endsection