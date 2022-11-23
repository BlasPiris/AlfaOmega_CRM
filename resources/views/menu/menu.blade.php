@extends("layouts/head")
@include("layouts/header") 

    <!-- Header -->
    
    <main class="w-full h-full  overflow-y-hidden white-bg rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll items-start justify-center place-content-center flex flex-wrap">
    @for ($i = 0; $i <10; $i++)
        @include("menu/menuButton")
    @endfor
    <div>
