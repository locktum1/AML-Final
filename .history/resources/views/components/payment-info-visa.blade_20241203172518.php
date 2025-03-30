<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px] flex items-center justify-center flex-col"]) }}>
    <h3 class="text-[30px] mt-[10px]">Press the button below to begin the subscription payment</h3>
    <div>
        <form action="{{ route('createCheckoutSession') }}" method="POST" id="subscription-form">
            @csrf
            <input type="hidden" name='email' value="{{ Auth::user()->email }}">
            <input type="hidden" name='name' value="{{ Auth::user()->name }}">
            <button type="submit"></button>
        </form>
    </div>
</div>


{{-- </script> --}}


{{--
<div id="card-element"></div>
<button id="submit">Subscribe</button> --}}
            {{-- <script src="https://js.stripe.com/v3/"></script> --}}
{{-- <script>
    const stripe = Stripe('pk_test_51QRytTB9MWXishUQoz6KZmJ9ekyivQBSoByoJkYltLSUORxs2BUYezjpHPMSgF72VGBmzKPr4psX8XzUiinlJVAw00KUQMjyim')
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element')

    const form = document.getElementById('subscription-form');
    form.addEventListener('submit', async(event) => {
        event.preventDefault();
        const {token, error} = await stripe.createToken(cardElement);

        if (error){
            console.error(error)
        } else{
            fetch('/create-subscription', {
                method: 'POST',
                headers: {
                    'content-Type': 'application/json',
                }
                body: JSON.stringify({token: token.id}),
            }).then(response => response.json())
            .then(data => console.log(data);
            );
        }
    }) --}}

    {{-- <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="500" data-name="AML" data-description="Basic membership" data-locale="auto" data-currency="usd"></script> --}}
