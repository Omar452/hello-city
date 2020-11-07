<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>@yield('title',config('app.name'))</title>
        
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main class="flex flex-col justify-center items-center" role="main">
            @yield('content')
        </main>
        
        <footer class="text-gray-600">
            <p>
                &copy; Copyright {{ date('Y')}}
                @if(! Route::is('about'))
                &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href={{route('about')}}>About us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
