@props(['request'])

<!-- card-container -->
<div class="{{ $buttonStatus ? 'group hover:cursor-pointer' : 'group hover:cursor-pointer [transform:rotateY(180deg)]'}}" wire:click="buttonIsClicked"> 
    <!-- inner-card -->
    <div class="{{ 'relative' }}">
        <!-- front-card -->
        <div class="absolute w-full text-center border border-gray-300 bg-orange-500 text-white">
            {{ 'Goedgekeurd' }}
        </div>
        <!-- back-card -->
        <div class="absolute w-full text-center border border-gray-300 bg-almere text-white">
            {{ 'In Afwachting'}}
        </div>
    </div>
</div>

<!-- <button class="{{ $buttonStatus ? 'w-full text-center border border-gray-300 bg-orange-500 hover:bg-orange-200 text-white hover:cursor-pointer': 'w-full text-center border border-gray-300 hover:bg-almere hover:text-white hover:cursor-pointer'}}" wire:click="buttonIsClicked">{{ $buttonStatus ? 'goedgekeurd' : $request}}</button> -->
    