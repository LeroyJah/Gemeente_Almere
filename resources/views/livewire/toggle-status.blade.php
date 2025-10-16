@props(['request'])

<div>
    <button class="w-full text-center border border-gray-300 hover:bg-almere hover:text-white hover:cursor-pointer" wire:click="buttonIsClicked">{{ $buttonStatus }}</button>
</div>
