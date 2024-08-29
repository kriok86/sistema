<x-inscripciones-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Empadronamiento de registros 
        </h2>
    </x-slot>
    <x-container class="mt-12">
        <div class="md:flex md:justify-end">
            <a href="{{route('inscripcion.inscripcion.create')}}" class="btn btn-red block w-full md:w-auto text-center">
                Cargar nueva inscripcion
            </a>
        
        </div>

        

        <div class="relative overflow-x-auto mt-4">
            
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    
                    <tr>
                        <th scope="col" class="px-6 py-3">
                                Nombre y apellido
                        </th>
                        <th scope="col" class=" px-6 py-3">
                                DNI
                        </th>
                        <th scope="col" class=" px-6 py-3 ">
                                Telefono
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado del registro
                    </th>
                        {{--<th scope="col" class="px-6 py-3">
                                Puntos Obtenidos
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Edicion
                    </th>--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registro as $registro)
                    <a href="">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$registro->nombre}}
                                {{$registro->apellido}}
                            </th>
                            <td class="px-6 py-4">
                            {{$registro->dni}}
                            </td>
                            <td class="px-6 py-4">
                            {{$registro->telefono}}
                            </td>
                            <td class="px-6 py-4">
                                @switch($registro->status->name)
                                    @case('Registrado')
                                    <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                                        {{$registro->status->name}}
                                    </span>
                                        @break
                                    @case('Permiso_Ocupacion')
                                    <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                                        {{$registro->status->name}}
                                    </span>
                                        @break
                                    @case('Adjudicacion')
                                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                        {{$registro->status->name}}
                                    </span>
                                        @break
                                    
                                        
                                @endswitch
                                
                            </td>
                            {{--<td class="px-6 py-4">
                            {{$registro->punto_id}}
                            </td>
                        
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{route('inscripcion.inscripcion.edit',$registro)}}" class="text-gray-900 whitespace-no-wrap">Editar</a>
                            </td>--}}
                        </tr>
                    </a>
                    @endforeach
                    
                    
                </tbody>
            </table>
            
        </div>


        {{--<div class="grid grid-cols-4 gap-2 ">
            <h3>Nombre</h3>
            <ul class="mt-2">
                @foreach ($registro as $registro)
                    <li class="bg-white rounded-lg shadow-lg overfolw-hidden col-span-2">
                        {{$registro->id}},{{$registro->nombre}},{{$registro->apellido}}
                    </li> 
                @endforeach
            </ul>
        </div>--}}
       
    </x-container>

</x-inscripciones-layout>