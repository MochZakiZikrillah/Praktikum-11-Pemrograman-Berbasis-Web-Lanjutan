@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="...">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="..." crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="..." crossorigin="anonymous"></script>

<style>
    body {
        background-color: #f8f9fa; /* Warna latar belakang abu-abu terang */
        color: #495057; /* Warna teks abu-abu gelap */
    }

    .card {
        background-color: #ffffff; /* Warna latar belakang kartu putih */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff; /* Warna biru utama */
        color: #ffffff; /* Teks putih */
        font-size: 24px;
        text-align: center;
        border-bottom: 0; /* Hapus batas bawaan */
    }

    .card-body {
        padding: 20px;
    }

    .lead {
        font-size: 18px;
    }

    .btn-primary {
        background-color: #007bff; /* Warna biru utama */
        border-color: #007bff;
        width: 100%; /* Tombol mengambil lebar penuh */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Sedikit lebih gelap saat dihover */
        border-color: #0056b3;
    }

    .table {
        background-color: #ffffff; /* Warna latar belakang tabel putih */
    }

    /* Tengahkan tabel di dalam kartu */
    .center-table {
        margin: 0 auto;
    }
</style>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p class="lead">Projek CRUD sederhana menggunakan Laravel dan Bootstrap adalah implementasi dasar untuk membuat, membaca, memperbarui, dan menghapus entri dalam sebuah aplikasi web. Ini melibatkan penggunaan framework PHP Laravel untuk mengatur logika backend dan Bootstrap sebagai kerangka kerja front-end untuk mengatur tata letak dan tampilan.</p>
                   
                    <hr class="my-4">

                    <h5>Informasi Project:</h5>
                    <p>Nama Proyek: Kuis Praktikum 11 Pemrograman Berbasis Web Lanjutan</p>
                    <p>Tanggal Mulai: 6 Desember 2023</p>
                    <p>Status: Aktif</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection