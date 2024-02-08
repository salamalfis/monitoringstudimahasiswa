@if (Auth::user()->role == 'admin')
    @include('admin.dashboard')
@elseif (Auth::user()->role == 'dosenwali')
    @include('dosenwali.dashboard')
@elseif (Auth::user()->role == 'mahasiswa')
    @include('mahasiswa.dashboard')
@elseif (Auth::user()->role == 'kaprodi')
    @include('kaprodi.dashboard')
@else
    @include('dashboardcontoh')
@endif
