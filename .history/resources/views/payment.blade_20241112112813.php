<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh]">
                <h1>Select your payment method</h1>
                <div class="flex overflow-x-auto w-[90%] space-x-4 justify-center">
                    <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="paypal logo"></x-payment-type>
                    <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo"></x-payment-type>
                    <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="paypal logo"></x-payment-type>
                </div>
            </div>

        </main>
    </x-slot>
</x-base>
