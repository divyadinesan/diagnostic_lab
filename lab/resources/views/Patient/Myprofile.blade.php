@include('Patient/Layout/header');
<br><br>

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					
					<h3>MY PROFILE </h3>
					<form action="{{url('/patient_profile_update')}}" method="post">
						{{csrf_field()}}
						<input type="text" name="name" class="email" placeholder="Name" required="" value="<?php echo $patient->p_name?>">
						<input type="email" name="Email" class="email" placeholder="Email" required="" /value="<?php echo $patient->p_email?>" readonly>
						<input type="text" name="Phone" class="email" placeholder="Phone Number" required="" /value="<?php echo $patient->p_phone?>">
						<input type="text" name="Password" class="password" placeholder="Password" required="" /value="<?php echo $patient->p_password?>">
						<input type="text" name="address" class="password" placeholder="Address" required="" /value="<?php echo $patient->p_address?>">
						
						
						<div class="clearfix"></div>
						<input type="submit" value="Submit">
					</form>
					

				</div>
			</div>
		</div>
	
<br><br><br>
@include('Patient/Layout/footer');