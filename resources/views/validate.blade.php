<x-layout.layout>
<x-slot:heading>
    Controleer uw aanvraag hier
</x-slot:heading>
<h1 class="ml-2">
</h1>
<div class="m-2 border border-gray-200 rounded-lg bg-white">
    <div>
        <div class="m-5">
            <livewire:validator :bedragen="$bedragen"/>
        </div>
    </div>
</div>
<livewire:show-latest/>
</x-layout.layout>
