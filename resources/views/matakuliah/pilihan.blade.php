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
                                class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah Mata Kuliah
                                Pilihan</a>
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
                                            Kategori
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kode Mata Kuliah
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Mata Kuliah
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Mata Kuliah (English)
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            SKS
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Semester
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @forelse ($matakuliah as $matkul)
                                        <?php $i++; ?>
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>


                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $matkul->kategori }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $matkul->kode }}</p>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $matkul->namamatakuliah }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $matkul->namamatakuliahenglish }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $matkul->sks }}</span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $matkul->semester }}</span>
                                            </td>
                                            <td class="text-center">
                                                <a type="button" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Menu">
                                                    <i class="fas fa-pencil-alt text-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#editModal">

                                                    </i>
                                                </a>
                                                <span>
                                                    <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Hapus User">
                                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Data tidak ditemukan</td>
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
                    <h5 class="modal-title" id="registrationModalLabel">Tambah Mata Kuliah Pilihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Registration form goes here -->
                    <form action="Route('')" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option disabled selected>Pilih Kategori</option>
                                <option value="MKPP">Mata Kuliah Pilihan Prodi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" name="kode" class="form-control" id="kode">
                        </div>

                        <div class="mb-3">
                            <label for="namamatakuliah" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" name="namamatakuliah" class="form-control" id="namamatakuliah">
                        </div>
                        <div class="mb-3">
                            <label for="namamatakuliahenglish" class="form-label">Nama Mata Kuliah (English)</label>
                            <input type="text" name="namamatakuliahenglish" class="form-control"
                                id="namamatakuliahenglish">
                        </div>
                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="text" name="sks" class="form-control" id="sks">
                        </div>
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <input type="text" name="semester" class="form-control" id="semester">
                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-info">Tambah Mata Kuliah Pilihan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Mata Kuliah Pilihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                @if ($matkul->kategori == 'MKPP')
                                    <option value="MKPP" selected>Mata Kuliah Pilihan Prodi</option>
                                @else
                                    <option disabled selected>Pilih Kategori</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" name="kode" class="form-control" id="kode"
                                value="{{ $matkul->kode }}">
                        </div>
                        <div class="mb-3">
                            <label for="namamatakuliah" class="form-label>">Nama Mata Kuliah</label>
                            <input type="text" name="namamatakuliah" class="form-control" id="namamatakuliah"
                                value="{{ $matkul->namamatakuliah }}">
                        </div>
                        <div class="mb-3">
                            <label for="namamatakuliahenglish" class="form-label">Nama Mata Kuliah (English)</label>
                            <input type="text" name="namamatakuliahenglish" class="form-control"
                                id="namamatakuliahenglish" value="{{ $matkul->namamatakuliahenglish }}">
                        </div>
                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="text" name="sks" class="form-control" id="sks"
                                value="{{ $matkul->sks }}">
                        </div>
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <input type="text" name="semester" class="form-control" id="semester"
                                value="{{ $matkul->semester }}">

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Edit Mata Kuliah Pilihan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
@endsection
