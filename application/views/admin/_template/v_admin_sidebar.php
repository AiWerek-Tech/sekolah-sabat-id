        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary my-bg-sidebar shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> <img src="<?= base_url('assets') ?>/image/icon/aiwerek-ministry.webp" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light"><?= $this->config->item('app_name') ?></span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
            <nav class="mt-2"> <!--begin::Sidebar Menu-->
                <ul class="nav nav-pills sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <?php if (in_array('akses_setting', array_column($permissions, 'permission_name')) && $this->session->userdata('role')['role_name'] === 'admin'): ?>
                    <li class="nav-item <?= $menu == 'setting' ? 'menu-open' : '' ?>">
                        <a href="#" class="nav-link <?= $menu == 'setting' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-sliders-h"></i>
                            <p>
                                Setting
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="<?= base_url('admin/tahun-pelayanan') ?>" class="nav-link <?= $submenu == 'tahunpelayanan' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-info"></i>
                                    <p>Tahun Pelayanan</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('admin/hari-sabat') ?>" class="nav-link <?= $submenu == 'harisabat' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-info"></i>
                                    <p>Hari Sabat</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('admin/kelas-sekolah-sabat') ?>" class="nav-link <?= $submenu == 'settingkelas' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-info"></i>
                                    <p>Kelas</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('admin/user-management') ?>" class="nav-link <?= $submenu == 'usermanagement' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-warning"></i>
                                    <p>User Management</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('admin/permission-management') ?>" class="nav-link <?= $submenu == 'permissionmanagement' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p>Manage Permissions</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('admin/roles') ?>" class="nav-link <?= $submenu == 'manageroles' ? 'active' : '' ?>">
                                    <i class="nav-icon bi bi-circle text-success"></i>
                                    <p>Manage Roles</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <?php endif; ?>

                    
                    <br>
                    <?php if (in_array('akses_anak-anak', array_column($permissions, 'permission_name'))): ?>
                    <li class="nav-header">SEKOLAH SABAT</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                Anak-anak
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (in_array('akses_begginer', array_column($permissions, 'permission_name'))): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-circle text-danger"></i>
                                    <p>Begginer</p>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (in_array('akses_kindergarten', array_column($permissions, 'permission_name'))): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-circle text-warning"></i>
                                    <p>Kindergarten</p>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (in_array('akses_primary', array_column($permissions, 'permission_name'))): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-circle text-info"></i>
                                    <p>Primary</p>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (in_array('akses_powerpoints', array_column($permissions, 'permission_name'))): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon bi bi-circle text-primary"></i>
                                    <p>Powerpoints</p>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>
                    
                    <!-- Repeat for each main menu category and submenu -->
                    
                    <br>
                    <?php if (in_array('akses_menu_beritamisi', array_column($permissions, 'permission_name'))): ?>
                    <li class="nav-header">BERITA MISI</li>
                    
                    <?php if (in_array('akses_bma', array_column($permissions, 'permission_name'))): ?>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/berita-misi/anak-anak') ?>" class="nav-link <?= $submenu == 'bma' ? 'active' : '' ?>">
                            <i class="nav-icon bi bi-star-half text-info"></i>
                            <p>Anak-anak</p>
                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if (in_array('akses_bmd', array_column($permissions, 'permission_name'))): ?>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/berita-misi/dewasa') ?>" class="nav-link <?= $submenu == 'bmd' ? 'active' : '' ?>">
                            <i class="nav-icon bi bi-star-half text-warning"></i>
                            <p>Pemuda & Dewasa</p>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul> <!--end::Sidebar Menu-->
            </nav>

            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->
