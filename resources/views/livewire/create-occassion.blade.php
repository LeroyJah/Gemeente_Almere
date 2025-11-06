<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="grid grid-cols-3 p-5">
        <div class="border border-gray-300 font-bold">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold">Bedrag:</div>
        <div class="border border-gray-300 font-bold"></div>
        <div class="border border-gray-300">
            <input type="text" maxlength="30" class="w-full" wire:model="newOccassion">
        </div>
        <div class="border border-gray-300">
            <input type="text" maxlength="3" class="w-full" wire:model="newPrice">
        </div>
        <div class="border border-gray-300 text-center">
            <button class="cursor-pointer border rounded px-1 bg-gray-200 hover:bg-gray-400 hover:text-white" wire:click="createOccassion">submit</button>
        </div>
    </div>
</div>
