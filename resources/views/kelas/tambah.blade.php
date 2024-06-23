@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Tambah Kelas</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf

                            <div class="mx-4 mb-3">
                                <label for="kode" class="form-label">Kode Kelas</label>
                                <input type="text" name="kode" class="form-control" id="kode">
                                @error('kode')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mx-4 mb-3">
                                <label for="nama" class="form-label">Nama Kelas</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="angkatan" class="form-label">Angkatan</label>
                                <select name="angkatan" class="form-control" id="angkatan">
                                    <option value="" disabled selected>Pilih Angkatan</option>
                                    @foreach ($angkatan as $a)
                                        <option value="{{ $a->id }}">{{ $a->tahun_angkatan }}</option>
                                    @endforeach
                                </select>
                                @error('angkatan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4 mb-3">
                                <label for="nama" class="form-label">Kapasitas Kelas</label>
                                <input type="text" name="kapasitas" class="form-control" id="kapasitas">
                                @error('kapasitas')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                                @error('status')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Tambah Kelas</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
