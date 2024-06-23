@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Angkatan</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mb-3">
                                <label for="angkatan" class="form-label">Tahun Angkatan</label>
                                <input type="text" name="angkatan" class="form-control" id="angkatan"
                                    value="{{ $angkatan->tahun_angkatan }}">
                                @error('angkatan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status">
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="1" {{ $angkatan->active == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ $angkatan->active == 0 ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                                @error('status')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                                <div class="mx-5 mt-3 d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-info ">Edit Angkatan</button>

                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
