@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Peminatan</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mb-3">
                                <label for="kode" class="form-label">Kode Peminatan</label>
                                <input type="text" name="kode" class="form-control" id="kode"
                                    value="{{ $peminatan->kode_peminatan }}">
                                @error('kode')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4 mb-3">
                                <label for="nama" class="form-label">Nama Peminatan</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ $peminatan->nama_peminatan }}">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status">
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="1" {{ $peminatan->active == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ $peminatan->active == 0 ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                                @error('status')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Edit Peminatan</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
