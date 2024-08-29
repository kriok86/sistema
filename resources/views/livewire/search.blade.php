<form class="pt-2 relaitive mx-auto" autocomplete="off">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only bg-transparent ">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            {{--<svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>--}}
        </div>
        <input wire:model.live="search" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-transparent focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Buscar
        </button>
        @if ($search)
            <ul class="absolute left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                     <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                        <a href="{{route('inscripcion.inscripcion.show', $result)}}">{{$result->nombre}} {{$result->apellido}}</a>
                    </li>
                   @empty
                   <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                    No hay ninguna coincidencia
                    </li>
                @endforelse

            </ul>
        @endif
        
    </div>
</form>