@include('Lab/Layout/lab_header');
<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>Edit Category </h3>
					<form action="{{url('/update_category/'.$category->category_id)}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<label>Category Name</label>
						<input type="text" name="cat_name" class="email" placeholder="Category Name"  value="{{$category->category_name}}">
						<label>Category Image</label><br>
						<img src="{{url('d_lab/Category/'.$category->category_image)}}"><br>
						<label>Upload New Category Image</label>
						<input type="file" name="cat_image" class="password" placeholder="Address" />
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>
@include('Lab/Layout/lab_footer');