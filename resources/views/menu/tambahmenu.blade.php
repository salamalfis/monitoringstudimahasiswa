@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Tambah Menu</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/tambah-menu" method="POST">
                            @csrf
                            <div class="mx-4">
                                <label for="nama" class="form-label">Nama Menu</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4">
                                <label for="route" class="form-label">Route</label>
                                <input type="text" name="route" class="form-control" id="route">
                                @error('route')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-4">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control" id="icon">
                                @error('icon')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mx-4">
                                <label for="infoicon" class="formlabel">Referensi Icon? klik
                                    <a href="https://fontawesome.com/v6/search" target="_blank"
                                        class="text-info text-gradient font-weight-bold">Disini!</a>
                                </label>
                            </div>
                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info mx-5">Tambah Menu</button>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
