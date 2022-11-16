<div class=" white-bg h-full w-full py-2 flex flex-wrap items-start justify-center rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
  @for ($i = 0; $i < 50; $i++)
  <div class="w-60 h-40 rounded-lg flex-shrink-0 items-start justify-center bg-gray-100 border border-gray-400 p-2">
    <a>
      <div class="inline-block flex items-center ">
        <div class="relative inline-block">
          <img class="inline-block object-cover w-14 h-14 rounded-full" src="https://images.pexels.com/photos/2955305/pexels-photo-2955305.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
          <span class="absolute bottom-0 right-0 inline-block w-3 h-3 bg-red-600  rounded-full"></span>
        </div>
        <div class="relative inline-block mx-5 my-1 text-center w-7/12" >
          <div class="text-lg">
            Pseudonimo
          </div>
          <div class="text-sm">
            Tipo
          </div>
        </div>
      </div>

        <button class=" w-full mt-2  secondary-bg text-white p-1  border border-green-700 rounded">
          + Info
        </button>
        <button class=" w-full mt-1  primary-bg text-white p-1  border border-yellow-700 rounded" >
          Consultar
        </button>
      
    </a>
   
  </div>
  @endfor
 </div>