@extends('layouts.default');

@section('content');

    @if($posts->count())
        @foreach($posts as $post)
        <article>
            <h2>{{$post->title}}</h2>
            <div>{{$post->body}}</div>
        </article>
        @endforeach;
    @endif;


@stop