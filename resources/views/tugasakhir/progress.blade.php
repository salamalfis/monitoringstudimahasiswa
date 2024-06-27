@extends('layouts.user_type.auth')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Indek Prestasi Kumulatif</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="ipk" class="form-label">IPK Mahasiswa</label>
                            <input type="text" name="ipk" class="form-control" id="ipk"
                                placeholder="IPK Mahasiswa" autocomplete="off">
                            @error('ipk')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah TAK</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between ">
                        <h6 class="mb-4">Transkrip Aktivitas Kemahasiswaan</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="iduser" class="form-label">TAK Mahasiswa</label>
                            <input type="text" name="iduser" class="form-control" id="iduser"
                                placeholder="TAK Mahasiswa" autocomplete="off">
                            @error('iduser')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah TAK</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Satuan kredit semester
                        </h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="sksselesai" class="form-label">SKS Mahasiswa</label>
                            <input type="text" name="sksselesai" class="form-control" id="sksselesai"
                                placeholder="SKS Selesai Mahasiswa" autocomplete="off">

                            @error('sksselesai')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="mx-4 mb-3">
                            <label for="sksberjalan" class="form-label
                            ">SKS Berjalan
                                Mahasiswa</label>
                            <input type="text" name="sksberjalan" class="form-control" id="sksberjalan"
                                placeholder="SKS Berjalan Mahasiswa" autocomplete="off">
                            @error('sksberjalan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah SKS </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">English Proficiency Test</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="iduser" class="form-label">EPRT Mahasiswa</label>
                            <input type="text" name="iduser" class="form-control" id="iduser"
                                placeholder="EPRT Mahasiswa" autocomplete="off">
                            @error('iduser')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-4 mb-3">
                            <label for="eprt" class="form-label">Bukti EPRT</label>
                            <input type="file" name="eprt" class="form-control" id="eprt"
                                accept=".pdf,.doc,.docx">
                            @error('eprt')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah EPRT</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">SK Tugas Akhir</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="skta" class="form-label">SKTA Mahasiswa</label>
                            <input type="file" name="skta" class="form-control" id="skta"
                                placeholder="Bab 2 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('skta')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah SKTA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Proposal Lengkap</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="proposal" class="form-label">Proposal Lengkap</label>
                            <input type="file" name="proposal" class="form-control" id="proposal"
                                placeholder="Proposal Lengkap" accept=".pdf,.doc,.docx">
                            @error('proposal')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Proposal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Progres BAB 4</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab4" class="form-label">BAB 4 Mahasiswa</label>
                            <input type="file" name="bab4" class="form-control" id="bab4"
                                placeholder="Bab 3 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('bab4')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 4</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Progres BAB 5</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab5" class="form-label">BAB 5 Mahasiswa</label>
                            <input type="file" name="bab5" class="form-control" id="bab5"
                                placeholder="Bab 3 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('bab5')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 5</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Progres BAB 6</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab6" class="form-label">BAB 6 Mahasiswa</label>
                            <input type="file" name="bab4" class="form-control" id="bab6"
                                placeholder="Bab 6 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('bab6')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 6</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Draft Tugas Akhir</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="draft" class="form-label">Draft TA Mahasiswa</label>
                            <input type="file" name="draft" class="form-control" id="draft"
                                placeholder="Draft TA Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('draft')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Draft</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
