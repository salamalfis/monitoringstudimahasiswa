@extends('layouts.user_type.auth')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <h5 class="mb-4">Update Password</h5>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="mx-4 mb-3">
                            <label for="nama" class="form-label">Password Saat Ini</label>
                            <input type="password" name="current_password" class="form-control" id="current_password">
                            @error('current_password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mx-4 mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mx-4 mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation">
                            @error('password_confirmation')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mx-5 d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-info ">Update Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
