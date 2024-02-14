@if (Auth::user()->role == 'administrator')
    @include('admin.dashboard')
@elseif (Auth::user()->role == 'dosenwali')
    @include('dosenwali.dashboard')
@elseif (Auth::user()->role == 'mahasiswa')
    @include('mahasiswa.dashboard')
@elseif (Auth::user()->role == 'prodi')
    @include('kaprodi.dashboard')
@else
    @include('dashboardcontoh')
@endif
