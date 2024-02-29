@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>

                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                            aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Cari">
                                </div>
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#registrationModal"
                                class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah
                                Mahasiswa</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nim
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kelas
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @forelse ($mahasiswa as $mhs)
                                        <?php $i++; ?>
                                        <tr>
                                            <td class="text-center ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $mhs->nama }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $mhs->nim }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $mhs->kelas }}</p>
                                            </td>

                                       


                                            <td class="text-center ">

                                                <a type="button" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Detail Mahasiswa">
                                                    <i class="fas fa-eye text-secondary"></i>
                                                </a>

                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Mahasiswa">
                                                    <i class="fas fa-pencil-alt text-secondary"></i>
                                                </a>

                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Reset Password">
                                                    <i class="fas fa-key text-secondary"></i>
                                                </a>

                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Deactive Mahasiswa">
                                                    <i class=" fas fa-user-slash text-secondary"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>

                                            <td class="text-center" colspan="8">
                                                <p class="text-xs font-weight-bold mb-0">Data
                                                    {{ str_replace('-', ' ', Str::title(Request::path())) }} tidak ditemukan
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body
                ">
                    <form action="mahasiswa-tambah" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" aria-label="nama"
                                value="{{ old('nama') }}" aria-describedby="nama-addon">
                            @error('nama')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" class="form-control" name="nim" id="nim" aria-label="Nim"
                                value="{{ old('nim') }}" aria-describedby="nim-addon">
                            @error('nim')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-label="Email"
                                value="{{ old('email') }}" aria-describedby="email-addon">
                            @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>

                            <select class=" form-control" name="kelas" id="kelas">
                                <option disabled selected>Pilih Kelas </option>
                                @foreach ($kelas as $kelasitem)
                                    <option value="{{ $kelasitem->kode_kelas }}">{{ $kelasitem->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                aria-label="Password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn bg-gradient-info">Tambah Mahasiswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
