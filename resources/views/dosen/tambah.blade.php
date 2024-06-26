@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Tambah Dosen</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf

                            <div class="mx-3 mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                                    aria-label="Nama" aria-describedby="nama-addon" value="{{ old('nama') }}">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-3 mb-3">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="iduser" id="iduser" placeholder="NIP"
                                    aria-label="NIP" aria-describedby="nim-addon" value="{{ old('iduser') }}">
                                @error('iduser')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx3 mb-3">
                                <label>Peminatan</label>
                                <select class="form-control" name="peminatan" id="peminatan">
                                    <option value="" disabled selected>Pilih Peminatan</option>
                                    @foreach ($peminatan as $peminatanitem)
                                        <option value="{{ $peminatanitem->id }}">{{ $peminatanitem->nama }}</option>
                                    @endforeach
                                </select>
                                @error('peminatan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx3 mb-3">
                                <label>Labriset</label>
                                <select class="form-control" name="labriset" id="labriset">
                                    <option value="" disabled selected>Pilih Labriset</option>
                                    @foreach ($labriset as $labrisetitem)
                                        <option value="{{ $labrisetitem->id }}">{{ $labrisetitem->nama }}</option>
                                    @endforeach
                                </select>
                                @error('labriset')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-3 mb-3">
                                <label>Email SSO</label>
                                <input type="text" class="form-control" name="emailsso" id="emailsso"
                                    placeholder="Email SSO" aria-label="EmailSSO" aria-describedby="emailsso-addon"
                                    value="{{ old('emailsso') }}" {{-- Tambahkan AutoComplete="off" untuk menghilangkan autocomplete --}}>
                                @error('emailsso')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-3 mb-3">
                                <label>Email Pribadi</label>
                                <input type="text" class="form-control" name="emailpribadi" id="emailpribadi"
                                    placeholder="Email Pribadi" aria-label="Email Pribadi"
                                    aria-describedby="email-pribadi-addon" value="{{ old('emailpribadi') }}">
                                @error('emailpribadi')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-3 mb-3">
                                <label>No Telepon</label>
                                <input type="text" class="form-control" name="notelp" id="notelp"
                                    placeholder="No Telepon" aria-label="No Telepon" aria-describedby="no-telepon-addon"
                                    value="{{ old('notelp') }}">
                                @error('notelp')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Peminatan</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
