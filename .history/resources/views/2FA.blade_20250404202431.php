<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div
                class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">2FA</h1>
                    <h2>Scan the below QR code</h2>
                    <div class="w-fit self-center mt-[45px]">
                        <img src="{{ $qrCode }}""">
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
