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
      <th>Category Name</th>
      <th>Category Image</th>
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>
    @php
    $i=1;
    @endphp
    @foreach($category as $cat)
    <tr>
      <td>{{$i}}</td>
      <td>{{$cat->category_name}}</td>
      <td><img src="{{url('d_lab/Category/'.$cat->category_image)}}" style="height: 100px;width: 300px"></td>
      <td><a href="{{url('edit_category/'.$cat->category_id)}}"><img src="{{url('d_lab/images/editt.png')}}" style="height: 50px;width: 50px"></a></td>
      <td><a href="{{url('category_delete/'.$cat->category_id)}}"><img src="{{url('d_lab/images/delete.png')}}" style="height:50px;width:50px"></a></td>
      
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