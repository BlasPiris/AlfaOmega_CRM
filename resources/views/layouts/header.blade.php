<header class="h-16 py-3 w-full flex items-center relative justify-between px-3 space-x-10 bg-gray-800">

  <a href="{{route('dashboard')}}" title="the message"
  class="h-10 w-10 flex items-center justify-center rounded-md cursor-pointer">
        <img
        class="mx-auto w-48 rounded-lg"
        src="{{ asset('storage/images/logo_ico.png') }}""
        alt="logo"
        />
  </a>
        
    <!-- Informação -->
    <div class="flex flex-shrink-0 items-center space-x-4 text-white">
      
      <!-- Texto -->
      <div class="flex flex-col items-end ">
        <!-- Nome -->
        {{-- <div class="text-md font-medium " title="{{Auth::user()->user;}}">{{Auth::user()->user;}}</div> --}}

       

      </div>
      @include("dashboard/dropdown") 
      <!-- Foto -->
      {{-- <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div> --}}

     

    </div>
  </header>