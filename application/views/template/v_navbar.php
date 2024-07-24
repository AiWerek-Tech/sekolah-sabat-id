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
                        <a class="secondary-nav__link theme--secondary-text-color" href="site-map">
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
                </ul>
            </nav>


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