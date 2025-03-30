<form class="w-full" method="{{ $method }}" action='{{ $route }}'>
    @csrf
    <button type="submit" class="bg-blue-200 w-[10rem] h-[2rem] rounded-[5px] shadow-sm mt-[10px] active:bg-blue-500 text-black">{{ $text }}</button>
</form>
