@extends('layouts.app')
@section('title', $post->title)

@include('layouts.navigation')

<div class="container p-5">
    <h1>{{ $post->title }}</h1>
    <p>Publish pada {{ $post->created_at->format('d M y') }}</p>
    <p>{!! $post->body !!}</p>
</div>