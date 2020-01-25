@extends('payments.layout')

@section('content1')


<div class='w3-card w3-content w3-padding-large'>


<form action="/addpayer" method="post" id="payment-form">
@csrf
</form>


  <div class="form-row ">



    <label class='w3-center'for="card-element" >
      Credit or debit card
    </label>
    <input id="card-holder-name" class="w3-input w3-border" name="name" type="text" placeholder="Name on Card" value="{{$customer->name}}">
    <input id="card-holder-address" class="w3-input w3-border" name="name" type="text" placeholder="Address" @isset($customer->address->line1) value="{{$customer->address->line1}}" @endisset>
    <input id="card-holder-city" class="w3-input w3-border " name="city" type="text" placeholder="City" @isset($customer->address->city) value="{{$customer->address->city}}" @endisset>
    <input id="card-holder-state" class="w3-input w3-border " name="state" type="text" placeholder="Province" @isset($customer->address->state) value="{{$customer->address->state}}" @endisset>
    <div id="card-element" class='w3-padding-large w3-border w3-light-grey w3-black'>
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" class='w3-padding-large' role="alert"></div>
  </div>

  <button id="card-button" data-secret="{{ $intent->client_secret }}" class='w3-button w3-section w3-blue w3-ripple'>Add Card</button>



</div>





<script>

// Create a Stripe client.
const stripe = Stripe('pk_test_y52NgXAoltVaFpq8KBsdLnjP00qh3exNwA');

// Create an instance of Elements.
const elements = stripe.elements();


// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
const style = {

  
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
const cardElement = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
cardElement.mount('#card-element');



// Handle real-time validation errors from the card Element.
cardElement.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

const cardHolderName = document.getElementById('card-holder-name');
const cardHolderAddress = document.getElementById('card-holder-address');
const cardHolderCity = document.getElementById('card-holder-city');
const cardHolderState = document.getElementById('card-holder-state');


const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;

cardButton.addEventListener('click', async (e) => {
    const { setupIntent, error } = await stripe.handleCardSetup(
        clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value,
                  address: {line1: cardHolderAddress.value, 
                        city: cardHolderCity.value , 
                        state: cardHolderState.value,
                        },
                
                        }
            }
        }
    );

    if (error) {
        // Display "error.message" to the user...
        console.log(error);
  //alert(error.message);
    } else {
        // The card has been verified successfully...
        //alert("success");
        console.log('Card has been verified', setupIntent.payment_method);
    
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'paymentMethod');
  hiddenInput.setAttribute('value', setupIntent.payment_method);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
    
    
    }
});

</script>





@endsection
