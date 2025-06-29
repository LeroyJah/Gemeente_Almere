<div>
    <div>
        <div class="flex justify-center m-5">
            <label class="pt-1 mr-5" for="person">Naam collega:</label>
            {{-- Component for binding text input data onto a LiveWire variable --}}
            <input type="text" name="person" class="border" wire:model.live="liveName">
            <button class="ml-2 px-2 border rounded bg-blue-300 hover:bg-blue-700 text-white" wire:click="clearFields">clear</button>
        </div>
        <div class="flex flex-row">
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <h1 class="font-bold">Verjaardagen:</h1>
                    <select wire:model.live="liveGift">
                        <option value="30ste verjaardag">30ste verjaardag</option>
                        <option value="40ste verjaardag">40ste verjaardag</option>
                        <option value="50ste verjaardag">50ste verjaardag</option>
                        <option value="60ste verjaardag">60ste verjaardag</option>
                        <option value="65ste verjaardag">65ste verjaardag</option>
                    </select>
                </div>
            </div>
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <div class="h-2/5">
                        <h1 class="font-bold">Huwelijk:</h1>
                        <select wire:model.live="liveGift">
                            <option value="12,5 jaar huwelijk">12,5 jaar huwelijk</option>
                            <option value="25 jaar huwelijk">25 jaar huwelijk</option>
                            <option value="40 jaar huwelijk">40 jaar huwelijk</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <h1 class="font-bold">Jaren ambtenaar:</h1>
                    <select wire:model.live="liveGift">
                        <option value="12,5 jaar ambtenaar">12,5 jaar</option>
                        <option value="25 jaar ambtenaar">25 jaar</option>
                        <option value="40 jaar ambtenaar">40 jaar</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
{{--            <form wire:submit="checkAnswer" class="flex">--}}
{{--                <h1>1.</h1>--}}
{{--                <button type="submit" class="bg-yellow-400 text-white p-1 rounded hover:bg-yellow-600 mx-auto">Controleer</button>--}}
{{--            </form>--}}
        </div>
        <div class="flex justify-center">
            @if(session('status_red'))
                <div class="border border-red-600 bg-red-200 m-2 p-2 rounded">
                    {{ session('status_red') }}
                </div>
            @elseif(session('status_green'))
                <div class="border border-green-600 bg-green-200 m-2 p-2 rounded">
                    {{ session('status_green') }}
                </div>
            @endif
        </div>
        <div>
            <div class="grid grid-cols-4 p-5">
                <div class="border border-gray-300 font-bold">Naam:</div>
                <div class="border border-gray-300 font-bold">Gelegenheid:</div>
                <div class="border border-gray-300 font-bold">Bedrag:</div>
                <div class="border border-gray-300 font-bold">Status:</div>
                <div class="text-center border border-gray-300">{{ $liveName }}
                    <div class="text-red-500">
                        @error('liveName') {{ $message }} @enderror
                    </div>
                </div>
                <div class="text-center border border-gray-300">
                    {{ $liveGift }}
                    <div class="text-red-500">
                            @error('liveGift') {{ $message }} @enderror
                    </div>
                </div>
                <div class="text-center border border-gray-300">
                    @if($liveGift)
                        €{{ $bedragen[$liveGift] }}
                    @endif
                </div>
                <div class="text-center border border-gray-300">-</div>
            </div>
            {{-- LiveWire confirm message --}}
            <div class="flex justify-center">
                <div class="flex">
                    <button class="border p-1 my-1 rounded bg-almere hover:bg-blue-700 text-white" wire:click="storeRequest" wire:confirm="Weet u het zeker?">Bevestigen</button>
                </div>
                @if(session('bevestigd'))
                    <div class="border border-green-600 bg-green-200 m-2 p-2 rounded">
                        {{ session('bevestigd') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
