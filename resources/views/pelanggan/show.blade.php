@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h1 class="display-4">DETAIL DATA PELANGGAN</h1>
    <hr>
    <table class="table my-3 table bg-blue" id="dtb">
        <tbody>
            <tr>
                <th>NO. PELANGGAN</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_no }}</td>
            </tr>
            <tr>
                <th>NAMA</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_nama }}</td>
            </tr>
            <tr class="mb-3">
                <th>GOLONGAN</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->golongan->gol_nama }}</td>
            </tr>
            <tr>
                <th>ALAMAT</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_alamat }}</td>
            </tr>
            <tr>
                <th>NO. HP</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_hp }}</td>
            </tr>
            <tr>
                <th>NO. SERI PLN</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_seri }}</td>
            </tr>
            <tr>
                <th>NO. METERAN</th>
                <td class="border-start"></td>
                <td>{{ $pelanggan->pel_meteran }}</td>
            </tr>
            <tr>
                <th>STATUS</th>
                <td class="border-start"></td>
                @if ($pelanggan->pel_aktif === 'Y')
                    <td><span class="badge bg-success">AKTIF</span></td>
                @else
                    <td><span class="badge bg-danger">NONAKTIF</span></td>
                @endif
                <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">KEMBALI</a>
            </tr>
        </tbody>
    </table>
</div>
@endsection