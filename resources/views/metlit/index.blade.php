@extends('layouts.user_type.auth')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="mb-4">Tambah Anggota Kelompok</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="/tambah-anggota-metode-penelitian" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="iduser" class="form-label">Nim Anggota</label>
                            <input type="text" name="iduser" class="form-control" id="iduser">
                            @error('iduser')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-5 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Anggota</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
