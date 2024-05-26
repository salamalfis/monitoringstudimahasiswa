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

                                    <div class="text-center">
                                        <p>Silahkan Pilih Role: </p>
                                        <div class="mx-2">
                                            <a href="register-dosen-wali" class="btn bg-gradient-info w-100 "
                                                value="dosen_wali">Dosen
                                                Wali</a>
                                        </div>

                                        <div class="mx-2">
                                            <a href="register-mahasiswa" class="btn bg-gradient-info w-100 "
                                                value="mahasiswa">Mahasiswa</a>
                                        </div>
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