@include('Patient/Layout/header');
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2 align="center">My Booking</h2><br><br>


<div class="row">
	@foreach($mybooking as $booking)
  <div class="column">
    <div class="card">
    	 <h5>Test Name : {{$booking->test_name}}</h5>
    	 <br>
      <h5>Patient Name : {{$booking->patient_name}}</h5>
      <br>
      <h5>Test Price : {{$booking->test_price}}</h5>
      <br>
      <h5>Booking Date : {{$booking->booking_date}}</h5>
      <br>
      <h5>Booking Time : {{$booking->booking_time}}</h5>
      <br>
      <h5>Booking Status: {{$booking->booking_status}}</h5>
      <br>
      @if($booking->booking_status=='Approved')
      <a href="{{url('/payment/'.$booking->booking_id)}}"><button style="background-color: green;color: white">Pay Now</button></a>
      @endif
      
    </div>
  </div>
@endforeach
 
  
  
  
  
</div>
<br><br>
</body>
</html>


@include('Patient/Layout/footer');