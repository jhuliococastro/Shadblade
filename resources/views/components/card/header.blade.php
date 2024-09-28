<div 
    id="{{ $id }}"
    name="{{ $name }}"
    class="flex flex-col gap-y-1.5 p-6 {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @endif
>
    {{ $slot }}
</div>