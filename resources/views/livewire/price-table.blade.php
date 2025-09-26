<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="grid grid-cols-5">
        <div class="border border-gray-300 font-bold col-span-2">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold">Bedrag:</div>
        <div class="border border-gray-300 font-bold"></div>
        <div class="border border-gray-300 font-bold">Edit:</div>
        @foreach($prices as $price)
            <div class="border border-gray-300 col-span-2">{{ $price->occassion }}</div>
            <div class="border border-gray-300 text-center">{{ $price->amount }}</div>
            <div><input type="text"> placeholder</div>
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
