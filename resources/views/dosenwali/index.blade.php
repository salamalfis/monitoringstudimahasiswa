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
                            {{-- <a data-bs-toggle="modal" data-bs-target="#registrationModal"
                                class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah Dosen Wali</a> --}}
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NIP
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kelas Wali
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Angkatan
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @forelse ($dosenWali as $dosenWaliitem)
                                        <?php $i++; ?>
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $dosenWaliitem->nama }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $dosenWaliitem->idUser }}
                                                </p>
                                            </td>


                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $dosenWaliitem->kelas_wali }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $dosenWaliitem->angkatan }}
                                                </p>
                                            </td>

                                            <td class="text-center ">


                                                <a type="button" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Dosen Wali">
                                                    <i class="fas fa-pencil-alt text-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#editModal">

                                                    </i>
                                                </a>

                                                <a href="#" type="button" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Reset Password Dosen Wali">
                                                    <i class="fas fa-key text-secondary"></i>
                                                </a>


                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Deactive Dosen Wali">
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
