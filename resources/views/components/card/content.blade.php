<div 
    id="{{ $id }}"
    name="{{ $name }}"
    class="p-6 pt-0 {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @endif
>
    {{ $slot }}
</div>