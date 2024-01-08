@extends('layouts.app')
@section('content')

<div class="container">

<h3>Daftar Paket</h3>

<a href="{{ url('paket/create') }}" class="btn btn-primary mb-3 float-end">Add Paket</a>

<table class="table table-bordered">
      <tr>
            <th>ID Paket</th>
            <th>Kode Paket</th>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->id_paket }}</td>
                  <td>{{ $row->kode_paket }}</td>
                  <td>{{ $row->nama_paket }}</td>
                  <td>{{ $row->harga }}</td>
                  <td><a href="{{ url('paket/edit/' . $row->id_paket) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('paket/' . $row->id_paket) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection