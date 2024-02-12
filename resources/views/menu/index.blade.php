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
                            <a data-bs-toggle="modal" data-bs-target="#registrationModal" class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah Menu</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Route
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Icon
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @forelse ($menu as $menuitem)
                                        <?php $i++; ?>
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $menuitem->nama }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $menuitem->route }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <i class="fas {{ $menuitem->icon }}"></i>
                                                    </p>
                                            </td>
                                            <td class="text-center ">
                                                <a  class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Menu" >
                                                    <i class="fas fa-pencil-alt text-secondary" data-bs-toggle="modal" data-bs-target="#editModal">

                                                    </i>
                                                </a>



                                                <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Hapus Menu">
                                                    <i class=" fas fa-trash text-secondary"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="text-center" colspan="8">
                                                <p class="text-xs font-weight-bold mb-0">Data {{ str_replace('-', ' ', ucfirst(Request::path())) }} tidak ditemukan</p>
                                            </td>
                                        </tr>

                                    @endforelse

                                    </tr>
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
                    <h5 class="modal-title" id="registrationModalLabel">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Registration form goes here -->
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Menu</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="route" class="form-label">Route</label>
                            <input type="text" name="route" class="form-control" id="route">
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" name="icon" class="form-control" id="icon">
                        </div>
                        <div class="mb-3">
                            <label for="infoicon" class="formlabel">Referensi Icon? klik
                                <a href="https://fontawesome.com/v6/search" target="_blank"
                                    class="text-info text-gradient font-weight-bold">Disini!</a>
                            </label>
                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-info">Tambah Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit form goes here -->
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="editNama" class="form-label">Nama Menu</label>
                        <input type="text" name="nama" class="form-control" id="editNama">
                    </div>
                    <div class="mb-3">
                        <label for="editRoute" class="form-label">Route</label>
                        <input type="text" name="route" class="form-control" id="editRoute">
                    </div>

                    <div class="mb-3">
                        <label for="editIcon" class="form-label">Icon</label>
                        <input type="text" name="icon" class="form-control" id="editIcon">
                    </div>
                    <div class="mb-3">
                        <label for="editInfoIcon" class="formlabel">Referensi Icon? klik
                            <a href="https://fontawesome.com/v6/search" target="_blank"
                                class="text-info text-gradient font-weight-bold">Disini!</a>
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

