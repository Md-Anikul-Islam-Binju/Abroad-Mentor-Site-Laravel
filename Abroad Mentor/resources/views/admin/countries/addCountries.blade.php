@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Abroad Mentor Countries Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Abroad Mentor Countries
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Countries Add</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Countries Name</th>
                  <th class="wd-15p">Countries Image</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">ACTION</th>
                </tr>


              </thead>

              @foreach($countries as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->name )}}</td>
                  <td><img src="{{URL::to($row->image)}}" style="height: 50px; width: 80px;"></td>
                  <td>
                    @if( $row->status == 1)
                      <span class="badge badge-success">Active</span>
                    @else
                      <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                          
                  <td>
                    <a href="{{URL::to('edit/countries/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="{{URL::to('delete/countries/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>


                    @if($row->status == 1)
                      <a href="{{URL::to('inactive/countries/'.$row->id)}}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{URL::to('active/countries/'.$row->id)}}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @endif
                  </td>

                </tr>
                @endforeach




              <tbody>
       
         
               
               
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->



     <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">*******************Abroad Mentor Countries Add *******************</h6>
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

             <form action="{{route('store.countries')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

            <div class="form-group">
               <label for="exampleInputCategory">Countries Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Countries Name">
             </div> 


             <div class="form-group">
               <label for="exampleInputCategory">Countries Image(Please Use 1920*1200 pixel)</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Countries Image">
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
