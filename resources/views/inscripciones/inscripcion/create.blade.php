<x-inscripciones-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear nuevas inscripciones 
        </h2>
    </x-slot>    
    <x-container class="mt-12" width='4xl'>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="{{route('inscripcion.inscripcion.store')}}" method="POST">
                @csrf

                <h2 class="text-2xl uppercase text-center mb-2">
                    Complete la informacion para la carga de una nueva inscripcion 
                </h2>
                <x-validation-errors class="mb-4" />
                <div class="mb-4">
                    <x-label class="mb-2 text-black">
                        Nombre
                    </x-label>
                    <x-input placeholder="Ingrese el nombre" class="w-full" name="nombre" value="{{old('nombre')}}" />
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
                    <x-input placeholder="Ingrese el teléfono" class="w-full" name="telefono" value="{{old('telefono')}}" />
                </div>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    <div >
                        <x-label class="mb-1 text-black">
                            Antigüedad de la solicitud
                        </x-label>
                        <x-select class="w-full" name="antiguedad_id" >
                            <option value="">Seleccione una opcion</option>
                            @foreach ($antiguedad as $antiguedad)
                                <option value="{{$antiguedad->id}}"@selected(old('antiguedad_id')== $antiguedad->id)>{{$antiguedad->name}}</option>

                            @endforeach
                        </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                           Personas que la habitan
                        </x-label>
                       <x-select class="w-full" name="cantpersona_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($personas as $personas)
                            <option value="{{$personas->id}}"@selected(old('cantpersona_id')==$personas->id)>{{$personas->name}}</option>                            
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Grupo familiar
                        </x-label>
                        <x-select class="w-full" name="grupofamiliar_id">
                            <option value="">Seleccione una opcion</option>
                            @foreach ($familia as $familia)
                                <option value="{{$familia->id}}"@selected(old('grupofamiliar_id')==$familia->id)>{{$familia->name}}</option>                                
                            @endforeach
                        </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Tenencia
                        </x-label>
                        <x-select class="w-full" name="tenencia_id">
                            <option value="">Seleccione una opcion</option>
                            @foreach ($tenencia as $tenencia)
                                <option value="{{$tenencia->id}}"@selected(old('tenencia_id')==$tenencia->id)>{{$tenencia->name}}</option>
                            @endforeach
                        </x-select>
                    </div>                  
                    <div>
                        <x-label class="mb-1 text-black">
                            Tipo de vivienda
                        </x-label>
                       <x-select class="w-full" name="tipovivienda_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($vivienda as $vivienda)
                            <option value="{{$vivienda->id}}"@selected(old('tipovivienda_id')== $vivienda->id)>{{$vivienda->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Ubicacion de la vivienda
                        </x-label>
                       <x-select class="w-full" name="ubicacion_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($ubicacion as $ubicacion)
                            <option value="{{$ubicacion->id}}"@selected(old('ubicacion_id')== $ubicacion->id)>{{$ubicacion->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Ingresos
                        </x-label>
                       <x-select class="w-full" name="ingreso_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($ingreso as $ingreso)
                            <option value="{{$ingreso->id}}"@selected(old('ingreso_id')== $ingreso->id)>{{$ingreso->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Informe financiero
                        </x-label>
                       <x-select class="w-full" name="informe_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($informe as $informe)
                            <option value="{{$informe->id}}"@selected(old('informe_id')== $informe->id)>{{$informe->value}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Relacion laboral
                        </x-label>
                       <x-select class="w-full" name="trabajo_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($trabajo as $trabajo)
                            <option value="{{$trabajo->id}}"@selected(old('trabajo_id')== $trabajo->id)>{{$trabajo->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Plan de obra
                        </x-label>
                       <x-select class="w-full" name="obra_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($obra as $obra)
                            <option value="{{$obra->id}}"@selected(old('obra_id')== $obra->id)>{{$obra->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Residencia
                        </x-label>
                       <x-select class="w-full" name="residencia_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($residencia as $residencia)
                            <option value="{{$residencia->id}}"@selected(old('residencia_id')== $residencia->id)>{{$residencia->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Estudios Superiores
                        </x-label>
                       <x-select class="w-full" name="estudiosuperior_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($estudios as $estudios)
                            <option value="{{$estudios->id}}"@selected(old('estudiosuperior_id')== $estudios->id)>{{$estudios->name}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    <div>
                        <x-label class="mb-1 text-black">
                            Puntos Obtenidos
                        </x-label>
                       <x-select class="w-full" name="punto_id" >
                        <option value="">Seleccione una opcion</option>
                        @foreach ($punto as $punto)
                            <option value="{{$punto->id}}"@selected(old('punto_id')== $punto->id)>{{$punto->value}}</option>
                        @endforeach
                       </x-select>
                    </div>
                    
                    
                </div>
                <div class="flex">
                 
                </div>
                <div class="flex justify-center">
                    
                </div>
                <div class="flex justify-end">
                    <x-button class="rigth mr-4 bg-red-700 ">
                        VERIFICAR INSCRIPCION
                    </x-button>
                    <x-button class="justify-center mr-4 bg-yellow-400">
                        IMPRIMIR LA INSCRIPCION
                    </x-button >
                    <x-button class="bg-green-600">
                        Cargar la nueva inscripcion
                    </x-button>
                </div>
            </form>
        </div>
    </x-container>
</x-inscripciones-layout>