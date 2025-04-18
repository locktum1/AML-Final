<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div
                class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">2FA</h1>
                    <h2>Enter your OTP</h2>
                    <div class="w-fit self-center mt-[45px]">
                        <form method="POST" action="{{ route('2fa.verify') }}">
                            @csrf
                            <div>
                                <label for="otp">Enter OTP:</label>
                                <input type="text" name="otp" required autofocus>
                            </div>
                            <button type="submit">Verify</button>
                        </form>
                        @if ($errors->any())
                            <div>
                                @foreach ($errors as )

                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
