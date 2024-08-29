<x-admin-layout >
    <h2>Lista de permisos</h2>
    <div class="card">
        <div class="mb-2 text-right">
            <a href="{{route('admin.permissions.create')}}" type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear nuevo Permiso</a>
        </div>
        

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                    
                <tbody>
                    @forelse ($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>
                                
                                <a class="btn btn-secondary" href="{{route('admin.permissions.edit', $permission)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('admin.permissions.destroy', $permission)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-red block w-full md:w-auto text-center" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                       <td colspan="4">No hay ningun permiso registrado</td> 
                    @endforelse
                </tbody>
                </thead>
            </table>
        
       
    </div>
</x-admin-layout>