@extends('layouts.user_type.auth')
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="mb-4">Tambah Anggota Kelompok</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="/tambah-anggota-metode-penelitian" method="POST">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="iduser" class="form-label">Nim Anggota</label>
                            <input type="text" name="iduser" class="form-control" id="iduser">
                            @error('iduser')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-3 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info mx-2 mt-3">Tambah Anggota</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">                        
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
                                        Nim
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Anggota
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($anggota as $anggota)
                                    <?php $i++; ?>
                                    <tr>

                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                        </td>

                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $anggota->iduser }}
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $anggota->nama }}
                                            </p>
                                        </td>
                                        <td class="text-center ">
                                            <a href="/delete-anggota/{{ $anggota->id }}"
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
    
@endsection
