@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Facilities Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Facilities Information Update</h6>
        <div class="table-wrapper">



              @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                  </ul>
                </div>
              @endif


              <form action="{{url('update/facilities/'.$facilities_info->id)}}" method="post">
             @csrf
             <div class="modal-body pd-20">

      
              
         
             <div class="form-group">
                <label class="form-control-label">University Admission <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="university_admission">{{$facilities_info->university_admission}}</textarea>
            </div>	


            
            <div class="form-group">
                <label class="form-control-label">Visa Process <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="visa_process">{{$facilities_info->visa_process}}</textarea>
            </div>

            
            <div class="form-group">
                <label class="form-control-label">Study to Immigration <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="immigration">{{$facilities_info->immigration}}</textarea>
            </div>



              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Facilities Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
