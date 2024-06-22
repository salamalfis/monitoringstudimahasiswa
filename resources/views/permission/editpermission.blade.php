@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Permission</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/edit-permission/{{ $permission->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 mb-3">
                                <label for="nama" class="form-label">Nama Permission</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ $permission->name }}">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Edit Permission</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Role Permission</h5>
                        </div>
                        @if ($permission->roles)
                            @foreach ($permission->roles as $permission_role)
                                <a href="/delete-permission-roles/{{ $permission_role->id }}/{{ $permission->id }}"
                                    class="btn bg-danger text-white text-secondary" data-confirm-delete="true">
                                    {{ $permission_role->name }}</a>
                            @endforeach
                        @endif

                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/permission-roles/{{ $permission->id }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mx-4 mb-3">
                                <label for="assign" class="form-label">Role</label>
                                <select name="assign" class="form-control" id="assign">
                                    @foreach ($role as $roles)
                                        <option value="{{ $roles->name }}">{{ $roles->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Assign Role Permission </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
