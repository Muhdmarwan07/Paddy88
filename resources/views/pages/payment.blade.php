@extends('layout')
@section('content')
<div class="cart-main-area pt-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-tab-pill text-center text-uppercase mb-50">
                                <ul>
                                    <li><a data-toggle="pill" href="{{url('/show-cart')}}"><span>1</span> SHOPPING CART</a></li>
                                    <li class="pill"><a data-toggle="pill" href="#checkout"><span>2</span> CHECKOUT</a></li>
                                    <li class="active"><a data-toggle="pill" href="#checkout"><span>3</span> PAYMENT</a></li>
                                    <li><a data-toggle="pill" href="#order"><span>4</span> ORDER COMPLETE</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </div>
                    
				 		<div role="tabpanel" class="tab-pane fade in active" id="checkout">
                                <div class="col-md-offset-1 col-sm-offset-1 col-sm-5">
                                    <div class="checkout-total mb-60">
                                        <h5 class="text-uppercase mb-40"><strong>CART TOTAL</strong></h5>
                                        <form action="#">
                                            <div class="table-content-total table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="check-product"><strong>Product</strong></th>
                                                            <th class="check-total pull-right"><strong>Total</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Zelletria ostma
                                                                <span>X 02</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$390.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check">
                                                                Letria postma 
                                                                <span>X 01</span>
                                                            </td>
                                                            <td class="singel-check pull-right">
                                                                <span>$145.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list">
                                                            <td class="singel-check last-list">
                                                                Montria jastma
                                                                <span> X 02</span>
                                                            </td>
                                                            <td class="singel-check last-list pull-right">
                                                                <span>$310.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom border-top">
                                                            <td class="singel-check total-check">
                                                                Sub total
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$845.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="check-product-list border-bottom">
                                                            <td class="singel-check total-check">
                                                                Shipping
                                                            </td>
                                                            <td class="singel-check total-check pull-right">
                                                                <span>$0.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="cart-grand-total">
                                                            <th class="pt-15">Grand Total</th>
                                                            <td class="pull-right pt-15">
                                                                <h5 class="amount m-0"><strong>$845.00</strong></h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="container">
		<div class='row'>
			<div class='col-md-6'></div>
			<div class='col-md-6'>
				<script src='https://js.stripe.com/v2/' type='text/javascript'></script>
				<form accept-charset="UTF-8" action="/payment" class="require-validation"
					data-cc-on-file="false"
					data-stripe-publishable-key="pk_test_ktxhUaQNTYSNw2QiYHDXkqSn00TxxwSxh8"
					id="payment-form" method="post">
					{{ csrf_field() }}
					<div class='form-row'>
						<div class='col-xs-12 form-group required'>
							<label class='control-label'>Name on Card</label> <input
								class='form-control' size='4' type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-xs-12 form-group card required'>
							<label class='control-label'>Card Number</label> <input
								autocomplete='off' class='form-control card-number' size='20'
								type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-xs-4 form-group cvc required'>
							<label class='control-label'>CVC</label> <input
								autocomplete='off' class='form-control card-cvc'
								placeholder='ex. 311' size='4' type='text'>
						</div>
						<div class='col-xs-4 form-group expiration required'>
							<label class='control-label'>Expiration</label> <input
								class='form-control card-expiry-month' placeholder='MM' size='2'
								type='text'>
						</div>
						<div class='col-xs-4 form-group expiration required'>
							<label class='control-label'> </label> <input
								class='form-control card-expiry-year' placeholder='YYYY'
								size='4' type='text'>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12'>
							<div class='form-control total btn btn-info'>
								Total: <span class='amount'>$300</span>
							</div>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 form-group'>
							<button class='form-control btn btn-primary submit-button'
								type='submit' style="margin-top: 10px;">Pay »</button>
						</div>
					</div>
					<div class='form-row'>
						<div class='col-md-12 error form-group hide'>
							<div class='alert-danger alert'>Please correct the errors and try
								again.</div>
						</div>
					</div>
				</form>
				@if ((Session::has('success-message')))
				<div class="alert alert-success col-md-12">{{
					Session::get('success-message') }}</div>
				@endif @if ((Session::has('fail-message')))
				<div class="alert alert-danger col-md-12">{{
					Session::get('fail-message') }}</div>
				@endif
			</div>
			<div class='col-md-4'></div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
		crossorigin="anonymous"></script>
	<script>
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
			      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
			      $form.get(0).submit();
			    }
			  }
			})
		</script>

@endsection