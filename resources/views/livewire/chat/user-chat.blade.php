<ul class="overflow-y-auto h-3/4">
    <li class="border-b border-gray-700 hover:bg-gray-700">
        <a href="{{ route('chat', ['id' => 1]) }}" class="flex py-3 px-2">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('js/icon.jpg')}}" alt="{{ Auth::user()->name }}" />
            <div class="w-full pl-2">
                <div class="flex justify-between">
                    <h3 class="text-white font-semibold text-base">Misael</h3>
                    <span class="text-white text-sm">Hace un momento</span>
                </div>
                <div class="text-white text-sm">Como has estado</div>
            </div>
        </a>
    </li>
    <li class="border-b border-gray-700 hover:bg-gray-700">
        <a href="#" class="flex py-3 px-2">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('js/icon.jpg')}}" alt="{{ Auth::user()->name }}" />
            <div class="w-full pl-2">
                <div class="flex justify-between">
                    <h3 class="text-white font-semibold text-base">Misael</h3>
                    <span class="text-white text-sm">Hace un momento</span>
                </div>
                <div class="text-white text-sm">Como has estado</div>
            </div>
        </a>
    </li>
</ul>