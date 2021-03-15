@extends('layouts.app')
@section('title', 'Tentang Kami')
@include('layouts.navigation')

@section('content')
<div class="container">
    <div class="row py-5 justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('peta_wajak.png') }}" alt="">
        </div>
        <div class="col-md-6">
            <h1>Desa Wonoayu</h1>
            Wonoayu adalah sebuah desa di wilayah Kecamatan Wajak, Kabupaten Malang, Provinsi Jawa Timur. Desa ini terletak sekitar 37 km dari kabupaten Malang. Desa ini memiliki luas wilayah 254,6 ha dengan struktur tanah yang berbukit dan memiliki ketinggian tanah 630 Mdpl. Desa Wonoayu sudah berdiri sejak tahun 1913.
        </div>
    </div>
</div>
@endsection