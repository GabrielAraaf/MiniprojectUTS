@extends('layouts.app')

@section('content')
<body style="background-color: darkslategrey">

<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <img src="foto profil.jpg" class="img-fluid rounded-start" alt="...">
                <h4>Biodata Mahasiswa</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="namaBarang" class="form-label">Nama: Muhammad Gabriel A'raaf Rudiansyah</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="hargaBarang" class="form-label">NIM: 1204220112</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="deskripsi" class="formlabel">Program Studi: Sistem Informasi</label>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="satuan" class="formlabel">Student Of Telkom University Surabaya</label>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
</body>
@endsection
