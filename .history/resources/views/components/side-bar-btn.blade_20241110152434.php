<form class="w-full" method="{{ $method }}" action='{{ $route }}'>
    @if ($includeCSRFToken)
        @csrf
    @endif

    <button type="submit" class="font-mono text-[30px] w-full">
        {{ $name }}
    </button>
</form>
