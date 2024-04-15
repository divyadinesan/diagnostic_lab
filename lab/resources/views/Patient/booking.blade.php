@include('Patient/Layout/header');


  <section class="about" id="appointment">
    <div class="container">
      <h2>appointment</h2>
      <div class="about-grids">
        <div class="col-md-3 col-sm-3 col-xs-3 abt-lt-grid text-center" style="height: 350px">
          <h4>our timing</h4>
          <p>Monday-Saturday</p>
          
          <p>Sunday(no appointment)</p>
         <!--  <p class="ma-p"><i class="fa fa-phone" aria-hidden="true"></i>+16 33 44 2345</p> -->

        </div>
        <div class="col-md-9 col-sm-9 col-xs-9 abt-rt-grid">
          <div class="w3ls-grid-head text-center">
            <h6>appointment</h6>
            <h3>online booking</h3>
          </div>
          <div class="abt-form text-center">
             <form method="post" action="{{url('/booking_insert')}}">
                {{csrf_field()}}
              <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                  <label >Patient Name</label>
                  <input type="text" name="Name"  value="{{$patient->p_name}}" readonly="">
                    <label >Test Name</label>
                  <input type="text"name="testName"required value="{{$tst->test_name}}" required="required" readonly="">
                  
                </div>
              </div>
              <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                    <label >Test Price</label>
                  <input type="text" name="test_price"required value="{{$tst->test_price}}" readonly="">
                  <label>Patient Email</label>
                 <input type="text" name="patient_email" value="{{$patient->p_email}}" readonly="">
              
                 
                </div>
              </div>
              <div class="col-sm-4 col-xs-4 w3ls-lt-form">
                <div class="w3ls-pr">
                  <label>Booking |Time</label>
                  <input type="time" required="required" name="booking_time">
                   <label>Booking Date</label>
                  <input type="date" name="booking_date" required="required">
                </div>
              </div>
              <div class="clearfix"></div>
              <input type="hidden" name="test_id" value="{{$tst->test_id}}">
                  <input type="hidden" name="patient_id" value="{{$patient->patient_id}}">
                  <input type="hidden" name="patient_email" value="{{$patient->p_email}}">
              <input type="submit" value="Book Now">

            </form>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>





  










@include('Patient/Layout/footer');