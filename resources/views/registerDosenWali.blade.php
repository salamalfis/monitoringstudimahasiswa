@extends('layouts.user_type.guest')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-7">

                                <div class="card-header pb-0 text-center bg-transparent">

                                    <h4 class="font-weight-bolder text-info text-gradient">Registrasi Dosen Wali </h4>
                                    <p class="mb-0 text-center">Aplikasi Monitoring Perkembangan Studi Mahasiswa</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ url('login') }}">
                                        @csrf


                                        <label>Nama</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                placeholder="Nama" aria-label="Nama" aria-describedby="nama-addon"
                                                value="{{ old('nama') }}">
                                            @error('nama')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <label>NIP</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="nip" id="nip"
                                                placeholder="NIP" aria-label="NIP" aria-describedby="nip-addon"
                                                value="{{ old('nip') }}">
                                            @error('nip')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <label>Kelas</label>
                                        <div class="mb-3">
                                            <select class="form-control" name="kelas" id="kelas">
                                                <option value="">Pilih Kelas</option>
                                                {{-- @foreach ($kelas as $k)
                                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                                @endforeach --}}
                                            </select>
                                            @error('kelas')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label>Email SSO</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email SSO" aria-label="EmailSSO"
                                                aria-describedby="emailsso-addon" value="{{ old('emailsso') }}"
                                                {{-- Tambahkan AutoComplete="off" untuk menghilangkan autocomplete --}}>
                                            @error('emailsso')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label>Email Pribadi</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="email_pribadi"
                                                id="email_pribadi" placeholder="Email Pribadi" aria-label="Email Pribadi"
                                                aria-describedby="email-pribadi-addon" value="{{ old('email_pribadi') }}">
                                            @error('email_pribadi')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <label>No Telepon</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="no_telepon" id="no_telepon"
                                                placeholder="No Telepon" aria-label="No Telepon"
                                                aria-describedby="no-telepon-addon" value="{{ old('no_telepon') }}">
                                            @error('no_telepon')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <label>Jenis Kelamin</label>
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="laki-laki" value="Laki-laki">
                                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="perempuan" value="Perempuan">
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
                                            @error('jenis_kelamin')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Password" aria-label="Password"
                                                aria-describedby="password-addon">
                                            @error('password')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label>Konfirmasi Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password_confirmation"
                                                id="password_confirmation" placeholder="Konfirmasi Password"
                                                aria-label="Konfirmasi Password"
                                                aria-describedby="password-confirmation-addon">
                                            @error('password_confirmation')
                                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Register
                                                Dosen Wali</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">

                                    <small class="text-muted">Sudah Punya Akun? Klik
                                        <a href="{{ asset('') }}"
                                            class="text-info text-gradient font-weight-bold">Disini!</a>
                                    </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('') }}assets/img/.jpeg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
