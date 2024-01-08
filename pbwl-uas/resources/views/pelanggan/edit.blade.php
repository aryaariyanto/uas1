@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>
    <div class="container">

    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">Pelanggan ID</label>
            <input type="text" name="pel_id" id="" class="form-control" value="{{ $row->pel_id }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">Kode Paket</label>
            <input type="text" name="kode_paket" id="" class="form-control" value="{{ $row->kode_paket }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control" value="{{ $row->nama }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="alamat" id="" class="form-control" value="{{ $row->alamat }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">No HP</label>
            <input type="text" name="no_hp" id="" class="form-control" value="{{ $row->no_hp }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
