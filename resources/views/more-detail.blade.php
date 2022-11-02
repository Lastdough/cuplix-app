<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased gradient font-dmsans">
    @livewire('navigation-menu')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="header lg:max-w-7xl">
            <span class="font-medium text-4xl text-black">Spider-Man: No Way Home</span>
            <div class="flex flex-row gap-2 my-2 text-2xl">
                <div class="flex gap-0">
                    <svg class="flex h-6 w-6 my-1" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.53764 0.752347C8.64914 0.526507 8.8216 0.336363 9.03552 0.203411C9.24943 0.0704587 9.49628 0 9.74814 0C10 0 10.2469 0.0704587 10.4608 0.203411C10.6747 0.336363 10.8471 0.526507 10.9586 0.752347L13.2401 5.37535L18.3416 6.11785C18.591 6.15382 18.8254 6.25887 19.0182 6.42111C19.211 6.58336 19.3545 6.79632 19.4325 7.0359C19.5106 7.27549 19.52 7.53213 19.4598 7.7768C19.3995 8.02147 19.272 8.24439 19.0916 8.42035L15.3986 12.0188L16.2701 17.0993C16.3128 17.3477 16.2852 17.603 16.1903 17.8364C16.0954 18.0699 15.9371 18.2721 15.7332 18.4202C15.5294 18.5683 15.2882 18.6564 15.0368 18.6746C14.7855 18.6927 14.5341 18.6402 14.3111 18.5228L9.74814 16.1228L5.18514 18.5228C4.96214 18.6402 4.71076 18.6927 4.45943 18.6746C4.20811 18.6564 3.96688 18.5683 3.76304 18.4202C3.5592 18.2721 3.40088 18.0699 3.30599 17.8364C3.21111 17.603 3.18345 17.3477 3.22614 17.0993L4.09614 12.0188L0.406141 8.41885C0.226246 8.24293 0.0990927 8.02024 0.039029 7.7759C-0.0210347 7.53156 -0.0116186 7.2753 0.0662148 7.03603C0.144048 6.79676 0.287201 6.584 0.479522 6.42176C0.671843 6.25952 0.905677 6.15426 1.15464 6.11785L6.25464 5.37535L8.53764 0.752347Z"
                        fill="#FFAF2E" />
                </svg>
                <p class="text-gray-700 ml-2">8.1/10 </p> 
                </div>|
                <p>17 Sep 2021</p>|
                <p class="">{{ \Carbon\Carbon::parse(148)->format('i\h s\m') }}</p>
            </div>
        </div>
        <div class="lg:max-w-7xl">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/1mTjfMFyPi8">
                </iframe>
            </div>
        </div>
        <div class="description grid grid-cols-3 gap-2">
            <div class="primary col-span-2">
                <span class="font-medium text-2xl text-black">
                    Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.
                </span>
            </div>
            <div class="secondary">
                <span>Where to watch</span>
            </div>
        </div>
    </div>

    <div class="footer">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quam perferendis laborum porro placeat perspiciatis deleniti illum inventore saepe quaerat eos quasi culpa quod eligendi, autem adipisci dolore. Natus, deserunt!
    </div>
</body>

</html>