<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager | Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>



    <!-- adding styles directive -->
    @yield('styles') 
</head>
<body class="container mt-10 mb-10 mx-auto">
    <div>
        <h1 class="mt-5 mb-5 text-2xl text-gray-700">@yield('title')</h1>
        <div class="mt-5 mb-5 text-xl">
            <!-- showing flash message
            @if (session()->has('success'))
                <div class="text-green-800">{{session('success')}}</div>
            @endif -->
            <div class="bg-green-100 p-3 border border-green-600 text-green-800 rounded w-4/12 mx-auto">
                <strong class="font-bold">Success!</strong>
                <div class="text-base">This is a flash message!</div>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>