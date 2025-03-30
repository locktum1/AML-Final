<li class="mx-auto bg-gray-700 w-full h-[5vh] mb-[10px] flex items-center justify-center">
    <form action="{{ route('logout') }}" method="POST" class="w-full">
        @csrf
        <button type="submit" class="w-full py-2 text-white bg-gray-700 hover:bg-gray-600">
            Sign Out
        </button>
    </form>
</li>
