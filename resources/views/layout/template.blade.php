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
    <nav class="h-16 w-full bg-neutral-800 text-white flex">
        <h1 class="font-semibold text-2xl w-fit my-3 mx-3">Kasir</h1>
        <ul class="flex my-3">
            <li>Stok</li>
            <li class="mx-2 ">Transaksi</li>
        </ul>
    </nav>
    
    <div class="">
        @yield('content')
    </div>
</body>
</html>
