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
                        <h6 class="mb-4">Progres BAB 1</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab1" class="form-label">BAB 1 Mahasiswa</label>
                            <input type="file" name="bab1" class="form-control" id="bab1"
                                placeholder="Bab 1 Mahasiswa"  accept=".pdf,.doc,.docx">
                            @error('bab1')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 1</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h6 class="mb-4">Progres BAB 2</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab2" class="form-label">BAB 2 Mahasiswa</label>
                            <input type="file" name="bab2" class="form-control" id="bab2"
                                placeholder="Bab 2 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('bab2')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 2</button>
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
                        <h6 class="mb-4">Progres BAB 3</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="bab3" class="form-label">BAB 3 Mahasiswa</label>
                            <input type="file" name="bab3" class="form-control" id="bab3"
                                placeholder="Bab 3 Mahasiswa" accept=".pdf,.doc,.docx">
                            @error('bab3')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah BAB 3</button>
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
                            <label for="proposal" class="form-label">Proposal Mahasiswa</label>
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
@endsection
