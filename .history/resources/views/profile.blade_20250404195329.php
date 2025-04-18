<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div
                class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">Profile</h1>
                    <h2>Hello {{ $user->name }}!</h2>
                    <div class="w-fit self-center">
                        <h4 class="text-[20px]">Want more protection?</h4>
                        <form method="POST" action="{{ route('setup.2fa') }}">
                            @csrf
                            <button class="text-[30px]" type="submit">
                                Enable 2FA
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
