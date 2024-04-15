<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    /*    --------------------------------------------------
    :: Login Section
    -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
    margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
    text-align: center;
    display: block;
}

/*    --------------------------------------------------
    :: Inputs & Buttons
    -------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
    background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
    -------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
</style>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Hospital Registration</h1>
                    <form role="form" action="{{url('/lab_insert')}}" method="post" id="login-form" autocomplete="off">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label >Hospital Name</label>
                            <input type="text" name="Name" id="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Hospital Email</label>
                            <input type="email" name="Email" id="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Hospital Phone Number</label>
                            <input type="text" name="Phone" id="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Hospital Address</label>
                            <input type="text" name="address" id="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Hospital Password</label>
                            <input type="password" name="Password" id="key" class="form-control" >
                        </div>
                        
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
                    </form>
                   
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script type="text/javascript">
    function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
</script>
<footer id="footer">
    
</footer>