@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Our Facilities Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Our Work Flow Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Our Work Flow</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Assessment</th>
                  <th class="wd-15p">Flights</th>
                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>

             <tbody>

             @foreach($ourWork as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->online_assessment )}}</td>  
                  <td>{{( $row->flights_booked )}}</td>   
                  <td>
                    <a href="{{URL::to('edit/ourWorkFlow/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>                 
                    <a href="{{URL::to('delete/ourWorkFlow/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach

                
             </tbody>
               
            



            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->



     <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor Our Work Flow Add***************</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>



              @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                  </ul>
                </div>
              @endif

             <form action="{{route('store.workflow')}}" method="post">
             @csrf
             <div class="modal-body pd-20">
      
            <div class="form-group">
                <label class="form-control-label">Online Assessment <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="online_assessment"></textarea>
            </div>	


            
            <div class="form-group">
                <label class="form-control-label">Invited to meet <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="invited_to_meet"></textarea>
            </div>

            
            <div class="form-group">
                <label class="form-control-label">Application Process Initiated <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="application_process_initiated"></textarea>
            </div>

            <div class="form-group">
                <label class="form-control-label">Application Submitted <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="application_submitted"></textarea>
            </div>


            <div class="form-group">
                <label class="form-control-label">Visa Submitted <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="visa_submitted"></textarea>
            </div>


            <div class="form-group">
                <label class="form-control-label">Flights booked <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="flights_booked"></textarea>
            </div>
        

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
