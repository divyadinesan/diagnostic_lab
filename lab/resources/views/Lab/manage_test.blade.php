@include('Lab/Layout/lab_header');
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
	<br><br><br><br><br><br>
<center>
	<h2>Manage Category</h2>
	<br><br>
</center>

<div style="overflow-x: auto;">
  <table>
    <tr>
      <th>Sl.No</th>
      <th>Test Name</th>
       <th>Test Price</th>
        <th>Test Description</th>
      <th>Test Image</th>
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>
    @php
    $i=1;
    @endphp
    @foreach($test as $tst)
    <tr>
      <td>{{$i}}</td>
      <td>{{$tst->test_name}}</td>
      <td>{{$tst->test_price}}</td>
      <td>{{$tst->test_description}}</td>
      <td><img src="{{url('d_lab/Test/'.$tst->test_image)}}" style="height: 100px;width: 200px"></td>

     <!--  -->
      <td><a href="{{url('test_fetch/'.$tst->test_id)}}"><img src="{{url('d_lab/images/editt.png')}}" style="height: 50px;width: 50px"></a></td>
      <td><a href="{{url('test_delete/'.$tst->test_id)}}"><img src="{{url('d_lab/images/delete.png')}}" style="height:50px;width:50px"></a></td>
      
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