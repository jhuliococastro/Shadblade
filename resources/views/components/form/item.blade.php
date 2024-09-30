<div 
    id="{{ $id }}"
    class="grid gap-2 {{ $class }}"
    @if($style) style="{{ $style }}" @endif
>
    {{ $slot }}
</div>