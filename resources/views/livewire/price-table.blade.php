<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="grid grid-cols-2">
        <div class="border border-gray-300 font-bold">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold">Bedrag:</div>
        @foreach($prices as $price)
            <div class="border border-gray-300">{{ $price->occassion }}</div>
            <div class="border border-gray-300 text-center">{{ $price->amount }}</div>
        @endforeach
    </div>
</div>
