@extends("layouts/head")

<div class="h-screen w-full bg-white relative flex overflow-hidden">

    <!-- Aside -->
    @include("dashboard/asideDashboard") 
    <div class="  white-bg w-full h-full flex flex-col justify-between">
      <!-- Header -->
      @include("dashboard/headerDashboard") 
      @include("dashboard/searchOptionsDashboard") 
      <main class="max-w-full h-full flex relative overflow-y-hidden white-bg">
        
        <!-- Container -->
        @include("dashboard/contentDashboard") 
      </main>
    </div>
  
  </div>

