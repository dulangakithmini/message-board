@extends('master')

@section('title', 'HomePage')

@section('content')

Post a message:

<form action="/create" method="post">
    <input type="text" id="title" placeholder="Title">
    <input type="text" id="content" placeholder="Content">
    <button type="submit">Submit</button>
</form>

Recent messages:

<ul>
    @foreach ($messages as $message)
    <li>{{ $message->title }} - {{ $message->content }} - {{ $message->created_at }}</li>
    @endforeach
</ul>
<!--<h1>Content!</h1>-->
@endsection
