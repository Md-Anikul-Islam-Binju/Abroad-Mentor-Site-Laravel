@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Work Flow Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Work Flow Information Update</h6>
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


              <form action="{{url('update/ourWorkFlow/'.$workflow_info->id)}}" method="post">
             @csrf
             <div class="modal-body pd-20">

      
              
             <div class="form-group">
                <label class="form-control-label">Online Assessment <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="online_assessment">{{$workflow_info->online_assessment}}</textarea>
            </div>	


            
            <div class="form-group">
                <label class="form-control-label">Invited to meet <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="invited_to_meet">{{$workflow_info->invited_to_meet}}</textarea>
            </div>

            
            <div class="form-group">
                <label class="form-control-label">Application Process Initiated <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="application_process_initiated">{{$workflow_info->application_process_initiated}}</textarea>
            </div>

            <div class="form-group">
                <label class="form-control-label">Application Submitted <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="application_submitted">{{$workflow_info->application_submitted}}</textarea>
            </div>


            <div class="form-group">
                <label class="form-control-label">Visa Submitted <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="visa_submitted">{{$workflow_info->visa_submitted}}</textarea>
            </div>


            <div class="form-group">
                <label class="form-control-label">Flights booked <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="flights_booked">{{$workflow_info->flights_booked}}</textarea>
            </div>



              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Work Flow Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
