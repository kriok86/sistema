@php
    $links = [
      [
         'name'=>'Dashboard',
         'url'=>route('home'),
         'active'=> request()->routeIs('admin.dashboard'),
         'icon'=>'fa-solid fa-gauge'
         
      ],
      [
         'header'=>'ADMINISTRACION'
      ],
      [
         'name'=>'Usuarios',
         'url'=> route('admin.users.index'),
         'active'=> request()->routeIs('admin.users.*'),
         'icon'=>'fa-solid fa-users'
         
      ],
      [
         
         'name'=>'Roles',
         'url'=> route('admin.roles.index'),
         'active'=> request()->routeIs('admin.role.*'),
         'icon'=>'fa-solid fa-address-book',
         

      ],
      [
         
         'name'=>'Lista de Inscripctos',
         'url'=>'',
         'active'=> false,
         'icon'=>'fa-solid fa-clipboard-list'
         

      ],
      [
         
         'name'=>'Permisos',
         'url'=> route('admin.permissions.index'),
         'active'=> request()->routeIs('admin.permission.*'),
         'icon'=>'fa-solid fa-key',
         

      ],
    ]
@endphp

<aside id="logo-sidebar"  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform      -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800
  dark:border-gray-700"  aria-label="Sidebar":class="{
   'transform-none': open,
   'translate-x-full': !open,
  }" >
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        
      <ul class="space-y-2 font-medium">
         @foreach ($links as $link)

         <li>

            @isset($link['header'])
             <div class="px-3 py-2 text-xs font-semibold text-gray-500 uppercase">

               {{$link['header']}}

             </div>
            @else
               <a href="{{$link['url']}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{$link['active'] ? 'bg-gray-100': ''}}">
                     <span class="inline-flex w-6 h-6 justify-center items-center">
                       <i class="{{$link['icon']}} text-gray-500"></i>
                     </span>
                  <span class="ms-3">{{$link['name']}}</span>
               </a>
            @endisset
             
         
             
          </li>

          @endforeach
      </ul>
   </div>
</aside>