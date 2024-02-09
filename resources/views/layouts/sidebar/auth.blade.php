<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
    data-color="info" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="/dashboard">
            <span class="font-weight-bold">Monitoring Mahasiswa</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- @foreach ( as )

            @endforeach --}}
            <li class="nav-item">
                <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }} " href="dashboard">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center  ">
                        <i class="fa-solid fa-house fa-lg" style="color: #000000;"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
