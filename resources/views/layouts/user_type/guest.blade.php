@extends('layouts.app')

@section('guest')
    @if (\Request::is('login/forgot-password'))
        @include('layouts.navbar.guest')
        @yield('content')
    @else
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    @include('layouts.navbar.guest')
                </div>
            </div>
        </div>
        @yield('content')
        @include('layouts.footers.guest')
    @endif
@endsection