<div>
    <div>
        <div class="flex justify-center m-5">
            <label class="pt-1 mr-5" for="person">Naam collega:</label>
            <input type="text" name="person" class="border" wire:model.live="liveName">
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
            <form wire:submit="checkAnswer">
                <button type="submit" class="bg-almere text-white p-1 rounded hover:bg-blue-700 mx-auto">Controleer</button>
            </form>
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
            <div class="grid grid-cols-3 p-5">
                <div class="border border-gray-300 font-bold">Naam:</div>
                <div class="border border-gray-300 font-bold">Gelegenheid:</div>
                <div class="border border-gray-300 font-bold">Status:</div>

                <div class="text-center border border-gray-300">{{ $liveName }}</div>
                <div class="text-center border border-gray-300">{{ $liveGift }}</div>
                <div class="text-center border border-gray-300">-</div>
            </div>
            <div class="mt-20">
                <div class="grid grid-cols-3 p-5">
                    <div class="border border-gray-300 font-bold">Naam:</div>
                    <div class="border border-gray-300 font-bold">Gelegenheid:</div>
                    <div class="border border-gray-300 font-bold">Status:</div>
                    <div class="text-center border border-gray-300"></div>
                    <div class="text-center border border-gray-300">40 jaar huwelijk</div>
                    <div class="text-center border border-gray-300">afgewezen</div>
                    <div class="text-center border border-gray-300"></div>
                    <div class="text-center border border-gray-300">12,5 jaar ambtenaar</div>
                    <div class="text-center border border-gray-300">toegekend 12-5-2025</div>
                    <div class="text-center border border-gray-300"></div>
                    <div class="text-center border border-gray-300">30ste verjaardag</div>
                    <div class="text-center border border-gray-300">toegekend 17-6-2025</div>
                </div>
            </div>
        </div>
    </div>
</div>
