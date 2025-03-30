<div {{ $attributes->merge(['class' => "absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <h3 class="text-[30px] mt-[10px]">Enter your payment details</h3>
    <div class="flex flex-col items-center">
        <form action="/process-payment" method="POST" id="payment-form">
            @csrf
            <input type="hidden" name="amount" value="100">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="10000" data-name="Laravel testing" data-description="Testing" data-image="https://"></script>
        </form>
    </div>
</div>
