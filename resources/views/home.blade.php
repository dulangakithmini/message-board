@extends('master')

@section('title', 'HomePage')

@section('content')
Recent messages:
<ul>
    @foreach ($messages as $message)
    <li>{{ $message->title }} - {{ $message->content }}</li>
    @endforeach
</ul>
<!--<h1>Content!</h1>-->
@endsection
