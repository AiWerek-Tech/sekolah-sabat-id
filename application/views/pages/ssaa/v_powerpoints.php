<main class="main can-be--dark-dark" role="main">
  <style type="text/css">
    .header-swath--with-image {
      background-size: 100% auto;
      background-image: url(<?= $og_image ?>);
    }

    @media (min-width: 900px) {
      .header-swath--with-image {
        background-image: url(<?= $og_image ?>);
      }
    }

    @media (min-width: 1100px) {
      .header-swath--with-image {
        background-image: url(<?= $og_image ?>);
      }
    }

    /* Modal Background */
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.6);
      padding-top: 60px;
    }

    /* Modal Content */
    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 0;
      border-radius: 8px;
      width: 80%;
      max-width: 600px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      position: relative;
      transition: opacity 0.3s ease;
    }

    /* Modal Header */
    .modal-header {
      background-color: #FFC107;
      /* Background color for warning */
      color: #fff;
      /* Text color for the title */
      padding: 15px;
      border-radius: 8px 8px 0 0;
      position: relative;
      font-size: 1.2em;
    }

    /* Close Button in Header */
    .modal-header .close {
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      position: absolute;
      right: 15px;
      top: 15px;
      cursor: pointer;
      transition: color 0.3s;
    }

    .modal-header .close:hover,
    .modal-header .close:focus {
      color: #eee;
    }

    /* Modal Body */
    .modal-body {
      padding: 20px;
      font-size: 1em;
    }

    /* Modal Footer (optional) */
    .modal-footer {
      background-color: #f1f1f1;
      padding: 10px;
      border-radius: 0 0 8px 8px;
      text-align: right;
    }

    a {
      color: initial;
      /* Ganti dengan warna default jika perlu */
    }

    a[href=""] span {
      color: #A7A5A0 !important;
    }
    
     /* tampilan mobile */
    ul.lessons ul.drawer li a.html {
      width: 40% !important;
    }
  </style>
  <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
    <div class="layout-container cf">
      <div class="flex-container cf">
        <div class="shift-left--fluid">
          <span class="kicker white"></span>
          <h1 class="font--tertiary--xl white"><?= $judul ?></h1>
        </div>
        <div class="shift-right--fluid"></div>
      </div>
    </div>
  </header>
  <div class="layout-container full--until-large">
    <div class="flex-container cf">
      <div class="shift-left--fluid column__primary bg--white can-be--dark-light ">
        <div class="pad--primary breadcrumbs-container">
          <nav class="breadcrumbs" role="navigation">
            <ul class="breadcrumbs__list">
              <li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
                  href="<?= base_url('') ?>kelas/ss-anak-anak">Sekolah
                  Sabat Anak-anak</a></li>
              <li class="breadcrumbs__list-item font--secondary--xs upper dib"><a class="current"><?= $judul ?></a></li>
            </ul>
          </nav>
        </div>
        <div class="pad--primary spacing text page_content pad--btm">
          <h1 class="font--secondary--xl theme--secondary-text-color">Triwulan III, 2024</h1>
          <h3 class="font--secondary--xl theme--secondary-text-color">Tahun A</h3>
          <img src="<?= base_url('assets') ?>/image/ssaa/cover_lesson/cover_powerpoints_q3.jpg" class="img-right">
          <p>Junior PowerPoints adalah Panduan Pelajaran Alkitab Sekolah Sabat yang dirancang untuk para Remaja (usia
            10-12) oleh departemen Sekolah Sabat di Konferensi Umum GMAHK. Kurikulum
            pelajaran Alkitab ini didasarkan pada siklus empat tahun. Setiap tahun pelajaran diambil dari kisah-kisah
            Alkitab secara kronologis dari Kejadian sampai Wahyu. Pelajaran-pelajaran ini dirancang untuk para remaja
            untuk dimasukkan dalam pelajaran Alkitab harian mereka dan menjadi dasar
            untuk belajar dan berdiskusi di kelas Sekolah Sabat Remaja.
          </p>
          <!-- <h1 class="font--secondary--xl theme--secondary-text-color">Triwulan III, Tahun A 2024</h1> -->
          <p><em>Klik Judul Pelajaran untuk lihat pelajaran. Sedangkan jika ingin download langusng, silahkan pilih
              format PDF atau PPTX.</em>
          </p>
          <div class="lessonlist">

            <!-- BHS INDOENSIA -->
            <ul class="folders lessons Indonesia">
              <li class="folder language">
                <h2>Bahasa Indonesia</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger open">Siswa</h3>
                    <ul class="drawer lessons open">
                      <!-- <li>
                        <a class="html" href="" target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1xugeDFlT50v67Sb2TnI-wwonwj-AluU-/edit?usp=drive_link"
                          target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1xugeDFlT50v67Sb2TnI-wwonwj-AluU-"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1xugeDFlT50v67Sb2TnI-wwonwj-AluU-"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1N9Wqmk2LGWyZi_hAsxxaPSjeLzY-p-if/edit?usp=drive_link"
                          target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1N9Wqmk2LGWyZi_hAsxxaPSjeLzY-p-if"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1N9Wqmk2LGWyZi_hAsxxaPSjeLzY-p-if"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1yxkUdYXJwjD3o6lpEba159HQEUYTYIEV/edit?usp=drive_link"
                          target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1yxkUdYXJwjD3o6lpEba159HQEUYTYIEV"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1yxkUdYXJwjD3o6lpEba159HQEUYTYIEV"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1Lev88ZZnkIYBgwJsxVY6t7CNbpX3HLkH/edit?usp=drive_link"
                          target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1Lev88ZZnkIYBgwJsxVY6t7CNbpX3HLkH"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1Lev88ZZnkIYBgwJsxVY6t7CNbpX3HLkH"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1St5g-C_qfl4AxFvyhNgdhH6ZXWX6UhM8/edit?usp=drive_link&ouid=112681785163385046283&rtpof=true&sd=true"
                          target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1St5g-C_qfl4AxFvyhNgdhH6ZXWX6UhM8"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1St5g-C_qfl4AxFvyhNgdhH6ZXWX6UhM8"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/170xLvm9uOckJIkGZGjU5oKp5HqERvDkE/edit?usp=drive_link&ouid=112681785163385046283&rtpof=true&sd=true"
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=170xLvm9uOckJIkGZGjU5oKp5HqERvDkE"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=170xLvm9uOckJIkGZGjU5oKp5HqERvDkE"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://docs.google.com/presentation/d/1S2qT1P-kf5egIc9xK3FT1RBE3qVGlYSg/edit?usp=drive_link&ouid=112681785163385046283&rtpof=true&sd=true"
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1S2qT1P-kf5egIc9xK3FT1RBE3qVGlYSg"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1S2qT1P-kf5egIc9xK3FT1RBE3qVGlYSg"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/1gJ3L81ZYTkMmKLl5Nihj5lW8vYUPLsBy/view?usp=drive_link"
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1gJ3L81ZYTkMmKLl5Nihj5lW8vYUPLsBy"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1IIMgECR2PmIsCkNsjXo7hsEsYzgE6ARx"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/14jZP15aZthH7iJA39CNfpQEb1yWObmnW/view?usp=drive_link"
                          target="_blank"><span>Ayat Hafalan</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=14jZP15aZthH7iJA39CNfpQEb1yWObmnW"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger">Actifity</h3>
                    <ul class="drawer lessons">
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/13umbfm15-NaZce13a-T5Fhyb3LAnlgJi/view?usp=drive_link"
                          target="_blank"><span>1. Juli</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=13umbfm15-NaZce13a-T5Fhyb3LAnlgJi"
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/1t_3xYxGu76fQVupDLfl-gP-Ug5mHpUo9/view?usp=drive_link"
                          target="_blank"><span>2. Agustus</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1t_3xYxGu76fQVupDLfl-gP-Ug5mHpUo9"
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>3. September</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/19ENl5uQ38wFmLTFGMBSyfnY-1H3Jtgx7/view?usp=drive_link"
                          target="_blank"><span>Teka-teki 8 (hlm.59)</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=19ENl5uQ38wFmLTFGMBSyfnY-1H3Jtgx7"
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Penuntun Guru</h3>
                    <ul class="drawer lessons">
                      <!-- <li>
                        <a class="html" href="" target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <!-- <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/1XNwHRF6Cl4NRZBNUDzhZRqPhZB8BzcQO/view?usp=drive_link"
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=1XNwHRF6Cl4NRZBNUDzhZRqPhZB8BzcQO"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=192vIJczCWULNhMxNwchdEYhs5cB4XG9J"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>

            <!-- BHS INGGRIS -->
            <ul class="folders lessons English">
              <li class="folder language">
                <h2>English</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger">Student</h3>
                    <ul class="drawer lessons">
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Activities.pdf"
                          target="_blank"><span>Activities</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Activities.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Intro.pdf"
                          target="_blank"><span>Introduction</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Intro.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L01.pdf"
                          target="_blank"><span>Lesson 01 - July 6</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L01.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L02.pdf"
                          target="_blank"><span>Lesson 02 - July 13</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L02.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L03.pdf"
                          target="_blank"><span>Lesson 03 - July 20</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L03.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L04.pdf"
                          target="_blank"><span>Lesson 04 - July 27</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L04.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L05.pdf"
                          target="_blank"><span>Lesson 05 - August 3</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L05.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L06.pdf"
                          target="_blank"><span>Lesson 06 - August 10</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L06.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L07.pdf"
                          target="_blank"><span>Lesson 07 - August 17</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L07.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L08.pdf"
                          target="_blank"><span>Lesson 08 - August 24</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L08.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L09.pdf"
                          target="_blank"><span>Lesson 09 - August 31</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L09.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L10.pdf"
                          target="_blank"><span>Lesson 10 - September 7</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L10.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L11.pdf"
                          target="_blank"><span>Lesson 11 - September 14</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L11.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L12.pdf"
                          target="_blank"><span>Lesson 12 - September 21</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L12.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L13.pdf"
                          target="_blank"><span>Lesson 13 - September 28</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-L13.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-MemoryVerses.pdf"
                          target="_blank"><span>Memory Verses</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-MemoryVerses.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Parents.pdf"
                          target="_blank"><span>Parents</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Student/PP-24-Q3-Parents.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Teacher</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-Activities-T.pdf"
                          target="_blank"><span>Activities</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-Activities-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-Intro-T.pdf"
                          target="_blank"><span>Introduction</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-Intro-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L01-T.pdf"
                          target="_blank"><span>Lesson 01 - July 6</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L01-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L02-T.pdf"
                          target="_blank"><span>Lesson 02 - July 13</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L02-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L03-T.pdf"
                          target="_blank"><span>Lesson 03 - July 20</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L03-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L04-T.pdf"
                          target="_blank"><span>Lesson 04 - July 27</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L04-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L05-T.pdf"
                          target="_blank"><span>Lesson 05 - August 3</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L05-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L06-T.pdf"
                          target="_blank"><span>Lesson 06 - August 10</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L06-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L07-T.pdf"
                          target="_blank"><span>Lesson 07 - August 17</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L07-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L08-T.pdf"
                          target="_blank"><span>Lesson 08 - August 24</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L08-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L09-T.pdf"
                          target="_blank"><span>Lesson 09 - August 31</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L09-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L10-T.pdf"
                          target="_blank"><span>Lesson 10 - September 7</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L10-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L11-T.pdf"
                          target="_blank"><span>Lesson 11 - September 14</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L11-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L12-T.pdf"
                          target="_blank"><span>Lesson 12 - September 21</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L12-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L13-T.pdf"
                          target="_blank"><span>Lesson 13 - September 28</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-L13-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-MemoryVerses-T.pdf"
                          target="_blank"><span>Memory Verses</span></a><a class="file" target="_blank" class="file"
                          href="https://www.juniorpowerpoints.org/assets/juniors/Lessons/2024/Q3/English/Teacher/PP-24-Q3-MemoryVerses-T.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
        <hr class style="margin: 2.5rem 0 0; More Resources">
        <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
            Resources</span>
          <aside>
            <ul class="folders folders-gracelink">
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view" target="_blank"
                    style="background-image:url(<?= base_url('assets') ?>/image/icon/file-8.svg)">
                    Ruang Lingkup dan Urutan Pelajaran
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>pages/tentang-kurikulum-gracelink">
                    Tentang Kurikulum Gracelink
                  </a>
                </h3>
              </li>
            </ul>
          </aside>
        </div>
      </div>

      <!-- ASIDE BOX section -->
      <!-- Aside -->
      <?php $this->load->view($aside); ?>

    </div>

  </div>


  <div id="myModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3>File Tidak Tersedia</h3>
      </div>
      <div class="modal-body">
        <p>Mohon Maaf! File belum tersedia, silahkan kembali lagi nanti!</p>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Mendapatkan semua tautan dengan kelas 'html', 'file1', dan 'presentation1'
      var linkClasses = ['html', 'file', 'file1', 'presentation1'];
      var links = document.querySelectorAll(linkClasses.map(cls => `a.${cls}`).join(', '));

      links.forEach(function (link) {
        link.addEventListener('click', function (event) {
          var href = link.getAttribute('href');
          // Jika href kosong, tidak valid, atau "#", tampilkan modal
          if (!href || href.trim() === "" || href === "#") {
            event.preventDefault(); // Mencegah tindakan default dari tautan
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
          }
        });
      });

      // Menangani penutupan modal
      var modal = document.getElementById("myModal");
      var closeButton = document.getElementsByClassName("close")[0];

      closeButton.onclick = function () {
        modal.style.display = "none";
      }

      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    });
  </script>

</main>