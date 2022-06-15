<div class="w-full h-full relative" x-data>
    <header class="py-2 px-5 flex items-center justify-between border-b border-emerald-500 fixed top-0 w-[70%] gap-x-4 bg-zinc-800">
        <div class="flex items-center gap-x-4 cursor-pointer w-full">
            {{-- img grup or contact --}}
            <div class="w-9 h-9 rounded-full bg-white overflow-clip">
                <img src="https://source.unsplash.com/400x400/?space" alt="" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col">
                {{-- contact/grup name --}}
                <h1 class=" text-white"  x-text="$store.chatPanel.chat.title"></h1>
                {{-- status --}}
                <small class="text-zinc-500 text-sm"  x-text="$store.chatPanel.chat.status"></small>
            </div>
        </div>
        {{-- tools --}}
        <div class="flex items-center text-zinc-400 gap-x-4">
            {{-- search --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            {{-- menu --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </div>

    </header>
    <div class="h-full overflow-y-scroll scrollbar-thin scrollbar-track-zinc-900 scrollbar-thumb-zinc-500"></div>
    <footer class="w-[70%] flex items-center fixed bottom-0 bg-zinc-700 py-3 px-5 gap-x-4 text-zinc-400"
    x-data="{ emot:false, msg: '' }">
        {{-- tools --}}
        <div class="flex items-center gap-x-4">
            {{-- dummy smile --}}
            <button 
            x-show="!emot"
            @click="emot = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            {{-- close --}}
            <button @click="emot = false" x-show="emot">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="block relative"
            x-show="emot"
            x-transition:enter="transition ease-in-out 350"
            x-transition:enter-start="w-0"
            x-transition:enter-end="w-full"
            x-transition:leave="transition ease-in-out 500"
            x-transition:leave-start="w-fit"
            x-transition:leave-end="w-0">
                <div class="flex items-center gap-x-4 origin-left overflow-hidden relative">
                    {{-- smile --}}
                    <button
                    class="relative"
                    x-show="emot"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="relative -translate-x-4 opacity-0"
                    x-transition:enter-end="relative translate-x-0 opacity-100"
                    x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="relative translate-x-0 opacity-100"
                    x-transition:leave-end="relative -translate-x-4 opacity-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button
                    class="relative"
                    x-show="emot"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="relative -translate-x-8 opacity-0"
                    x-transition:enter-end="relative translate-x-0 opacity-100"
                    x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="relative translate-x-0 opacity-100"
                    x-transition:leave-end="relative -translate-x-8 opacity-0">
                    {{-- gif --}}
                    <button
                    class="relative"
                    x-show="emot"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="relative -translate-x-12 opacity-0"
                    x-transition:enter-end="relative translate-x-0 opacity-100"
                    x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="relative translate-x-0 opacity-100"
                    x-transition:leave-end="relative -translate-x-12 opacity-0">
                        <svg viewBox="0 0 24 24" class="h-6 w-6">
                            <path fill="currentColor" d="m13.177 12.013-.001-.125v-1.053c0-.464 0-.827-.002-1.178a.723.723 0 0 0-.557-.7.715.715 0 0 0-.826.4c-.05.115-.072.253-.073.403-.003 1.065-.003 1.917-.002 3.834v.653c0 .074.003.136.009.195a.72.72 0 0 0 .57.619c.477.091.878-.242.881-.734.002-.454.003-.817.002-1.633l-.001-.681zm-3.21-.536a35.751 35.751 0 0 0-1.651-.003c-.263.005-.498.215-.565.48a.622.622 0 0 0 .276.7.833.833 0 0 0 .372.104c.179.007.32.008.649.005l.137-.001v.102c-.001.28-.001.396.003.546.001.044-.006.055-.047.081-.242.15-.518.235-.857.275-.767.091-1.466-.311-1.745-1.006a2.083 2.083 0 0 1-.117-1.08 1.64 1.64 0 0 1 1.847-1.41c.319.044.616.169.917.376.196.135.401.184.615.131a.692.692 0 0 0 .541-.562c.063-.315-.057-.579-.331-.766-.789-.542-1.701-.694-2.684-.482-2.009.433-2.978 2.537-2.173 4.378.483 1.105 1.389 1.685 2.658 1.771.803.054 1.561-.143 2.279-.579.318-.193.498-.461.508-.803.014-.52.015-1.046.001-1.578-.009-.362-.29-.669-.633-.679zM18 4.25H6A4.75 4.75 0 0 0 1.25 9v6A4.75 4.75 0 0 0 6 19.75h12A4.75 4.75 0 0 0 22.75 15V9A4.75 4.75 0 0 0 18 4.25zM21.25 15A3.25 3.25 0 0 1 18 18.25H6A3.25 3.25 0 0 1 2.75 15V9A3.25 3.25 0 0 1 6 5.75h12A3.25 3.25 0 0 1 21.25 9v6zm-2.869-6.018H15.3c-.544 0-.837.294-.837.839V14.309c0 .293.124.525.368.669.496.292 1.076-.059 1.086-.651.005-.285.006-.532.004-1.013v-.045l-.001-.46v-.052h1.096l1.053-.001a.667.667 0 0 0 .655-.478c.09-.298-.012-.607-.271-.757a.985.985 0 0 0-.468-.122 82.064 82.064 0 0 0-1.436-.006h-.05l-.523.001h-.047v-1.051h1.267l1.22-.001c.458-.001.768-.353.702-.799-.053-.338-.35-.56-.737-.561z"></path>
                        </svg>
                    </button
                    class="relative"
                    x-show="emot"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="relative -translate-x-16 opacity-0"
                    x-transition:enter-end="relative translate-x-0 opacity-100"
                    x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="relative translate-x-0 opacity-100"
                    x-transition:leave-end="relative -translate-x-16 opacity-0">
                    {{-- sticker --}}
                    <button
                    class="relative"
                    x-show="emot"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="relative -translate-x-20 opacity-0"
                    x-transition:enter-end="relative translate-x-0 opacity-100"
                    x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="relative translate-x-0 opacity-100"
                    x-transition:leave-end="relative -translate-x-20 opacity-0">
                        <svg viewBox="0 0 24 24" class="h-6 w-6">
                            <path fill="currentColor" d="M21.799 10.183c-.002-.184-.003-.373-.008-.548-.02-.768-.065-1.348-.173-1.939a6.6 6.6 0 0 0-.624-1.87 6.24 6.24 0 0 0-1.171-1.594 6.301 6.301 0 0 0-1.614-1.159 6.722 6.722 0 0 0-1.887-.615c-.59-.106-1.174-.15-1.961-.171-.318-.008-3.607-.012-4.631 0-.798.02-1.383.064-1.975.17a6.783 6.783 0 0 0-1.888.616 6.326 6.326 0 0 0-2.785 2.753 6.658 6.658 0 0 0-.623 1.868c-.107.591-.152 1.186-.173 1.941-.008.277-.016 2.882-.016 2.882 0 .52.008 1.647.016 1.925.02.755.066 1.349.172 1.938.126.687.33 1.3.624 1.871.303.59.698 1.126 1.173 1.595a6.318 6.318 0 0 0 1.614 1.159 6.786 6.786 0 0 0 2.146.656c.479.068.833.087 1.633.108.035.001 2.118-.024 2.578-.035a6.873 6.873 0 0 0 4.487-1.811 210.877 210.877 0 0 0 2.928-2.737 6.857 6.857 0 0 0 2.097-4.528l.066-1.052.001-.668c.001-.023-.005-.738-.006-.755zm-3.195 5.92c-.79.757-1.784 1.684-2.906 2.716a5.356 5.356 0 0 1-2.044 1.154c.051-.143.116-.276.145-.433.042-.234.06-.461.067-.74.003-.105.009-.789.009-.789.013-.483.042-.865.107-1.22.069-.379.179-.709.336-1.016.16-.311.369-.595.621-.844.254-.252.542-.458.859-.617.314-.158.65-.268 1.037-.337a8.127 8.127 0 0 1 1.253-.106s.383.001.701-.003a4.91 4.91 0 0 0 .755-.066c.186-.034.348-.105.515-.169a5.35 5.35 0 0 1-1.455 2.47zm1.663-4.757a1.128 1.128 0 0 1-.615.859 1.304 1.304 0 0 1-.371.119 3.502 3.502 0 0 1-.52.043c-.309.004-.687.004-.687.004-.613.016-1.053.049-1.502.129a5.21 5.21 0 0 0-1.447.473 4.86 4.86 0 0 0-2.141 2.115 5.088 5.088 0 0 0-.479 1.434 9.376 9.376 0 0 0-.131 1.461s-.006.684-.008.777c-.006.208-.018.37-.043.511a1.154 1.154 0 0 1-.626.86c-.072.036-.168.063-.37.098-.027.005-.25.027-.448.031-.021 0-1.157.01-1.192.009-.742-.019-1.263-.046-1.668-.126a5.27 5.27 0 0 1-1.477-.479 4.823 4.823 0 0 1-2.127-2.1 5.141 5.141 0 0 1-.482-1.453c-.09-.495-.13-1.025-.149-1.71a36.545 36.545 0 0 1-.012-.847c-.003-.292.005-3.614.012-3.879.02-.685.061-1.214.151-1.712a5.12 5.12 0 0 1 .481-1.45c.231-.449.53-.856.892-1.213.363-.36.777-.657 1.233-.886a5.26 5.26 0 0 1 1.477-.479c.503-.09 1.022-.129 1.74-.149a342.03 342.03 0 0 1 4.561 0c.717.019 1.236.058 1.737.148a5.263 5.263 0 0 1 1.476.478 4.835 4.835 0 0 1 2.126 2.098c.228.441.385.913.482 1.453.091.499.131 1.013.15 1.712.008.271.014 1.098.014 1.235a2.935 2.935 0 0 1-.037.436z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            {{-- paper clip --}}
            <button>
                <svg viewBox="0 0 24 24" class="h-6 w-6">
                    <path fill="currentColor" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path>
                </svg>
            </button>
        </div>
        {{-- input msg --}}
        <input type="text" name="msg" id="msg" class="py-2 px-4 text-white placeholder:text-zinc-400 bg-zinc-600 rounded-md border-none w-full" placeholder="Type a message" x-model="msg">
        {{-- mic --}}
        <button x-show="msg == '' ">
            <svg viewBox="0 0 24 24" class="h-6 w-6">
                <path fill="currentColor" d="M11.999 14.942c2.001 0 3.531-1.53 3.531-3.531V4.35c0-2.001-1.53-3.531-3.531-3.531S8.469 2.35 8.469 4.35v7.061c0 2.001 1.53 3.531 3.53 3.531zm6.238-3.53c0 3.531-2.942 6.002-6.237 6.002s-6.237-2.471-6.237-6.002H3.761c0 4.001 3.178 7.297 7.061 7.885v3.884h2.354v-3.884c3.884-.588 7.061-3.884 7.061-7.885h-2z"></path>
            </svg>
        </button>
        {{-- send --}}
        <button x-show="msg != ''">
            <svg viewBox="0 0 24 24" class="h-6 w-6">
                <path fill="currentColor" d="M1.101 21.757 23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
            </svg>
        </button>
    </footer>
</div>