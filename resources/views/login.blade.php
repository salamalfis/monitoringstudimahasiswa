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

                                    <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang </h3>
                                    <p class="mb-0 text-center">Aplikasi Monitoring Perkembangan Studi Mahasiswa</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ url('login') }}">
                                        @csrf
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="email" id="email"
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                                value="{{ old('email') }}" {{-- Tambahkan AutoComplete="off" untuk menghilangkan autocomplete --}}>
                                            @error('email')
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

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <small class="text-muted">Lupa password? Klik
                                        <a href="{{ asset('forgot-password') }}"
                                            class="text-info text-gradient font-weight-bold">Disini!</a>
                                    </small>
                                    </p>
                                
                                    <small class="text-muted">Belum Punya Akun? Klik
                                        <a href="{{ asset('register') }}"
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
