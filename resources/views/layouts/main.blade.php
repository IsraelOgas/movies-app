<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App Laravel+TailwindCSS</title>
    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <a href="#">
                    Logo
                </a>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>