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
        </div>
        <div class="pad--primary spacing text page_content pad--btm">
          <p><?= $og_description ?></p>
          <h1 class="font--secondary--xl theme--secondary-text-color">Triwulan IV, 2024</h1>
          <p><em></em>
          </p>
          <div class="lessonlist">

            <!-- BHS INGGRIS -->
            <ul class="folders lessons English">
              <li class="folder language">
                <h2>Indonesia</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Activity SSA</h3>
                    <ul class="drawer lessons open">
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L01.pdf"
                          target="_blank"><span>Acivity 01 - July 6</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L01.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L02.pdf"
                          target="_blank"><span>Acivity 02 - July 13</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L02.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L03.pdf"
                          target="_blank"><span>Acivity 03 - July 20</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L03.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L04.pdf"
                          target="_blank"><span>Acivity 04 - July 27</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L04.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L05.pdf"
                          target="_blank"><span>Acivity 05 - August 3</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L05.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L06.pdf"
                          target="_blank"><span>Acivity 06 - August 10</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L06.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L07.pdf"
                          target="_blank"><span>Acivity 07 - August 17</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L07.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L08.pdf"
                          target="_blank"><span>Acivity 08 - August 24</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L08.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L09.pdf"
                          target="_blank"><span>Acivity 09 - August 31</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L09.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L10.pdf"
                          target="_blank"><span>Acivity 10 - September 7</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L10.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L11.pdf"
                          target="_blank"><span>Acivity 11 - September 14</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L11.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L12.pdf"
                          target="_blank"><span>Acivity 12 - September 21</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L12.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L13.pdf"
                          target="_blank"><span>Acivity 13 - September 28</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-L13.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-MemoryVerses.pdf"
                          target="_blank"><span>Memory Verses</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Kindergarten/2024/Q3/Kindergarten/Student/K-24-Q3-MemoryVerses.pdf"><span>Download</span></a>
                        <section class="audio">
                        </section>
                      </li>
                    </ul>
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