@extends('admin.admin_layouts')
@section('admin_content')



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">


      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Abroad Mentor Student Application</h5>

        </div>

        <div class="card pd-20 pd-sm-40">
       

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-20p">ACTION</th>
                </tr>


              </thead>

              @foreach($student_apply_information as $row)
                <tr>
                  <td>{{( $row->id )}}</td>
                  <td>{{( $row->fname )}} {{( $row->lname )}}</td>
                  <td>{{( $row->phone )}}</td>
                  <td>{{( $row->email )}}</td>

                          
                  <td>
                    <a href="{{URL::to('view/student/'.$row->id)}}" class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>
                    <a href="{{URL::to('delete/student/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>                
                  </td>

                </tr>
                @endforeach




              <tbody>
       
         
               
               
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

@endsection
