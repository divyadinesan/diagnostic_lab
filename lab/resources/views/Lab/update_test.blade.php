@include('Lab/Layout/lab_header');
<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>Update Test</h3>
					<form action="{{url('test_update/'.$tst_fetch->test_id)}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						
						<label>Test Name</label>
						<input type="text" name="test_name" class="email" placeholder="Category Name" required="" value="{{$tst_fetch->test_name}}">
						<label>Test Price</label>
						<input type="text" name="test_price" class="email" placeholder="Category Name" required="" value="{{$tst_fetch->test_price}}">
						<label>Test Description</label>
						<input type="text" name="test_description" class="email" placeholder="Category Name" required="" value="{{$tst_fetch->test_description	}}">
						<label>Test Image</label><br>
						<img src="{{url('d_lab/Test/'.$tst_fetch->test_image)}}" style="height: 100px;width: 200px"><br><br>
						<label>Upload New Test Image</label>
						<input type="file" name="test_image" class="password" placeholder="Address"  />
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>

@include('Lab/Layout/lab_footer');