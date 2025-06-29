<x-layout.layout>
<x-slot:heading>
    Admin Dasboard
</x-slot:heading>
<div class="flex flex-row m-2 h-[70vh] border border-gray-200 rounded-lg">
    <div class="w-2/8 bg-white flex flex-col justify-center border border-gray-200 rounded-l-lg p-2">
        <div class="h-1/5 flex justify-center">
            <h1>Aanvraag bedragen:</h1>
        </div>
        <div class="h-4/5 overflow-scroll p-5">
            <div class="grid grid-cols-2">
                <div class="border border-gray-300 font-bold">Gelegenheid:</div>
                <div class="border border-gray-300 font-bold">Bedrag:</div>
                <div class="border border-gray-300">geboorte</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">ziek</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">ziek 3 weken</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">ziek 3 maanden</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">ziekenhuis opname</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">12,5 jaar huwelijk</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">25 jaar huwelijk</div>
                <div class="border border-gray-300 text-center">25</div>
                <div class="border border-gray-300">40 jaar huwelijk</div>
                <div class="border border-gray-300 text-center">40</div>
            </div>
        </div>
    </div>
    <div class="w-6/8 flex flex-col bg-white p-2 border border-gray-200">
        <div class="h-1/5">
            <h1 class="text-center">Aanvraag geschiedenis:</h1>
        </div>
        <div class="h-4/5">
            <livewire:admin-panel :requests="$requests"/>
        </div>
    </div>
</div>
</x-layout.layout>
