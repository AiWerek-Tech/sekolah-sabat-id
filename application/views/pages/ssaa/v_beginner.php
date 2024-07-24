<main class="main can-be--dark-dark" role="main">
  <style type="text/css">
    .header-swath--with-image {
      background-size: 100% auto;
      background-image: url(<?= base_url('assets') ?>/image/gambar_slide_5.webp);
    }

    @media (min-width: 900px) {
      .header-swath--with-image {
        background-image: url(<?= base_url('assets') ?>/image/gambar_slide_5.webp);
      }
    }

    @media (min-width: 1100px) {
      .header-swath--with-image {
        background-image: url(<?= base_url('assets') ?>/image/gambar_slide_5.webp);
      }
    }

    ul.folders .trigger,
    ul.folders .ltrigger {
      background-image: url(<?= base_url('assets') ?>/image/icon/icon-plus.webp);
      background-position: left center;
      background-repeat: no-repeat;
      cursor: pointer;
    }

    ul.folders .trigger {
      display: inline-block;
      background-size: 20px auto;
      border-radius: 2em;
      color: #989690;
      cursor: pointer;
      font-family: montserrat, helvetica, arial, sans-serif;
      font-size: 0.7em;
      letter-spacing: 2px;
      margin-left: 1.7em;
      padding: 0.5em 0.5em 0.5em 1.3rem;
      text-transform: uppercase;
    }

    ul.folders .ltrigger {
      padding-left: 30px;
    }

    ul.folders li.language>.trigger {
      margin-left: 0.5em;
    }

    ul.folders h3.open,
    ul.folders span.open {
      background-image: url(<?= base_url('assets') ?>/image/icon/icon-minus.webp);
    }

    ul.lessons ul.drawer li a.html {
      width: 60% !important;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.html {
        width: 60% !important;
      }
    }

    ul.lessons ul.drawer li a.file1 {
      background-image: url(https://www.sabbathschoolpersonalministries.org/assets/template/image/file-8.webp);
      width: 15% !important;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.file1 {
        width: 15% !important;
      }
    }

    ul.lessons ul.drawer li a.presentation {
      background-image: url(https://www.sabbathschoolpersonalministries.org/assets/template/image/file-8.webp);
      width: 15% !important;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.presentation {
        width: 15% !important;
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
  </style>
  <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
    <div class="layout-container cf">
      <div class="flex-container cf">
        <div class="shift-left--fluid">
          <span class="kicker white"></span>
          <h1 class="font--tertiary--xl white">Beginner (usia lahir-2)</h1>
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
          <p>Kurikulum GraceLink untuk Beginner ditujukan untuk anak usia lahir hingga 2 tahun. Namun, materi untuk
            Beginner dan TK dapat disesuaikan untuk anak usia 3 tahun.</p>
          <h1 class="font--secondary--xl theme--secondary-text-color">Triwulan III, 2024</h1>
          <p><em>
              Mohon maaf, saat ini kami lebih fokus dalam pengembangan website sehingga untuk sementara kami menyediakan
              konten bahasa Indonesia (Kecuali File PPTX) yang diterjemahkan otomatis oleh Google Translate dimana
              terjemahannya masih belum sempurna.</em>
          </p>
          <div class="lessonlist">

            <!-- BHS INDOENSIA -->
            <ul class="folders lessons Indonesia">
              <li class="folder language">
                <h2>Bahasa Indonesia</h2>
                <ul class="lessons">
                  <li>
                    <h3 class="ltrigger ">Siswa</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html" href="" target="_blank"><span>Activity</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 01 - Juli</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"
                          href="https://drive.google.com/uc?export=download&id=1bt41VFGwGydTfyCPMHzZFvYZvq8yZERB"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 02 - Agustus</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pelajaran 03 - September</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Ayat Hafalan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
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
                        <a class="html" href="" target="_blank"><span>Activity</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Pendahuluan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://drive.google.com/file/d/1O1kIn_hWABad7eCsBzJiA1Ii8P8LSZou/view"
                          target="_blank"><span>Pelajaran 01 - Juli</span></a>
                        <a class="file1" href="https://drive.google.com/file/d/1O1kIn_hWABad7eCsBzJiA1Ii8P8LSZou/view"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation"
                          href="https://drive.google.com/uc?export=download&id=1bt41VFGwGydTfyCPMHzZFvYZvq8yZERB"
                          target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://drive.google.com/file/d/1MVdTwhW9guIYjxFX8xmaSDZbomAzRTou/view"
                          target="_blank"><span>Pelajaran 02 - Agustus</span></a>
                        <a class="file1" href="https://drive.google.com/file/d/1MVdTwhW9guIYjxFX8xmaSDZbomAzRTou/view"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="https://drive.google.com/file/d/1czcRHHBxAfFpKFyJXxXODzLzk8_ZfbLs/view"
                          target="_blank"><span>Pelajaran 03 - September</span></a>
                        <a class="file1" href="https://drive.google.com/file/d/1czcRHHBxAfFpKFyJXxXODzLzk8_ZfbLs/view"
                          target="_blank"><span>PDF</span></a>
                        <a class="presentation" href="" target="_blank"><span>PPTX</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html" href="" target="_blank"><span>Ayat Hafalan</span></a>
                        <a class="file1" href="" target="_blank"><span>PDF</span></a>
                        <a class="presentation"><span>-</span></a>
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
                    <h3 class="ltrigger ">Student</h3>
                    <ul class="drawer lessons ">
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-Activites.pdf"
                          target="_blank"><span>Activities</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-Activites.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L00.pdf"
                          target="_blank"><span>Introduction</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L00.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L01.pdf"
                          target="_blank"><span>Lesson 01 - July</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L01.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L02.pdf"
                          target="_blank"><span>Lesson 02 - August</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L02.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L03.pdf"
                          target="_blank"><span>Lesson 03 - September</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-L03.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-MemoryVerses..pdf"
                          target="_blank"><span>Memory Verses</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Student/B-24-Q3-MemoryVerses..pdf"><span>PDF</span></a>
                        <section class="audio"></section>
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
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-Activites-T.pdf"
                          target="_blank"><span>Activities</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-Activites-T.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L00-T.pdf"
                          target="_blank"><span>Introduction</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L00-T.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L01-T.pdf"
                          target="_blank"><span>Lesson 01 - July</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L01-T.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L02-T.pdf"
                          target="_blank"><span>Lesson 02 - August</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L02-T.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L03-T.pdf"
                          target="_blank"><span>Lesson 03 - September</span></a><a class="file" target="_blank"
                          class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-L03-T.pdf"><span>PDF</span></a>
                        <section class="audio"></section>
                      </li>
                      <li>
                        <a class="html"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-MemoryVerses-T.pdf"
                          target="_blank"><span>Memory Verses</span></a><a class="file" target="_blank" class="file"
                          href="https://www.gracelink.net/assets/gracelink/Lessons/Beginner/2024/Q3/Beginner/Teacher/B-24-Q3-MemoryVerses-T.pdf"><span>PDF</span></a>
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
                  <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view" target="_blank"
                    style="background-image:url(https://www.gracelink.net/assets/template/images/file-8.webp)">
                    Ruang Lingkup dan Urutan Pelajaran
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="https://www-gracelink-net.translate.goog/about-us?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=wapp"
                    target="_blank">
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
      // Mendapatkan semua tautan dengan kelas 'html', 'file1', dan 'presentation'
      var linkClasses = ['html', 'file', 'file1', 'presentation'];
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