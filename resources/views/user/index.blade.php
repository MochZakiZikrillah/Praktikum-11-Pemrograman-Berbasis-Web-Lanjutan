@extends('layouts.app')

@section('content')

<div class="mt-3">
<h1>Data User</h1>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Kembali</a>
    <hr>
    <table class="table my-3 table-striped" id="dtb">
        <!-- Table Header -->
        <thead>
            <tr>
                <th class="text-center bg-primary text-white">NO</th>
                <th class=" bg-primary text-white">Nama</th>
                <th class=" bg-primary text-white">Email</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    {{-- <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
