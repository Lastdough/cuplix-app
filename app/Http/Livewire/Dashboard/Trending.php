<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Trending extends Component
{
    public function render()
    {
        $trending = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/movie/week')
        ->json(['results']);


        
        return view('livewire.dashboard.trending', [
            'trending' => $trending,
            'num'=> 148,
        ]);
    }
}
