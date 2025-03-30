<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <h1 class="text-[35px]">Subscribe</h1>
                <h3 class="text-[20px] mt-[20px]">Subscribe today to access all of our services!</h3>
                <h5>Select from the below membership tiers.</h5>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <x-subscription-tier tier='Basic' price='£5' benefits='Access to borrowing media'></x-subscription-tier>
                    <x-subscription-tier tier='Basic' price='£5' benefits='Access to borrowing media'></x-subscription-tier>
                    <x-subscription-tier tier='Basic' price='£5' benefits='Access to borrowing media'></x-subscription-tier>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>

