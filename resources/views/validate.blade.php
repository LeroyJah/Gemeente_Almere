<x-layout.layout>
<x-slot:heading>
    Controleer uw aanvraag hier
</x-slot:heading>
<h1 class="ml-2">
</h1>
<div class="m-2 h-[70vh] border border-gray-200 rounded-lg bg-white">
    <div>
        <div class="flex justify-center m-5">
            <livewire:validator/>
{{--            <button class="ml-6 p-1 border border-solid rounded bg-almere text-white hover:bg-blue-700">voeg toe</button>--}}
        </div>


            <div class="overflow-auto">
                {{--            @foreach($bedragen as $bedrag => $value)--}}
                {{--                {{ $value }}--}}
                {{--            @endforeach--}}

{{--                @foreach($bedragen as $bedrag)--}}
{{--                    {{ $bedrag }}--}}
{{--                @endforeach--}}

{{--                <ul>--}}
{{--                    @foreach(array_keys($bedragen) as $key)--}}
{{--                        <li> {{ $key }} </li>--}}
{{--                    @endforeach--}}
                </ul>
            </div>
        </div>
    </div>
</div>
</x-layout.layout>
