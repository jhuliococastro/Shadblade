<div
    id="{{ $id }}"
    name="{{ $name }}"
    class="text-sm text-muted-foreground {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @else disabled="false" @endif
>
    {{ $slot }}
</div>