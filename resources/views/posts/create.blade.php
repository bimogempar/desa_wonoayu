@extends('layouts.app')
@section('title','Buat Berita')
@include('layouts.navigation')

@section('content')
<div class="container px-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Berita Baru</div>
                <div class="card-body">
                    <form action="store" method="POST">
                        @csrf
                        <div action="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        @error('title')
                        <div class="text-danger mt-2">
                            Judul harus diisi
                        </div>
                        @enderror

                        <div action="form-group">
                            <!-- <label for="title">Isi Berita</label>
                            <textarea name="body" id="body" class="form-control"></textarea> -->
                            <label for="title">Isi Berita</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
                        </div>
                        @error('body')
                        <div class="text-danger mt-2">
                            Isi berita harus diisi
                        </div>
                        @enderror

                        <div class="py-3">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection