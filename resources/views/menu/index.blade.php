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
                            <a href="{{ asset('tambah-menu') }}" class="btn bg-gradient-info btn-sm mb-0"
                                type="button">Tambah Menu</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 mw-100">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-wrap">
                                            No
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-wrap">
                                            Nama
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-wrap">
                                            Route
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-wrap">
                                            Icon
                                        </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-wrap">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($menu as $menuitem)
                                        <tr>

                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 text-wrap">
                                                    {{ $loop->iteration + $menu->firstItem() - 1 }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 text-wrap">{{ $menuitem->nama }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 text-wrap">{{ $menuitem->route }}
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0 text-wrap">
                                                    <i class="fas {{ $menuitem->icon }}"></i>
                                                </p>
                                            </td>
                                            <td class="text-center ">
                                                <a href="/edit-menu/{{ $menuitem->id }}" type="button" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Menu">
                                                    <i class="fas fa-pencil-alt text-secondary">

                                                    </i>
                                                </a>

                                                <a href="/delete-menu/{{ $menuitem->id }}"
                                                    class="fas fa-trash text-secondary" data-confirm-delete="true"></a>
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

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        @if ($menu->total() < 11)
                            <p class="text-xs font-weight-bold mb-0 text-wrap">Showing
                                {{ $menu->firstItem() }} to {{ $menu->lastItem() }} of
                                {{ $menu->total() }} results
                            </p>
                        @else
                            {{ $menu->links('pagination::bootstrap-5') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
