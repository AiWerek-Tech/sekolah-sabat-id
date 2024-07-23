<style type="text/css">
  .header-swath--with-image {
    background-size: 100% auto;
    background-image: url(<?= base_url('assets') ?>/image/bible-study.jpg);
  }

  @media (min-width: 900px) {
      .header-swath--with-image {
          background-image: url(<?= base_url('assets') ?>/image/bible-study.jpg);
      }
  }

  @media (min-width: 1100px) {
      .header-swath--with-image {
          background-image: url(<?= base_url('assets') ?>/image/bible-study.jpg);
      }
  }

  .modal-lg {
      max-width: 100%;
      width: auto;
  }

  .modal-dialog {
      max-width: 80%; /* Atur lebar maksimum modal */
      width: 80%; /* Sesuaikan lebar modal sesuai kebutuhan */
      margin: 5vh auto; /* Atur margin atas dan bawah, dan auto untuk tengah horizontal */
  }

  .modal-content {
      height: 90vh; /* Tinggi modal 90% dari tinggi viewport */
      overflow: hidden; /* Hindari overflow dari modal sendiri */
  }

  .toast {
    position: fixed;
    top: 20px; /* Atur jarak dari atas layar */
    left: 50%;
    transform: translateX(-50%);
    z-index: 2050; /* Pastikan z-index lebih tinggi dari modal */
    background-color: #ffffcc; /* Warna latar belakang Yellow Light */
    color: #333; /* Warna teks */
/*    padding: 10px;*/
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Optional: Add shadow for better visibility */
  }

  .toast-header {
      background-color: #ff5733; /* Warna merah tua atau orange */
      color: white; /* Warna teks */
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

<!-- BUKA ARSIP PELAJARAN -->
<section class="bg--beige can-be--dark-dark">
    <div class="pad--primary spacing text page_content pad--btm">
      <h3>Pendalaman Alkitab Dewasa</h3>
      <!-- <h3>Gunakan tools di bawah ini untuk memilih dari kuartal yang tersedia.</h3>
      <div class="archiveSelect">
        <form action="archives" method="GET">

          <div class="input year">
            <select id="lesson-year" name="year">
            </select>
          </div>

          <div class="input quarter">
            <select id="lesson-quarter" name="qtr">
            </select>

          </div>
          <div class="input submit">
            <input type="submit" value="Pilih">
          </div>
        </form>
      </div> -->
      <h1 class="font--primary--l">Triwulan 3 - 2024</h1>
      <script type="text/javascript">
          var archives = {"current":{"year":"2024","quarter":"3"},"all":{"2023":["1","2","3","4"],"2024":["1","2","3"]}};
      </script>
    </div>
    </section>

<!-- TIMELINE -->

<div class="layout-container full--until-large">
  <div class="flex-container cf">




    <div class="container">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row first">
        <section>
          <i class="icon fas fa-home"></i>
          <div class="details">
            <span class="title1">KITAB MARKUS</span><br>
            <span>Triwulan 3 - 2024</span>
          </div>
          <p>JULI | AGUSTUS | SEPTEMBER</p>
         <div class="image-frame">
            <img src="<?= base_url('assets') ?>/image/ssdewasa_lesson/2024/q3/cover3.jpg" alt="Cover" style="border-radius: 10px;">
        </div>
          <div class="bottom">
            <a href="#">Pendahuluan</a> 
            <a href="#">Pendahuluan Penuntun Guru</a> 
            <a href="#">Pendahuluan Edisi Mudah Dibaca</a> 
            <!-- <a href="#">Edisi Mudah Dibaca</a> 
            <a href="#">Read more</a>  -->
            <!-- <i>- Famous One</i> -->
          </div>
        </section>
      </div>
      
      <div class="row second">
        <section>
            <i class="icon fas fa-star"></i>
            <div class="details">
                <span class="title">Permulaan Injil</span>
                <span>Pelajaran 1</span>
            </div>
            <div class="image-frame">
                <img src="<?= base_url('assets') ?>/image/ssdewasa_lesson/2024/q3/_1.png" alt="Cover" style="border-radius: 10px;">
            </div>
            <p>"Sesudah Yohanes ditangkap datanglah Yesus ke Galilea memberitakan Injil Allah, kata-Nya: 'Waktunya telah genap; Kerajaan Allah sudah dekat. Bertobatlah dan percayalah kepada Injil!" (Mrk 1: 14-15).</p>
            <div class="bottom">
                <a href="#" data-toggle="modal" data-target="#modalLesson1">Baca Pelajaran</a>
                <a href="#" data-toggle="modal" data-target="#modalLesson1Guru" id="penuntunGuru1">Penuntun Guru</a>
                <a href="#" data-toggle="modal" data-target="#modalLesson1Egw" id="egwNotes1">EGW Notes</a>
                <a href="#" data-toggle="modal" data-target="#modalLesson1Edisi" id="edisiMudah1">Edisi Mudah Dibaca</a>
                <a href="#">Berita Misi</a>
                <a href="#">Video Berita Misi</a>
                <a href="#">English Version</a>
            </div>
            <div style="text-align: center; margin-top: 15px;">
                <i>- 29 Juni - 05 Juli 2024</i>
            </div>
        </section>
    </div>

    <!-- Include modal views -->


    <!-- Bootstrap Toast -->
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
      <!-- Position it -->
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="fileNotAvailableToast" data-delay="5000">
          <div class="toast-header">
              <strong class="mr-auto">File Not Available</strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="toast-body">
              Maaf, file belum tersedia. Mohon kembali lagi nanti. Paling lambat akan tersedia pada hari Jumat!
          </div>
      </div>
    </div>





      

      <div class="row first">
        <section>
          <i class="icon fas fa-rocket"></i>
          <div class="details">
            <span class="title">Setiap Hari Dalam Pelayanan Yesus</span>
            <span>Pelajaran 2</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          <div class="bottom">
            <a href="#">Read more</a>
            <i>- Famous One</i>
          </div>
        </section>
      </div>
      <div class="row second">
        <section>
          <i class="icon fas fa-globe"></i>
          <div class="details">
            <span class="title">Header of Section 4</span>
            <span>4th Feb 2024</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          <div class="bottom">
            <a href="#">Read more</a>
            <i>- Famous One</i>
          </div>
        </section>
      </div>
      <div class="row first">
        <section>
          <i class="icon fas fa-paper-plane"></i>
          <div class="details">
            <span class="title">Header of Section 5</span>
            <span>5th Feb 2024</span>
          </div>
          <p>Lorem ipsum dolor sit ameters consectetur adipisicing elit. Sed qui veroes praesentium maiores, sint eos vero sapiente voluptas debitis dicta dolore.</p>
          <div class="bottom">
            <a href="#">Read more</a>
            <i>- Famous One</i>
          </div>
        </section>
      </div>
      <div class="row second">
        <section>
          <i class="icon fas fa-map-marker-alt"></i>
          <div class="details">
            <span class="title">Header of Section 6</span>
            <span>6th Feb 2024</span>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat tempora necessitatibus laboriosam deleniti repellendus? Dolorem odit aut ea repellat id sed.</p>
          <div class="bottom">
            <a href="#">Read more</a>
            <i>- Famous One</i>
          </div>
        </section>
      </div>
    </div>

  </div>
</div>



