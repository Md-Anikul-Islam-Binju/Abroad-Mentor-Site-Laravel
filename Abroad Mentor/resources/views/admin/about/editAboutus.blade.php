@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>About Us Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">About Us Information Update</h6>
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


              <form action="{{url('update/aboutus/'.$aboutus_info->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">

      
              
          
                <div class="form-group">
                  <label class="form-control-label">Director Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{$aboutus_info->name}}">
                </div>
           

           
            <div class="form-group">
                <label class="form-control-label">About Description <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="10" id="summernote" name="description">{{$aboutus_info->description}}</textarea>
            </div>	
          
         


              <div class="form-group">
               <label for="exampleInputCategory">About Us Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $aboutus_info->image )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">About Us Old Image</label>
                <img src="{{URL::to($aboutus_info->image)}}" style="height: 70px; width: 100px;">
                <input type="hidden" name="old_image" value="{{( $aboutus_info->image )}}">
             </div>



              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update About Us Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
