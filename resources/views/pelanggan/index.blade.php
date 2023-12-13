@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h1 class="display-4">DATA PELANGGAN</h1>
    <hr>
    <a href="{{ url('pelanggan/create') }}" class="mb-3 btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#exampleModal"><i class="fa-solid fa-user-plus"></i>TAMBAH</a>
    <table class="table my-3 table bgindi" id="dtb">
        <thead>
            <tr>
                <th class="text-center bg-primary text-white">NO</th>
                <th class="bg-primary text-white">NO. PELANGGAN</th>
                <th class="bg-primary text-white">NAMA</th>
                <th class="bg-primary text-white">ALAMAT</th>
                <th class="bg-primary text-white">NO. HP</th>
                <th class="bg-primary text-white">GOLONGAN</th>
                <th class="bg-primary text-white">NO. SERI PLN</th>
                <th class="bg-primary text-white">NO. METERAN</th>
                <th class="bg-primary text-white">STATUS</th>
                <th class="text-center bg-primary text-white">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->golongan->gol_nama }}</td>
                <td>{{ $row->pel_seri }}</td>
                <td>{{ $row->pel_meteran }}</td>
                <td>
                    @if ($row->pel_aktif === 'Y')
                    <span class="badge bg-success">AKTIF</span>
                    @else
                    <span class="badge bg-danger">NONAKTIF</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('pelanggan.show', $row->id) }}" class="text-white btn btn-info fw-bold"><i class="fa-solid fa-circle-info"></i></a> |
                    <a href="#edit{{ $row->id }}" data-bs-toggle="modal" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> |
                    <a href="{{ url('pelanggan/delete/' . $row->id) }}" class="btn btn-danger"
                        onclick="return confirm('Hapus data ini?')"><i class="fa-solid fa-trash"></i></a>
                    @include('pelanggan.edit')
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">Tidak ada data pelanggan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Start Modal -->
<form action="{{ url('pelanggan/store') }}" method="post">
    <input type="hidden" value="{{ Auth::user()->id }}" name="pel_id_user">
    {{ csrf_field() }}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="addModalLabel">TAMBAH DATA PELANGGAN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="no" class="form-label">NOMOR PELANGGAN</label>
                        <input type="text" class="form-control" id="nama" name="pel_no" value="{{ $kodePel }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="golongan" class="form-label">GOLONGAN</label>
                        <select name="pel_id_gol" id="gol" class="form-select">
                            @foreach ($golongan as $row)
                                <option value="{{ $row->id }}">{{ $row->gol_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" id="pel_alamat" name="pel_alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">NO. HP</label>
                        <input type="text" class="form-control" id="pel_hp" name="pel_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="seri" class="form-label">NO. SERI</label>
                        <input type="text" class="form-control" id="pel_seri" name="pel_seri" required>
                    </div>
                    <div class="mb-3">
                        <label for="meteran" class="form-label">NO. METERAN</label>
                        <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" required>
                    </div>
                    <div class="mb-3">
                        <label for="aktif" class="form-label">STATUS</label>
                        <select name="pel_aktif" id="aktif" class="form-select">
                            <option value="Y">AKTIF</option>
                            <option value="N">NONAKTIF</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection