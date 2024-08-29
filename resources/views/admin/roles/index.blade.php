<x-admin-layout :breadcrumb="[
    [
        'name'=>'Dashboard',
        'url'=>'#'
    ],
    [
        'name'=>'Admin',
        
    ]
]">
    <h2>Lista de roles</h2>
    <div class="card">
        <div class="mb-2 text-right">
            <a href="{{route('admin.roles.create')}}" type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear nuevo Rol</a>
        </div>
        

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead>
                    <tr>
                        <th scope="col" class=" px-6 py-3">ID</th>
                        <th scope="col" class=" px-6 py-3">Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                    
                <tbody>
                    @forelse ($roles as $rol)
                        <tr>
                            <th scope="row" class="px-6 py-4" >{{$rol->id}}</th>
                            <th scope="col" class=" px-6 py-4" >{{$rol->name}}</th>
                            <th scope="col" class=" px-6 py-4">
                                
                                <a class="btn btn-blue" href="{{route('admin.roles.edit', $rol)}}">Editar</a>
                            </th>
                            <td>
                                <form action="{{route('admin.roles.destroy', $rol)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-red block w-full md:w-auto text-center" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                       <td colspan="4">No hay ningun rol registrado</td> 
                    @endforelse
                </tbody>
                </thead>
            </table>
        
       
    </div>
</x-admin-layout>