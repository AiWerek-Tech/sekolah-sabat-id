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
        margin: 0em 0 1em 1.5em;
        width: 40%;
      }
    }

    .img-right {
      width: 40%;
      float: right;
      margin: 0em 0 1em 1.5em;
    }

    a {
      color: initial;
      /* Ganti dengan warna default jika perlu */
    }

    a[href=""] span {
      color: #A7A5A0 !important;
    }

    .html span {
      margin-top: -5px !important;
      /* font-size: 15px !important; */
    }

    .judul-cerita {
      font-size: 12px;
      margin-top: -5px !important;
      color: #A7A5A0;
    }


    /* tampilan mobile */
    ul.lessons ul.drawer li a.html1 {
      width: 60% !important;
    }

    /* tampilan mobile */
    ul.lessons ul.drawer li a.presentation1 {
      background-image: url(<?= base_url('assets') ?>/image/icon/presentation-download.svg);
      width: auto !important;
      /* /* background-repeat: no-repeat;
      background-position: center 0.5em; */
      /* padding: 0.5em 0.5em; */
    }

    /* tampilan desktop */
    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.html1 {
        width: 80% !important;
      }

      ul.lessons ul.drawer li a.presentation1 {
        width: 20%;
      }
    }

    ul.lessons ul.drawer li a.presentation1:hover {
      background-image: url(<?= base_url('assets') ?>/image/icon/file-download.svg);
      background-position: center 0.6em;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.presentation1:hover {
        background-position: 5px 0.6em;
      }
    }

    ul.lessons ul.drawer li a.presentation1 span {
      display: none;
      font-size: 0.8em;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.presentation1 span {
        display: inline;
        margin-left: 5px;
      }
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
                  href="<?= base_url('') ?>pages/berita-misi">Berita Misi</a></li>
              <li class="breadcrumbs__list-item font--secondary--xs upper dib"><a class="current"><?= $judul ?></a></li>
            </ul>
          </nav>
        </div>
        <div class="pad--primary spacing text page_content pad--btm">
          <!-- <p>Pedoman Pendalaman Alkitab Dewasa atau sering disebut sekolah sabat dewasa ditujukan untuk usia Dewasa.</p> -->
          <h1 class="font--secondary--xl theme--secondary-text-color">DIVISI ANTAR-AMERIKA</h1>
          <h3 class="font--secondary--xl theme--secondary-text-color">Triwulan III, 2024</h3>
          <img src="<?= base_url('assets') ?>/image/berita_misi/bmd-cover.webp" class="img-right">
          <p>
            Pada triwulan ini kami menampilkan Divisi Antar-Amerika, yang menaungi pekerjaan Gereja Masehi Advent Hari
            Ketujuh di 42 negara dan wilayah di Laut Karibia, Amerika Tengah, dan bagian utara Amerika Selatan. Wilayah
            ini merupakan rumah bagi 305 juta orangdan 3,7 juta umat Advent. Hal ini berarti satu orang Advent
            berbanding 82 orang.
          </p>
          <p><em>
              Perlu diketahui bahwa Anda tidak perlu membaca cerita persis seperti yang dipublikasikan. silakan
              menyesuaikan bahasa dan isinya dengan tingkat yang sesuai dengan kelompok usia di kelas Sekolah Sabat
              Anda.</em>
          </p>
          <button> <a class="file1" href="https://am.adventistmission.org/mqa24q3-bahasa-version" target="_blank">Download Pdf</a></button>
          <div class="lessonlist">

            <!-- BHS INDOENSIA -->
            <ul class="folders lessons Indonesia">
              <li class="folder language">
                <h2>Bacaan Berita Misi</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger open">Bahasa Indonesia</h3>
                    <ul class="drawer lessons open">
                      <!-- <li>
                        <a class="html" href="" target="_blank"><span>Download</span><br>
                        </a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li> -->
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2431"><span>Sabat
                            ke 01</span>
                          <p class="judul-cerita"><em><?= $titlestory1 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://docs.google.com/presentation/d/1ooOMyEIl-e2AlJoLXTmen4GpFbnUFdka/edit?usp=sharing&ouid=115645978607426132026&rtpof=true&sd=true"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2432"><span>Sabat
                            ke 02</span>
                          <p class="judul-cerita"><em><?= $titlestory2 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://docs.google.com/presentation/d/1SHrpgffDStUz9xJkx_4QCj9tll9z_qGC/edit?usp=sharing&ouid=115645978607426132026&rtpof=true&sd=true"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2433"><span>Sabat
                            ke 03</span>
                          <p class="judul-cerita"><em><?= $titlestory3 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://docs.google.com/presentation/d/17xg3EyldJwdGiPRvLUTCNN5Ro5Z9_Ppm/edit?usp=sharing&ouid=115645978607426132026&rtpof=true&sd=true"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2434"><span>Sabat
                            ke 04</span>
                          <p class="judul-cerita"><em><?= $titlestory4 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://docs.google.com/presentation/d/1F1yEEIgw4lw4uTkrZGWmbMWiNT9fYjMN/edit?usp=sharing&ouid=115645978607426132026&rtpof=true&sd=true"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2435"><span>Sabat
                            ke 05</span>
                          <p class="judul-cerita"><em><?= $titlestory5 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://docs.google.com/presentation/d/16GElclrhbleAc4S7e_XcuK39Px1f6biq/edit?usp=sharing&ouid=115645978607426132026&rtpof=true&sd=true"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2436"><span>Sabat
                            ke 06</span>
                          <p class="judul-cerita"><em><?= $titlestory6 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1DkJIwRLZbhPMUS0eza6CmccfKS4uZIhB"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2437"><span>Sabat
                            ke 07</span>
                          <p class="judul-cerita"><em><?= $titlestory7 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1"
                          href="https://drive.google.com/uc?export=download&id=1RiK4XRvsXETKu9qJL7HuUMA4rj_3wpXc"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2438"><span>Sabat
                            ke 08</span>
                          <p class="judul-cerita"><em><?= $titlestory8 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d2439"><span>Sabat
                            ke 09</span>
                          <p class="judul-cerita"><em><?= $titlestory9 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d24310"><span>Sabat
                            ke 10</span>
                          <p class="judul-cerita"><em><?= $titlestory10 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d24311"><span>Sabat
                            ke 11</span>
                          <p class="judul-cerita"><em><?= $titlestory11 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d24312"><span>Sabat
                            ke 12</span>
                          <p class="judul-cerita"><em><?= $titlestory12 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html1" href="<?= base_url('') ?>berita-misi/dewasa/d24313"><span>Sabat
                            ke 13</span>
                          <p class="judul-cerita"><em><?= $titlestory13 ?></em></p>
                        </a>
                        <!-- <a class="file1" href="" target="_blank"><span>PDF</span></a> -->
                        <a class="presentation1" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                    </ul>
                  </li>
                </ul>

                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger">English Mission Story</h3>
                    <ul class="drawer lessons">
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2431" target="_blank"><span>Story 01 -
                            July 6</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2432" target="_blank"><span>Story 02 -
                            July 13</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2433" target="_blank"><span>Story 03 -
                            July 20</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2434" target="_blank"><span>Story 04 -
                            July 27</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2435" target="_blank"><span>Story 05 -
                            August 3</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2436" target="_blank"><span>Story 06 -
                            August 10</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2437" target="_blank"><span>Story 07 -
                            August 17</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2438" target="_blank"><span>Story 08 -
                            August 24</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a2439" target="_blank"><span>Story 09 -
                            August 31</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a24310" target="_blank"><span>Story 10 -
                            September 7</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a24311" target="_blank"><span>Story 11 -
                            September 14</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a24312" target="_blank"><span>Story 12 -
                            September 21</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/a24313" target="_blank"><span>Story 13 -
                            September 28</span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqa24q3.pdf"><span>Download</span></a>
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
                  <a href="<?= base_url('') ?>berita-misi/anak-anak">
                    Berita Misi Anak-anak
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>berita-misi/video">
                    Video Berita Misi
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