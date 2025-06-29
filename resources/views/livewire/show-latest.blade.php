<div>
    <div class="mt-15 border border-gray-200 rounded-lg bg-white p-5">
        <h1 class="ml-5">Recente aanvragen:</h1>
        <div class="grid grid-cols-4 p-5">
            <div class="border border-gray-300 font-bold">Naam:</div>
            <div class="border border-gray-300 font-bold">Gelegenheid:</div>
            <div class="border border-gray-300 font-bold">Bedrag:</div>
            <div class="border border-gray-300 font-bold">Status:</div>
            @if($latest)
                <div class="text-center border border-gray-300">{{ $latest->name }}</div>
                <div class="text-center border border-gray-300">{{ $latest->occassion }}</div>
                <div class="text-center border border-gray-300">€{{ $latest->amount }}</div>
                <div class="text-center border border-gray-300">{{ $latest->status }}</div>
            @endif
        </div>
    </div>
</div>
