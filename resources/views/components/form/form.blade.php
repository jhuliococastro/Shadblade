<form 
    id="{{ $id }}"
    @if($class) class="{{ $class }}" @endif
    @if($style) style="{{ $style }}" @endif
    @if($submit !== '')
        @if($framework === 'livewire')
            wire:submit="{{ $submit }}"
        @endif
    @endif
>
    {{ $slot }}
</form>