@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Mahasiswa</p>
                                <h5 class="font-weight-bolder mb-0">
                                    144
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
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Tahun Ajaran 2024</p>
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

        <div class="container mt-4">


            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="metlitBarBlue"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="TABarBlue"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="metlitBar"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="TABar"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="undurDiri"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="Alasan"></canvas>
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
                        text: 'Grafik Mahasiswa Sedang Mengambil Metlit TA 2023/2024',
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: {
                            dash: [4, 4]
                        }, // for the grid lines
                        grid: {
                            color: '#aaa', // for the grid lines
                            tickColor: '#000', // for the tick mark
                            tickBorderDash: [2, 3], // also for the tick, if long enough
                            tickLength: 10, // just to see the dotted line
                            tickWidth: 2,
                            offset: true,
                            drawTicks: true, // true is default
                            drawOnChartArea: true // true is default
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    },

                },
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
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: {
                            dash: [4, 4]
                        }, // for the grid lines
                        grid: {
                            color: '#aaa', // for the grid lines
                            tickColor: '#000', // for the tick mark
                            tickBorderDash: [2, 3], // also for the tick, if long enough
                            tickLength: 10, // just to see the dotted line
                            tickWidth: 2,
                            offset: true,
                            drawTicks: true, // true is default
                            drawOnChartArea: true // true is default
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    },
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
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: {
                            dash: [4, 4]
                        }, // for the grid lines
                        grid: {
                            color: '#aaa', // for the grid lines
                            tickColor: '#000', // for the tick mark
                            tickBorderDash: [2, 3], // also for the tick, if long enough
                            tickLength: 10, // just to see the dotted line
                            tickWidth: 2,
                            offset: true,
                            drawTicks: true, // true is default
                            drawOnChartArea: true // true is default
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    },
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
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: {
                            dash: [4, 4]
                        }, // for the grid lines
                        grid: {
                            color: '#aaa', // for the grid lines
                            tickColor: '#000', // for the tick mark
                            tickBorderDash: [2, 3], // also for the tick, if long enough
                            tickLength: 10, // just to see the dotted line
                            tickWidth: 2,
                            offset: true,
                            drawTicks: true, // true is default
                            drawOnChartArea: true // true is default
                        },
                    },
                    x: {
                        grid: {
                            display: false,

                        }
                    },
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
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        border: {
                            dash: [4, 4]
                        }, // for the grid lines
                        grid: {
                            color: '#aaa', // for the grid lines
                            tickColor: '#000', // for the tick mark
                            tickBorderDash: [2, 3], // also for the tick, if long enough
                            tickLength: 10, // just to see the dotted line
                            tickWidth: 2,
                            offset: true,
                            drawTicks: true, // true is default
                            drawOnChartArea: true // true is default
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    },
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
                    },
                    legend: {
                        position: "bottom",
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false,
                        },
                        ticks: {
                            display: false
                        },
                    },
                    x: {
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false,
                        }
                    }
                }
            }
        });
    </script>
@endsection
