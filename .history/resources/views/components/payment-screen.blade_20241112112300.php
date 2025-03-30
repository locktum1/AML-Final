<div id="payment-options" {{ $attributes->merge(['class' => '']) }}>
    <h1>Select your payment method</h1>
    <div class="flex overflow-x-auto w-full space-x-4 justify-center">
        <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="paypal logo"></x-payment-type>
    </div>
</div>
