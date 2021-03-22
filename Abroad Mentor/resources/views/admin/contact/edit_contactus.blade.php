@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Contact Us Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Contact Us Information Update</h6>
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

             <form action="{{url('update/contactus/'.$contact_info->id)}}" method="post">
             @csrf
             <div class="modal-body pd-20">

             <div class="form-group">
               <label for="exampleInputCategory">Office Location</label>
                <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $contact_info->location )}}">
             </div>

             <div class="form-group">
               <label for="exampleInputCategory">Office Phone</label>
                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $contact_info->phone )}}">
             </div>


             <div class="form-group">
               <label for="exampleInputCategory">Office Mail</label>
                <input type="text" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $contact_info->mail )}}">
             </div>


      
            <div class="form-group">
                <label class="form-control-label">Ofice Address <span class="tx-danger">*</span></label>
                <textarea class="form-control" rows="5" id="summernote" name="address">{{( $contact_info->address )}}
                </textarea>
            </div>	
        

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Contact Us Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
