@extends('layouts.main')

@section('body')
    <!-- component -->
<div class="flex items-center h-screen w-full justify-center">

    <div class="max-w-xs">
        <div class="bg-white shadow-xl rounded-lg py-5 px-10">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="storage/foto-profile/{{auth()->user()->foto_profile}}" alt="{{auth()->user()->foto_profile}}">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">
                    {{
                        auth()->user()->name
                    }}
                </h3>
                <div class="w-full flex-col items-center gap-3 text-xs">
                    <div class="w-full text-center">
                        <span>
                            Email : 
                        </span>
                        {{auth()->user()->email}}
                    </div>
                    <div class="w-full text-center">
                        <span>
                            NIK : 
                        </span>
                        {{auth()->user()->nik}}
                    </div>
                </div>
                <div class="text-center my-3">
                    <img class="mx-auto" src="storage/barcodes/barcode_{{auth()->user()->nik}}.png" alt="{{auth()->user()->nik}}">
                </div>
    
            </div>
        </div>
    </div>
    
    </div>
@endsection