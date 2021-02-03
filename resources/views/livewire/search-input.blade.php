<div class="border-b border-gray-700">
    <div class="mx-3 my-3">
        <div class="relative text-gray-200 focus-within:text-gray-500">
            <span class="absolute insert-y-1 left-0 ml-3 mt-3 flex items-center">                
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input wire:model.debounce.500ms="search" class="rounded-full pl-10 py-2 w-full outline-none focus:outline-none bg-gray-700 focus:bg-white" type="search" placeholder="Busca a tus amigos">
        </div>
    </div>

    @if (strlen($this->search) > 0)
        <h2 class="text-base text-white foont-bold ml-3">Usuarios</h2>
        @forelse ($users as $user)
            <a href="{{ route('chat', ['id' => $user->id ]) }}" class="flex py-3 px-2 hover:bg-gray-700">
                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('js/icon.jpg')}}" alt="{{ Auth::user()->name }}" />
                <h3 class="text-white font-semibold text-base ml-2">{{ $user->name }}</h3>
            </a>
        @empty
            <div class="text-base text-white foont-bold ml-3 text-center w-full mb-3"> No se encontraron resultados</div>
        @endforelse
    @endif
</div>
