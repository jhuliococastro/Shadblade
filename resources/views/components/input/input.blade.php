<input 
    id="{{ $id }}"
    name="{{ $name }}"
    type="{{ $type }}"
    class="border border-gray-300 rounded-md py-2 px-4 w-full {{ $class }}"
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @endif
/>