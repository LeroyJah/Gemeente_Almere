<x-layout.layout>
<x-slot:heading>
    Admin Dasboard
</x-slot:heading>
<div class="flex flex-row m-2 h-[70vh] border border-gray-200 rounded-lg">
    <div class="w-6/20 bg-white flex flex-col justify-center border border-gray-200 rounded-l-lg p-2">
        <div class="h-1/5 flex flex-col justify-center">
            <div class="h-1/2">
                <h1 class="text-center">Aanvraag bedragen:</h1>
            </div>
            <div class="h-1/2">
                @if(session('accepted'))
                    <div class="border border-green-600 bg-green-200 m-2 p-2 rounded">
                        {{ session('accepted') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="h-3/5 overflow-scroll p-5">
            <livewire:price-table/>
        </div>
        <div class="h-1/5 flex justify-center">
        </div>
    </div>
    <div class="w-14/20 flex flex-col bg-white p-2 border border-gray-200 overflow-auto">
        <div class="h-1/5">
            <div class="flex justify-end">
                <livewire:logout/>
            </div>
            <div>
                <h1 class="text-center">Aanvraag geschiedenis:</h1>
            </div>
        </div>
        <div class="h-3/5">
            <div class="flex justify-end mr-5">
                <livewire:update-prices/>
            </div>
            <livewire:admin-panel/>
        </div>
        <div class="h-1/5">
            <div class="text-center">Aanvraag gelegenheden:</div>
        </div>
    </div>
</div>
</x-layout.layout>
