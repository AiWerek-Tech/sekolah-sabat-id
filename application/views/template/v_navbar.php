<style>
    .notification svg {
        width: 24px;
        height: 24px;
        /* color: #000; */
    }

    .notification .badge {
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

    .notification svg {
        width: 24px;
        height: 24px;
        stroke: purple;
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

    /* Modal styling */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 15px;
        border: 1px solid #888;
        width: fit-content;
        /* Lebar modal sesuai dengan konten */
        max-width: 90%;
        /* Opsional: Batasan lebar modal */
        border-radius: 8px;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding: 10px 20px;
        /* Kurangi padding jika perlu */
        border-bottom: 1px solid #ddd;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 18px;
    }

    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
    }

    /* Chat container styling */
    .chat-container {
        max-height: 400px;
        overflow-y: auto;
    }

    .chat-message {
        padding: 10px;
        margin: 10px 0;
        border-radius: 10px;
        background-color: #f1f1f1;
        max-width: 400px;
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
            <span class="nav-toggle__segment nav-toggle__segment--1 theme--primary-background-color"></span><span
                class="nav-toggle__segment nav-toggle__segment--2 theme--primary-background-color"></span><span
                class="nav-toggle__segment nav-toggle__segment--3 theme--primary-background-color"></span><span
                class="nav-toggle__segment nav-toggle__segment--4 theme--primary-background-color"></span>
        </div>
        <strong class="nav-toggle__text upper theme--primary-text-color font--secondary--s">Menu</strong>

    </span>

    <!-- LOGO WEBSITE -->
    <div class="header__unify-logo-nav">
        <a href="<?= base_url('') ?>"
            class="logo__link logo__link--horiz theme--primary-background-color show-until--large ">
            <img src="<?= base_url('assets') ?>/image/logo_horizontal.webp" loading="lazy" class="logo"
                style=" margin-bottom: 0.625rem !important;" alt="Sabbath School and Personal Ministries Logo" />
        </a>
        <a href="<?= base_url('') ?>"
            class="logo__link logo__link--square theme--primary-background-color show-at--large ">
            <img src="<?= base_url('assets') ?>/image/logo_square.webp" loading="lazy" class="logo"
                style=" margin-bottom: 0.625rem !important;" alt="Sabbath School and Personal Ministries Logo" />
        </a>



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
                        <a class="secondary-nav__link theme--secondary-text-color" target="_blank"
                            href="https://wa.me/6282238165964">
                            <strong>Hubungi Kami</strong>
                        </a>
                    </li>
                    <li class="secondary-nav__list-item rel">
                        <a class="secondary-nav__link theme--secondary-text-color"
                            href="<?= base_url('pages/tentang-kami') ?>">
                            <strong>Tentang Kami</strong>
                        </a>
                    </li>
                    <li class="notification">
                        <a href="#" id="notification-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColo" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="theme--primary-text-color feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </a>
                        <span class="badge">1</span>
                    </li>
                </ul>
            </nav>

            <!-- Modal -->
            <div id="notification-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header theme--primary-text-color">
                        <h2>Info Update:</h2>
                        <span class="close">&times;</span>
                    </div>
                    <div class="chat-container">
                        <div class="chat-message">
                            <div class="message-header">
                                <strong>Admin</strong>
                                <span class="separator">•</span>
                                <span class="date">2024-08-15</span>
                            </div>
                            <p class="message-content">Konten Website yang baru saja diupdate: <br>
                                - SS Cornerstone Connections<br>
                                - SS Real Time Faith <br>
                                - SS Begginer
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

<script>
    // Get the modal
    var modal = document.getElementById("notification-modal");

    // Get the button that opens the modal
    var btn = document.getElementById("notification-icon");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>