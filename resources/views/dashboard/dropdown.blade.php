
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


  <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white 
   0 font-medium  text-sm px-1 py-1 text-center inline-flex items-center 
   primary-bg rounded-md " type="button">
    <div class="w-24 font-medium hidden sm:block " title="{{Auth::user()->user;}}">{{Auth::user()->user;}}
    </div>
    <div class="h-10 w-10 rounded-full text-black cursor-pointer bg-gray-200 border-2 border-gray-600 mx-2 text-center py-2 ">
      {{ strtoupper(substr(Auth::user()->user, 0, 1));}} </div>
  </button>

  <!-- Dropdown menu -->
  <div id="dropdown" class="z-10 bg-dark block w-44 divide-y divide-gray-100 rounded bg-white shadow dark:bg-gray-700 mx-2 hidden" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px;">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 border-yellow-600 border rounded-md" aria-labelledby="dropdownDefault">
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Configuración</a>
      </li>
      <li>
        <a href="{{route('logout')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Salir</a>
      </li>
    </ul>
  </div>


  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
