<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class NewRelease extends Component
{
    public function render()
    {
        $newrelease= Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing?api_key=<<api_key>>&language=en-US')
            ->json(['results']);
    
            // dump($newrelease);

        return view('livewire.dashboard.new-release', [
            'newrelease' => $newrelease,
        ]);
    }
}
