<div 
    id="{{ $id }}"
    name="{{ $name }}"
    class="text-2xl font-semibold leading-none tracking-tight {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @endif
>
    {{ $slot }}
</div>