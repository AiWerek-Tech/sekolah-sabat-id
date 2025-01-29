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
          <h1 class="font--secondary--xl theme--secondary-text-color">DIVISI AMERIKA UTARA</h1>
          <h3 class="font--secondary--xl theme--secondary-text-color">Triwulan <?= $triwulan_ke ?>, <?= $tahun ?></h3>
          <img src="https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/4Q/cover.jpg" class="img-right">
          <p>
          Pada triwulan ini kami menampilkan Divisi Amerika Utara, yang menaungi pekerjaan Gereja Masehi Advent Hari Ketujuh di Amerika Serikat, Kanada, wilayah kepemilikan Prancis di St. Pierre dan Miquelon, wilayah lautan Inggris di Bermuda, wilayah Amerika Serikat di Guam, Pulau Wake, dan Kepulauan Mariana Utara di Samudra Pasifik, dan tiga negara bagian di perjanjian yang memiliki hubungan bebas dengan Amerika Serikat, yaitu Palau, Kepulauan Marshall, dan negara-negara Federasi Mikronesia. Wilayah ini merupakan rumah bagi 372 juta orang, termasuk 1.224.769 umat Advent. Itu adalah rasio satu orang Advent untuk setiap 304 orang.
          </p>
          <p><em>
              Perlu diketahui bahwa Anda tidak perlu membaca cerita persis seperti yang dipublikasikan. silakan
              menyesuaikan bahasa dan isinya dengan tingkat yang sesuai dengan kelompok usia di kelas Sekolah Sabat
              Anda.</em>
          </p>
          <button> <a class="file1" href="https://am.adventistmission.org/mqc24q4-bahasa-version"
              target="_blank">Download Pdf</a></button>
          <div class="lessonlist">

            <!-- BHS INDOENSIA -->
            <ul class="folders lessons Indonesia">
              <li class="folder language">
                <h2>Bacaan Berita Misi</h2>
                
                <ul class="lessons">
                  <li>
                      <h3 class="ltrigger open">Bahasa Indonesia</h3>
                      <ul class="drawer lessons open">
                          <?php if (!empty($berita_misi)): // Cek apakah data ada ?>
                              <?php foreach ($berita_misi as $index => $berita): ?>
                                  <li>
                                      <a class="html" href="<?= base_url('berita-misi/anak-anak/' . $berita['id']); ?>">
                                          <span>Sabat ke <?= $index + 1; ?></span>
                                          <p class="judul-cerita"><em><?= $berita['judul']; ?></em></p>
                                      </a>
                                      
                                      <!-- Tautan PDF, hanya jika ada -->
                                      <?php if (!empty($berita['file_pdf'])): ?>
                                          <a class="file1" href="<?= $berita['file_pdf']; ?>" target="_blank">
                                              <span>PDF</span>
                                          </a>
                                      <?php endif; ?>

                                      <!-- Tautan PPTX, hanya jika ada -->
                                      <?php if (!empty($berita['file_ppt'])): ?>
                                          <a class="presentation1" href="<?= $berita['file_ppt']; ?>" target="_blank">
                                              <span>PPTX</span>
                                          </a>
                                      <?php endif; ?>
                                      
                                      <section class="audio"></section>
                                  </li>
                              <?php endforeach; ?>
                          <?php else: ?>
                              <li><p>Tidak ada berita misi anak-anak yang tersedia saat ini.</p></li>
                          <?php endif; ?>
                      </ul>
                  </li>
                </ul>




                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger">English Mission Story</h3>
                    <ul class="drawer lessons">
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2441" target="_blank"><span>Story 01
                            </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2442" target="_blank"><span>Story 02
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2443" target="_blank"><span>Story 03
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2444" target="_blank"><span>Story 04
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2445" target="_blank"><span>Story 05
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2446" target="_blank"><span>Story 06
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2447" target="_blank"><span>Story 07
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2448" target="_blank"><span>Story 08
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c2449" target="_blank"><span>Story 09
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c24410" target="_blank"><span>Story 10
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c24411" target="_blank"><span>Story 11
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c24412" target="_blank"><span>Story 12
                           </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html" href="https://am.adventistmission.org/c24413" target="_blank"><span>Story 13
                          </span></a><a class="file" target="_blank" class="file"
                          href="https://am.adventistmission.org/mqc24q3.pdf"><span>Download</span></a>
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
                  <a href="<?= base_url('') ?>berita-misi/dewasa">
                    Berita Misi Dewasa
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