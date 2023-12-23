@extends('layouts.navbar')
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="display-3 text-white animated slideInDown">Hasil Beasiswa</h2>
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>

             
            </div>
            
        </div>
        <!-- Header End -->
        <div class="container">
            <table class="data-table table stripe hover nowrap" id="hasil">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Semester</th>
                        <th scope="col">IPK</th>
                        <th scope="col">Jalur Beasiswa</th>
                        <th scope="col">Status Ajuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->nohp }}</td>
                            <td>{{ $d->semester }}</td>
                            <td>{{ $d->ipk }}</td>
                            <td>{{ $d->jenis_beasiswa }}</td>
                            <td>{{ $d->status_ajuan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Beasiswa</h5>

                        <!-- Pie Chart -->
                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                        <script>
                            var akademik = {{ $akademik }}
                            var nonakademik = {{ $nonakademik }}
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#pieChart'), {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            'Akademik',
                                            'Non akademik',
                                        ],
                                        datasets: [{
                                            label: 'jenis beasiswa',
                                            data: [
                                                akademik,
                                                nonakademik
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                        <!-- End Pie CHart -->
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection