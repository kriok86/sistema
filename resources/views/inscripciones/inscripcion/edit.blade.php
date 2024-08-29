<x-inscripciones-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Realice las ediciones de los registros
            
        </h2>
       
       
    </x-slot>  
    <x-container class="py-8">
        {{--<form action="inscripcion.update", $registro>

        </form>--}}




        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 ">
            <aside class="col-span-1">
                <h2 class="font-semibold text-xl mb-4">Edicion del registro</h2>
                <nav>
                    <ul>
                        <li class="border-l-4 border-indigo-400 pl-3">
                           
                                Informacion del registro
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>
            <div class="col-span-1 lg:col-span-4">
                <div class="card">
                    <form action="" method="POST"> 
                        @csrf
                        @method('PUT')
                        <p class="text-2xl font-semibold">Informacion de la persona registrada</p>
                        <hr class="mt-2 mb-6">
                        <x-validation-errors/>
                        <x-validation-errors class="mb-4" />
                        <div class="mb-4">
                            <x-label class="mb-2 text-black">
                                Nombre
                            </x-label>
                            <x-input name=" nombre" value="{{old('nombre', $registro->nombre)}}" class="w-full" />
                        </div>
                        <div class="mb-4">
                            <x-label class="mb-2 text-black">
                                Apellido
                            </x-label>
                            <x-input placeholder="Ingrese el apellido" class="w-full" name="apellido" value="{{old('apellido')}}" />
                        </div>
                        <div class="mb-4 text-black">
                            <x-label class="mb-2">
                                DNI
                            </x-label>
                            <x-input placeholder="Ingrese el dni" class="w-full" name="dni" value="{{old('dni')}}" />
                        </div>
                        <div class="mb-4 text-black">
                            <x-label class="mb-2">
                                Teléfono
                            </x-label>
                            <x-input  class="w-full" name="telefono" value="{{old('telefono', $registro->telefono)}}" />
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <div >
                                
                                <x-label class="mb-1 text-black">
                                    Antigüedad de la solicitud
                                </x-label>
                                <x-select class="w-full" name="antiguedad_id" >
                                    <option value="">Seleccione una opcion</option>
                                    
                                </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                   Personas que la habitan
                                </x-label>
                               <x-select class="w-full" name="cantpersona_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Grupo familiar
                                </x-label>
                                <x-select class="w-full" name="grupofamiliar_id">
                                    <option value="">Seleccione una opcion</option>
                                    
                                </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Tenencia
                                </x-label>
                                <x-select class="w-full" name="tenencia_id">
                                    <option value="">Seleccione una opcion</option>
                                   
                                </x-select>
                            </div>                  
                            <div>
                                <x-label class="mb-1 text-black">
                                    Tipo de vivienda
                                </x-label>
                               <x-select class="w-full" name="tipovivienda_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Ubicacion de la vivienda
                                </x-label>
                               <x-select class="w-full" name="ubicacion_id" >
                                <option value="">Seleccione una opcion</option>
                               
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Ingresos
                                </x-label>
                               <x-select class="w-full" name="ingreso_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Informe financiero
                                </x-label>
                               <x-select class="w-full" name="informe_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Relacion laboral
                                </x-label>
                               <x-select class="w-full" name="trabajo_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Plan de obra
                                </x-label>
                               <x-select class="w-full" name="obra_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Residencia
                                </x-label>
                               <x-select class="w-full" name="residencia_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Estudios Superiores
                                </x-label>
                               <x-select class="w-full" name="estudiosuperior_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            <div>
                                <x-label class="mb-1 text-black">
                                    Puntos Obtenidos
                                </x-label>
                               <x-select class="w-full" name="punto_id" >
                                <option value="">Seleccione una opcion</option>
                                
                               </x-select>
                            </div>
                            
                           
                        </div>
                       
                        <div class="flex justify-end">
                            <x-button>
                              Editar inscripcion
                            </x-button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </x-container>
    
</x-inscripciones-layout>