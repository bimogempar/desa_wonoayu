@extends('layouts.cobalayout')
@section('title','Form KTP')

@section('content')
<div class="container" style="margin-top: 100px">
    <h1>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK ELEKTRONIK (KTP-EL)</style></h1>
    <form>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
        KTP BARU
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
        PERPANJANGAN KTP
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
        <label class="form-check-label" for="exampleRadios3">
        PENGGANTIAN DATA
        </label>
    </div>
    <div class="form-group">
        <label for="inputAddress">Nama Lengkap</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nomor KK</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">NIK</label>
        <input type="text" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">RT</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">RW</label>
        <input type="text" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div class="form-row d-flex justify-content-center mt-3 mb-4">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
    </form>
</div>
@endsection
