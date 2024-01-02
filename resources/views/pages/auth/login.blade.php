<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        html, body{
          font-family: 'Poppins';
        }
      
        .break-inside {
          -moz-column-break-inside: avoid;
          break-inside: avoid;
        }

        body {
          display: flex;
          justify-content: space-between;
          flex-direction: column;
          min-height: 100vh;
          line-height: 1.5;
        }
        
      </style>
</head>
<!-- component -->
  <body class="bg-white">
  
    <!-- Example -->
    <div class="flex min-h-screen">
  
      <!-- Container -->
      <div class="flex flex-row w-full">
  
        <!-- Sidebar -->
        <div class='hidden lg:flex flex-col justify-between bg-[#ffe85c] lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg'>
          <div class="flex items-center justify-start space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
              </svg>
            <a href="#" class="font-medium text-xl">ABON</a>
          </div>
          <div class='space-y-5'>
            <h1 class="lg:text-2xl xl:text-4xl xl:leading-snug font-extrabold">Masuk dengan akun anda dan rasakan pengalaman baru yang luar biasa</h1>
            <p class="text-lg">You do not have an account?</p>
            <a href="{{ route('view.register') }}"
              class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Create
              account here</a>
          </div>
          <p class="font-medium">© 2023 ABON APP</p>
        </div>
  
        <!-- Login -->
        <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
          <div class="flex lg:hidden justify-between items-center w-full py-4">
            <div class="flex items-center justify-start space-x-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
              </svg>
              <p class="font-medium text-lg">ABON</p>
            </div>
            <div class="flex items-center space-x-2">
              <span>Not a member? </span>
              <a href="{{ route('view.register') }}" class="underline font-medium text-[#070eff]">
                Sign up now
              </a>
            </div>
          </div>
          <!-- Login box -->
          <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md gap-5">
            @if (session()->has('success'))
            {{-- alert --}}
            <div id="dismiss-alert" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4" role="alert">
              <div class="flex">
                <div class="flex-shrink-0">
                  <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
                </div>
                <div class="ml-3">
                  <div class="text-sm text-teal-800 font-medium">
                    {{
                      session('success')
                    }}
                  </div>
                </div>
                <div class="pl-3 ml-auto">
                  <div class="-mx-1.5 -my-1.5">
                    <button type="button" class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600" data-hs-remove-element="#dismiss-alert">
                      <span class="sr-only">Dismiss</span>
                      <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="currentColor"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <div class="flex flex-col space-y-2 text-center">
              <h2 class="text-3xl md:text-4xl font-bold">Login</h2>
              <p class="text-md md:text-xl">
                Silahkan login terlebih dahulu, agar kamu bisa merasakan fitur - fitur dalam ABON APP
              </p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="flex flex-col max-w-md space-y-5">
              @csrf
              <input type="text" placeholder="Email"
                class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" name="email" />
              <input type="password" placeholder="Password"
                class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" name="password"/>
              <button type="submit" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Login</button>
            </form>
          </div>

  
        </div>
      </div>
  
    </div>
    <!-- Example -->
  </body>
</html>