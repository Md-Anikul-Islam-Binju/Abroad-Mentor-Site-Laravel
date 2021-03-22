@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Abroad Mentor Countries Details Table</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
       

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">ACTION</th>
                </tr>


              </thead>

              @foreach($countryDetailInformation as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->name )}}</td>
                  <td><img src="{{URL::to($row->image)}}" style="height: 50px; width: 80px;"></td>
                  

                          
                  <td>
                    <a href="{{URL::to('edit/countries/details/'.$row->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                    <a href="{{URL::to('view/countries/details/'.$row->id)}}" class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>
                    <a href="{{URL::to('delete/cd/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>                
                  </td>

                </tr>
                @endforeach




              <tbody>
       
         
               
               
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

@endsection
