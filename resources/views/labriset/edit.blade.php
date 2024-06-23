@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Lab Riset</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mb-3">
                                <label for="kode_lab" class="form-label">Kode Lab Riset</label>
                                <input type="text" name="kode_lab" class="form-control" id="kode_lab"
                                    value="{{ $labriset->kode_labriset }}">
                                @error('kode_lab')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4 mb-3">
                                <label for="nama_lab" class="form-label">Nama Lab Riset</label>
                                <input type="text" name="nama_lab" class="form-control" id="nama_lab"
                                    value="{{ $labriset->nama_labriset }}">
                                @error('nama_lab')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mx-4 mb-3">
                                <label for="peminatan_id"
                                    class="form-label
                                    ">Peminatan</label>
                                <select name="peminatan_id" class="form-select" id="peminatan_id">
                                    <option value="" disabled selected>Pilih Peminatan</option>
                                    @foreach ($peminatan as $p)
                                        <option value="{{ $p->id }}"
                                            {{ $labriset->peminatan_id == $p->id ? 'selected' : '' }}>
                                            {{ $p->nama_peminatan }}</option>
                                    @endforeach
                                </select>
                                @error('peminatan_id')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="status">
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="1" {{ $labriset->active == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ $labriset->active == 0 ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                                @error('status')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Edit Lab Riset</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
