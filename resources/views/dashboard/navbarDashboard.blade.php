<div class="h-screen w-full bg-white relative flex overflow-hidden">

    <!-- Sidebar -->
    <aside class="h-full w-16 flex flex-col space-y-10 items-center justify-top pt-4 relative bg-gray-800 text-white">
      <!-- Profile -->
      <div title="the message"
      class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer">
            <img
            class="mx-auto w-48 rounded-lg"
            src="{{ asset('storage/images/logo_ico.png') }}""
            alt="logo"
            />
      </div>

       <!-- Profile -->
       <div title="the message"
       class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
             <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
         </svg>
       </div>
        <!-- Profile -->
      <div title="the message"
      class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
      </div>
       <!-- Profile -->
       <div title="the message"
       class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
             <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
         </svg>
       </div>
        <!-- Profile -->
      <div title="the message"
      class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
      </div>
  
     
  
      <!-- Configuration -->
      
    </aside>
  
    
   
    <div class="w-full h-full flex flex-col justify-between">
      <!-- Header -->
      <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
        
        <!-- Informação -->
        <div class="flex flex-shrink-0 items-center space-x-4 text-white">
          
          <!-- Texto -->
          <div class="flex flex-col items-end ">
            <!-- Nome -->
            <div class="text-md font-medium " title="{{Auth::user()->user;}}">{{Auth::user()->user;}}</div>

           

          </div>
          @include("dashboard/dropdown") 
          <!-- Foto -->
          {{-- <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div> --}}

         

         
       

        </div>
      </header>
  
      <!-- Main -->
      
    </div>
  
  </div>