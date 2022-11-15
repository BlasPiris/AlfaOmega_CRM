@extends("layouts/head")

<div class="h-screen w-full bg-white relative flex overflow-hidden">

    <!-- Aside -->
    @include("dashboard/asideDashboard") 
    <div class="w-full h-full flex flex-col justify-between">
      <!-- Header -->
      @include("dashboard/headerDashboard") 
      <main class="max-w-full h-full flex relative overflow-y-hidden">
        <!-- Container -->
        @include("dashboard/contentDashboard") 
      </main>
    </div>
  
  </div>

