<style>
    /* MOBILE */
    .notification-mobile {
        display: none;
        position: absolute;
        right: 4rem;
        /* Jarak dari kanan, sesuaikan sesuai kebutuhan */
        top: 50%;
        transform: translateY(-50%);
        align-items: center;
    }

    /* Menampilkan ikon notifikasi pada layar mobile */
    @media (max-width: 43.75em) {
        .notification-mobile {
            display: flex;
        }
    }

    .notification-mobile .notifbadge-mobile {
        position: absolute;
        top: -5px;
        left: 2px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 10px;
        font-weight: bold;
    }

    .notification-mobile svg {
        width: 24px;
        height: 24px;
        stroke: #4B207F;
        margin-right: 50px;
        margin-left: -10px;
        /* Oranye */
    }

    .hide-notification {
        display: none;
    }

    /* ================DESKTOP ===================== */
    /* Menampilkan ikon notifikasi pada layar mobile */
    /* .notification-desktop {
        display: flex;
    }

    @media (max-width: 43.75em) {
        .notification-desktop {
            display: none;
        }
    } */

    .notification-desktop .notifbadge {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 10px;
        font-weight: bold;
    }

    .notification-desktop svg {
        width: 24px;
        height: 24px;
        stroke: #4B207F;
        /* Oranye */
    }

    .secondary-nav ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .secondary-nav ul li {
        position: relative;
    }

    .secondary-nav ul li a {
        text-decoration: none;
        /* color: #000; */
        /* font-size: 18px; */
        position: relative;
        display: flex;
        align-items: center;
    }

    .close-notifmodal {
        cursor: pointer;
    }

    .notifbadge {
        cursor: pointer;
    }

    /* Modal styling */
    /* Modal Background */
    .header__utility__inner .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        padding-top: 60px;
        overflow: hidden;
        /* Mencegah scroll pada halaman saat modal terbuka */
        /* display: flex; */
        /* Menggunakan flexbox untuk menengahakan konten */
        justify-content: center;
        /* Menyelaraskan horizontal */
        align-items: flex-start;
        ;
        /* Menyelaraskan vertikal */
    }

    /* Modal Content */
    .header__utility__inner .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 0;
        border-radius: 8px;
        width: 80%;
        max-width: 600px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        position: relative;
        transition: opacity 0.3s ease;
        max-height: 80vh;
        /* Batas tinggi maksimum modal */
        overflow-y: auto;
        /* Aktifkan scroll vertikal di dalam modal */
        margin-top: 10px;
        /* Jarak dari bagian atas */
    }

    /* Modal Header */
    .header__utility__inner .modal-header {
        background-color: #FFC107;
        /* Background color for warning */
        color: #fff;
        /* Text color for the title */
        padding: 15px;
        border-radius: 8px 8px 0 0;
        position: relative;
        font-size: 1.2em;
        margin-bottom: 10px;
        /* Mengurangi jarak bawah dari header */
    }

    /* Close Button in Header */
    .header__utility__inner .modal-header .close {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
        position: absolute;
        right: 15px;
        top: 15px;
        cursor: pointer;
        transition: color 0.3s;
    }

    .header__utility__inner .modal-header .close:hover,
    .header__utility__inner .modal-header .close:focus {
        color: #eee;
    }

    /* Modal Body */
    .header__utility__inner .modal-body {
        padding: 20px;
        font-size: 1em;
    }

    /* Modal Footer (optional) */
    .header__utility__inner .modal-footer {
        background-color: #f1f1f1;
        padding: 10px;
        border-radius: 0 0 8px 8px;
        text-align: right;
    }


    .modal .small-text {
        font-size: 12px;
    }

    /* Chat container styling */
    .chat-container {
        max-height: 60vh;
        /* Membatasi tinggi kontainer pesan */
        overflow-y: auto;
        /* Mengaktifkan scroll jika konten terlalu panjang */
        margin-top: 10px;
        /* Memberikan sedikit jarak dari header modal */
    }

    .chat-message {
        padding: 10px;
        margin: 10px 10px;
        border-radius: 10px;
        background-color: #f1f1f1;
        /* max-width: 400px; */
        /* Lebar konten pesan */
    }

    .chat-message strong {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .chat-message .date {
        font-size: 12px;
        color: #666;
        float: right;
    }

    .chat-message p {
        margin: 5px 0 0;
        font-size: 16px;
    }


    .message-header {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .message-header strong {
        margin-right: 10px;
    }

    .separator {
        margin: 0 10px;
        font-size: 18px;
        /* Ukuran titik bulat besar */
    }

    .date {
        font-size: 12px;
        color: #666;
    }

    .message-content {
        margin: 5px 0 0;
        font-size: 16px;
        text-align: left;
    }
</style>
<!-- Notif baris atas -->
<div class="header__top-hat show-at--large bg--black pad-half align--right">
    <span class="icon icon__logo" alt="ISI LOGO TOP DISINI">
        <img src="<?= base_url('assets') ?>/image/icon/aiwerek-ministry.webp" loading="lazy">
    </span>
    <p class="font--secondary--xs gray--med">This is an official website of AiWerek Ministry to <a class="link--white"
            href="https://sekolahsabat.my.id/">Learn about Sabbath School Lesson</a>.</p>
</div>

<div class="header__inner">

    <span class="nav-toggle js-toggle" data-toggled="header" data-prefix="nav">
        <div class="nav-toggle__inner">
            <span class="nav-toggle__segment nav-toggle__segment--1 theme--primary-background-color"></span>
            <span class="nav-toggle__segment nav-toggle__segment--2 theme--primary-background-color"></span>
            <span class="nav-toggle__segment nav-toggle__segment--3 theme--primary-background-color"></span>
            <span class="nav-toggle__segment nav-toggle__segment--4 theme--primary-background-color"></span>
        </div>
        <strong class="nav-toggle__text upper theme--primary-text-color font--secondary--s">Menu</strong>

    </span>

    <!-- LOGO WEBSITE -->
    <div class="header__unify-logo-nav">
        <a href="<?= base_url('') ?>"
            class="logo__link logo__link--horiz theme--primary-background-color show-until--large ">
            <img src="<?= base_url('assets') ?>/image/logo_horizontal.webp" loading="lazy" class="logo"
                style=" margin-bottom: 0.625rem !important;" alt="Sekolah Sabat ID logo" />
        </a>
        <a href="<?= base_url('') ?>"
            class="logo__link logo__link--square theme--primary-background-color show-at--large ">
            <img src="<?= base_url('assets') ?>/image/logo_square.webp" loading="lazy" class="logo"
                style=" margin-bottom: 0.625rem !important;" alt="Sekolah Sabat ID logo" />
        </a>

        <!-- ICON NOTIFIKASI -->
        <span class="notification-mobile">
            <a href="#" id="notification-icon-mobile">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="theme--primary-text-color feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </a>
            <span class="notifbadge-mobile" id="notification-badge-mobile">3</span>
        </span>



        <nav class="primary-nav toggled-element" id="primary-nav" role="navigation" data-active-target="primary-nav">
            <ul class="primary-nav__list">

                <li class="primary-nav__list-item ">
                    <a class="primary-nav__link theme--primary-text-color " href="<?= base_url('') ?>">Beranda</a>
                </li>
                <!-- SS ANAK -->
                <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                    <a class="primary-nav__link theme--primary-text-color "
                        href="<?= base_url('kelas/ss-anak-anak') ?>">Anak-anak</a>
                    <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span
                            class="arrow--down"></span></div>
                    <ul class="primary-nav__subnav">
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>ssaa/beginner">Beginner</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ssaa/kindergarten') ?>">Kindergarten</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ssaa/primary') ?>">Primary</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ssaa/powerpoints') ?>">Junior Powerpoints (Remaja Muda)</a>
                        </li>
                    </ul>
                </li>
                <!-- SS REMAJA -->
                <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                    <a class="primary-nav__link theme--primary-text-color "
                        href="<?= base_url('kelas/ss-remaja') ?>">Remaja</a>
                    <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span
                            class="arrow--down"></span></div>
                    <ul class="primary-nav__subnav">
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ss-remaja/realtimefaith') ?>">Real-Time Faith</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ss-remaja/cornerstone') ?>">Cornestonne Connection (Remaja
                                Dewasa)</a>
                        </li>
                    </ul>
                </li>
                <!-- SS PEMUDA -->
                <!-- <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                            <a class="primary-nav__link theme--primary-text-color " href="<?= base_url('pages/ss-pemuda') ?>">Pemuda</a>
                            <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span class="arrow--down"></span></div>
                            <ul class="primary-nav__subnav">
                                <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="<?= base_url('pages/inverse') ?>">InVerse</a>
                                </li>
                            </ul>
                        </li> -->
                <!-- SS DEWASA -->
                <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                    <a class="primary-nav__link theme--primary-text-color "
                        href="<?= base_url('kelas/ss-dewasa') ?>">Dewasa</a>
                    <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span
                            class="arrow--down"></span></div>
                    <ul class="primary-nav__subnav">
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ss-pemuda/inverse') ?>">InVerse (Dewasa Muda)</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ss-dewasa/pedoman-pendalaman-alkitab-dewasa') ?>">Pedoman Pendalaman
                                Alkitab Dewasa</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('ss-dewasa/english-version') ?>">Adult Bible Study Guide</a>
                        </li>
                        <!-- <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="<?= base_url('pages/ss-penuntun-guru') ?>">Penuntun Guru</a>
                                </li>
                                <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="<?= base_url('pages/ss-mudah-dibaca') ?>">Edisi Mudah Dibaca</a>
                                </li>
                                <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="<?= base_url('pages/ss-egw-notes') ?>">Catatan EGW</a>
                                </li> -->
                    </ul>
                </li>

                <!-- BERITA MISSION-->
                <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                    <a class="primary-nav__link theme--primary-text-color "
                        href="<?= base_url('pages/berita-misi') ?>">Berita Misi</a>
                    <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span
                            class="arrow--down"></span></div>
                    <ul class="primary-nav__subnav">
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>berita-misi/anak-anak">Anak-anak</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>berita-misi/dewasa">Pemuda & Dewasa</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>berita-misi/video">Video Berita Misi</a>
                        </li>
                    </ul>
                </li>

                <li class="primary-nav__list-item  primary-nav--with-subnav js-hover " data-prefix="hover">
                    <a class="primary-nav__link theme--primary-text-color "
                        href="<?= base_url('') ?>pages/resources">Sumber Daya</a>
                    <div class="primary-nav__subnav__arrow va--middle js-toggle-parent"><span
                            class="arrow--down"></span></div>
                    <ul class="primary-nav__subnav">
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>pages/tentang-sekolah-sabat">Tentang Sekolah Sabat</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>pages/tentang-kurikulum-gracelink">Kurikulum Gracelink</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>pages/ruang-lingkup-pelajaran-ss">Ruang Lingkup dan Urutan
                                Pelajaran</a>
                        </li>
                        <li class="primary-nav__subnav__list-item">
                            <a class="primary-nav__subnav__link theme--primary-text-color"
                                href="<?= base_url('') ?>pages/resource-links">Recource Links</a>
                        </li>

                        <!-- <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="sabbath-school-training-courses">Sabbath School Training Courses</a>
                                </li> -->
                        <!-- <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="scope-and-sequence-of-lessons.pdf">GraceLink Curriculum Scope and Sequence</a>
                                </li>
                                <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="mission-bank">Mission Bank</a>
                                </li>
                                <li class="primary-nav__subnav__list-item">
                                    <a class="primary-nav__subnav__link theme--primary-text-color" href="video-usage">Video Usage</a>
                                </li> -->
                    </ul>
                </li>
            </ul>
        </nav>


    </div>
    <!-- end navigation -->

    <!-- top navigation -->
    <div class="header__utility">
        <div class="header__utility__inner full--until-large">
            <nav class="secondary-nav toggled-element" id="secondary-nav" role="navigation">
                <ul class="secondary-nav__list">
                    <li class="secondary-nav__list-item rel">
                        <a class="secondary-nav__link theme--secondary-text-color"
                            href="<?= base_url('pages/sitemaps') ?>">
                            <strong>Sitemap</strong>
                        </a>
                    </li>
                    <li class="secondary-nav__list-item rel">
                        <a class="secondary-nav__link theme--secondary-text-color"
                            href="<?= base_url('admin/login') ?>">
                            <strong>Login</strong>
                        </a>
                    </li>
                    <li class="secondary-nav__list-item rel">
                        <a class="secondary-nav__link theme--secondary-text-color"
                            href="<?= base_url('pages/tentang-kami') ?>">
                            <strong>Tentang Kami</strong>
                        </a>
                    </li>
                    <li class="notification-desktop show-at--large">
                        <a href="#" id="notification-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColo" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="theme--primary-text-color feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </a>
                        <span class="notifbadge" id="notification-badge">1</span>
                    </li>
                </ul>
            </nav>

            <!-- Modal -->
            <div id="notification-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header theme--primary-text-color">
                        <h3>📢 Info:</h3>
                        <span class="close-notifmodal">&times;</span>
                    </div>
                    <div class="chat-container">
                        <!-- Massage 5 -->
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">04 Oktober 2024</span>
                            </div>
                            <p class="message-content small-text">
                                🆕 Baru saja diupdate: <br>
                                <b>SS Dewasa :</b> Add Pelajaran 1<br>
                                <b>SS Dewasa English Version :</b> Add Pelajaran 1-13 lengkap<br>
                                <b>SS Anak-anak :</b> Add Menu Baru, Acitivity SSAA<br>
                            </p>
                        </div><br>
                        <p><em>Update Sebelumnya</em></p>
                        <hr><br>
                        <!-- Massage 4 -->
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">21 Agustus 2024</span>
                            </div>
                            <p class="message-content small-text">
                                <b>SS Dewasa :</b> Add Pelajaran 8 & Penuntun Guru (Pdf & PPTX)<br>
                                <b>SS Dewasa :</b> Add Rangkuman versi Fustero.es (Docx, Pdf & PPTX)<br>
                                <b>SS Cornerstone :</b> Add Pelajaran 8 dan Penuntun Guru (link Canva, Pdf & PPTX)<br>
                                <b>SS PowerPoints :</b> Add Pelajaran 8 dan Penuntun Guru (Pdf & PPTX)<br>
                            </p>
                        </div>
                        <!-- Massage 3 -->
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">15 Agustus 2024</span>
                            </div>
                            <p class="message-content small-text">
                                Diupdate: <br>
                                <b>SS Cornerstone Connections</b><br>
                                - Add Pelajaran 7 (Link Presentasi di Canva, Pdf & PPTX) dan Penuntun Guru<br>
                                <b>SS Real Time Faith</b><br>
                                - Add Pelajaran 1 - 13 (Pdf)<br>
                                <b>SS Beginner</b><br>
                                - Add Pelajaran Juli - September (Link Presentasi Canva, Pdf & PPTX)<br>
                                - Add Penuntun Guru Juli - September (Pdf)<br>
                                - Add Activity Juli - Agustus (Pdf)
                            </p>

                        </div>
                        <!-- Massage 2 -->
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">1 Agustus 2024</span>
                            </div>
                            <p class="message-content small-text">Sudah tersedia: <br>
                                - SS Dewasa<br>
                                - SS Remaja<br>
                                - SS Anak-anak<br>
                                - SS Semua tingkat usia dalam bahasa Inggris<br>
                                - Berita Mision

                            </p>
                        </div>
                        <!-- Massage 1 -->
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">1 Juli 2024</span>
                            </div>
                            <p class="message-content small-text">Shalom, Puji Tuhan...
                                Akhirnya hari ini Website <b>SEKOLAH SABAT ID</b> resmi dirilis untuk publik.
                                Selengkapnya tentang website ini, bisa baca <a
                                    href="<?= base_url('pages/tentang-kami') ?>"><em>Tentang Kami.</em></a>
                                Semoga Bermanfaat 🙏😇
                            </p>
                        </div>
                        <!-- Tambahkan pesan lainnya di sini -->
                    </div>
                </div>
            </div>



            <!-- search icon -->
            <!-- <form role="search" action="search-results" method="get" class="search-form toggled-element">
                        <fieldset>
                        <legend class="is-vishidden">Search</legend>
                        <input type="search" name="search" placeholder="Search&hellip;" class="search-form__input font--secondary--s" required />
                        <input type="hidden" name="id" value="3574" />
                        <input type="hidden" name="ie" value="UTF-8" />
                        <button class="search-form__submit is-vishidden">
                        <span class="is-vishidden">Submit</span>
                        </button> 
                        </fieldset>
                    </form> -->
        </div>
    </div>
</div>
<!-- end header__inner -->
</header>
<!-- END HEADER -->