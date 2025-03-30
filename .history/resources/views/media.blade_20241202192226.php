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
                        <button onclick="ShowReviewWindow()" class="bg-blue-200 w-[10rem] h-[2rem] rounded-[5px] shadow-sm mt-[10px] active:bg-blue-500 text-black">Review</button>
                        @endif
                    </div>
                    <div id="reviewWindow" class="hidden">
                        <x-review-window mediaid="{{ $media->id }}"></x-review-window>
                    </div>
                    @if ($errors->any())
                    <script>
                        document.addEventListener('DOMContentLoaded', function(){
                            document.querySelector('#reviewWindow').classList.remove('hidden')
                        })
                    </script>
                    @endif
                    @if (@session('success'))
                        <script>
                            alert("{{ session('success') }}")
                        </script>
                    @endif
                    <div class="flex flex-col border-2 border-white rounded-[15px] mt-[10px]">
                        <h1 class="text-[2rem]">Reviews</h1>
                        <h3 class="text-[0.5rem]">Test review</h3>
                        <h3 class="text-[0.5rem]">Test review</h3>
                        <h3 class="text-[2rem]">Test review</h3>
                        <h3 class="text-[2rem]">Test review</h3>
                    </div>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>

<script>
    function ShowReviewWindow(){
        var reviewWindow = document.getElementById("reviewWindow");

        reviewWindow.classList.remove("hidden")
    }
</script>
