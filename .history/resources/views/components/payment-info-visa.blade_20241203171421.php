<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px] flex items-center justify-center flex-col"]) }}>
    <h3 class="text-[30px] mt-[10px]">Press the button below to begin the subscription payment</h3>
    <div>
        <form id="subscription-form">
            <div id="card-element"></div>
            <button id="submit">Subscribe</button>
        </form>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51QRytTB9MWXishUQoz6KZmJ9ekyivQBSoByoJkYltLSUORxs2BUYezjpHPMSgF72VGBmzKPr4psX8XzUiinlJVAw00KUQMjyim')
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element')

    const form = document.getElementById('subscription-form');
    form.addEventListener('submit', async(event) => {
        event.preventDefault();
        const {token, error} = await stripe.createToken(cardElement)
    })
</script>


{{-- @csrf
            <input type="hidden" name='email' value="{{ Auth::user()->email }}">
            <input type="hidden" name='name' value="{{ Auth::user()->name }}">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="500" data-name="AML" data-description="Basic membership" data-locale="auto" data-currency="usd"></script> --}}
