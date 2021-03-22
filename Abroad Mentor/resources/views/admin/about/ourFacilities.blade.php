@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Our Facilities Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Our Facilities Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Our Facilities</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">STATUS</th>
                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>

             <tbody>

             @foreach($ourFaciliti as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>
                    @if( $row->status == 1)
                      <span class="badge badge-success">Active</span>
                    @else
                      <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{URL::to('edit/facilities/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>                 
                    <a href="{{URL::to('view/facilities/'.$row->id)}}" class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>
                    <a href="{{URL::to('delete/facilities/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                    @if($row->status == 1)
                      <a href="{{URL::to('inactive/facilities/'.$row->id)}}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{URL::to('active/facilities/'.$row->id)}}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @endif
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor Our Facilities Information Add***************</h6>
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

             <form action="{{route('store.facilites')}}" method="post">
             @csrf
             <div class="modal-body pd-20">
      
            <div class="form-group">
                <label class="form-control-label">University Admission <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="university_admission"></textarea>
            </div>	


            
            <div class="form-group">
                <label class="form-control-label">Visa Process <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="visa_process"></textarea>
            </div>

            
            <div class="form-group">
                <label class="form-control-label">Study to Immigration <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="immigration"></textarea>
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
