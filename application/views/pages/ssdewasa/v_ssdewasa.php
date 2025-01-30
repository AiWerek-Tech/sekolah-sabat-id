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

    @media all and (min-width: 500px) {

      .img-right {
        float: right;
        margin: 2em 0 1em 1.5em;
        width: 40%;
      }
    }

    .img-right {
      width: 40%;
      float: right;
      margin: 2em 0 1em 1.5em;
    }

    a {
      color: initial;
      /* Ganti dengan warna default jika perlu */
    }

    a[href=""] span {
      color: #A7A5A0 !important;
    }
  </style>
  <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
    <div class="layout-container cf">
      <div class="flex-container cf">
        <div class="shift-left--fluid">
          <span class="kicker white"></span>
          <h1 class="font--tertiary--xl white">Pedoman Pendalaman Alkitab Dewasa</h1>
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
                  href="<?= base_url('') ?>kelas/ss-dewasa">Sekolah Sabat Dewasa</a></li>
              <li class="breadcrumbs__list-item font--secondary--xs upper dib"><a class="current">Pedoman Pendalaman
                  Alkitab Dewasa</a></li>
            </ul>
          </nav>
        </div>
        <div class="pad--primary spacing text page_content pad--btm">
          <!-- <p>Pedoman Pendalaman Alkitab Dewasa atau sering disebut sekolah sabat dewasa ditujukan untuk usia Dewasa.</p> -->
          <h1 class="font--secondary--xl theme--secondary-text-color">Tema-Tema Dalam INJIL YOHANES</h1>
          <h3 class="font--secondary--xl theme--secondary-text-color">Triwulan IV, 2024</h3>
          <img src="<?= base_url('assets') ?>/image/ssdewasa_lesson/2024/q4/q4_cover.png" class="img-right">
          <p class="visible-text">
          Tujuan triwulan ini adalah untuk memahami pekabaran Injil Yohanes. Di antara empat Injil, Injil Yohanes adalah unik, sering kali memusatkan perhatian pada percakapan pribadi antara Yesus dengan hanya satu atau dua orang seperti Natanael, Nikodemus, wanita di sumur, orang lumpuh di kolam Betesda, orang buta sejak lahir. Lazarus dan saudara perempuannya, Pilatus, Petrus, atau Tomas. Banyak dari kisah-kisah ini hanya muncul dalam Injil Yohanes.
          <br><br>
          Sama seperti karpet Persia dapat membawa seseorang ke pemandangan Pegunungan Alpen yang indah, demikian juga kiranya Injil Yohanes membawa kita kembali ke kehidupan dan pelayanan Yesus Kristus, yang dengan mengenalnya adalah hidup kekal. 
          </p>
          <p><em>
              Penulis: E. Edward Zinke & Thomas Shepherd, Ph.D., Dr.P.H.</em>
          </p>
          <p class="hidden-text"> </p>
          <!-- <button class="read-more">Baca Selengkapnya</button> -->
          <p><em>
              Tersedia dalam bentuk format Pdf dan PPT</em>
          </p>
          <div class="lessonlist">

            <!-- BHS INDOENSIA -->
            <ul class="folders lessons Indonesia">
              <li class="folder language">
                <h2>Pelajaran - Kitab Markus</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Standar (Siswa)</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04"
                          target="_blank"><span>Pendahuluan</span></a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/01/01"
                          target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1" href="https://drive.google.com/uc?export=download&id=11vwlGzSCNa05OU2qw9OWNWTUtDHBA-pq" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="https://drive.google.com/uc?export=download&id=15dkGrN-h-XJXGCGG7spkvOCm4rZDlhH6" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/02/01"
                          target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/03/01"
                          target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/02/01"
                          target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/05/01"
                          target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/06/01"
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/07/01"
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/08/01"
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/09/01"
                          target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/10/01"
                          target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/11/01"
                          target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/12/01"
                          target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04/13/01"
                          target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Penuntun Guru</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html" href="https://drive.google.com/file/d/1b4edQHm8LvDGVcVD7sW63jFZFjFLvEBT/view?usp=drive_link"
                          target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1" href="https://drive.google.com/uc?export=download&id=1b4edQHm8LvDGVcVD7sW63jFZFjFLvEBT" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href=""
                          target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href=""
                          target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href=""
                          target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href=""
                          target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href=""
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Edisi Mudah Dibaca</h3>
                    <ul class="drawer lessons ">
                      <!-- <li>
                        <a class="html" href=""
                          target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Catatan Tambahan EGW</h3>
                    <ul class="drawer lessons ">
                      <!-- <li>
                        <a class="html" href="https://sabbath-school.adventech.io/in/2024-04"
                          target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 12</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 13</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <!-- <a class="presentation1" href="" target="_blank"><span>PPTX</span></a> -->
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Rangkuman (Versi Fustero.es)</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/1fZxJwtzI59-WM9roru-JCQmVrcZOG0F9/view?usp=drive_link"
                          target="_blank"><span>Pelajaran 01</span></a>
                        <a class="file1"
                          href="https://drive.google.com/uc?export=download&id=12a4m_t00L2uVhYUKPD9Ipnve4HHKxrSK"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://drive.google.com/file/d/1Lfb7Y3IMCcEnyVYhaGY07yL-8tPaslRt/view?usp=drive_link"
                          target="_blank"><span>Pelajaran 02</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 03</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 04</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 05</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 06</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 07</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 08</span></a>
                        <a class="file1"
                          href=""
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation1"
                          href=""
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 09</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 10</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 11</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href=""
                          target="_blank"><span>Pelajaran 12</span></a>
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

          </div>
        </div>
        <hr class style="margin: 2.5rem 0 0; More Resources">
        <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
            Resources</span>
          <aside>
            <ul class="folders folders-gracelink">
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>ss-dewasa/english-version">
                    Sekolah Sabat Dewasa dalam Bahasa Inggris
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>pages/ruang-lingkup-pelajaran-ss">
                    Ruang Lingkup dan Urutan Pelajaran
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
      // Mendapatkan semua tautan dengan kelas 'html', 'file1', dan 'presentation'
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