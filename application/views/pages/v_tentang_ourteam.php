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

    /* TEAM */

    .team-section .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .team-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
    }

    .team-member {
      background-color: transparent;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 0;
      flex-basis: calc(33.333% - 20px);
      box-sizing: border-box;
      transition: transform 0.3s ease;
      margin-bottom: 20px;
    }

    .team-member:hover {
      transform: translateY(-10px);
    }

    .team-img {
      margin-top: 10px;
      background-color: transparent;
      display: flex;
      justify-content: center;
    }

    .team-img img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #4B207F;
    }

    .team-member .name {
      font-size: 14px;
    }

    .team-member .role {
      font-size: 10px;
      color: #777;
      font-weight: bold;
    }

    .team-member .location {
      font-size: 10px;
      color: #777;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .team-member {
        flex-basis: calc(50% - 20px);
      }
    }

    @media (max-width: 480px) {
      .team-member {
        flex-basis: 100%;
      }
    }

    .social-media {
      display: flex;
      justify-content: center;
      margin-top: 5px;
      margin-bottom: 10px;
    }

    .social-icon {
      display: block;
      width: 24px;
      height: 24px;
      margin: 0 10px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      filter: grayscale(100%) brightness(0) invert(0) !important;
      text-indent: -9999px;
      /* Menghilangkan teks jika ada */
    }

    .social-icon.facebook {
      background-image: url('<?= base_url('assets') ?>/image/icon/facebook.png');
      /* Path ke ikon Facebook */
    }

    .social-icon.instagram {
      background-image: url('<?= base_url('assets') ?>/image/icon/instagram.png');
      /* Path ke ikon Instagram */
    }

    .social-icon.youtube {
      background-image: url('<?= base_url('assets') ?>/image/icon/youtube.png');
      /* Path ke ikon YouTube */
    }
  </style>
  <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
    <div class="layout-container cf">
      <div class="flex-container cf">
        <div class="shift-left--fluid">
          <span class="kicker white"></span>
          <h1 class="font--tertiary--xl white"><?= $og_title ?></h1>
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
          <p>Konten Sekolah Sabat ID dibuat dan disusun secara sukarelawan oleh Para kontributor
            kami yang tinggal di Indonesia dan kami bekerja untuk Sekolah Sabat ID di waktu luang kami. Mohon
            doakan kami.
          </p>

          <div class="container">
            <div class="team-grid">
              <!-- Team Member 1 -->
              <div class="team-member">
                <div class="team-img">
                  <img src="<?= base_url('assets') ?>/image/profiles/aiwerek-ministry.jpg">
                </div>
                <p class="name theme--secondary-text-color">AiWerek Ministry</p>
                <p class="role">Founder</p>
                <p class="location">Papua, Indonesia</p>
                <!-- <div class="social-media">
                  <a href="https://facebook.com" target="_blank" class="social-icon facebook" title="Facebook"></a>
                  <a href="https://instagram.com" target="_blank" class="social-icon instagram" title="Instagram"></a>
                  <a href="https://youtube.com" target="_blank" class="social-icon youtube" title="YouTube"></a>
                </div> -->
              </div>

              <!-- Team Member 2 -->
              <div class="team-member">
                <div class="team-img">
                  <img src="<?= base_url('assets') ?>/image/profiles/aiwerek-tech.jpg">
                </div>
                <p class="name theme--secondary-text-color">AiWerek Tech</p>
                <p class="role">Web Developer</p>
                <p class="location">Papua, Indonesia</p>
                <!-- <div class="social-media">
                  <a href="https://facebook.com" target="_blank" class="social-icon facebook" title="Facebook"></a>
                  <a href="https://instagram.com" target="_blank" class="social-icon instagram" title="Instagram"></a>
                  <a href="https://youtube.com" target="_blank" class="social-icon youtube" title="YouTube"></a>
                </div> -->
              </div>

              <!-- Team Member 3 -->
              <div class="team-member">
                <div class="team-img">
                  <img src="<?= base_url('assets') ?>/image/profiles/frengky.png">
                </div>
                <p class="name theme--secondary-text-color">Frengky Lokobal</p>
                <p class="role">Kontributor</p>
                <p class="location">Papua, Indonesia</p>
                <!-- <div class="social-media">
                  <a href="https://facebook.com" target="_blank" class="social-icon facebook" title="Facebook"></a>
                  <a href="https://instagram.com" target="_blank" class="social-icon instagram" title="Instagram"></a>
                  <a href="https://youtube.com" target="_blank" class="social-icon youtube" title="YouTube"></a>
                </div> -->
              </div>

              <!-- Tambahkan team member lainnya dengan format yang sama -->
            </div>
          </div>


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
                    style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
                    Tentang Sekolah Sabat
                  </a>
                </h3>
              </li>
              <li class="folder">
                <h3 class="font--secondary--m sized theme--secondary-text-color">
                  <a href="<?= base_url('') ?>pages/tentang-kurikulum-gracelink" target="_blank"
                    style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
                    Tentang Kurikulum Gracelink
                  </a>
                </h3>
              </li>
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