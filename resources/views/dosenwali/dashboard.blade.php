@extends('layouts.user_type.auth')

@section('content')
    <div class="row" style="margin-bottom:100%;">
        <div class="col-xl-4 col-sm-3 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bolder">SI-45-01/40 Mahasiswa</p>
                                <p class="font-weight mb-0">
                                    Matkul Metlit 35 Mahasiswa
                                </p>
                                <p class="font-weight mb-0">
                                    Tugas Akhir 35 Mahasiswa
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2;">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-3 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bolder">SI-46-01/40 Mahasiswa</p>
                                <p class="font-weight mb-0">
                                    Matkul Metlit 35 Mahasiswa
                                </p>
                                <p class="font-weight mb-0">
                                    Tugas Akhir 35 Mahasiswa
                                </p>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-3 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bolder">Undur Diri</p>
                                <p>
                                    2 Mahasiswa
                                </p>

                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">

            <div class="col-16">

                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            JUDUL</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            NIM</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NAMA</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            PEMINATAN</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            KELAS</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            PROGRES</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            KIRIM PESAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sistem Dashboard Untuk Program Studi</td>
                                        <td>1202228412</td>
                                        <td>Alfia Sabila Azzahra</td>
                                        <td>Enterprise Resource System Develoment(ESD)</td>
                                        <td>SI-45-01</td>
                                        <td><a class="btn"
                                                style="color:white; padding:4px; border:none; background-color:red;">25%</a>
                                        </td>

                                        <td>
                                            <div style="display: inline;">

                                                <button class="fa-solid fa-paper-plane"
                                                    style=" border:none;background-color:white; color:#2684FF;">

                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sistem Stockopname Pada Gudang</td>
                                        <td>1202228412</td>
                                        <td>Aditia Dika</td>
                                        <td>Enterprise Resource System Develoment(ESD)</td>
                                        <td>SI-45-01</td>
                                        <td><a class="btn"
                                                style="color:white; padding:4px; border:none; background-color:red;">25%</a>
                                        </td>

                                        <td>
                                            <div style="display: inline;">

                                                <button class="fa-solid fa-paper-plane"
                                                    style=" border:none;background-color:white; color:#2684FF;">

                                                </button>


                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                        </div>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <script>
            var colors = ['#007bff', '#28a745', '#333333', '#c3e6cb', '#dc3545', '#6c757d'];

            /* large line chart */
            var chLine = document.getElementById("chLine");
            var chartData = {
                labels: ["S", "M", "T", "W", "T", "F", "S"],
                datasets: [{
                        data: [589, 445, 483, 503, 689, 692, 634],
                        backgroundColor: 'transparent',
                        borderColor: colors[0],
                        borderWidth: 4,
                        pointBackgroundColor: colors[0]
                    },
                    {
                        data: [639, 465, 493, 478, 589, 632, 674],
                        backgroundColor: colors[3],
                        borderColor: colors[1],
                        borderWidth: 4,
                        pointBackgroundColor: colors[1]
                    }
                ]
            };

            if (chLine) {
                new Chart(chLine, {
                    type: 'line',
                    data: chartData,
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: false
                                }
                            }]
                        },
                        legend: {
                            display: false
                        }
                    }
                });
            }
        </script>
    @endsection
