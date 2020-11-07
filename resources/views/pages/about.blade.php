@extends('app')

@section('title','About Us | ' . config('app.name'))


@section('content')
<p>Built with &hearts; by OT Web Developer</p>
<p><a href={{route('home')}}>Return to home page</a></p>
@endsection

