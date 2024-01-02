<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $title }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="">
    <div class="w-full grid grid-cols-5 h-screen overflow-hidden">
        <div class="col-span-1">
            @include('partials.sidebar')
        </div>
        <div class="col-span-4 overflow-y-auto">
            @yield('body')
        </div>
    </div>

    <script>
        function dropDown() {
          document.querySelector('#submenu').classList.toggle('hidden')
          document.querySelector('#arrow').classList.toggle('rotate-180')
        }
      </script>
</body>
</html>