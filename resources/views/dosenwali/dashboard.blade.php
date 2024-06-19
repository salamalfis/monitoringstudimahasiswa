@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-xl-4 col-sm-3 mb-xl-0 mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-1 text-capitalize font-weight-bolder">SI-45-01/40 Mahasiswa</p>
                                <p class="font-weight mb-1 text-sm">
                                    Metode Penelitian 35 Mahasiswa
                                </p>
                                <p class="font-weight mb-1 text-sm">
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
                            <table class="table align-items-center mb-0 mw-100">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-wrap">
                                            Nama
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-wrap">
                                            Judul
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            PEMINATAN</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-wrap">
                                            Kelas
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-wrap ">
                                            Progres
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7 text-wrap">
                                            Komentar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0 text-wrap">Alifia Sabilla
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0 text-wrap">Sistem Dashboard Untuk
                                                Program Studi
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0 text-wrap">Enterprise Resource System
                                                Develoment (EISD)
                                            </p>
                                        </td>


                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0 text-wrap">SI-45-01
                                            </p>
                                        </td>

                                        <td class="text-center">
                                            <a class="btn"
                                                style="color:white; padding:4px; border:none; background-color:red;">25%</a>
                                        </td>

                                        <td class="text-center">
                                            <div style="display: inline;">

                                                <button class="fa-solid fa-paper-plane"
                                                    style=" border:none;background-color:white; color:#2684FF;">
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
