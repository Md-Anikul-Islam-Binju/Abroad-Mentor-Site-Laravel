@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Forent Setting Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Forent Setting Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Setting</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  
                  <th class="wd-15p">NAME</th>

                  <th class="wd-15p">PHONE</th>

                  <th class="wd-15p">MAIL</th>

                  <th class="wd-15p">ADDRESS</th>
            
                  <th class="wd-15p">Facebook</th>

                  <th class="wd-15p">STATUS</th>

                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>




             <tbody>
                @foreach($setting as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->name )}}</td>
                  <td>{{( $row->phone )}}</td>
                  <td>{{( $row->mail )}}</td>
                  <td>{{( $row->address )}}</td>              
                  <td>{{( $row->link1 )}}</td>

                  <td>
                    @if( $row->status == 1)
                      <span class="badge badge-success">Active</span>
                    @else
                      <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                 




                  <td>
                    <a href="{{URL::to('edit/setting/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="{{URL::to('delete/setting/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                  
              


                    @if($row->status == 1)
                      <a href="{{URL::to('inactive/sitesetting/'.$row->id)}}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{URL::to('active/sitesetting/'.$row->id)}}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor Site Setting Information Add***************</h6>
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

             <form action="{{route('store.setting')}}" method="post">
             @csrf
             <div class="modal-body pd-20">

             <div class="form-group">
               <label for="exampleInputCategory">Site Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Site Name">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Site Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Site Phone">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Site Mail</label>
                <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Site Mail">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Site Address</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Site Address">
             </div>


              <div class="form-group">
               <label for="exampleInputCategory">Facebook Link</label>
                <input type="text" class="form-control" name="link1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook Link">
              </div>

              <div class="form-group">
               <label for="exampleInputCategory">Twitter Link</label>
                <input type="text" class="form-control" name="link2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter Link">
              </div>

              <div class="form-group">
               <label for="exampleInputCategory">Instagram Link</label>
                <input type="text" class="form-control" name="link3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Instagram Link">
              </div>


              <div class="form-group">
               <label for="exampleInputCategory">Youtube Link</label>
                <input type="text" class="form-control" name="link4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Youtube Link">
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
