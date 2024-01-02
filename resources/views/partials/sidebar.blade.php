<aside class="w-full">
      <div class="sidebar top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
        p-2 overflow-y-auto text-center bg-gray-900 shadow h-screen">
        <div class="text-gray-100 text-xl flex flex-col">
          <div class="p-2.5 mt-1 flex items-center rounded-md ">
            <svg class="h-8 fill-current text-indigo-600 pr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
            <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">ABON</h1>
            <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
          </div>
          <hr class="my-2 text-gray-600">
    
          <div>    
            <a href="{{ route('dashboard') }}" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if ($nav === 'home')
              bg-blue-600
            @endif  hover:bg-blue-600">
              <i class="bi bi-house-door-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
            </a>
            <a href="{{ route('absen.create') }}" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if ($nav === 'absen')
            bg-blue-600
          @endif  hover:bg-blue-600">
            <i class="bi bi-bookmark-plus-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">
                Absen
              </span>
            </a>
            <a href="{{ route('profile') }}" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if ($nav === 'profile')
            bg-blue-600
          @endif  hover:bg-blue-600">
              <i class="bi bi-person-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">
                Profile
              </span>
            </a>
            <a href="{{ route('absen.show', ['absen'=> auth()->user()->nik]) }}" class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer @if ($nav === 'history')
            bg-blue-600
          @endif hover:bg-blue-600">
                <i class="bi bi-clock-history"></i>
              <span class="text-[15px] ml-4 text-gray-200">
                History
              </span>
            </a>
            {{-- <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-envelope-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">Messages</span>
            </div>
    
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-chat-left-text-fill"></i>
              <div class="flex justify-between w-full items-center" onclick="dropDown()">
                <span class="text-[15px] ml-4 text-gray-200">Chatbox</span>
                <span class="text-sm rotate-0" id="arrow">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </div>
            </div>
            <div class=" hidden leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
              <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Social</h1>
              <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Personal</h1>
              <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Friends</h1>
            </div> --}}
            <form method="POST" action="{{ route('logout') }}" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              @csrf
              <i class="bi bi-box-arrow-in-right"></i>
              <button type="submit" class="text-[15px] ml-4 text-gray-200">Logout</button>
            </form>
          </div>
        </div>
      </div>    
</aside>