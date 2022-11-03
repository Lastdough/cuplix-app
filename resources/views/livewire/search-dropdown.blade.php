<div class="relative">
    <input wire:model.debounce.500ms="search" type="text" id="search-navbar"
        class="block p-2 pl-5 text-db3 w-80  bg-bluePri rounded-full focus:ring-db3 focus:border-db3"
        placeholder="Search...">
    <div wire:loading.remove class="flex absolute inset-y-0 right-0 items-center pr-4 pointer-events-none">
        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.2383 11H12.4411L12.1586 10.73C13.1475 9.59 13.7428 8.11 13.7428 6.5C13.7428 2.91 10.8064 0 7.18379 0C3.56118 0 0.624756 2.91 0.624756 6.5C0.624756 10.09 3.56118 13 7.18379 13C8.80841 13 10.3018 12.41 11.4522 11.43L11.7247 11.71V12.5L16.7701 17.49L18.2736 16L13.2383 11ZM7.18379 11C4.67117 11 2.64292 8.99 2.64292 6.5C2.64292 4.01 4.67117 2 7.18379 2C9.6964 2 11.7247 4.01 11.7247 6.5C11.7247 8.99 9.6964 11 7.18379 11Z"
                fill="#DBDBDB" />
        </svg>
        <span class="sr-only">Search icon</span>
    </div>
    <div wire:loading class="flex absolute inset-y-0 right-0 items-center pr-4 pointer-events-none mt-2" role="status">
        <svg class="inline w-5 h-5 animate-spin fill-blueSec" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
    @if (strlen($search)>=2)        
    <div class="absolute bg-bluePri rounded w-80 mt-4 z-50 text-sm">
        @if ($searchResults->count()>0)
        <ul>
            @foreach ($searchResults as $result)    
            <li class="border-b border-blueSec">
                <a href="{{route('moviesdetail', $result['id'])}}" class="p-3 text-white hover:brightness-50 transition ease-in-out duration-150 flex items-center">
                    <img src="{{ 'https://image.tmdb.org/t/p/w92/'.$result['poster_path'] }}" alt="poster" class="w-12">
                    <span class="ml-4">
                        {{$result['title']}}
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
        @else 
            <div class="block p-3 text-white">No results for "{{$search}}"</div>
        @endif
    </div>
    @endif
</div>