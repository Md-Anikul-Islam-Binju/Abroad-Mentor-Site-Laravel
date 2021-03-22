@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Team Member Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Team Member Table
             <a href="#" class="btn btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add Team Member</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">IMAGE</th>                
                  <th class="wd-15p">NAME</th>
                  <th class="wd-15p">PHONE</th>
                  <th class="wd-15p">MAIL</th>
                  <th class="wd-15p">POST</th>            
                  <th class="wd-20p">ACTION</th>
                </tr>
              </thead>




             <tbody>

             @foreach($team as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td><img src="{{URL::to($row->image)}}" style="height: 70px; width: 80px;"></td>
                  <td>{{( $row->name )}}</td>
                  <td>{{( $row->phone )}}</td>
                  <td>{{( $row->mail )}}</td>           
                  <td>{{( $row->jobposition )}}</td>           

                  <td>
                  <a href="{{URL::to('edit/team/member/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="{{URL::to('delete/team/member/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">***************Abroad Mentor Team Member Information Add***************</h6>
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

             <form action="{{route('store.team')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Member Name">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Member Phone">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Team Member Mail</label>
                <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Member Mail">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Address</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Team Member Address">
             </div>


              <div class="form-group">
               <label for="exampleInputCategory">Job Position</label>
                <input type="text" class="form-control" name="jobposition" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Job Position">
              </div>

         
              <div class="form-group">
               <label for="exampleInputCategory">Image(Please Use 1920*1200 pixel)</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Image">
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
