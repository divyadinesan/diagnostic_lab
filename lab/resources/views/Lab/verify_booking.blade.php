@include('Lab/Layout/lab_header');

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body><br><br>
<center><h2>Verify Booking</h2></center><br>
<br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Test Name</th>
      <th>Patient Name</th>
      <th>Test Amount</th>
      <th>Booking Date</th>
      <th>Booking Time</th>
      <th>Booking Status</th>
      <th>Approve</th>
      <th>Reject</th>
      
    </tr>
    @php
    $i=1
    @endphp
    @foreach($bking as $booking)
    <tr>
      <td>{{$i}}</td>
      <td>{{$booking->test_name}}</td>
      <td>{{$booking->patient_name}}</td>
      <td>{{$booking->test_price}}</td>
      <td>{{$booking->booking_date}}</td>
      <td>{{$booking->booking_time}}</td>
      <td>{{$booking->booking_status}}</td>
      @if($booking->booking_status=='Pending')
      <td><a href="{{'/approve_booking/'.$booking->booking_id}}"><button style="background-color: green;color: white">Approve</button></a></td>
      <td><a href="{{url('/reject_booking/'.$booking->booking_id)}}"><button style="background-color: red;color: white">Reject</button></a></td>
      @endif()
    </tr>
    @php
    $i++;
    @endphp
    @endforeach
   
     

  </table>
</div>

</body>
</html>
<br><br><br>
@include('Lab/Layout/lab_footer');