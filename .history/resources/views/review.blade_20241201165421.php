<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <img src="{{ asset('assets/' . $media->image) }}" alt="">
                    <div>

                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
