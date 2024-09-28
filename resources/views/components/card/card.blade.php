<div 
    id="{{ $id }}"
    name="{{ $name }}"
    class="rounded-lg border bg-card text-card-foreground shadow-sm {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @else disabled="false" @endif
>
    {{ $slot }}
</div>