@extends('layout')
@section('content')
<article>
    {!! $post->body!!}
    {{$post->date}}
</article>
<a href="/">Go back</a>

@endsection