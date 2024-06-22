<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white shadow-lg "
    data-color="info" id="sidenav-main">
    <div class="sidenav-header mw-auto h-auto">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ asset('dashboard') }}">
            <img src="{{ URL::asset('assets/img/Logo2.png') }}" class="navbar-brand-img h-100" alt="main_logo'">
            {{-- <span class="font-weight-bold">Monitoring Mahasiswa</span> --}}
        </a>
    </div>
    <div class="text-center">
        @if (Auth::user()->hasRole('Program Studi'))
            <h6 class=" text-uppercase text-xs font-weight-bolder opacity-6">program Studi</h6>
        @elseif (Auth::user()->hasRole('Dosen Wali'))
            <h6 class=" text-uppercase text-xs font-weight-bolder opacity-6">Dosen Wali</h6>
        @elseif (Auth::user()->hasRole('Mahasiswa'))
            <h6 class=" text-uppercase text-xs font-weight-bolder opacity-6">mahasiswa</h6>
        @else
            <h6 class="text-uppercase text-xs font-weight-bolder opacity-6">Belum Memiliki Role</h6>
        @endif
    </div>
    <div class="collapse navbar-collapse h-auto w-auto  " id="sidenav-collapse-main">
        <ul class="navbar-nav text-wrap ">
            @forelse ($menu as $menus)
            
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is($menus->route) ? 'active' : '' }} "
                        href=" {{ url($menus->route) }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md  text-center  d-flex align-items-center justify-content-center  ">
                            <i class="fas {{ $menus->icon }}" style="color: #000000;"></i>

                        </div>
                        <span class="nav-link-text ms-2">{{ $menus->nama }}</span>
                    </a>
                </li>


                @foreach ($submenu as $submenus)
                    @if ($submenus->menu_id == $menus->id)
                        <li class="nav-item ms-3 ">
                            <a class="nav-link text-wrap {{ Request::is($submenus->route) ? 'active' : '' }}"
                                href="{{ url($submenus->route) }}">

                                <span class="nav-link-text ms-2">{{ $submenus->nama }}</span>
                            </a>
                        </li>
                    @else
                        @continue
                    @endif
                @endforeach

            @empty
                <li class="nav-item">
                    <a class="nav-link">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md  text-center d-flex align-items-center justify-content-center  ">
                            <i class="fas fa-exclamation-triangle" style="color: #000000;"></i>

                        </div>
                        <span class="nav-link-text ms-1">Menu Tidak Tersedia</span>
                    </a>
                </li>
            @endforelse
        </ul>
    </div>
</aside>
