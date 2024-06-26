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
                            <a href="{{ asset('/tambah-alasan-undur-diri') }}" class="btn bg-gradient-info btn-sm mb-0"
                                type="button">Tambah Alasan Undur Diri</a>
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
                                            Alasan Undur Diri
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @forelse ($alasan as $alasans)

                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $loop->iteration }}
                                                </p>
                                            </td>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $alasans->alasan }}
                                                </p>
                                            </td>

                                            <td class="text-center ">



                                                <a href="/edit-alasan-undur-diri/{{ $alasans->id }}" type="button" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Alasan Undur Diri">
                                                    <i class="fas fa-pencil-alt text-secondary">

                                                    </i>
                                                </a>

                                                <a href="/delete-alasan-undur-diri/{{ $alasans->id }}"
                                                    class="fas fa-trash text-secondary"  data-confirm-delete="true">

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
                    <div class="card-footer d-flex justify-content-end">
                        @if ($alasan->total() < 11)
                            <p class="text-xs font-weight-bold mb-0 text-wrap">Showing
                                {{ $alasan->firstItem() }} to {{ $alasan->lastItem() }} of
                                {{ $alasan->total() }} results
                            </p>
                        @else
                            {{ $alasan->links('pagination::bootstrap-5') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
