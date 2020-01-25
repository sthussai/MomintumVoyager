@extends('payments.layout')

@section('content')


<div class='w3-card w3-content w3-padding-large'>



<form action="/payment" method="post" id="payment-form">
@csrf
@method('PATCH')
  <div class="form-row ">



    <label class='w3-center'for="card-element" >
      Credit or debit card
    </label>
    <div id="card-element" class='w3-padding-large w3-border w3-light-grey w3-black'>
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" class='w3-padding-large' role="alert"></div>
  </div>

  <button class='w3-button w3-section w3-blue w3-ripple'>Update Card</button>
</form>

<form action="/events" method="POST">
@method('DELETE')
@csrf
  <button class="w3-button w3-section w3-red w3-ripple"> Delete   ?</button>
</form>

</div>



<script>

// Create a Stripe client.
var stripe = Stripe('pk_test_y52NgXAoltVaFpq8KBsdLnjP00qh3exNwA');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  
  console.log(token)
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();


}
</script>
</body>
</html>




@endsection
