@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <h5 class="mb-4">Detail User</h5>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">


                   


                        <div class="mx-5 d-flex justify-content-end">
                            <a href="/approve-user/{{ $user->id }}" class="btn bg-gradient-info"
                                data-confirm-delete="true">Approve</a>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
