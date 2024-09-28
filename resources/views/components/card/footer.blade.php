<div 
    id="{{ $id }}"
    name="{{ $name }}"
    class="flex items-center p-6 pt-0 {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @else disabled="false" @endif
>
    {{ $slot }}
</div>