@extends('layouts.app')
@section('content')

<div class="container">

<h3>Daftar Pelanggan</h3>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Add Pelanggan</a>

<table class="table table-bordered">
      <tr>
            <th>Pelanggan ID</th>
            <th>Kode Paket</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>No HP</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->pel_id }}</td>
                  <td>{{ $row->kode_paket }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>{{ $row->no_hp }}</td>
                  <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection