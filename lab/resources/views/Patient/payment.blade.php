@include('Patient/Layout/header');
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	.submit-button {
  margin-top: 10px;
}
</style>
<center><h1>Pay Now</h1></center><br><br>
<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="{{url('/payment_insert')}}" method="post"><div style="margin:0;padding:0;display:inline">
            {{csrf_field()}}
          </div>
          	<input type="hidden" name="booking_id" value="{{$bking->booking_id}}">
            <input type="hidden" name="test_id" value="{{$bking->test_id}}">
            <input type="hidden" name="test_name" value="{{$bking->test_name}}">
            <input type="hidden" name="patient_id" value="{{$bking->patient_id}}">
             <input type="hidden" name="price" value="{{$bking->test_price}}">
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text' name="card_name">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' type='text' name="card_number">
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex.311' size='3' type='text' name="cvc">
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM/YY' size='4' type='text' name="expirydate">
              </div>
              
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'>₹{{$bking->test_price}}</span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
              </div>
            </div>
            
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
<script type="text/javascript">
	$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#payment-form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
      $form.get(0).submit();
    }
  }
})
</script><br><br>
<br>
@include('Patient/Layout/footer');


	

