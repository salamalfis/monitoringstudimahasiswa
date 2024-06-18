@extends('layouts.user_type.auth')

@section('content')
    <div class="row" style="margin-bottom:100%;">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">SKS Lulus</p>
                                <h5 class="font-weight-bolder mb-0">
                                    114
                                </h5>
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

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">SKS Berjalan</p>
                                <h5 class="font-weight-bolder mb-0">
                                    3
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai Akhir Metlit</p>
                                <h5 class="font-weight-bolder mb-0">
                                    3
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nilai Tugas Akhir</p>
                                <h5 class="font-weight-bolder mb-0">
                                    -
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow text-center border-radius-md"
                                style="background-color:#6191B2">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">


            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="circle" style="margin-left:40%;"> <span>70%</span> </div>
                            <div class="text-center">
                                <label for="">progres total anda : 70 %</label>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <label for="">Progress Bimbingan</label>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" style="background-color:green"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">Progress Dokumen</label>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" style="background-color:green"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="circle2" style="margin-left:40%;"> <span>35%</span> </div>
                            <div class="text-center">
                                <label for="">progres total anda : 35 %</label>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <label for="">Progress Bimbingan</label>
                                    <div class="progress">
                                        <div class="progress-bar w-35" role="progressbar" style="background-color:red"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">Progress Dokumen</label>
                                    <div class="progress">
                                        <div class="progress-bar w-35" role="progressbar" style="background-color:red"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const a1 = document.getElementById('metlitBarBlue');
        const a2 = document.getElementById('TABarBlue');

        const c1 = document.getElementById('metlitBar');
        const c2 = document.getElementById('TABar');


        const e1 = document.getElementById('undurDiri');
        const e2 = document.getElementById('Alasan');


        //METLIT CHART BAR BLUE
        new Chart(a1, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    borderColor: "#5082A7",
                    backgroundColor: "#5082A7",
                    label: 'Angkatan',
                    data: [18, 19, 24, 20, 23, 24, 20],
                    borderWidth: 1
                }, ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Mahasiswa Sedang Mengambil Metlit TA 2023/2024'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });

        //TA BAR CHART
        new Chart(a2, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    borderColor: "#5082A7",
                    backgroundColor: "#5082A7",
                    label: 'Angkatan',
                    data: [18, 19, 24, 20, 23, 24, 20],
                    borderWidth: 1
                }, ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Mahasiswa Sedang Mengambil Tugas Akhir TA  2023/2024'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });


        //METLIT CHART BAR
        new Chart(c1, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                        borderColor: "red",
                        backgroundColor: "red",
                        label: 'Off track',
                        data: [4, 2, 1, 10, 1, 1, 1],
                        borderWidth: 1
                    },
                    {
                        borderColor: "green",
                        backgroundColor: "green",
                        label: 'On Track',
                        data: [18, 19, 24, 20, 23, 24, 20],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Progres Metlit Mahasiswa'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });

        //TA BAR CHART
        new Chart(c2, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                        borderColor: "red",
                        backgroundColor: "red",
                        label: 'Off track',
                        data: [4, 2, 1, 10, 1, 1, 1],
                        borderWidth: 1
                    },
                    {
                        borderColor: "green",
                        backgroundColor: "green",
                        label: 'On Track',
                        data: [18, 19, 24, 20, 23, 24, 20],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Progres TA Mahasiswa'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });

        new Chart(e1, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    borderColor: "#5082A7",
                    backgroundColor: "#5082A7",
                    label: 'Angkatan',
                    data: [2, 5, 10, 11, 2, 1, 8],
                    borderWidth: 1
                }, ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Undur Diri Mahasiswa'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });


        new Chart(e2, {
            type: 'pie',
            data: {
                labels: ['Pindah Kampus', 'Sakit', 'Bekerja', 'Lainnya', 'Menikah', 'Ekonomi', 'Masalah Akademik'],
                datasets: [{
                    borderColor: "#5082A7",
                    backgroundColor: "#344767",
                    label: 'Angkatan',
                    backgroundColor: ['#344767', '#AAD4E2', '#98B6CC', '#7087AE', '#7087AE', '#E8F3F7',
                        '#8893A6'
                    ],
                    data: [
                        12, 19, 20, 12, 20, 12
                    ],
                    borderWidth: 1
                }, ]

            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Grafik Alasan Undur Diri Mahasiswa',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>
@endsection
