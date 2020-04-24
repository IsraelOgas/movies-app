<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>
                <svg class="fill-current text-orange-500 w-4" fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </span>
            <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d M, Y') }}</span>
        </div>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
            <!-- <div class="bg-orange-500 text-white text-xs font-semibold px-2 rounded-full m-1"> -->
            {{ $genres->get($genre) }}@if (!$loop->last), @endif
            <!-- </div> -->
            @endforeach
        </div>
    </div>
</div>