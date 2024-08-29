<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/porta.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-semibold  text-2xl text-justify">
                    Aqui podras ver el reempadronamiento de las solicitudes de terrenos y/o casas
                   </h1>
                   
                    @livewire('search')
                
            </div>
           
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">
            CONTENIDO
        </h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    
                    <tr>
                        <th scope="col" class="px-4 py-2">
                                Nombre y apellido
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado del registro
                    </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro) 
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         {{$registro->nombre}}
                           {{$registro->apellido}}
                         </th>
                         <td class="px-6 py-4">
                         {{$registro->status->name}}
                         </td>
                                                
                    </tr>
                   
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
</x-app-layout>
