@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Our About Important fact Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Our About Important fact Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add About Important fact</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">COUNTRIES</th>
                  <th class="wd-15p">PROJECT</th>
                  <th class="wd-15p">UNIVERSITIES</th>
                  <th class="wd-15p">COURSES</th>
                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>

             <tbody>

             @foreach($important_fact as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->total_countries )}}</td>
                  <td>{{( $row->total_project )}}</td>
                  <td>{{( $row->total_universities)}}</td>
                  <td>{{( $row->total_courses )}}</td>
            
                  
                  
                  
                  <td>
                    <a href="{{URL::to('edit/fact/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>                 
                    <a href="{{URL::to('delete/fact/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>               
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor About Important fact Add***************</h6>
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

             <form action="{{route('store.fact')}}" method="post">
             @csrf
             <div class="modal-body pd-20">
      
             <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Total Countries: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_countries">
                </div>
              </div>	


            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Total Project: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_project">
                </div>
              </div>

            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Total Universities: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_universities">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Total Courses: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="total_courses">
                </div>
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
