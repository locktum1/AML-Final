<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col">
                    <h1 class="text-[3rem]">Reviews</h1>
                    <ul>
                        @forelse($reviews as $review)
                        <li>
                            <h2 class="text-[1.2rem]">Media: {{ $review->user_id }} Posted by: {{ $review->user_id }} - Rating: {{ $review->rating }} - Review: {{ $review->review }} - {{ $review->published_on }}</h2>
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
