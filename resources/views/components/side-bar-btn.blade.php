<form class="w-full" method="{{ $method }}" action='{{ $route }}'>
    @if ($csrf == true)
        @csrf
    @endif

    <li class="mx-auto bg-gray-700 w-full h-[5rem] mb-[10px] flex items-center justify-center">
        <button type="submit" class="font-mono text-[30px] w-full">
            {{ $name }}
        </button>
    </li>
</form>
