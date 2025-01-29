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
  </style>
  <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
    <div class="layout-container cf">
      <div class="flex-container cf">
        <div class="shift-left--fluid">
          <span class="kicker white"></span>
          <h1 class="font--tertiary--xl white">RUANG LINGKUP & URUTAN PELAJARAN SEKOLAH SABAT</h1>
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
          <p>* Harap diingat bahwa informasi mengenai topik-topik mendatang bukanlah informasi akhir dan dapat berubah
            sewaktu-waktu.
            <br><br>
            * Harap perhatikan juga bahwa informasi berikut hanya mencerminkan topik yang akan dipelajari setiap
            triwulan dan bukan judul panduan belajar Alkitab itu sendiri.
          </p>

          <table>
            <thead>
              <tr>
                <th>Tahun</th>
                <th>Triwulan I</th>
                <th>Triwulan II</th>
                <th>Triwulan III</th>
                <th>Triwulan IV</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Year">2023</td>
                <td data-label="1st Quarter">Mengelola Bagi Sang Guru Sampai Ia Datang</td>
                <td data-label="2nd Quarter">Tiga Pekabaran Kosmis</td>
                <td data-label="3rd Quarter">Surat Efesus</td>
                <td data-label="4th Quarter">Misi Allah Misi Saya</td>
              </tr>
              <tr>
                <td data-label="Year">2024</td>
                <td data-label="1st Quarter">Kitab Mazmur</td>
                <td data-label="2nd Quarter">Pertentangan Besar</td>
                <td data-label="3rd Quarter"><a href="<?= base_url('') ?>ss-dewasa/pedoman-pendalaman-alkitab-dewasa"
                    class="theme--secondary-text-color">Kitab Markus</a></td>
                <td data-label="4th Quarter">Tema-Tema dalam Injil Yohanes</td>
              </tr>
              <tr>
                <td data-label="Year">2025</td>
                <td data-label="1st Quarter">Kasih dan Keadilan dalam Alkitab</td>
                <td data-label="2nd Quarter">Cara Mempelajari Nubuat/Inspirasi</td>
                <td data-label="3rd Quarter">Kitab Keluaran</td>
                <td data-label="4th Quarter">Kitab Yosua</td>
              </tr>
              <tr>
                <td data-label="Year">2026</td>
                <td data-label="1st Quarter">-</td>
                <td data-label="2nd Quarter">-</td>
                <td data-label="3rd Quarter">-</td>
                <td data-label="4th Quarter">-</td>
              </tr>
            </tbody>
          </table>
          <p><em>Ruang Lingkup dan Urutan Pelajaran untuk Sekolah Sabat Anak-anak dapat di download melalui Link
              dibawah.</em></p>
        </div>

        <!-- more resources -->
        <hr class style="margin: 2.5rem 0 0; More Resources">
        <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
            Resources</span>
          <aside>
            <ul class="folders folders-gracelink">
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view" target="_blank"
                    style="background-image:url(<?= base_url('assets') ?>/image/icon/file-8.svg)">
                    Ruang Lingkup dan Urutan Pelajaran SS Anak-anak
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