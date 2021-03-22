@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>About Important Fact Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">About Important Fact Update</h6>
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


              <form action="{{url('update/fact/'.$abou_fact_info->id)}}" method="post">
             @csrf
             <div class="modal-body pd-20">
      
             <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Total Countries: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_countries" value="{{( $abou_fact_info->total_countries )}}">
                </div>
              </div>	


            
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Total Project: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_project" value="{{( $abou_fact_info->total_project )}}">
                </div>
              </div>

            
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Total Universities: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_universities" value="{{( $abou_fact_info->total_universities )}}">
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Total Courses: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_courses" value="{{( $abou_fact_info->total_courses )}}">
                </div>
              </div>
        

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update About Important Fact</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
