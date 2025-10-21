@props(['request'])

<div class="container">
    <div class="card">
        <div class="card-front">

        </div>
        <div class="card-back">

        </div>
    </div>
    <button class="{{ $buttonStatus ? 'w-full text-center border border-gray-300 bg-orange-500 hover:bg-orange-200 text-white hover:cursor-pointer': 'w-full text-center border border-gray-300 hover:bg-almere hover:text-white hover:cursor-pointer'}}" wire:click="buttonIsClicked">{{ $buttonStatus ? 'goedgekeurd' : $request}}</button>
</div>
<!-- <div>
    <button class="{{ $buttonStatus ? 'w-full text-center border border-gray-300 bg-orange-500 hover:bg-orange-200 text-white hover:cursor-pointer': 'w-full text-center border border-gray-300 hover:bg-almere hover:text-white hover:cursor-pointer'}}" wire:click="buttonIsClicked">{{ $buttonStatus ? 'goedgekeurd' : $request}}</button>
</div> -->