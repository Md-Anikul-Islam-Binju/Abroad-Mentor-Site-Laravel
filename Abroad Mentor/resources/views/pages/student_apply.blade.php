@extends('layouts.app')
@section('content')
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Application for Abroad Mentor</h2>
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          
            @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                  </ul>
                </div>
              @endif
            <form action="{{route('store.student')}}" method="post">
            @csrf
              <div class="row">

              
                <div class="col-lg-6 form-group">
                <h6><b>First Name *</b></h6>
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required>
                </div></br></br></br>

                
              
                <div class="col-lg-6 form-group">
                <h6><b>Last Name *</b></h6>
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Your Last Name">
                </div></br></br></br>
                
             
                <div class="col-lg-6 form-group">
                <h6><b>Your Phone *</b></h6>
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone Number">
                </div></br></br></br>

               
                <div class="col-lg-6 form-group">
                <h6><b>Your Email *</b></h6>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div></br></br></br>


               
                <div class="col-lg-6 form-group">
                <h6><b>Your Age *</b></h6>
                  <input type="number" class="form-control" name="age" id="age" placeholder="Your Age">
                </div></br></br></br>

                <div class="col-lg-6 form-group">
                <h6><b>Others Country *</b></h6>
                  <input type="text" name="other_country_name" class="form-control" id="other_country_name" placeholder="If You Selected Other Country then wright the Country Name">
               </div></br></br></br>


                
             <div class="row">

                <div class="col-lg-12 form-group" data-aos="fade-up">
                   <h4><b>Desired Country *  </b></h4>
                </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="united_kingdom" value="1">
                    <span>United Kingdom</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="united_state" value="1">
                    <span>United States</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="canada" value="1">
                    <span>Canada</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="newzealand" value="1">
                    <span>NewZealand</span>
                 </label>
              </div>

              
              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="sweden" value="1">
                    <span>Sweden</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="denmark" value="1">
                    <span>Denmark</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="malaysia" value="1">
                    <span>Malaysia</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="china" value="1">
                    <span>China</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="germany" value="1">
                    <span>Germany</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="other" value="1">
                    <span>Other</span>
                 </label>
              </div>



             </div></br></br></br></br></br></br></br></br>










             <div class="row">

                <div class="col-lg-12 form-group" data-aos="fade-up">
                   <h4><b>Educational Background (tick all that's completed) * </b></h4>
                </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="ssc" value="1">
                    <span>SSC</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="o_level" value="1">
                    <span>O Level</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="hsc" value="1">
                    <span>HSC</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="a_level" value="1">
                    <span>A Level</span>
                 </label>
              </div>

              
              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="diploma" value="1">
                    <span>Diploma</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="honours" value="1">
                    <span>Graduation (Honours)</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="masters" value="1">
                    <span>Post-Graduation (Masters)</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="phd" value="1">
                    <span>PhD</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="none" value="1">
                    <span>None / NA</span>
                 </label>
              </div>

             </div></br></br></br></br></br></br></br></br>







             <div class="row">

                <div class="col-lg-12 form-group" data-aos="fade-up">
                   <h4><b>Division You are in *  </b></h4>
                </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="dhaka" value="1">
                    <span>Dhaka</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="chittagong" value="1">
                    <span>Chittagong</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="sylhet" value="1">
                    <span>Sylhet</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="rajshahi" value="1">
                    <span>Rajshahi</span>
                 </label>
              </div>

              
              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="khulna" value="1">
                    <span>Khulna</span>
                 </label>
              </div>


              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="barisal" value="1">
                    <span>Barisal</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="mymensingh" value="1">
                    <span>Mymensingh</span>
                 </label>
              </div>

              <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="rangpur" value="1">
                    <span>Rangpur</span>
                 </label>
              </div>



             </div></br></br></br></br></br></br></br></br>

              
             </div>
             <button type="submit" class="btn btn-success">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </section>


    @endsection