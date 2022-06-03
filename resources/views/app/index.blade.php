<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        {{-- CDN alpine js --}}
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <main class="bg-zinc-800 h-screen w-full flex">
            <div class="h-full w-full basis-[30%] border-r border-zinc-600">
                <header class="py-3 px-5 flex items-center justify-between ">
                    <div class="w-8 h-8 rounded-full bg-white">
                        <img src="#" alt="" class="w-full h-full object-cover rounded-full">
                    </div>
                    <div class="flex items-center gap-6 text-zinc-400">
                        {{-- status --}}
                        <svg viewBox="0 0 24 24" class="w-6 h-6 cursor-pointer">
                            <path fill="currentColor" d="M12 20.664a9.163 9.163 0 0 1-6.521-2.702.977.977 0 0 1 1.381-1.381 7.269 7.269 0 0 0 10.024.244.977.977 0 0 1 1.313 1.445A9.192 9.192 0 0 1 12 20.664zm7.965-6.112a.977.977 0 0 1-.944-1.229 7.26 7.26 0 0 0-4.8-8.804.977.977 0 0 1 .594-1.86 9.212 9.212 0 0 1 6.092 11.169.976.976 0 0 1-.942.724zm-16.025-.39a.977.977 0 0 1-.953-.769 9.21 9.21 0 0 1 6.626-10.86.975.975 0 1 1 .52 1.882l-.015.004a7.259 7.259 0 0 0-5.223 8.558.978.978 0 0 1-.955 1.185z"></path>
                        </svg>
                        {{-- message --}}
                        <svg viewBox="0 0 24 24" class="w-6 h-6 cursor-pointer">
                            <path fill="currentColor" d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z"></path>
                        </svg>
                        {{-- menu --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </div>
                </header>
                <livewire:search />
                <div class="w-full h-[calc(100%-7rem)] bg-zinc-900 scrollbar-thin scrollbar-track-zinc-900 scrollbar-thumb-zinc-500 overflow-y-scroll">
                    @for ($i = 0; $i < 5; $i++)
                        <x-card
                        :img="'https://source.unsplash.com/500x500/?sakura'"
                        :title="'title'.$i+1"
                        :excerpt="'lorem ipsum syalala'"
                        :time="'Yesterday'"
                        :unread="'3'"
                        :mute="'false'"
                        :status="'false'"
                        :type="'chat'"
                        />
                    @endfor
                </div>
            </div>
        </main>

        @livewireScripts
    </body>
</html>
