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
                                class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah Kelas</a>
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
                                            Kode Kelas
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Kelas
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

                                    @forelse ($kelas as $kelasitem)
                                        <?php $i++; ?>
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $kelasitem->kode_kelas }}
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $kelasitem->nama_kelas }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $kelasitem->angkatan }}
                                                </p>
                                            </td>




                                            <td class="text-center ">


                                                <a type="button" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Kelas">
                                                    <i class="fas fa-pencil-alt text-secondary" data-bs-toggle="modal"
                                                        value="{{ $kelasitem->id }}" data-bs-target="#editModal">

                                                    </i>
                                                </a>

                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Hapus Kelas">
                                                    <i class=" fas fa-trash text-secondary"></i>
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



    <!-- Modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Tambah Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Registration form goes here -->
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_kelas" class="form-label">Kode Kelas</label>
                            <input type="text" name="kode_kelas" class="form-control" id="kode_kelas">
                        </div>
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas">
                        </div>
                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select class="form-select" name="angkatan" id="angkatan">
                                <option selected>Pilih Angkatan</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>


                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn bg-gradient-info">Tambah Kelas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form goes here -->
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kode_kelas" class="form-label">Kode Kelas</label>
                            <input type="text" name="kode_kelas" class="form-control" id="kode_kelas"
                                value="{{ $kelasitem->kode_kelas }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas"
                                value="{{ $kelasitem->nama_kelas }}">
                        </div>
                        <div class="mb-3">
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select class="form-select" name="angkatan" id="angkatan">
                                <option selected>{{ $kelasitem->angkatan }}</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn bg-gradient-info">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
