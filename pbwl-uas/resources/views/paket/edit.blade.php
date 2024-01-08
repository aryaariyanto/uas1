@extends('layouts.app')

@section('content')
    <h2>Edit Paket</h2>
    <div class="container">

    <form action="{{ url('paket/' . $row->id_paket) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">ID Paket</label>
            <input type="text" name="id_paket" id="" class="form-control" value="{{ $row->id_paket }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">Kode Paket</label>
            <input type="text" name="kode_paket" id="" class="form-control" value="{{ $row->kode_paket }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">Nama Paket</label>
            <input type="text" name="nama_paket" id="" class="form-control" value="{{ $row->nama_paket }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">Harga</label>
            <input type="text" name="harga" id="" class="form-control" value="{{ $row->harga }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
