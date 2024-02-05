@extends('layouts.app')

@section('auth')

    @include('layouts.sidebar.auth')
        <main class="main-content position-relative">
            @include('layouts.navbar.auth')
            <div class="container-fluid py-4">
                @yield('content')
                @include('layouts.footers.auth')
            </div>
        </main>




@endsection
