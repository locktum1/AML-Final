<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">Reviews</h1>
                    <ul>
                        @forelse($reviews as $review)
                        <li class="flex items-center justify-between mb-4 max-w-full">
                            <h2 class="text-[1.2rem] break-words max-w-[100%] text-left max-w-[95%]">Media: {{ $review->media->title }} - Posted by: user_id_{{ $review->user_id }} - Rating: {{ $review->rating }} - Review: {{ $review->review }} - {{ $review->published_on }}</h2>
                            <button class="bg-green-600 flex-shrink-0 rounded-[15px] w-[5rem] h-[2rem]" action='{{ $route }}>Approve</button>
                        </li>
                        @empty
                        <li>
                            <h2 class="text-[1.2rem]">
                                No reviews to approve.
                            </h2>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
