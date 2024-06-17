@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Edit Menu</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <form action="/edit-sub-menu/{id}" method="POST">
                            @csrf
                            <div class="mx-4">
                                <label for="nama" class="form-label">Nama Sub Menu</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ $submenu->nama }}">
                                @error('nama')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mx-4">
                                <label for="route" class="form-label">Route</label>
                                <input type="text" name="route" class="form-control" id="route" value="{{ $submenu->route }}">
                                @error('route')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="mx-4">
                                <label for="menu_id" class="form-label">Menu</label>
                                <select class="form-control" id="menu_id" name="menu_id" >
                                    <option value="{{ $submenu->menu_id }}" selected>{{ $submenu->menu['nama'] }}</option>
                                    @foreach ($menu as $menus)
                                        <option value="{{ $menus->id }}">{{ $menus->nama }}</option>
                                    @endforeach
                                </select>
                                @error('menu_id')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mx-5 d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-info ">Edit Sub Menu</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
