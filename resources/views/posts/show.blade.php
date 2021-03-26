@extends('layouts.publicapp')

@section('content')
    <div class="container p-5">
        @if ($post->thumbnail)
        <img style="object-position: center;" src="{{ $post->takeImage }}" class="card-img-top mb-5">
        @endif
        <h1>{{ $post->title }}</h1>
        <p>Publish pada {{ $post->created_at->format('d M y') }}</p>
        <p>{!! $post->body !!}</p>
    </div>
@endsection


