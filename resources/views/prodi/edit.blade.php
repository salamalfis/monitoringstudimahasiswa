@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Program Studi</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{ $prodi->nama }}">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="" disabled selected>Pilih Jabatan</option>
                                    <option value="Kepala Program Studi" @if ($jabatan->jabatan == 'Kepala Program Studi') selected @endif>Kepala Program Studi</option>
                                    <option value="Sekretaris Program Studi" @if ($jabatan->jabatan == 'Sekretaris Program Studi') selected @endif>Sekretaris Program Studi</option>
                                    <option value="Sekretaris Program Studi Internasional" @if ($jabatan->jabatan == 'Sekretaris Program Studi Internasional') selected @endif>Sekretaris Program Studi Internasional</option>
                                    <option value="Staff Program Studi" @if ($jabatan->jabatan == 'Staff Program Studi') selected @endif>Staff Program Studi</option>
                                </select>
                                @error('jabatan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="iduser" class="form-label">NIP</label>
                                <input type="text" name="iduser" class="form-control" id="iduser"
                                    value="{{ $prodi->iduser }}">
                                @error('iduser')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4 mb-3">
                                <label for="emailsso" class="form-label">Email SSO</label>
                                <input type="text" name="emailsso" class="form-control" id="emailsso"
                                    value="{{ $prodi->emailsso }}">
                                @error('emailsso')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mx-4 mb-3">
                                <label for="emailpribadi" class="form-label">Email Pribadi</label>
                                <input type="text" name="emailpribadi" class="form-control" id="emailpribadi"
                                    value="{{ $prodi->emailpribadi }}">
                                @error('emailpribadi')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mx-4 mb-3">
                                <label for="notelp" class="form-label">No Telepon</label>
                                <input type="text" name="notelp" class="form-control" id="notelp"
                                    value="{{ $prodi->notelp }}">
                                @error('notelp')
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
