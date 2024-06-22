@if (Auth::user()->hasRole('Program Studi'))
    @include('prodi.dashboard')
@elseif (Auth::user()->hasRole('Dosen Wali'))
    @include('dosenwali.dashboard')
@elseif (Auth::user()->hasRole('Mahasiswa'))
    @include('mahasiswa.dashboard')
@else
    @include('dashboardcontoh')
@endif
