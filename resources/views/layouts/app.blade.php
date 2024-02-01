@extends('layouts.app')

@section('auth')
    @include('layouts.navbars.guest.nav')
    @yield('content')
    @include('layouts.footers.guest.footer')
@endsection
