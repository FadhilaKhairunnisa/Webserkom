@extends('layouts.navbar')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Pendaftaran</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Daftar Beasiswa Tunas Muda Indonesia</h6>
                <h1 class="mb-5">Registasi Beasiswa</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    @if (Session::has('success'))
                    <a href="/hasil">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </a>
                @endif
                <form action="{{ route('pendaftaran.store') }}" method="POST" class="text-main"
                    enctype="multipart/form-data" id="beasiswaForm">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <select class="form-select border-0 bg-light px-4" name="nim" id="nim"
                                style="height: 55px;">
                                <option value="" disabled selected>Pilih NIM</option>
                                <!-- Tampilkan daftar NIM dari database -->
                                @foreach ($daftarNIM as $nim)
                                    <option value="{{ $nim }}">{{ $nim }}</option>
                                @endforeach
                            </select>
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('nim') }}</div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="nama"
                                placeholder="Masukan Nama Anda" value="{{ isset($mahasiswa->nama) ? $nama : '' }}"
                                style="height: 55px;" readonly>
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('nama') }}</div>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control border-0 bg-light px-4" name="email"
                                placeholder="Masukan Email" style="height: 55px;">
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('email') }}</div>
                        </div>
                        <div class="col-md-12">
                            <input type="number" class="form-control border-0 bg-light px-4" name="nohp"
                                placeholder="Masukan Nomor HP" style="height: 55px;">
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('nohp') }}</div>
                        </div>
                        <div class="col-md-12">
                            <select class="form-select border-0 bg-light px-4" name="semester" id style="height: 55px;">
                                <option value="" disabled selected>Semester</option>
                                @for ($i = 1; $i <= 8; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('semester') }}</div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control border-0 bg-light px-4" name="ipk"
                                id="ipk" value="{{ isset($mahasiswa->ipk) ? $ipk : '' }}"
                                placeholder="Masukan IPK" style="height: 55px;" readonly>
                            <div class="errors text-danger" style="font-size: 14px" hidden id="ipkError">
                                IPK dibawah 3, tidak dapat mendaftar beasiswa
                            </div>
                        </div>

                        <div class="col-md-12">
                            <select class="form-select border-0 bg-light px-4" name="jenis_beasiswa"
                                style="height: 55px;" id="jenisBeasiswa" disabled>
                                <option value="" disabled selected>Jenis Beasiswa</option>
                                <option value="akademik">Akademik</option>
                                <option value="nonakademik">Non Akademik</option>
                            </select>
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('jenis_beasiswa') }}</div>
                        </div>

                        <div class="col-md-12">
                            <input type="file" class="form-control border-0 bg-light px-4" name="upload_berkas"
                                id="uploadBerkas" style="height: 55px;" accept=".jpg, .zip, .pdf" disabled>
                            <div class="errors text-danger" style="font-size: 14px">
                                {{ $errors->pendaftaran->first('upload_berkas') }}</div>
                        </div>
                        <div class="col-12">
                            <button id="btnDaftar" class="btn btn-primary w-100 py-3" type="submit" disabled>Daftar
                                Beasiswa</button>
                            <button id="btnCancel" class="btn btn-secondary w-100 mt-3 py-3" type="button"
                                disabled>Cancel</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            let ipkValue = "";
            // Menangkap perubahan pada pilihan NIM
            $('#nim').on('change', function() {
                var nim = $(this).val();

                // Lakukan permintaan AJAX untuk mengambil data mahasiswa berdasarkan NIM
                $.ajax({
                    url: '/get-mahasiswa/' + nim, // Ganti dengan URL yang sesuai di aplikasi Anda
                    dataType: 'json',
                    type: 'GET',
                    success: function(data) {
                        // Isi nilai nama dan IPK dengan data yang diambil dari server
                        $('input[name="nama"]').val(data.nama);
                        $('input[name="ipk"]').val(data.ipk);
                        ipkValue = data.ipk;
                        console.log(ipkValue);
                        // Mendapatkan elemen input jenis beasiswa
                        let jenisBeasiswaInput = document.getElementById("jenisBeasiswa");
                        let upload_berkas = document.getElementById("uploadBerkas");
                        let button = document.getElementById("btnDaftar");
                        let button_cancel = document.getElementById("btnCancel");
                        let ipkError = document.getElementById("ipkError");


                        // Memeriksa apakah IPK kurang dari 3, jika ya, nonaktifkan input jenis beasiswa
                        if (ipkValue < 3) {
                            ipkError.hidden = false;
                            jenisBeasiswaInput.disabled = true;
                            upload_berkas.disabled = true;
                            button.disabled = true;
                            button_cancel.disabled = true;
                        } else {
                            ipkError.hidden = true;
                            jenisBeasiswaInput.disabled = false;
                            upload_berkas.disabled = false;
                            button.disabled = false;
                            button_cancel.disabled = false;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });

            });
            $('#btnCancel').on('click', function() {
                // Mengosongkan semua input form
                $('select[name="nim"]').val('');
                $('input[name="nama"]').val('');
                $('input[name="ipk"]').val('');
                $('input[name="email"]').val('');
                $('input[name="nomor_hp"]').val('');
                $('select[name="semester"]').val('');
                $('select[name="jenis_beasiswa"]').val('');
                $('input[name="upload_berkas"]').val('');
                // Menonaktifkan input jenis beasiswa, upload berkas, dan tombol daftar
                document.getElementById("jenisBeasiswa").disabled = true;
                document.getElementById("uploadBerkas").disabled = true;
                document.getElementById("btnDaftar").disabled = true;
                document.getElementById("btnCancel").disabled = true;
            });
        });
    </script>
@endsection
