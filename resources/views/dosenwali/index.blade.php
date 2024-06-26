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
                            <a href="/tambah-dosen-wali" class="btn bg-gradient-info btn-sm mb-0" type="button">Tambah
                                Dosen Wali</a>
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

                                    @forelse ($dosenWali as $dosenWaliitem)

                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $loop->iteration }}
                                                </p>
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

                                            <td class="text-center">
                                                <a href="/edit-dosen-wali/{{ $dosenWaliitem->id }}" type="button" class="mx-2"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Dosen">
                                                    <i class="fas fa-pencil-alt text-secondary">

                                                    </i>
                                                </a>

                                                <a href="/delete-dosen-wali/{{ $dosenWaliitem->id }}"
                                                    class="fas fa-trash text-secondary mx-2" data-confirm-delete="true"></a>
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
                    <div class="card-footer d-flex justify-content-end">
                        @if ($dosenWali->total() < 11)
                            <p class="text-xs font-weight-bold mb-0 text-wrap">Showing
                                {{ $dosenWali->firstItem() }} to {{ $dosenWali->lastItem() }} of
                                {{ $dosenWali->total() }} results
                            </p>
                        @else
                            {{ $dosenWali->links('pagination::bootstrap-5') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
