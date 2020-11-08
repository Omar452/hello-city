@extends('layouts/app')

@section('content')
    <img class="h-40 rounded shadow-md mt-12" src={{ asset("/images/birmingham-flag.svg") }} alt="birmingham flag">
    <h1 class="mt-5 text-indigo-600 text-3xl sm:text-5xl">Hello from Birmingham!</h1>
    <p class="text-2xl text-gray-800">It's currently {{ date('h:i A')}}.</p>
@endsection
