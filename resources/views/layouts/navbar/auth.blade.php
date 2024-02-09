 <!-- Navbar -->
 <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-white mt-3" id="navbarBlur"
     navbar-scroll="true">
     <div class="container-fluid py-1 px-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                 <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Pages</a></li>
                 <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ str_replace('-', ' ', ucfirst(Request::path())) }}</li>
             </ol>
             <h6 class="font-weight-bolder mb-0">{{ str_replace('-', ' ', ucfirst(Request::path())) }}</h6>
         </nav>
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
             <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a onclick="iconNavbarSidenav(this)" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                    </a>
                </li>
             </div>



             <li class="nav-item dropdown pe-md-3 d-flex align-items-center">
                 <a href="" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <i class="fa fa-bell cursor-pointer"></i>
                 </a>
             <li class="nav-item d-flex align-items-center">
                 <a href="/logout" class="nav-link text-body font-weight-bold px-0">
                     <i class="fa fa-user me-sm-1"></i>
                     <span class="d-sm-inline d-none">Sign out</span>
                 </a>
             </li>


             </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- End Navbar -->


