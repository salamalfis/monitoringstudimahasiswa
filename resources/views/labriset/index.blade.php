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
                            <a href="{{ asset('/tambah-lab-riset') }}" class="btn bg-gradient-info btn-sm mb-0"
                                type="button">Tambah Lab Riset</a>
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
                                            Kode Lab Riset
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Lab Riset
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Peminatan
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>

                                    @forelse ($labriset as $labrisets)
                                        <?php $i++; ?>
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $labrisets->kode_labriset }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $labrisets->nama_labriset }}
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    @foreach ($peminatan as $peminatan)
                                                        @if ($labrisets->peminatan_id == $peminatan->id)
                                                            {{ $peminatan->nama_peminatan }}
                                                        @endif
                                                    @endforeach
                                                </p>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    @if ($labrisets->active == 1)
                                                        <span class="badge bg-success">Aktif</span>
                                                    @else
                                                        <span class="badge bg-danger">Tidak Aktif</span>
                                                    @endif
                                                </p>
                                            </td>

                                            <td class="text-center ">


                                                <a href="/edit-lab-riset/{{ $labrisets->id }}" type="button" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Lab Riset">
                                                    <i class="fas fa-pencil-alt text-secondary">

                                                    </i>
                                                </a>

                                                <a href="/delete-lab-riset/{{ $labrisets->id }}"
                                                    class="fas fa-trash text-secondary" data-confirm-delete="true"></a>
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
