<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="h-16 w-full bg-neutral-800 text-white grid grid-cols-6">
        <a href="/"><h1 class="font-semibold text-2xl my-3 mx-3">Kasir</h1></a>
        <ul class="col-end-7 grid-cols-2 grid">
            <li class="my-4 mx-auto w-fit text-xl hover:text-blue-700"><a href="/history">History</a></li>
            <li class="my-4 mx-auto w-fit text-xl hover:text-blue-700"><a href="/stok">Stok</a></li>
        </ul>
        
    </nav>
    
    <div class="">
        @yield('content')
    </div>
</body>
</html>
