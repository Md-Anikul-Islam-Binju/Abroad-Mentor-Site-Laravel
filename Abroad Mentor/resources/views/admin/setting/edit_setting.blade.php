@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Setting Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Setting Information Update</h6>
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

             <form action="{{url('update/setting/'.$setting_info->id)}}" method="post">
             @csrf
             <div class="modal-body pd-20">

             <div class="form-group">
               <label for="exampleInputCategory">Site Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->name )}}">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Site Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->phone )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Site Mail</label>
                <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->mail )}}">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Site Address</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->address )}}">
             </div>


              <div class="form-group">
               <label for="exampleInputCategory">Facebook Link</label>
                <input type="text" class="form-control" name="link1" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->link1 )}}">
              </div>

              <div class="form-group">
               <label for="exampleInputCategory">Twitter Link</label>
                <input type="text" class="form-control" name="link2" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->link2 )}}">
              </div>

              <div class="form-group">
               <label for="exampleInputCategory">Instagram Link</label>
                <input type="text" class="form-control" name="link3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->link3 )}}">
              </div>


              <div class="form-group">
               <label for="exampleInputCategory">Youtube Link</label>
                <input type="text" class="form-control" name="link4" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $setting_info->link4 )}}">
              </div>


              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Setting Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
