@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Team Member Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Team Member Information Update</h6>
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


              <form action="{{url('update/team/member/'.$team_info->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->name )}}">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->phone )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Team Member Mail</label>
                <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->mail )}}">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Team Member Address</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->address )}}">
             </div>


              <div class="form-group">
               <label for="exampleInputCategory">Job Position</label>
                <input type="text" class="form-control" name="jobposition" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->jobposition )}}">
              </div>

              <div class="form-group">
               <label for="exampleInputCategory">Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $team_info->image )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Old Image(Please Use 1920*1200 pixel)</label>
                <img src="{{URL::to($team_info->image)}}" style="height: 70px; width: 100px;">
                <input type="hidden" name="old_image" value="{{( $team_info->image )}}">
             </div>



              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Team Member Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
