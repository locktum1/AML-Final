<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <img src="{{ asset('assets/' . $media->image) }}" alt="">
                    <div>
                        <h1 class="text-[25px] pb-[20px]">{{ $media->title }}</h1>
                        <h2>{{ $media->author }}</h2>
                        <h2>Published on: {{ $media->publish_date }}</h2>
                        <h2>{{ $media->description }}</h2>
                        @if ($borrowedBefore)
                        <form class="w-full" method="{{ $method }}" action='{{ $route }}'>
                            @if ($csrf == true)
                                @csrf
                            @endif

                                <button type="submit" class="font-mono text-[30px] w-full">
                                    {{ $name }}
                                </button>
                            </li>
                        </form>

                        <a href="review"><x-button text='Review'></x-button></a>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
