@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="movie image" class="w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 font-semibold text-sm">
                <span class="bg-orange-500 text-white text-sm rounded ml-1 px-2">{{ $movie['status'] }}</span>
                <span class="mx-2">|</span>
                <span>
                    <svg class="fill-current text-orange-500 w-4" fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </span>
                <span>{{ $movie['vote_average'] * 10 .'%' }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d M, Y') }}</span>
                <span class="mx-2">|</span>
                <span> @foreach ($movie['genres'] as $genre)
                    <!-- <div class="bg-orange-500 text-white text-xs font-semibold px-2 rounded-full m-1"> -->
                    {{ $genre['name'] }}@if (!$loop->last), @endif
                    <!-- </div> -->
                    @endforeach</span>
            </div>
            <p class="text-gray-300 mt-8 text-justify">
                {{ $movie['overview'] }}
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    @foreach ($movie['credits']['crew'] as $crew)
                    @if ($loop->index < 2) <div class="mr-8">
                        <div>{{ $crew['name'] }}</div>
                        <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @if (count($movie['videos']['results']) > 0)
        <div class="mt-12">
            <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                <svg class="fill-current w-6" fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-2">Play Trailer</span>
            </a>
        </div>
        @endif
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop->index < 5) <div class="mt-8">
                <a href="#">
                    @if ($cast['profile_path'])
                    <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                    @else
                    <img src="/img/no-image.png" alt="profile image" class="hover:opacity-75 transition ease-in-out duration-150">
                    @endif
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                    <div class="text-sm text-gray-400">
                        {{ $cast['character'] }}
                    </div>
                </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<div class="movie-images">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index < 9) <div class="mt-8">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="movie image" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection