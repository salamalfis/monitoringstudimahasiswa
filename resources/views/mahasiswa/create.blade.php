@extends('layouts.user_type.auth')

@section('content')

    <div class="row bg-white border-radius-xl shadow-none">
        <div class="body p-0">
            <div class="card card-plain">
                <div class="card-header pb-0 text-center">
                    <h3 class="font-weight-bolder text-primary text-gradient">Registrasi Mahasiswa</h3>

                </div>
                <div class="card-body pb-3">
                    <form action="" method="POST" >
                        @csrf
                        <label>Nama</label>
                        <div class=" mb-3">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" aria-label="Nama" aria-describedby="nama" value="{{ old('nama') }}">
                            @error('nama')
                              <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <label>Nim</label>
                        <div class=" mb-3">
                            <input type="text" class="form-control" placeholder="Nim" name="nim" id="nim" aria-label="Nim"  value="{{ old('nim') }}"
                                aria-describedby="nim-addon">
                                @error('nim')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                        <label>Email</label>
                        <div class=" mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Email" value="{{ old('email') }}"
                                aria-describedby="email-addon">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                        <label>Kelas</label>
                        <div class=" mb-3">
                            <input type="text" class="form-control" placeholder="Kelas" name="kelas" id="kelas" aria-label="Kelas" value="{{ old('kelas') }}"
                                aria-describedby="kelas-addon">
                                @error('kelas')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>

                                @enderror
                        </div>
                        <label>Angkatan</label>
                        <div class=" mb-3">
                            <input type="text" class="form-control" placeholder="Angkatan" name="angkatan" id="angkatan" aria-label="Angkatan" value="{{ old('angkatan') }}"
                                aria-describedby="angkatan-addon">
                                @error('angkatan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>

                        <label>Dosen Wali</label>
                        <div class=" mb-3">
                            <input type="text" class="form-control" placeholder="Dosen Wali" name="dosenwali" id="dosenwali" aria-label="dosenwali" value="{{ old('dosenwali') }}"
                                aria-describedby="dosenwali-addon">
                                @error('dosenwali')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                        <label>Password</label>
                        <div class=" mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="Password" value="{{ old('password') }}">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>

                                @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Daftar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
