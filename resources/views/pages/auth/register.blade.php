<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Register
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- component -->
<div
class="bg-purple-900 absolute top-0 left-0 bg-gradient-to-b from-gray-900 via-gray-900 to-purple-800 bottom-0 leading-5 h-full w-full overflow-hidden">

</div>
<div
class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
<div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
    <div class="self-start hidden lg:flex flex-col  text-gray-300">
        <h1 class="my-3 font-semibold text-4xl">Welcome brody</h1>
        <p class="pr-3 text-sm opacity-75">
            Segera daftarkan akunmu untuk bisa menikmati pengalaman yang luar biasa
        </p>
    </div>
</div>
<div class="flex justify-center self-center  z-10">
    <div class="p-12 bg-white mx-auto rounded-3xl w-96 ">
        <div class="mb-7">
            <h3 class="font-semibold text-2xl text-gray-800">Sign Up</h3>
            <p class="text-gray-400">Already an account? 
                <a href="{{ route('view.login') }}" class="text-sm text-purple-700 hover:text-purple-700">
                    Sign In
                </a>
            </p>
        </div>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="flex flex-col gap-2">
                <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border rounded-lg focus:outline-none border-gray-200 focus:border-purple-400 @error('nik') 
                border-red-500 focus:border-red-700 
                @enderror" type="text" name="nik" placeholder="NIK">
                @error('nik')
                    <p class="text-sm italic text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400 @error('name') border-red-500 focus:border-red-700 @enderror" type="text" placeholder="Name" name="name">
                @error('name')
                <p class="text-sm italic text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-purple-400 @error('email') border-red-500 focus:border-red-700 @enderror" type="email" placeholder="Email" name="email">
                @error('email')
                <p class="text-sm italic text-red-500">
                    {{ $message }}
                </p>
                @enderror
            </div>


                <div class="relative flex flex-col gap-2" x-data="{ show: true }">
                    <input placeholder="Password" :type="show ? 'password' : 'text'" class="text-sm text-gray-800 px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-purple-400 @error('password') border-red-500 focus:border-red-700 @enderror" name="password">
                    @error('password')
                    <p class="text-sm italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror   
                    <div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">

                        <svg @click="show = !show" :class="{'hidden': !show, 'block':show }"
                            class="h-4 text-purple-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 576 512">
                            <path fill="currentColor"
                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                            </path>
                        </svg>

                        <svg @click="show = !show" :class="{'block': !show, 'hidden':show }"
                            class="h-4 text-purple-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 640 512">
                            <path fill="currentColor"
                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                            </path>
                        </svg>

                    </div>
                </div>

                <div class="">
                    <label class="block">
                        <input type="file" class="block w-full text-sm text-gray-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-md file:border-0
                          file:text-sm file:font-semibold
                          file:bg-purple-700 file:text-white
                          hover:file:bg-purple-800
                          @error('foto_profile') border-red-500 focus:border-red-700 @enderror
                        " name="foto_profile"/>
                      </label>
                      @error('foto_profile')
                      <p class="text-sm italic text-red-500">
                          {{ $message }}
                      </p>
                    @enderror 
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center bg-purple-800  hover:bg-purple-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                        Sign Up
                    </button>
                </div>
            </form>
            <div class="mt-7 text-center text-gray-800 text-xs">
                <span>
            Copyright © 2021-2023
            <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Codepen aji" class="text-purple-500 hover:text-purple-600 ">ABON</a></span>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="bg-transparent absolute w-full bottom-0 left-0 z-30">
<div class="container p-5 mx-auto  flex items-center justify-between ">
    <div class="flex mr-auto">
        <span title="codepen aji" class="text-center text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
              </svg>    
        <p class="text-xl">ABON<strong>APP</strong></p> </span>
    </div>

</div>
</footer>

<svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
</body>
</html>