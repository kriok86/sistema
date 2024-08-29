<x-admin-layout :breadcrumb="[
    [
        'name'=>'Dashboard',
        'url'=>'#'
    ],
    [
        'name'=>'Admin',
        
    ]
]">
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{route('admin.roles.update', $role)}}" method="POST">
            
            @csrf

            @method('PUT')

            <x-validation-errors class=" mb-4" />
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre del rol
                </x-label>
                <x-input  class="w-full" name="name" placeholder="Ingrese el nombre del rol" value="{{old('name', $role->name)}}"/>
            </div>
            <div class="mb-4">
                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label >
                                <x-checkbox name="permissions[]" value="{{$permission->id}}" :cheched="in_array($permission->id, old('permissions',$role->permissions->pluck('id')->toArray()))" />{{$permission->name}}
                            </label>
                        </li>
                    @endforeach
                </ul>

            </div>
            
                <x-button class="btn bg-green-600 hover:bg-green-700">
                    Actualizar Rol
                </x-button>
               
            
        </form>
        
    </div>
</x-admin-layout>