@props(['request'])

<div>
    <button class="{{ $buttonStatus ? 'bg-blue-100': 'bg-red-100'}}" wire:click="buttonIsClicked">{{ $request }}</button>
</div>
