        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body shadow"> <!--begin::Container-->
            <div class="container-fluid">

                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="fas fa-bars"></i> </a> </li>
                    <!-- <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li> -->
                    <li class="nav-item">
                        <span class="nav-link">
                            <b>
                                Tahun: <span style="color: red;"><?= isset($tp_active) ? $tp_active->tahun : "..." ?></span>, 
                                Triwulan: <span style="color: red;"><?= isset($smt_active) ? '' . $smt_active->triwulan_ke : "..." ?></span>
                            </b>
                        </span>
                    </li>

                </ul>

                <ul class="navbar-nav ms-auto">
                    </li>
                    <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span> </a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item dropdown">
                        <button
                        class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                        id="bd-theme"
                        type="button"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        data-bs-display="static"
                        >
                        <span class="theme-icon-active">
                            <i class="my-1"></i>
                        </span>
                        <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                        </button>
                        <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="bd-theme-text"
                        style="--bs-dropdown-min-width: 8rem;"
                        >
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center active"
                            data-bs-theme-value="light"
                            aria-pressed="false"
                            >
                            <i class="bi bi-sun-fill me-2"></i>
                            Light
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="dark"
                            aria-pressed="false"
                            >
                            <i class="bi bi-moon-fill me-2"></i>
                            Dark
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        <li>
                            <button
                            type="button"
                            class="dropdown-item d-flex align-items-center"
                            data-bs-theme-value="auto"
                            aria-pressed="true"
                            >
                            <i class="bi bi-circle-fill-half-stroke me-2"></i>
                            Auto
                            <i class="bi bi-check-lg ms-auto d-none"></i>
                            </button>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle-->
                    <!-- <li class="nav-item">
                        <div id="live-clock" class="nav-link"></div>
                    </li> -->
                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="<?= base_url('assets') ?>/image/profiles/frengky.png" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Hi, Frengky</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="<?= base_url('assets') ?>/image/profiles/frengky.png" class="rounded-circle shadow" alt="User Image">
                                <p>
                                Frengky Lokobal - Kontributor
                                    <small>Anggota Sejak Oktober 2024</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat text-bg-success">Profile</a>
                                <a href="<?= base_url('admin/logout') ?>" class="btn btn-default btn-flat float-end text-bg-danger">Logout</a>
                            </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                    
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->
        
       