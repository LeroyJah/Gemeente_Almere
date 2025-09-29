<div>
    <div class="grid grid-cols-5 p-5">
        <div class="border border-gray-300 font-bold">Naam:</div>
        <div class="border border-gray-300 font-bold">Gelegenheid:</div>
        <div class="border border-gray-300 font-bold">Status:</div>
        <div class="border border-gray-300 font-bold">Bedrag:</div>
        <div class="border border-gray-300 font-bold">
        </div>
        @foreach($requests as $request)
            <div class="text-center border border-gray-300">{{ $request->name }}</div>
            <div class="text-center border border-gray-300">{{ $request->occassion }}</div>
            <div class="text-center border border-gray-300 hover:bg-almere hover:text-white hover:cursor-pointer">{{ $request->status }}</div>
            <div class="text-center border border-gray-300">€{{ $request->amount }}</div>
            <div class="text-center border border-gray-300">
                <button class="cursor-pointer border border-red-500 rounded px-1 bg-red-300 hover:bg-red-500 text-white" wire:click="delete({{ $request->id }})"wire:confirm="Weet u zeker dat u deze aanvraag wilt verwijderen?">Delete</button>
            </div>
        @endforeach
    </div>
</div>
