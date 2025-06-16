<x-layout.layout2>
    <div class="flex justify-center">
        <x-slot:heading>
            Welkom bij de Lief&Leed aanvraag assistent
        </x-slot:heading>
    </div>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        </header>
        <div class="flex justify-center">
            <img src="{{ asset('images/stadhuis.jpg') }}" alt="" class="h-140 w-5/6 rounded relative shadow-lg z-0">
            <div class="absolute z-10 bg-almere text-white border-2 border-white rounded p-4 w-100 flex justify-center mt-20">
                Welkom {{ $namen[rand(0,10)] }}
            </div>
            <div class="grid grid-cols-3 z-10 absolute gap-14 bottom-4 slide-in">
                <div>
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">1.Aanvraag</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                            <p class="text-gray-700 text-base">
                                Voer de naam in van de persoon die u wilt verassen.
                            </p>
                        </div>
{{--                        <div class="px-6 pt-4 pb-2">--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div>
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">2.Controle</div>
                            <p class="text-gray-700 text-base">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                                </svg>
                            <div class="flex justify-center">
                                kies een pakket, het systeem controleerd of deze nog beschikbaar is.
                            </div>
                            </p>
                        </div>
{{--                        <div class="px-6 pt-4 pb-2">--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div>
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">3.Bevestiging</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                            </svg>

                            <p class="text-gray-700 text-base">
                                Als uw aanvraag is goedgekeurd zal u een bevestigings mail ontvangen.
                            </p>
                        </div>
{{--                        <div class="px-6 pt-4 pb-2">--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>--}}
{{--                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout.layout2>
