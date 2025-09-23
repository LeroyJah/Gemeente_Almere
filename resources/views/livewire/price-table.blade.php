<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="grid grid-cols-5">
        <div class="border border-gray-300 font-bold col-span-2">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold col-span-2">Bedrag:</div>
        <div class="border border-gray-300 font-bold">Edit:</div>
        @foreach($prices as $price)
            <div class="border border-gray-300 col-span-2">{{ $price->occassion }}</div>
            <div class="border border-gray-300 text-center col-span-2">{{ $price->amount }}</div>
            <div class="border border-gray-300 text-center">
                <button class="border rounded my-1 px-1 bg-gray-200 hover:bg-gray-400">
                    <img src="{{ asset('images/gear_icon.svg') }}" alt="" width="20" height="20">
                </button>
            </div>
        @endforeach
    </div>
</div>
