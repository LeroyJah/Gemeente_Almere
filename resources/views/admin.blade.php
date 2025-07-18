<x-layout.layout>
<x-slot:heading>
    Admin Dasboard
</x-slot:heading>
<div class="flex flex-row m-2 h-[70vh] border border-gray-200 rounded-lg">
    <div class="w-2/8 bg-white flex flex-col justify-center border border-gray-200 rounded-l-lg p-2">
        <div class="h-1/5 flex justify-center">
            <h1>Aanvraag bedragen:</h1>
        </div>
        <div class="h-3/5 overflow-scroll p-5">
            <livewire:price-table/>
        </div>
        <div class="h-1/5 flex justify-center">
        </div>
    </div>
    <div class="w-6/8 flex flex-col bg-white p-2 border border-gray-200">
        <div class="h-1/5">
            <div class="flex justify-end">
                <livewire:logout/>
            </div>
            <div>
                <h1 class="text-center">Aanvraag geschiedenis:</h1>
            </div>
        </div>
        <div class="h-4/5">
            <livewire:admin-panel/>
        </div>
    </div>
</div>
</x-layout.layout>
