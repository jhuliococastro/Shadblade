<label 
    id="{{ $id }}"
    name="{{ $name }}"
    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 {{ $class }}"
    @if($style) style="{{ $style }}" @endif
>
    {{ $slot }}
</label>