@extends('layouts.app')
@section('title','Admin')
@include('layouts.navigation')
@section('content')
<div class="container">
    <div class="row px-5 pt-5">
        <h3>Halaman Berita Admin</h3>
    </div>

    <div class="row px-5">
        <div class="d-grid gap-5 d-md-block">
            <a href="posts"><button class="btn btn-warning" type="button">Berita</button></a>
            <a href="sliders"><button class="btn btn-warning" type="button">Slider</button></a>
            <a href=""><button class="btn btn-warning" type="button">Print</button></a>
        </div>
    </div>

    <div class="row px-5 pb-5">
        <div class="py-3 d-flex justify-content-center">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <div class="row px-5">
        <a href="{{ route('create') }}" class="btn btn-primary">Buat Berita</a>
    </div>

    @include('alert')

    <div class="row px-5 pt-5">
        <h3>Daftar Berita</h3>
    </div>

    <div class="row px-5 pt-3">
        <table class="table justify-content-sm-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu Publish</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d M y | h:i:s') }}</td>
                    <td>
                        <a style="color: white;" target="_blank" href="{{ route('showpost', $post->slug) }}" class="btn btn-info">Show</a>
                        <a href="posts/{{ $post->slug }}/edit" class="btn btn-success ml-3">Edit</a>
                        <form class="d-inline ml-3" action="posts/{{ $post->slug }}/delete" method="post" onsubmit="return confirm('Yakin hapus dengan judul post {{$post->title}} ?')">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row px-5 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
