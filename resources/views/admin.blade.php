<x-layout.layout>
<x-slot:heading>
    Admin Dasboard
</x-slot:heading>
<div class="flex flex-row m-2 h-[70vh] border border-gray-200 rounded-lg">
    <div class="w-1/6 bg-white flex flex-col justify-center border border-gray-200 rounded-l-lg p-2">
        <div class="h-1/5 flex justify-center">
        </div>
        <div class="h-4/5 overflow-scroll">
        </div>
    </div>
    <div class="w-4/6 flex flex-col bg-white p-2 border border-gray-200">
        <livewire:admin-panel :requests="$requests"/>
    </div>
    <div class="w-1/6 flex flex-col justify-center bg-white border border-gray-200 rounded-r-lg p-2 overflow-auto">
        <div class="h-1/5">
        </div>
        <div class="h-4/5">
        </div>
    </div>
</div>
</x-layout.layout>
