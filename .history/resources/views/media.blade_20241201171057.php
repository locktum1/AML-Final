<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div>
                <div class="flex overflow-x-auto w-full space-x-4 justify-center">
                    <img src="{{ asset('assets/' . $media->image) }}" alt="">
                    <div id="mediaInfo">
                        <h1 class="text-[25px] pb-[20px]">{{ $media->title }}</h1>
                        <h2>{{ $media->author }}</h2>
                        <h2>Published on: {{ $media->publish_date }}</h2>
                        <h2>{{ $media->description }}</h2>
                        @if ($borrowedBefore)
                        <button></button>
                        @endif
                    </div>
                    <div id="reviewWindow">
                        <x-review-window class="hidden"></x-review-window>
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>

<script>
    public function ShowReviewWindow(){
        var reviewWindow = document.getElementById("reviewWindow");

        reviewWindow.classList.remove("hidden")
    }
</script>
