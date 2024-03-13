@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Judul TA</h6>
                    <div style="align-self: center; text-align: left;">
                        <h5 class="card-title" style="margin-top: 0px;">Perancangan dan Implementasi Aplikasi Monitoring Studi
                            Mahasiswa</h5>
                    </div><br>
                    <h6 class="card-subtitle text-muted">Status</h6>
                    <div style="align-self: center; text-align: left;">
                        <h5 class="card-title" style="margin-top: 0px;">Disetujui</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 2em;">
        <div class="col-md-12 col-lg-3">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Program Studi</h6>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em;">S1 Sistem Informasi</h5>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Dosen Pembimbing</h6>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em;">TAUFIK NUR ADI</h5>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Dosen Penguji</h6>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em;">IR. AHMAD MUSNANSYAH</h5>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="btn card" \>
                <div class="card-body" style="padding-bottom: 25px;">
                    <div class="row" style="margin-top: -1.09375rem;">
                        <div class="col">
                            <h6 class="card-subtitle text-muted" style="margin-top: 0px;">Anggota Kelompok</h6>
                        </div>
                        {{-- <div class="col" style="text-align: -webkit-right;">
                            <i class="material-icons"
                                style="font-size: 2em; color: rgb(10, 207, 131);">arrow_drop_down_circle</i>
                        </div> --}}
                    </div>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em; text-align: -webkit-left;"><span
                            class="dot">1 </span> ALFIS SALAM</h5>
                    <div class="collapse">
                        <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em; text-align: -webkit-left;">
                            <span class="dot">2</span> ALIFIA SABILA AZZAHRA
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 2em;">
        <div class="col">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Nilai Pembimbing</h6>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em;">95</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body" style="padding-bottom: 25px;">
                    <h6 class="card-subtitle text-muted">Nilai Penguji</h6>
                    <h5 class="card-title" style="margin-bottom: 0px; margin-top: 0.35em;">83</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 2em;">
        <div class="col">
            <h6 class="card-subtitle text-muted">
                <h4>Riwayat</h4>
            </h6>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-body">Group #709 - Perancangan dan Implementasi Aplikasi Monitoring Studi Mahasiswa <span
                        class="badge badge-success">APPROVED_LAB_RISET</span> <a href="/student/history-topic/709"
                        style="float: right;"> <i class="material-icons"
                            style="font-size: 2em; color: black;">keyboard_arrow_right</i></a></div>
            </div>
        </div>
        <div class="col">
            <h6 class="card-subtitle text-muted">
                <h4>Progress Desk Evaluation</h4>
            </h6>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-body">
                    <div class="MuiBox-root css-16r9pk3">
                        <div class="MuiStepper-root MuiStepper-vertical css-9tmuzo-MuiStepper-root">
                            <div class="MuiStep-root MuiStep-vertical Mui-completed css-8wcvy5-MuiStep-root"><span
                                    class="MuiStepLabel-root MuiStepLabel-vertical css-14sza3e-MuiStepLabel-root"><span
                                        class="MuiStepLabel-iconContainer Mui-completed css-vnkopk-MuiStepLabel-iconContainer"><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiStepIcon-root Mui-completed css-1u4zpwo-MuiSvgIcon-root-MuiStepIcon-root"
                                            focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="CheckCircleIcon">
                                            <path
                                                d="M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24zm-2 17l-5-5 1.4-1.4 3.6 3.6 7.6-7.6L19 8l-9 9z">
                                            </path>
                                        </svg></span><span
                                        class="MuiStepLabel-labelContainer css-1vyamtt-MuiStepLabel-labelContainer"><span
                                            class="MuiStepLabel-label Mui-completed css-1hv8oq8-MuiStepLabel-label">TA
                                            Selection</span></span></span>
                                <div class="MuiStepContent-root css-14yr603-MuiStepContent-root"></div>
                            </div>
                            <div
                                class="MuiStepConnector-root MuiStepConnector-vertical Mui-completed css-1pe7n21-MuiStepConnector-root">
                                <span
                                    class="MuiStepConnector-line MuiStepConnector-lineVertical css-8t49rw-MuiStepConnector-line"></span>
                            </div>
                            <div class="MuiStep-root MuiStep-vertical Mui-completed css-8wcvy5-MuiStep-root"><span
                                    class="MuiStepLabel-root MuiStepLabel-vertical css-14sza3e-MuiStepLabel-root"><span
                                        class="MuiStepLabel-iconContainer Mui-completed css-vnkopk-MuiStepLabel-iconContainer"><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiStepIcon-root Mui-completed css-1u4zpwo-MuiSvgIcon-root-MuiStepIcon-root"
                                            focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="CheckCircleIcon">
                                            <path
                                                d="M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24zm-2 17l-5-5 1.4-1.4 3.6 3.6 7.6-7.6L19 8l-9 9z">
                                            </path>
                                        </svg></span><span
                                        class="MuiStepLabel-labelContainer css-1vyamtt-MuiStepLabel-labelContainer"><span
                                            class="MuiStepLabel-label Mui-completed css-1hv8oq8-MuiStepLabel-label">Upload
                                            Bimbingan</span></span></span>
                                <div class="MuiStepContent-root css-14yr603-MuiStepContent-root"></div>
                            </div>
                            <div
                                class="MuiStepConnector-root MuiStepConnector-vertical Mui-completed css-1pe7n21-MuiStepConnector-root">
                                <span
                                    class="MuiStepConnector-line MuiStepConnector-lineVertical css-8t49rw-MuiStepConnector-line"></span>
                            </div>
                            <div class="MuiStep-root MuiStep-vertical Mui-completed css-8wcvy5-MuiStep-root"><span
                                    class="MuiStepLabel-root MuiStepLabel-vertical css-14sza3e-MuiStepLabel-root"><span
                                        class="MuiStepLabel-iconContainer Mui-completed css-vnkopk-MuiStepLabel-iconContainer"><svg
                                            class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium MuiStepIcon-root Mui-completed css-1u4zpwo-MuiSvgIcon-root-MuiStepIcon-root"
                                            focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                            data-testid="CheckCircleIcon">
                                            <path
                                                d="M12 0a12 12 0 1 0 0 24 12 12 0 0 0 0-24zm-2 17l-5-5 1.4-1.4 3.6 3.6 7.6-7.6L19 8l-9 9z">
                                            </path>
                                        </svg></span><span
                                        class="MuiStepLabel-labelContainer css-1vyamtt-MuiStepLabel-labelContainer"><span
                                            class="MuiStepLabel-label Mui-completed css-1hv8oq8-MuiStepLabel-label">Upload
                                            Dokumen Desk Evaluation</span></span></span>
                                <div class="MuiStepContent-root MuiStepContent-last css-1mz1l2x-MuiStepContent-root"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
