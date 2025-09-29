<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="h-6 text-red-400">
        @error('updatePrice')
        <div wire:transition>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="grid grid-cols-5">
        <div class="border border-gray-300 font-bold col-span-2">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold">Bedrag:</div>
        <div class="border border-gray-300 font-bold"></div>
        <div class="border border-gray-300 font-bold">Edit:</div>
        @foreach($allPrices as $price)
            <div class="border border-gray-300 col-span-2">{{ $price->occassion }}</div>
            <div class="border border-gray-300 text-center">€{{ $price->amount }}</div>
            <div class="border border-gray-300 text-center">
                <input type="text" wire:model.live="newPrice" size="5" maxlength="2" placeholder="Edit"class="border rounded m-1">
            </div>
            <div class="border border-gray-300 text-center">
                <!-- <form wire:submit="edit">
                    <button type="submit" class="border rounded my-1 px-1 bg-gray-200 hover:bg-gray-400">
                        <input type="hidden" wire:model="currentArrayIndex" value="{{ $price->id }}">
                        <img src="{{ asset('images/gear_icon.svg') }}" alt="" width="20" height="20">
                    </button>
                </form> -->
                <button class="border rounded my-1 px-1 bg-gray-200 hover:bg-gray-400" wire:click="edit({{ $price->id }})">
                    <img src="{{ asset('images/gear_icon.svg') }}" alt="" width="20" height="20">
                </button>
            </div>
        @endforeach
    </div>
</div>
