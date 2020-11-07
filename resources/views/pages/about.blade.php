@extends('app')

@section('title','About Us | ' . config('app.name'))


@section('content')
    <img src={{ asset("/images/otwebdeveloper-logo.svg") }} alt="ot web developer logo">
    <p>Built with &hearts; by OT Web Developer</p>
    <p><a href={{route('home')}}>Return to home page</a></p>
@endsection

