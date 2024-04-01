<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        <!-- Styles -->


    </head>
    <body class="font-sans antialiased p-5 bg-white">

            <x-modal name="test" title="modal_1">
                <x-slot:body>
                    <span class="">Body tag test</span>
                </x-slot:body>
            </x-modal>

            {{-- button for modal 'test' --}}
            <button x-data x-on:click="$dispatch('open-modal',{name:'test'})"
                    class="px-3 py-1 bg-teal-400 text-white rounded-md">
                        Open Modal 1
            </button>

            <x-modal name="test2" title="modal_2">
                <x-slot:body>
                    <livewire:list-my-users>
                </x-slot:body>
            </x-modal>

            {{-- button for modal 'test_2' --}}
            <button x-data x-on:click="$dispatch('open-modal',{name:'test2'})"
                    class="px-3 py-1 bg-blue-400 text-white rounded-md">
                        Open Modal 2
            </button>

            <livewire:list-my-users>

    </body>
</html>
