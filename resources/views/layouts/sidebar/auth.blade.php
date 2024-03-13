<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white shadow-lg"
    data-color="info" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ asset('dashboard') }}">
            <span class="font-weight-bold">Monitoring Mahasiswa</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administrator</h6>



        <ul class="navbar-nav">



            @forelse ($menu as $menus)
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is($menus->route) ? 'active' : '' }} " href=" {{ url($menus->route) }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center  ">
                            <i class="fas {{ $menus->icon }}" style="color: #000000;"></i>

                        </div>
                        <span class="nav-link-text ms-1">{{ $menus->nama }}</span>
                    </a>
                </li>

            @empty
                <li class="nav-item">
                    <a class="nav-link">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center  ">
                            <i class="fas fa-exclamation-triangle" style="color: #000000;"></i>

                        </div>
                        <span class="nav-link-text ms-1">Menu Tidak Tersedia</span>
                    </a>
                </li>
            @endforelse






        </ul>
    </div>
</aside>
