
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

  <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-flex items-center  px-4 py-2.5 text-center text-sm font-medium text-white" type="button">
    <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div> 
  </button>
  <!-- Dropdown menu -->
  <div id="dropdown" class="z-10 bg-dark block w-44 divide-y divide-gray-100 rounded bg-white shadow dark:bg-gray-700 m-2 hidden" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; transform: translate3d(310px, 70px, 0px);">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 border-slate-700 border-2 rounded-md" aria-labelledby="dropdownDefault">
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="{{route('logout')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Salir</a>
      </li>
    </ul>
  </div>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
