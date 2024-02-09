@extends('layouts.user_type.auth')

@section('content')


        <div class="modal-body p-0">
            <div class="card card-plain">
                <div class="card-header pb-0 text-center">
                    <h3 class="font-weight-bolder text-primary text-gradient">Registrasi Mahasiswa</h3>

                </div>
                <div class="card-body pb-3">
                    <form action="/mahasiswa" method="POST" >
                        @csrf
                        <label>Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                aria-describedby="name-addon">
                                @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                        <label>Nim</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nim" aria-label="Nim"
                                aria-describedby="nim-addon">
                                @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                        <label>Email</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="email-addon">
                        </div>
                        <label>Kelas</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kelas" aria-label="Kelas"
                                aria-describedby="kelas-addon">
                        </div>
                        <label>Angkatan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Angkatan" aria-label="Angkatan"
                                aria-describedby="angkatan-addon">
                        </div>

                        <label>Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password"
                                aria-label="Password" aria-describedby="password-addon">
                        </div>
                        <div class="form-check form-check-info text-left">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                checked="">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="javascrpt:;" class="text-dark font-weight-bolder">Terms
                                    and Conditions</a>
                            </label>
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
