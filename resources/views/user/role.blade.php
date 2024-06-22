@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Role User</h5>
                        </div>
                        @if ($user->roles)
                            @foreach ($user->roles as $user_roles)
                                <a href="/delete-user-role/{{ $user->id }}/{{ $user_roles->id }}"
                                    class="btn bg-danger text-white text-secondary" data-confirm-delete="true">
                                    {{ $user_roles->name }}</a>
                            @endforeach
                        @endif

                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/assign-user-role/{{ $user->id }}" method="POST">
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
                                <button type="submit" class="btn bg-gradient-info ">Assign Role User</button>

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
                            <h5 class="mb-4">Permission User</h5>
                        </div>
                        @if ($user->permissions)
                            @foreach ($user->permissions as $user_permission)
                                <a href="/delete-user-permission/{{ $user->id }}/{{ $user_permission->id }}"
                                    class="btn bg-danger text-white text-secondary" data-confirm-delete="true">
                                    {{ $user_permission->name }}</a>
                            @endforeach
                        @endif

                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/assign-user-permission/{{ $user->id }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mx-4 mb-3">
                                <label for="assign" class="form-label">Permission</label>
                                <select name="assign" class="form-control" id="assign">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Assign Permission User</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
