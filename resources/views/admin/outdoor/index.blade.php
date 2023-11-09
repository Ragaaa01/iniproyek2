@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Barang</h3>
            <a href="{{route('outdoor_create')}}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Gambar Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($outdoor as $barang)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $barang->nama_barang }}</td>
                            <td>
                                <img src="{{ Storage::url($barang->gambar) }}" width="200" alt="">
                            </td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi }}</td>
                            <td>{{ $barang->status }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Datang Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection