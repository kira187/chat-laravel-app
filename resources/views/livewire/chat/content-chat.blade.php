<div class="w-full border-l border-gray-700">
    <div class="flex items-center bg-gray-700 py-3 ml-2">
        <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('js/icon.jpg')}}" alt="{{ Auth::user()->name }}" />
        <h3 class="text-white font-semibold text-base ml-3">Misael</h3>
    </div>
    <div class="bg-gray-800 p-10" style="height: 850px;">
        <ul>
            <li class="flex justify-start">
                <div class="bg-gray-700 p-3 rounded relative" style="max-height: 300px;">
                    <div class="text-white text-base"> Como haas estado? </div>
                    <span class="text-white text-sm">10:30 pm</span>
                    
                    <div class="absolute top-0 " 
                    style="left: -25px;
                    border-bottom: 15px solid transparent;
                    border-right: 15px solid #374151;
                    border-left: 15px solid transparent;"></div>
                </div>
            </li>
        </ul>
    </div>

    @livewire('chat.message-input')
</div>
