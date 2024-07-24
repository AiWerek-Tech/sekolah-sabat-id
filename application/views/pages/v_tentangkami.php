<main class="main can-be--dark-dark" role="main">
  <style type="text/css">
    .header-swath--with-image {
      background-size: 100% auto;
      background-image: url(<?= base_url('assets') ?>/image/pcm.webp);
    }

    @media (min-width: 900px) {
      .header-swath--with-image {
        background-image: url(<?= base_url('assets') ?>/image/pcm.webp);
      }
    }

    @media (min-width: 1100px) {
      .header-swath--with-image {
        background-image: url(<?= base_url('assets') ?>/image/pcm.webp);
      }
    }

    ul.folders .trigger,
    ul.folders .ltrigger {
      background-image: url(<?= base_url('assets') ?>/image/icon/icon-plus.svg);
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
      background-image: url(<?= base_url('assets') ?>/image/icon/icon-minus.svg);
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
      background-image: url(https://www.sabbathschoolpersonalministries.org/assets/template/image/file-8.svg);
      width: 15% !important;
    }

    @media all and (min-width: 650px) {
      ul.lessons ul.drawer li a.file1 {
        width: 15% !important;
      }
    }

    ul.lessons ul.drawer li a.presentation {
      background-image: url(https://www.sabbathschoolpersonalministries.org/assets/template/image/file-8.svg);
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
          <h1 class="font--tertiary--xl white">TENTANG KAMI</h1>
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
          <p>Sekolah Sabat ID adalah sebuah situs pelayanan independen yang disediakan dan dikelola secara sukarela oleh
            AiWerek Ministry. Semua Konten dalam website ini diadopsi dari Situs-situs Pembelajaran Sekolah Sabat Resmi
            Gereja Masehi Advent Hari Ketujuh (<a href="<?= base_url('') ?>pages/resource-links">Resource Links</a>).
            <br><br>
            Tujuan utama Sekolah Sabat ID adalah menyediakan bahan atau materi Pelajaran Sekolah Sabat Bahasa Indonesia
            yang dapat digunakan oleh siapa saja secara GRATIS.
            <br><br>
            Melihat masih banyak Sumber Daya Pelajaran Sekolah Sabat bentuk digital yang masih kurang dalam bahasa
            Indonesia, maka Website Sekolah Sabat ID ini hadir setelah pelayanan selama 2 tahun di WhatsApp Group dengan
            nama yang sama.
            <br><br>
            Kami akui, website ini masih jauh dari sempurna, untuk itu kami berharap dapat menghubungi kami jika rindu
            memberikan masukan, saran dan kritik guna peningkatan website ini melalui (<a
              href="https://wa.me/6282238165964" target="_blank">Kontak Kami</a>).
            <br><br>
            Terimakasih sudah mengunjungi Sekolah Sabat ID, Semoga dapat menjadi berkat!
          </p>

        </div>

        <!-- more resources -->
        <hr class style="margin: 2.5rem 0 0; More Resources">
        <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
            Resources</span>
          <aside>
            <ul class="folders folders-gracelink">
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>pages/tentang-sekolah-sabat" target="_blank"
                    style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                    Tentang Sekolah Sabat
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>pages/tentang-kurikulum-gracelink" target="_blank"
                    style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                    Tentang Kurikulum Gracelink
                  </a>
                </h3>
              </li>

              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="#"
                    style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                    Ruang Lingkup dan Urutan Pelajaran
                  </a>
                </h3>
                <ul class="children">
                  <li class="file file-9">
                    <h3 class="font--secondary--m sized theme--secondary-text-color">
                      <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view" target="_blank"
                        style="background-image:url(https://www.gracelink.net/assets/template/images/file-9.svg)">
                        Ruang Lingkup dan Urutan Pelajaran SS Anak-anak
                      </a>
                    </h3>
                  </li>
                  <li class="file file-9">
                    <h3 class="font--secondary--m sized theme--secondary-text-color">
                      <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view" target="_blank"
                        style="background-image:url(https://www.gracelink.net/assets/template/images/file-9.svg)">
                        Ruang Lingkup dan Urutan Pelajaran SS Dewasa
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