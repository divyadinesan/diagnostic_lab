@include('Lab/Layout/lab_header');

<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>MY PROFILE </h3>
					<form action="{{url('Lab_profile_updation')}}" method="post">
						{{csrf_field()}}
						<label>Lab Name</label>
						<input type="text" name="name" class="email" placeholder="Name" required="" value="{{$labs->lab_name}}">
						<label>Lab Email</label>
						<input type="email" name="Email" class="email" placeholder="Email" required="" /value="{{$labs->lab_email}}" readonly>
						<label>Lab Phone</label>
						<input type="text" name="Phone" class="email" placeholder="Phone Number" required="" /value="{{$labs->lab_phone}}">
						<label>Lab Password</label>
						<input type="text" name="Password" class="password" placeholder="Password" required="" /value="{{$labs->lab_password}}">
						<label>Lab Address</label>
						<input type="text" name="address" class="password" placeholder="Address" required="" /value="{{$labs->lab_address}}">
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>
@include('Lab/Layout/lab_footer');