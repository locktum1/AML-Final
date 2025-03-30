<button id="show-payment-options" class="mt-[10rem] shadow-lg rounded-[15px] bg-white">
    <img src="{{ $src }}" alt="{{ $alt }}" class="w-[30vw] h-[25vh] object-contain rounded-[15px]">
</button>

<div id="payment-options" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] hidden">
    <h1>Select your payment method</h1>
    <div class="flex overflow-x-auto w-full space-x-4 justify-center">
        <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo"></x-payment-type>
        <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="paypal logo"></x-payment-type>
    </div>
</div>

<script>
    document.getElementById('show-payment-options').addEventListener('click',function(){
        document.getElementById('payment-options').classList.toggle('hidden');
    })
</script>
