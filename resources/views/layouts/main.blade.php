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
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <a href="{{ route('movies.index') }}">
                    <img src="\img\MoviesApp.png" alt="logo">
                </a>
                <li class="md:ml-16 md:mt-0 mt-3">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 md:mt-0 mt-3">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 md:mt-0 mt-3">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative md:mt-0 mt-3">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current text-gray-500 w-4 mt-2 ml-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4ZM2 8C2 4.68629 4.68629 2 8 2C11.3137 2 14 4.68629 14 8C14 9.29583 13.5892 10.4957 12.8907 11.4765L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L11.4765 12.8907C10.4957 13.5892 9.29583 14 8 14C4.68629 14 2 11.3137 2 8Z" fill="#4A5568" />
                        </svg>
                    </div>
                </div>
                <div class="md:ml-4 md:mt-0 mt-3">
                    <a href="#">
                        <!-- <img src="" alt="avatar" class="rounded-full w-8 h-8"> -->
                        <div class="bg-gray-300 rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>