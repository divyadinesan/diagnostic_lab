@include('Lab/Layout/lab_header');
<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>Add Category </h3>
					<form action="{{url('category_insert')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<label>Category Name</label>
						<input type="text" name="cat_name" class="email" placeholder="Category Name" required="">
						<label>Category Image</label>
						<input type="file" name="cat_image" class="password" placeholder="Address" required="" />
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>

@include('Lab/Layout/lab_footer');