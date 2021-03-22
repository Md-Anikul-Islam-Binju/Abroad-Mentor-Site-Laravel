@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Our About Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Our About Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Our About</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Director Name</th>
                  <th class="wd-15p">Director Sign</th>
                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>

             <tbody>

             
             @foreach($about as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->name )}}</td>
                  <td><img src="{{URL::to($row->image)}}" style="height: 70px; width: 100px;"></td>

                  <td>
                    <a href="{{URL::to('edit/aboutus/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>                 
                    <a href="{{URL::to('delete/aboutus/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor Our About Information Add***************</h6>
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

             <form action="{{route('store.aboutus')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

             <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Director Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name">
                </div>
              </div>

            <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label">About Description <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="10" id="summernote" name="description"></textarea>
            </div>	
            </div>

  

            <div class="col-lg-12">
            <div class="form-group">
               <label for="exampleInputCategory">Director Sign(Please Use 150*100 pixel)</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Image">
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
