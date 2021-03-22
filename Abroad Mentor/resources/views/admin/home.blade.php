@extends('admin.admin_layouts')
@section('admin_content')
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      @php
      $important_info=DB::table('about_important_table')->get();
      @endphp
      <div class="sl-pagebody">
       

       @foreach($important_info as $row)
        <div class="row row-sm">

         <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total COUNTRIES</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
      
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
   
                <div>
           
                  <h6 class="tx-white mg-b-0">{{$row->total_countries}}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->



          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total PROJECT</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
 
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <h6 class="tx-white mg-b-0">{{$row->total_project}}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->



          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total UNIVERSITIES</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
        
                <div>
                
                  <h6 class="tx-white mg-b-0">{{$row->total_universities}}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->



          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total COURSES</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
      
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
           
                <div>
                  <h6 class="tx-white mg-b-0">{{$row->total_courses}}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->




        </div><!-- row -->
        @endforeach
      </div><!-- sl-pagebody -->
     
    </div><!-- sl-mainpanel -->
@endsection
