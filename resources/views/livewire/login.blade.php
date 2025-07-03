<x-layout.layout2>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-40 w-auto" src="{{ asset('images/Almere_logo.png') }}" alt="Your Company" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login met uw gegevens:</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form wire:submit="authenticate">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email adres</label>
                    <div class="mt-2">
                        <input type="email" wire:model="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Wachtwoord</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-almere hover:text-indigo-500">Wachtwoord vergeten?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="password" wire:model="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-almere px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>
            @if(isset($loginMessage))
                <div class="text-red-500 text-center">
                    {{ $loginMessage }}
                </div>
            @endif
        </div>
    </div>
</x-layout.layout2>
