<input 
    id="{{ $id }}"
    name="{{ $name }}"
    type="{{ $type }}"
    class="border border-gray-300 rounded-md py-2 px-4 w-full {{ $class }}"
    @if($placeholder !== '') placeholder="{{ $placeholder }}" @endif
    @if($style) style="{{ $style }}" @endif
    @if($disabled) disabled="true" @endif
    @if($model !== '')
        @if($framework === 'livewire')
            wire:model="{{ $model }}"
        @endif
    @endif
/>