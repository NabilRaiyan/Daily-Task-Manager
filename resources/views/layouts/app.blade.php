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
            <div class="relative bg-green-100 p-3 border border-green-600 text-green-800 rounded w-4/12 mx-auto" role="alert">
                <strong class="font-bold">Success!</strong>
                <div class="text-base">This is a flash message!</div>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" @click="flash = false"
                        stroke="currentColor" class="h-6 w-6 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>