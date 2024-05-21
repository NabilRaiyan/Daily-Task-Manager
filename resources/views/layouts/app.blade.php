<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager | Laravel</title>
    <!-- adding styles directive -->
    @yield('styles') 
</head>
<body>
    <div>
        <h1>@yield('title')</h1>
        <div>
            <!-- showing flash message -->
            @if (session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>