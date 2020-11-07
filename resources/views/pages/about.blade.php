@extends('app')

@section('title','About Us | ' . config('app.name'))


@section('content')
    <img class="h-50 rounded my-12 shadow=md" src={{ asset("/images/otwebdeveloper-logo.svg") }} alt="ot web developer logo">
    <h2 class="text-gray-800 text-xl mb-5">Built with <span class="text-pink-500 text-2xl">&hearts;</span> by OT Web Developer</h2>
    <p class="text-indigo-500 hover:text-indigo-600 underline"><a href={{route('home')}}>Return to home page</a></p>
@endsection

