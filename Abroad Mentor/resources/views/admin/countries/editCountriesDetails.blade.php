@extends('admin.admin_layouts')
@section('admin_content')


<div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Countries Details Information Update</h5>
        </div>

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Countries Details Information Update</h6>
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

             <form action="{{url('update/countries/details/'.$country_details_info->id)}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-body pd-20">


              @php
              $country_info= DB::table('countries_table')->get();
              @endphp
              <div class="form-group">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country Name: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose Country" name="country_id">
                    <option label="Choose Country"></option>
                    @foreach($country_info as $row)
                    <option value="{{ $row->id }}"

                    
                    <?php if( $row->id==$country_details_info->country_id)
                   	{
              			echo "selected";

               		}?>>{{ $row->name }}</option>
                    @endforeach 
                  </select>
                </div>
              </div>


 

            
         
              	<div class="form-group">
                  <label class="form-control-label">The Country Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="country_info">{{$country_details_info->country_info}}</textarea>
                </div>	
         

         
              	<div class="form-group">
                  <label class="form-control-label">The Locals Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="locals_info">{{$country_details_info->locals_info}}</textarea>
                </div>	
         

   
              	<div class="form-group">
                  <label class="form-control-label">Job opportunities Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="job_opportunities_info">{{$country_details_info->job_opportunities_info}}</textarea>
                </div>	
          

           
              	<div class="form-group">
                  <label class="form-control-label">Language Information: <span class="tx-danger">*</span></label>
                   <textarea class="form-control" rows="10" id="summernote" name="language_info">{{$country_details_info->language_info}}</textarea>
                </div>	
      



              <div class="form-group">
               <label for="exampleInputCategory">Countries Image</label>
                <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{( $country_details_info->image )}}">
              </div>


              <div class="form-group">
               <label for="exampleInputCategory">Countries Old Image</label>
                <img src="{{URL::to($country_details_info->image)}}" style="height: 70px; width: 100px;">
                <input type="hidden" name="old_image" value="{{( $country_details_info->image )}}">
             </div>
        


         
        

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Update Countries Details Information</button>
              </div>
             </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

      


@endsection
