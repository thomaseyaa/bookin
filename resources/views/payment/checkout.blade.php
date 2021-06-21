@extends('layout.default')

@section('content')
    <!-- CONTENT-->
    <div class="pt-10 pb-16 bg-primary-light">
        <div class="container">
            <div class="row mt-8">
                <div class="col-lg-6 col-md-10 m-auto">
                    <div class="card rounded-lg">
                        <div class="card-header px-lg-7 px-4 pt-3 pb-0 border-0 bg-transparent">
                            <div class="row d-flex justify-content-center">
                                <div class="col pt-4 mb-2">
                                    <h5>Payement</h5>
                                    <p>Abonnement mensuel : 7,99€</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-block px-lg-7 px-4 pb-5">
                            @if($errors->any())
                                <div class="alert alert-danger text-center">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="post" id="payment-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Prénom et nom indiqués sur la carte">
                                </div>
                                <div class="form-group"  class="mt-4">
                                    <div type="text" class="form-control" id="card-element"></div>
                                    <div class="text-danger" id="card-errors" role="alert"></div>
                                </div>
                                <div class="form-group mb-5">
                                    <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Code promo">
                                </div>
                                <button class="btn btn-primary text-white text-primary mb-3 w-100" id="card-button" data-secret="{{ $intent->client_secret }}" type="submit">Payer maintenant</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STRIPE-->
    <script>
        const stripe = Stripe('{{ $stripeKey }}');
        const elements = stripe.elements();
        const card = elements.create("card");
        card.mount("#card-element");
        const cardHolderName = document.getElementById('name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        card.on('change', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            let displayError = document.getElementById('card-errors');
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
                console.log(setupIntent);
                let paymentMethod = document.createElement('input');
                paymentMethod.setAttribute('type', 'hidden');
                paymentMethod.setAttribute('name', 'payment_method');
                paymentMethod.value = setupIntent.payment_method;
                form.appendChild(paymentMethod);
                form.submit();
            }
        });
    </script>
@endsection