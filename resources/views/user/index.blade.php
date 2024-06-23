@extends('layouts.user_type.auth')

@section('content')
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
                                        Nim/Nip
                                    </th>


                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($user as $useritem)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{ ++$i }}</p>
                                        </td>

                                        <td class="text-center">
                                            <p class="text-secondary text-xs font-weight-bold mb-0">
                                                {{ $useritem->nama }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-secondary text-xs font-weight-bold mb-0">
                                                {{ $useritem->iduser }}</p>
                                        </td>



                                        <td class="text-center">
                                            <a href="/assign-user/{{ $useritem->id }}" type="button" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Edit Role User">
                                                <i class="fas fa-id-card text-secondary">

                                                </i>
                                            </a>
                                            <a href="/delete-user/{{ $useritem->id }}"
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
