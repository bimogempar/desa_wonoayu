@extends('layouts.app')
@section('title','Admin')
@include('layouts.navigation')
@section('content')
<div class="container">
    <div class="row px-5 pt-5">
        <h3>Halaman Slider Admin</h3>
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
        <a href="sliders/create" class="btn btn-primary">Buat Slider</a>
    </div>

    @include('alert')

    <div class="row px-5 pt-5">
        <h3>Daftar Slider</h3>
    </div>

    <div class="row px-5 pt-3">
        <table class="table justify-content-sm-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Image Slider</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <th scope="row">{{ $slider->id }}</th>
                    <td>{{ $slider->title }}</td>
                    <td><img src="{{ $slider->takeImage }}/{{ $slider->imageslider }}" style="width: 120;"></td>
                    <td>{{ $slider->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</td>
                    <td>
                        <a href="sliders/{{ $slider->id }}/edit" class="btn btn-success">Edit</a>
                        <form class="d-inline ml-3" action="sliders/{{ $slider->id }}/delete" method="post" onsubmit="return confirm('Yakin hapus {{$slider->title}} ?')">
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
        {{ $sliders->links() }}
    </div>
</div>
@endsection
