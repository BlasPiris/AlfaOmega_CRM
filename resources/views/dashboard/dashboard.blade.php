@extends("layouts/head")
<div class="  white-bg w-full h-full flex flex-col  justify-between">
      <!-- Header -->
      @include("layouts/header") 
  <div class="white-bg w-full h-full flex overflow-y-hidden  justify-between">
      <!-- Aside -->
      @include("dashboard/asideDashboard") 
    <div>
      
        <main class="w-full h-full  overflow-y-hidden white-bg">
          <div class=" white-bg h-full w-full py-2 flex flex-wrap items-end justify-center rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
          @include("dashboard/searchOptionsDashboard") 
          <!-- Container -->
          @include("dashboard/contentDashboard") 
          </div>
        </main>
    </div>
  </div>
</div>


