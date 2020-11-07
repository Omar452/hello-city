@extends('app')

@section('content')
    <img src="/images/birmingham-flag.svg" alt="birmingham flag">
    <h1>Hello from Birmingham!</h1>
    <p>It's currently {{ date('h:i A')}}.</p>
@endsection
