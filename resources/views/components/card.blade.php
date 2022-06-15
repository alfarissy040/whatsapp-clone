<div class="card" 
x-data 
@click="$store.chatPanel.chatOn({ title: '{{ $title }}', status: '{{ $status ? 'Online' : 'last seen today at 5:19 PM' }}' })">
    <div class="card__img">
        <img src="{{ $img }}" alt="">
    </div>
    <div class="card__content">
        <div class="card__content__head">
            <h1>{{ $title }}</h1>
            <small class="text-xs {{ !$status ? 'text-emerald-500':'text-zinc-500' }}">{{ $time }}</small>
        </div>
        <div class="card__content__body">
            <small class="text-xs {{ !$status ? 'text-white':'text-zinc-500' }}">{{ $excerpt }}</small>
            <div class="card__content__body__tools">
                {{-- unread msg count --}}
                @if (!$status)
                    <div class="w-5 h-5 text-xs rounded-full flex items-center justify-center bg-emerald-500 text-zinc-800 font-medium">
                        {{ $unread }}
                    </div>
                @endif
                {{-- mute --}}
                @if ($mute)
                    <svg viewBox="0 0 16 20" class="w-5 h-5 text-zinc-400 ml-1">
                        <path fill="currentColor" d="M11.52 9.206c0-1.4-.778-2.567-1.944-3.111v1.711L11.52 9.75v-.544zm1.945 0c0 .7-.156 1.4-.389 2.022l1.167 1.167c.544-.933.778-2.1.778-3.267 0-3.344-2.333-6.144-5.444-6.844v1.633c2.255.778 3.888 2.8 3.888 5.289zm-11.433-7L1.02 3.217l3.656 3.656H1.02v4.667h3.111l3.889 3.889v-5.211l3.344 3.344c-.544.389-1.089.7-1.789.933v1.633a6.64 6.64 0 0 0 2.878-1.4l1.556 1.556 1.011-1.011-7-7-5.988-6.067zm5.988.778L6.387 4.617 8.02 6.25V2.984z"></path>
                    </svg>
                @endif
                {{-- menu --}}
                <svg xmlns="http://www.w3.org/2000/svg" id="card_menu" class="h-5 w-5 cursor-pointer text-zinc-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>