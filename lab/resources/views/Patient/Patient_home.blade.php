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
	<br><br><br>
<center>
<h2>Our Categories</h2>
</center>
<br><br>


<div class="row">
@foreach($category as $cat)
  <div class="column">
    <div class="card">
      
      <p><a href="{{url('fetch_test/'.$cat->category_id)}}"><img src="{{url('d_lab/Category/'.$cat->category_image)}}" style="height: 200px;width: 200px"></a></p>
      <br>
      <h5><b>{{$cat->category_name}}</b></h5>
    </div>
  </div>

  @endforeach
  
 
</div>
<br><br><br>
</body>
</html>


@include('Patient/Layout/footer');