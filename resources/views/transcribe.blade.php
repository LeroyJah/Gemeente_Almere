<x-layout.layout>
<x-slot:heading>
    Doneer nu aan de Lief & Leed pot
</x-slot:heading>
<div class="flex flex-row m-2 h-[70vh] border border-gray-200 rounded-lg">
    <div class="w-1/6 bg-white flex flex-col justify-center border border-gray-200 rounded-l-lg p-2">
        <div class="h-1/5 flex justify-center">

        </div>
        <div class="h-4/5 overflow-scroll">
            <h1 class="font-bold">Kies uw maandelijkse donatie:</h1>
            <livewire:radio/>
            <div>
                @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(isset($status))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ $status }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="w-4/6 flex flex-col bg-white p-2 border border-gray-200">
        <div class="h-1/5">

        </div>
        <div>
            <div class="flex justify-center font-bold">
                <h1>Laat uw gegevens achter:</h1>
            </div>
            <br>
            <div class="flex justify-center">
                <label for="">V.naam:</label>
                <input type="text" class="border">
            </div>
            <br>
            <div class="flex justify-center">
                <label for="">A.naam:</label>
                <input type="text" class="border">
            </div>
            <br>
            <div class="flex justify-center">
                <button class="bg-almere text-white p-1 rounded hover:bg-blue-700">
                    Versturen
                </button>
            </div>
        </div>
    </div>
    <div class="w-1/6 flex flex-col justify-center bg-white border border-gray-200 rounded-r-lg p-2 overflow-auto">
        <div class="h-1/5">

        </div>
        <div class="h-4/5">
            <h1 class="font-bold">Recente sponsors:</h1>
            <ul class="ps-2 mt-2 space-y-2 list-disc list-inside">
                <li>Hans Bouwer</li>
                <li>Klaas van de Fries</li>
                <li>Petra van Vliet</li>
                <li>Richard Bouwdewijn</li>
            </ul>
        @foreach($docs as $doc)
        <ul>
            <li>
                <form action="/download" method="post">
                    @csrf
                    {{ $doc->getFilename(); }}
                    <input type="hidden" name="path" value="{{ $doc->getFilename(); }}">
                    <button class="border border-green-400 rounded bg-green-400 hover:bg-green-600 text-white px-1 w-1/2">Download</button>
                </form>
                <form action="/deletefile" method="post">
                        @csrf
                        <input type="hidden" name="path" value="{{ 'transcript/'.$doc->getFilename(); }}">
                        <button class="border border-red-400 rounded bg-red-300 hover:bg-red-500 text-white px-1 w-1/2">Delete</button>
                    </form>
            </li>
        </ul>
        @endforeach
        </div>
    </div>
</div>
@if(isset($transcribe))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ $transcribe }}
    </div>
@endif
</x-layout.layout>
