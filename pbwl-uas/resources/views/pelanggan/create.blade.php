@extends('layouts.app')

@section('content')
    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Pelanggan ID</label>
            <input type="text" name="pel_id" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Kode Paket</label>
            <input type="text" name="kode_paket" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="text" name="no_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
