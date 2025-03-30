<div {{ $attributes->merge(['class' => 'absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col']) }} >
    <h1 class="text-[50px]">{{ $tier }}</h1>
    <h2 class="text-[40px]">{{ $price }}</h2>
    <h3 class="text-[30px]">Select your payment method</h3>
    <div class="flex mx-auto overflow-x-auto w-[90%] space-x-4 items-center justify-center">
        <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="paypal logo"></x-payment-type>
    </div>
</div>
</main>
