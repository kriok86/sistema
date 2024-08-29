<x-admin-layout :breadcrumb="[
    [
        'name'=>'Dashboard',
        'url'=>'#'
    ],
    [
        'name'=>'Admin',
        
    ]
]">
    <h2>Crear nuevo rol</h2>
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{route('admin.roles.store')}}" method="POST">
            @csrf

            <x-validation-errors class=" mb-4" />
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input  class="w-full" name="name" placeholder="Ingrese el nombre del rol" value="{{old('name')}}"/>
            </div>
            <div class="mb-4">
                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label >
                                <x-checkbox name="permissions[]" value="{{$permission->id}}" :cheched="in_array($permission->id, old('permissions',[]))" />{{$permission->name}}
                            </label>
                        </li>
                    @endforeach
                </ul>

            </div>
            <x-button class="btn bg-green-600 hover:bg-green-700">
                Crear Rol
            </x-button>
        </form>
    </div>
    {{--<div class="card">
        <form action="{{route('admin.roles.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <x-label class="mb-2 text-black">
                    Nombre
                </x-label>
                <x-input placeholder="Ingrese el nombre" class="w-full" name="" value="{{old('nombre')}}" />
            </div>      
            <strong>PERMISOS</strong>
            @foreach ($permissions as $permissions)
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> 
                    {{$permissions->name}}
                </label>
            </div>
            
            @endforeach
            <button class="btn btn-green block w-full md:w-auto text-center" type="submit">Crear Rol</button>
        </form>
    </div>--}}

    
</x-admin-layout>