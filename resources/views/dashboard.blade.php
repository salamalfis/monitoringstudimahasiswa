@if (Auth::user()->role == 'prodi')
    @include('prodi.dashboard')
@elseif (Auth::user()->role == 'dosenwali')
    @include('dosenwali.dashboard')
@elseif (Auth::user()->role == 'mahasiswa')
    @include('mahasiswa.dashboard')
@else
    @include('dashboardcontoh')
@endif
