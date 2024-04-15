@include('Lab/Layout/lab_header');
<br><br>

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
<center>
<h2>Patient Details</h2>
</center><br><br>

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Password</th>
    
    </tr>
   
    @php
    $i=1;

    @endphp
    @foreach($patient as $ptn)
    <tr>
      <td>{{$i}}</td>
      <td>{{$ptn->p_name}}</td>
      <td>{{$ptn->p_email}}</td>
      <td>{{$ptn->p_phone}}</td>
      <td>{{$ptn->p_address}}</td>
      <td>{{$ptn->p_password}}</td>
     
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