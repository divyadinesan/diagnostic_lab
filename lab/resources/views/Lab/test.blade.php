@include('Lab/Layout/lab_header');
<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>Add Test</h3>
					<form action="{{url('test_insert')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<label>Category Name</label><br>
						<select name="category_id">
							@foreach($category as $cat)
							<option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
							@endforeach
							
						</select><br><br>
						<label>Test Name</label>
						<input type="text" name="test_name" class="email" placeholder="Category Name" required="">
						<label>Test Price</label>
						<input type="text" name="test_price" class="email" placeholder="Category Name" required="">
						<label>Test Description</label>
						<input type="text" name="test_description" class="email" placeholder="Category Name" required="">
						<label>Test Image</label>
						<input type="file" name="test_image" class="password" placeholder="Address" required="" />
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>

@include('Lab/Layout/lab_footer');