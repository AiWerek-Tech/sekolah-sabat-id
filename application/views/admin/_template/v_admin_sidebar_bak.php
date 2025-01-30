        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary my-bg-sidebar shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="<?= base_url('assets') ?>/image/icon/aiwerek-ministry.webp" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light"><?= $this->config->item('app_name') ?></span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav nav-pills sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item"> <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fas fa-sliders-h"></i>
                                <p>
                                    Setting
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Aplikasi</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>User Management</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                        <p>Kelas</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                        <p>Menu</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <br>
                        <li class="nav-header">SEKOLAH SABAT</li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Anak-anak
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Begginer</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>Kindergarten</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                        <p>Primary</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                        <p>Powerpoints</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-balloon-heart-fill"></i>
                                <p>
                                    Remaja
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p class="text">Real Time Faith</p>
                                </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                        <p>Cornerstone Connections</p>
                                    </a> </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box2-heart"></i>
                                <p>
                                    Dewasa Muda
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-success"></i>
                                            <p>inVerse</p>
                                        </a> 
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Dewasa
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-success"></i>
                                            <p>Standar</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                                            <p>Penuntun Guru</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                                            <p>Easy Reading</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                                            <p>EGW Notes</p>
                                        </a> 
                                </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-primary"></i>
                                            <p>Ringkasan</p>
                                        </a> 
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li class="nav-header">BERITA MISI</li>
                        <li class="nav-item"> <a href="./docs/introduction.html" class="nav-link"> <i class="nav-icon bi bi-star-half text-info"></i>
                                <p>Anak-anak</p>
                            </a>
                        </li>
                        <li class="nav-item"> <a href="<?= base_url('admin/berita-misi-dewasa') ?>" class="nav-link <?= $menu == 'bmd' ? 'active' : '' ?>" class="nav-link"> <i class="nav-icon bi bi-star-half text-warning"></i>
                                <p>Pemuda & Dewasa</p>
                            </a>
                        </li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->
