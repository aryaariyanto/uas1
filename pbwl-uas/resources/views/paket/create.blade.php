@extends('layouts.app')

@section('content')
    <h2>Add Paket</h2>

    <form action="{{ url('paket') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Id Paket</label>
            <input type="text" name="id_paket" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Kode Paket</label>
            <input type="text" name="kode_paket" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama Paket</label>
            <input type="text" name="nama_paket" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Harga</label>
            <input type="text" name="harga" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
