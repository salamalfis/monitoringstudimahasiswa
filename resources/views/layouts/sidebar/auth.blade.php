<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white shadow-lg"
    data-color="info" id="sidenav-main">
    <div class="sidenav-header mw-auto h-auto">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 text-center" href="{{ asset('dashboard') }}">
            <img src="{{ URL::asset('assets/img/Logo2.png') }}" class="navbar-brand-img h-100" alt="main_logo'">
        </a>
    </div>
    <div class="text-center">
        @if (Auth::user()->hasRole('Program Studi'))
            <h6 class="text-uppercase text-xs font-weight-bolder opacity-6">Program Studi</h6>
        @elseif (Auth::user()->hasRole('Dosen Wali'))
            <h6 class="text-uppercase text-xs font-weight-bolder opacity-6">Dosen Wali</h6>
        @elseif (Auth::user()->hasRole('Mahasiswa'))
            <h6 class="text-uppercase text-xs font-weight-bolder opacity-6">Mahasiswa</h6>
        @else
            <h6 class="text-uppercase text-xs font-weight-bolder opacity-6">Belum Memiliki Role</h6>
        @endif
    </div>
    <div class="collapse navbar-collapse h-auto w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav text-wrap">
            @forelse ($menu as $menus)
                @can('read ' . $menus->route)
                    @php
                        $hasSubmenu = $submenu->contains('menu_id', $menus->id);
                    @endphp
                    <li class="nav-item {{ $hasSubmenu ? 'has-submenu' : '' }}">
                        <a class="nav-link {{ Request::is($menus->route) ? 'active' : '' }}"
                            href="{{ $hasSubmenu ? '#' : url($menus->route) }}"
                            onclick="{{ $hasSubmenu ? 'event.preventDefault(); toggleDropdown(this);' : '' }}">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                                <i class="fas {{ $menus->icon }}" style="color: #000000;"></i>
                            </div>
                            <span class="nav-link-text mx-2">{{ $menus->nama }}</span>
                            @if ($hasSubmenu)
                                <i class="fas fa-chevron-down ms-auto"></i>
                            @endif
                        </a>
                        @if ($hasSubmenu)
                            <ul class="submenu">
                                @foreach ($submenu as $submenus)
                                    @can('read ' . $submenus->route)
                                        @if ($submenus->menu_id == $menus->id)
                                            <li class="nav-item ">
                                                <a class="text-wrap nav-link {{ Request::is($submenus->route) ? 'active bg-info' : '' }}"
                                                    href="{{ url($submenus->route) }}">
                                                    {{ $submenus->nama }}
                                                </a>
                                            </li>
                                        @endif
                                    @endcan
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endcan
            @empty
                <li class="nav-item">
                    <a class="nav-link">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md text-center d-flex align-items-center justify-content-center">
                            <i class="fas fa-exclamation-triangle" style="color: #000000;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Menu Tidak Tersedia</span>
                    </a>
                </li>
            @endforelse
        </ul>
    </div>
</aside>

<script>
    // Fungsi untuk menampilkan atau menyembunyikan submenu
    function toggleDropdown(element) {
        const parent = element.parentElement;
        parent.classList.toggle('open'); // Tambahkan atau hapus kelas 'open' pada elemen parent (li)
    }

    // Fungsi untuk mengecek apakah submenu aktif
    function checkActiveSubmenu() {
        const submenus = document.querySelectorAll('.submenu');
        submenus.forEach(submenu => {
            const activeLink = submenu.querySelector('.nav-link.active');
            if (activeLink) {
                submenu.style.display = 'block'; // Tampilkan submenu jika salah satu link di submenu aktif
                submenu.parentElement.classList.add('open'); // Tambahkan kelas 'open' pada elemen parent (li)
            }
        });
    }

    // Panggil fungsi checkActiveSubmenu setelah dokumen selesai dimuat
    document.addEventListener('DOMContentLoaded', checkActiveSubmenu);
</script>

<style>
    .has-submenu>.submenu {
        display: none;
        list-style: none;
        padding-left: 1.25rem;
        /* Adjust as needed */
    }

    .has-submenu.open>.submenu {
        display: block;
        /* Tampilkan submenu jika kelas 'open' ditambahkan ke elemen parent (li) */
    }

    .submenu>.nav-item>.nav-link {
        padding-left: 1.5rem;
        /* Adjust as needed */
    }
</style>
