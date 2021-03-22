@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blog Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Blog Update</h6>
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


              <form action="{{url('update/blog/'.$blog_info->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

      
              
             <div class="form-group">
               <label for="exampleInputCategory">Blog  Title:</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $blog_info->title )}}">
             </div>

             <div class="form-group">
                <label class="form-control-label">Blog Details: <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="20" id="summernote" name="details">{{( $blog_info->details )}}
                </textarea>
            </div>	

         


              <div class="form-group">
               <label for="exampleInputCategory">Blog Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $blog_info->image )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Blog Old Image</label>
                <img src="{{URL::to($blog_info->image)}}" style="height: 70px; width: 100px;">
                <input type="hidden" name="old_image" value="{{( $blog_info->image )}}">
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
