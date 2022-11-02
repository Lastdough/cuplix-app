<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Movies extends Component
{
    public function render()
    {
        $movies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular?api_key=<<api_key>>&language=en-US&page=1&region=id')
            ->json(['results']);

        // dump($newrelease);

        return view('livewire.dashboard.movies', [
            'movies' => $movies,
        ]);
    }
}
