@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Tambah Lab Riset</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            <div class="mx-4 mb-3">
                                <label for="kode_lab" class="form-label">Kode Lab Riset</label>
                                <input type="text" name="kode_lab" class="form-control" id="kode_lab">
                                @error('kode_lab')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4 mb-3">
                                <label for="nama_lab" class="form-label">Nama Lab Riset</label>
                                <input type="text" name="nama_lab" class="form-control" id="nama_lab">
                                @error('nama_lab')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mx-4 mb-3">
                                <label for="peminatan_id" class="form-label">Peminatan</label>
                                <select name="peminatan_id" class="form-control" id="peminatan_id">
                                    <option value="" disabled selected>Pilih Peminatan</option>
                                    @foreach ($peminatan as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama_peminatan }}</option>
                                    @endforeach
                                </select>
                                @error('peminatan_id')
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
                                <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Lab Riset</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
