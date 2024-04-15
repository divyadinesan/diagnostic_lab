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
<body>
<center><br><br>
<h2>Payment Details</h2><br><br>
</center>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Patient Name</th>
      <th>Test Name</th>
      <th>Price</th>
      <th>Card Name</th>
      <th>Card Number</th>
      <th>Expiry Date</th>
      
    </tr>
    @php
    $i=1;
    @endphp
    @foreach($payment as $pay)
    <tr>
      <td>{{$i}}</td>
      <td>{{$pay->p_name}}</td>
      <td>{{$pay->test_name}}</td>
      <td>{{$pay->price}}</td>
      <td>{{$pay->card_name}}</td>
      <td>{{$pay->card_number}}</td>
      <td>{{$pay->expiry_date}}</td>
     
    </tr>
    @php
    $i++;
    @endphp
   @endforeach
  </table>
</div>
<br><br>
<br><br>

</body>
</html>

@include('Lab/Layout/lab_footer');