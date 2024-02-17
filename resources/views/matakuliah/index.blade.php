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
                            <a href="#" class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah Mata
                                Kuliah</a>
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

                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Mata Kuliah">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <span>
                                                    <a type="button" class="mx-3" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit Menu">
                                                        <i class="fas fa-trash-alt text-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#modal-delete">

                                                        </i>
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="8">
                                                <p class="text-xs font-weight-bold mb-0">Data
                                                    {{ str_replace('-', ' ', ucfirst(Request::path())) }} tidak ditemukan
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

    {{-- modal --}}
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-center">
                            <h2 class="text-danger">Hapus Data</h2>
                            <p class="text-danger">Apakah anda yakin ingin menghapus data ini?</p>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-5">
                                    <button type="button" class="btn btn-secondary btn-lg">Tidak</button>
                                </div>
                                <div class="col-5">
                                    <button type="button" class="btn btn-danger btn-lg">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- end modal --}}

    {{-- modal tambah mata kuliah --}}
    <div class="modal fade" id="modal-tambah-matakuliah" tabindex="-1" role="dialog"
        aria-labelledby="modal-tambah-matakuliah" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-center">
                            <h2 class="text-danger">Tambah Mata Kuliah</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('matakuliah.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori">
                                </div>
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode Mata Kuliah</label>
                                    <input type="text" class="form-control" id="kode" name="kode">
                                </div>
                                <div class="mb-3">
                                    <label for="namamatakuliah"
                                        class="form-label
                                    ">Nama Mata Kuliah</label>
                                    <input type="text" class="form-control" id="namamatakuliah"
                                        name="namamatakuliah">
                                </div>
                                <div class="mb-3">
                                    <label for="namamatakuliahenglish"
                                        class="form-label
                                    ">Nama Mata Kuliah
                                        (English)</label>
                                    <input type="text" class="form-control" id="namamatakuliahenglish"
                                        name="namamatakuliahenglish">
                                </div>
                                <div class="mb-3">
                                    <label for="sks" class="form-label">SKS</label>
                                    <input type="text" class="form-control" id="sks" name="sks">
                                </div>
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester</label>
                                    <input type="text" class="form-control" id="semester" name="semester">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- end modal tambah mata kuliah --}}

    {{-- modal edit mata kuliah --}}
    <div class="modal fade" id="modal-edit-matakuliah" tabindex="-1" role="dialog"
        aria-labelledby="modal-edit-matakuliah" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-center">
                            <h2 class="text-danger">Edit Mata Kuliah</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('matakuliah.update') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori">
                                </div>
                                <div class="mb-3">
                                    <label for="kode" class="form-label">Kode Mata Kuliah</label>
                                    <input type="text" class="form-control" id="kode" name="kode">
                                </div>
                                <div class="mb-3">
                                    <label for="namamatakuliah"
                                        class="form-label
                                    ">Nama Mata Kuliah</label>
                                    <input type="text" class="form-control" id="namamatakuliah"
                                        name="namamatakuliah">
                                </div>
                                <div class="mb-3">
                                    <label for="namamatakuliahenglish"
                                        class="form-label
                                    ">Nama Mata Kuliah
                                        (English)</label>
                                    <input type="text" class="form-control" id="namamatakuliahenglish"
                                        name="namamatakuliahenglish">
                                </div>
                                <div class="mb-3">
                                    <label for="sks" class="form-label">SKS</label>
                                    <input type="text" class="form-control" id="sks" name="sks">
                                </div>
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester</label>
                                    <input type="text" class="form-control" id="semester" name="semester">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal edit mata kuliah --}}
@endsection
