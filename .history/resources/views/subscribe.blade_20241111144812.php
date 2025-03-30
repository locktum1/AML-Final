<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <h1 class="text-[35px]">Subscribe</h1>
                <h3 class="text-[20px] mt-[20px]">Subscribe today to access all of our services!</h3>
                <h5>Select from the membership tiers below to get started.</h5>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <x-subscription-tier tier='Basic' price='£5' benefits='Borrow one media product at a time with a 1 month return window.'></x-subscription-tier>
                    <x-subscription-tier tier='Premium' price='£10' benefits='You can borrow three media products at a time with a 1 month return window.'></x-subscription-tier>
                    <x-subscription-tier tier='Premium plus' price='£25' benefits='You can borrow 10 media products at a time with a 2 month return window.'></x-subscription-tier>
                </div>
            </div>
            <div id="payment-options" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh]">
                <h1>Select your payment method</h1>
                <button>
                    <img src="{{ asset('assets/paypal.png') }}" alt="paypal logo" >
                </button>
            </div>
        </main>
    </x-slot>
</x-base>
