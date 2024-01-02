@extends('layouts.main')

@section('body')
<div class="w-full flex flex-col">
<!-- Hero -->
<div class="relative overflow-hidden">
    <!-- Gradients -->
    <div aria-hidden="true" class="flex absolute -top-96 left-1/2 transform -translate-x-1/2">
      <div class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem]"></div>
      <div class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] "></div>
    </div>
    <!-- End Gradients -->
  
    <div class="relative z-10">
      <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
        <div class="max-w-2xl text-center mx-auto">
          <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent">
            ABON : Absen Online
          </p>
  
          <!-- Title -->
          <div class="mt-5 max-w-2xl">
            <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl">
              ABON Application
            </h1>
          </div>
          <!-- End Title -->
  
          <div class="mt-5 max-w-3xl">
            <p class="text-lg text-gray-600 ">
              ABON (Absen Online) adalah salah satu produk ciptaan kami yaitu Merrong Tech PT. MERRONG Pirang Nusantara
            </p>
          </div>
  
          <!-- Buttons -->
          <div class="mt-8 grid gap-3 w-full sm:inline-flex sm:justify-center">
            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 " href="javascript:;">
              Get started
              <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
          <!-- End Buttons -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 sm:items-center gap-8">
    <div class="sm:order-2">
      <div class="relative pt-[50%] sm:pt-[100%] rounded-lg">
        <img class="w-full h-full absolute top-0 left-0 object-cover rounded-lg" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1981&q=80" alt="Image Description">
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:order-1">
      <p class="mb-5 inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
        ABON application
      </p>

      <h2 class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-gray-800">
        <span class="hover:text-blue-600 cursor-pointer">
          How to get buy-in and budget for direct hiring
        </span>
      </h2>

      <!-- Avatar -->
      <div class="mt-6 sm:mt-10 flex items-center">
        <div class="flex-shrink-0">
          <img class="h-10 w-10 sm:h-14 sm:w-14 rounded-full" src="storage/foto-profile/{{auth()->user()->foto_profile}}" alt="Image Description">
        </div>

        <div class="ml-3 sm:ml-4">
          <p class="sm:mb-1 font-semibold text-gray-800">
            {{auth()->user()->name}}
          </p>
          <p class="text-xs text-gray-500">
            {{auth()->user()->email}}
          </p>
        </div>
      </div>
      <!-- End Avatar -->

      <div class="mt-5">
        <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium" href="{{ route('absen.create') }}">
          Absen Yuk
          <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
</div>
@endsection