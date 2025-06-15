<x-layout.layout>
<x-slot:heading>
    Controleer uw aanvraag hier
</x-slot:heading>
<h1 class="ml-2">
</h1>
<div class="m-2 h-[70vh] border border-gray-200 rounded-lg bg-white">
    <div>
        <div class="flex justify-center m-5">
            <label for="person">Naam collega:</label>
            <input type="text" name="person" class="border">
        </div>
        <div class="flex flex-row ">
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <h1 class="font-bold">Verjaardagen:</h1>
                        <select name="" id="">
                            <option value="">30ste verjaardag</option>
                            <option value="">40ste verjaardag</option>
                            <option value="">50ste verjaardag</option>
                            <option value="">60ste verjaardag</option>
                            <option value="">65ste verjaardag</option>
                        </select>
                </div>
            </div>
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <div class="h-2/5">
                        <h1 class="font-bold">Huwelijk:</h1>
                        <select name="" id="">
                            <option value="">12,5 jaar huwelijk</option>
                            <option value="">25 jaar huwelijk</option>
                            <option value="">40 jaar huwelijk</option>
                        </select>
                    </div>
                    <br>
                    <div class="flex justify-center">
                        <button class="bg-almere text-white p-1 rounded hover:bg-blue-700">Controleer</button>
                    </div>
                </div>
            </div>
            <div class="w-1/3 p-2 flex justify-center">
                <div>
                    <h1 class="font-bold">Jaren ambtenaar:</h1>
                    <select name="" id="">
                        <option value="">12,5 jaar</option>
                        <option value="">25 jaar</option>
                        <option value="">40 jaar</option>
                    </select>
                </div>
            </div>
        </div>
        <div>
{{--            @foreach($bedragen as $bedrag => $value)--}}
{{--                {{ $value }}--}}
{{--            @endforeach--}}

            @foreach($bedragen as $bedrag)
                {{ $bedrag }}
            @endforeach

            <ul>
                @foreach(array_keys($bedragen) as $key)
                   <li> {{ $key }} </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</x-layout.layout>
