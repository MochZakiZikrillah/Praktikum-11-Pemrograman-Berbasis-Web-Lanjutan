@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h1 class="display-4">DATA GOLONGAN</h1>
    <hr>
    <a href="{{ url('golongan/create') }}" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>TAMBAHKAN DATA GOLONGAN</a>
    <div class="table-responsive mt-3">
        <table class="table my-3 table bgindi" id="dtb">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="text-center">NO</th>
                    <th>KODE GOLONGAN</th>
                    <th>NAMA GOLONGAN</th>
                    <th class="text-center">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rows as $row)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $row->gol_kode }}</td>
                    <td>{{ $row->gol_nama }}</td>
                    <td class="text-center">
                        <a href="#edit{{ $row->id }}" data-bs-toggle="modal" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> |
                        <a href="{{ url('golongan/delete/' . $row->id) }}" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">
                        <i class="fa-solid fa-trash"></i>
                        </a>
                        @include('golongan.edit', ['row' => $row])
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data golongan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="addModalLabel">TAMBAH DATA GOLONGAN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('golongan/store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <center><label for="nama" class="form-label">NAMA GOLONGAN</label></center>
                        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama_gol" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection