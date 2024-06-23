

@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Tambah Alasan Undur Diri</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="" method="POST">
                            @csrf
                            <div class="mx-4 mb-3">
                                <label for="alasan" class="form-label">Alasan Undur Diri</label>
                                <input type="text" name="alasan" class="form-control" id="alasan">
                                @error('alasan')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Tambah Alasan Undur Diri</button>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

