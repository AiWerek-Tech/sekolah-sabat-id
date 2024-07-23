<main class="main can-be--dark-dark" role="main">
    <style type="text/css">
        .header-swath--with-image {
            background-size: 100% auto;
            background-image: url(<?= base_url('assets') ?>/image/children-ministry-2.jpg);
        }

        @media (min-width: 900px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/children-ministry-2.jpg);
            }
        }

        @media (min-width: 1100px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/children-ministry-2.jpg);
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
                    <h1 class="font--tertiary--xl white">KURIKULUM GRACELINK</h1>
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
                    <h3>Berdasarkan Alkitab</h3>
                    <p>
                        GraceLink adalah kurikulum 12 tahun yang terdiri dari 624 pelajaran, semuanya berlandaskan pada
                        Kitab Suci. Sebagian besar pelajaran berbasis cerita, beberapa di antaranya mengacu pada
                        referensi alkitabiah yang mengajarkan doktrin tertentu. Setiap cerita dipilih untuk
                        mengembangkan salah satu dari empat dinamika seri GraceLink: kasih karunia, ibadah, komunitas,
                        dan pelayanan.
                    </p>
                    <p>
                        Karena setiap pelajaran berpusat pada satu pesan, setiap penyampaian cerita Alkitab menjadi
                        fokus—bukan sekadar "dipermudah." Sering kali sebuah cerita dikunjungi kembali di tempat lain
                        dalam kurikulum dengan fokus yang berbeda. Ini adalah kurikulum tematik; hanya satu poin
                        pengajaran yang disampaikan pada satu waktu dari cerita Alkitab tertentu.
                    </p>
                    <h3>Didukung oleh Roh Nubuat</h3>
                    <p>
                        Setiap pelajaran didukung oleh tulisan-tulisan Ellen G. White. Seri Conflict of the Ages sering
                        dirujuk. Referensi lainnya termasuk <em>Steps to Christ, Thoughts From the Mount of
                            Blessing,</em> dan <em>Christ’s Object Lessons.</em> Dalam beberapa kasus, kutipan
                        disertakan dalam cerita; namun, dalam banyak kasus referensi disertakan dalam bagian Teacher
                        Enrichment dari panduan pengajaran.
                    </p>
                    <h3>Penggunaan SDA<sup>®</sup> Bible Commentary</h3>
                    <p>
                        Penulis secara teratur merujuk pada <em>The Seventh-day Adventist <sup>®</sup> Bible
                            Commentary</em> untuk memahami pesan yang diajarkan. Editor selalu merujuk referensi
                        tersebut selama proses penyuntingan. Kutipan dari <em>Commentaries</em> sering digunakan dalam
                        bagian Teacher Enrichment dari panduan pengajaran.
                    </p>
                    <h3>Pelibatan Institut Penelitian Alkitab</h3>
                    <p>
                        Selama proses editorial, semua naskah GraceLink ditinjau untuk memastikan keakuratan teologis
                        oleh direktur atau rekanan dari Institut Penelitian Alkitab di General Conference. Dr. Angel
                        Rodriguez dan rekan-rekannya memberikan perhatian penuh pada semua pelajaran dan panduan
                        pengajaran.
                    </p>
                    <h3>Doktrin dan Prinsip yang Diajarkan</h3>
                    <p>
                        Hampir semua doktrin Advent diajarkan pada suatu titik selama kurikulum 12 tahun. Bahkan
                        anak-anak yang sangat muda belajar tentang baptisan dengan pencelupan, keadaan orang mati,
                        Sabat, dan doktrin penting lainnya. Doktrin-doktrin ini dan lainnya diajarkan melalui
                        cerita-cerita dalam klaster tematik yang koheren dan diperkuat melalui kegiatan selama jam
                        Sekolah Sabat. Pesan dasar Advent diajarkan di setiap tingkat dengan metode pengajaran yang
                        paling efektif.
                    </p>
                    <h3>Secara Pendidikan Berdasar</h3>
                    <p>
                        Untuk pertama kalinya dalam sejarah Advent, pelajaran Sekolah Sabat untuk anak-anak telah
                        dirumuskan dengan menggunakan teori dan metode pendidikan terkini. Konsultan kurikulum
                        mengarahkan produksi rencana kurikulum asli dan merancang metode pengajaran yang akan digunakan.
                        Penulis dari setiap divisi dunia mengikuti rencana ini saat mereka berpartisipasi dalam
                        pengembangan pelajaran. Pesan yang sama—metode baru.
                    </p>
                    <h3>Partisipasi Internasional</h3>
                    <p>
                        Selama tahap perencanaan awal, direktur Sekolah Sabat dan Pelayanan Anak dari setiap divisi
                        dunia bertemu dengan staf General Conference dan konsultan kurikulum di Inggris selama satu
                        minggu untuk membahas dan memberikan arahan seiring berjalannya pekerjaan. Kelompok ini
                        memberikan fokus bagi mereka yang kemudian mengembangkan dan menulis pelajaran. Beberapa bulan
                        kemudian, lebih dari enam puluh orang—mewakili setiap divisi dunia—bertemu di Universitas
                        Andrews untuk memulai tahap penulisan. Seiring kemajuan pekerjaan, selama rentang waktu dua
                        tahun, kelompok kecil penulis bertemu di General Conference untuk menghasilkan pelajaran
                        tambahan untuk setiap tingkat kurikulum. Lagi-lagi, penulis ini datang dari seluruh dunia.
                    </p>
                    <h3>Program Aktif</h3>
                    <p>
                        Saat ini kita tahu bahwa kita harus mendekati kegiatan belajar melalui berbagai metode. Kita
                        tahu bahwa anak-anak mengingat sekitar 30 hingga 35 persen dari apa yang mereka dengar, sekitar
                        40 hingga 50 persen dari apa yang mereka lihat, dan sekitar 90 persen dari apa yang mereka
                        lakukan. Penekanan di GraceLink ditempatkan pada ketiganya. Anak-anak sering dipandu melalui
                        kegiatan yang melibatkan pendengaran, melihat, dan melakukan—dan memerlukan aktivitas. Oleh
                        karena itu, kelas Sekolah Sabat saat ini sering kali memelihara suasana yang antusias di mana
                        anak-anak secara aktif mengejar pembelajaran di bawah arahan pemimpin atau guru.
                    </p>
                    <p>
                        Kegiatan ini diperkuat melalui proses debriefing di mana anak-anak diajak untuk mempertimbangkan
                        "Apa yang kamu pelajari?" "Bagaimana perasaanmu tentang itu?" "Apa yang akan kamu lakukan
                        tentang itu?" Proses ini berhubungan dengan pengetahuan, emosi, dan penerapan. Penelitian
                        pendidikan memberitahu kita bahwa orang mengingat lebih banyak ketika mereka terlibat secara
                        emosional dan bahwa emosi yang menyenangkan meningkatkan pembelajaran positif. Debriefing sangat
                        penting untuk pembelajaran aktif. Ini adalah cara di mana anak-anak (dan orang dewasa) memahami
                        dan menerapkan apa yang telah mereka pelajari.
                    </p>
                    <h3>Empat Dinamika</h3>
                    <p>
                        Empat dinamika yang terintegrasi dalam kurikulum GraceLink menyediakan program yang seimbang dan
                        membentuk inti dari kurikulum. Ini adalah:
                    </p>
                    <ul>
                        <li><strong>Kasih Karunia</strong> (Yesus mencintai saya.)</li>
                        <li><strong>Komunitas</strong> (Kami saling mencintai.)</li>
                        <li><strong>Ibadah</strong> (Saya mencintai Yesus.)</li>
                        <li><strong>Pelayanan</strong> (Kami juga mencintai Anda.)</li>
                    </ul>
                    <p>
                        <strong>Kasih Karunia</strong> adalah demonstrasi kasih Allah kepada kita. Dia mengutus Anak-Nya
                        untuk mati menggantikan kita, menebus kita, dan menerima kita pada diri-Nya sendiri agar kita
                        dapat hidup bersama-Nya selamanya.
                    </p>
                    <p>
                        <strong>Ibadah</strong> adalah respons kita terhadap kasih Allah. Karena Dia pertama-tama
                        mengasihi kita, kita mengasihi Dia. Karena Dia memberikan Anak-Nya untuk mati menggantikan kita,
                        kita menyembah Dia. Kita menyembah Dia melalui pujian, melalui gaya hidup kita, dan melalui
                        pengelolaan semua yang telah Dia sediakan bagi kita.
                    </p>
                    <p>
                        <strong>Komunitas</strong> melibatkan hubungan kita dengan orang-orang di sekitar kita, dengan
                        keluarga terdekat kita, keluarga gereja kita, teman-teman kita, dan dengan orang-orang Kristen
                        lainnya yang mengenal kasih Allah.
                    </p>
                    <p>
                        <strong>Pelayanan</strong> adalah pengabdian kita kepada orang lain, kepada mereka yang mungkin
                        tidak mengenal dan mengasihi Yesus yang kita layani. Kepada mereka kita memberikan undangan
                        untuk menjadi bagian dari keluarga Allah. Kepada mereka kita membawa pesan harapan untuk masa
                        depan.
                    </p>
                    <h3>Pengajaran Sejam Penuh</h3>
                    <p>
                        Program masa lalu untuk Sekolah Sabat anak-anak jarang dirancang untuk melengkapi topik
                        pelajaran hari itu. Sekitar 40 menit dihabiskan untuk materi yang tidak terkait dengan topik
                        pelajaran. Paling-paling, anak-anak yang lebih muda menghabiskan 15 hingga 20 menit duduk di
                        kursi mereka, mendengarkan seorang guru menceritakan kisah pelajaran saat ia menempatkan felt di
                        papan felt. Kurikulum GraceLink menyediakan pengajaran jam penuh, di mana setiap aktivitas
                        berfokus pada pesan sentral dari pelajaran Sekolah Sabat hari itu. Tujuan ditetapkan dengan
                        jelas dalam panduan pengajaran. Kegiatan dijabarkan dengan hati-hati untuk mengajar ke titik
                        yang ditetapkan dari pelajaran. Seluruh pelajaran berfokus pada satu tujuan yang ditentukan
                        dengan hati-hati untuk hari itu.
                    </p>
                    <h3>Gaya Belajar</h3>
                    <p>
                        Penelitian pendidikan telah menentukan bahwa individu belajar terbaik melalui gaya atau cara
                        belajar tertentu. Meskipun setiap orang mungkin menggunakan semua empat gaya atau cara belajar
                        yang diidentifikasi pada satu waktu atau lainnya, sebagian besar dari kita bergantung pada satu
                        aplikasi utama. Keempat gaya belajar ini terintegrasi ke dalam <em>setiap</em> pelajaran
                        GraceLink. Ini memungkinkan setiap anak untuk memahami poin dari pelajaran dan memahaminya
                        dengan caranya sendiri.
                    </p>
                    <p>
                        Keempat gaya belajar tersebut adalah:
                    </p>
                    <ul>
                        <li><strong>Imaginatif</strong>. Pembelajar imajinatif bertanya, “Mengapa saya harus mempelajari
                            ini?” Aktivitas Persiapan dalam setiap pelajaran menarik bagi jenis pembelajar ini.</li>
                        <li><strong>Analitis</strong>. Pembelajar analitis bertanya, “Apa yang perlu saya pelajari?”
                            Bagian Pelajaran Alkitab menangani isi pelajaran, ayat hafalan, dan studi Alkitab kelompok
                            kecil—ini menawarkan fakta, pengetahuan, yang dicari oleh pembelajar analitis.</li>
                        <li><strong>Common sense</strong>. Pembelajar common sense ingin tahu, “Bagaimana ini bekerja
                            dalam hidup saya?” Bagian Menerapkan Pelajaran menawarkan kesempatan untuk mengeksplorasi
                            bagaimana pelajaran dapat diterapkan dalam cara praktis.</li>
                        <li><strong>Dinamis</strong>. Pembelajar dinamis ingin tahu “Apa yang bisa saya lakukan dengan
                            ini? Bagaimana saya bisa membagikan ide ini dengan orang lain?” Kesempatan untuk
                            mengeksplorasi opsi ini diberikan dalam bagian Berbagi Pelajaran dari setiap pelajaran.</li>
                    </ul>
                    <h3>Penjangkauan—Gaya Hidup</h3>
                    <p>
                        Setiap rencana pelajaran mencakup bagian yang mengajak untuk berbagi apa yang anak-anak pelajari
                        dengan orang lain—teman, guru, orang tua, kerabat, tetangga, atau orang lain yang sering
                        berhubungan dengan anak. Anak sering diminta untuk membuat sesuatu di Sekolah Sabat untuk
                        diberikan kepada orang tersebut, dan sambil memberikannya menceritakan sesuatu tentang cerita
                        atau pelajaran yang mereka pelajari hari itu. Tujuannya adalah membantu anak-anak menjadi begitu
                        nyaman dengan berbagi apa yang mereka pelajari sehingga mereka akan terus melakukannya sepanjang
                        hidup mereka.
                    </p>
                    <h3>Penekanan Studi Alkitab</h3>
                    <p>
                        Setiap pelajaran di setiap tingkat program 12 tahun ini mencakup studi Alkitab yang sesuai
                        dengan usia anak. Bahkan anak-anak di Sekolah Sabat Pemula belajar bahwa Alkitab adalah Firman
                        Tuhan. Guru di tingkat itu diminta untuk membuka Alkitab mereka saat mengajarkan ayat hafalan
                        dan menunjukkan ayat tersebut kepada anak-anak, untuk mengidentifikasi Alkitab sebagai Firman
                        Tuhan saat mereka menggunakan Alkitab untuk mengajarkan ayat hafalan. Selain itu, guru diarahkan
                        untuk menunjukkan kepada anak-anak ayat-ayat yang menjadi dasar cerita Alkitab hari itu dan
                        membaca ayat-ayat tersebut dengan keras, menunjuk pada setiap kata atau frasa saat ia
                        membacanya. Anak-anak TK juga belajar bahwa cerita mereka berasal dari Alkitab. Anak-anak SD
                        belajar cara menemukan dan membaca teks yang menyediakan latar belakang untuk pelajaran hari itu
                        dan/atau mengarah pada lebih banyak diskusi tentang tujuan pelajaran. Anak-anak SD diarahkan
                        untuk studi Alkitab individu harian untuk mempelajari lebih lanjut tentang cerita atau
                        menerapkan konsep yang diajarkan.
                    </p>
                    <h3>Seni Inklusif</h3>
                    <p>
                        Tujuan seni dalam GraceLink, yang disediakan khusus untuk anak-anak oleh ilustrator yang
                        mengkhususkan diri dalam seni untuk anak-anak, adalah menyediakan komentar visual yang bebas
                        dari bias yang integral dengan teks. Orang-orang digambarkan dengan cara yang menangkap sikap,
                        kepribadian, dan ide—untuk menjadi simbol dari poin yang coba disampaikan oleh pelajaran.
                        Representasi "lebih realistis" dari orang-orang, yang biasanya menggambarkan satu budaya atau
                        kelompok etnis dengan mengecualikan yang lain, dihindari. Detail realistis berwarna penuh
                        digunakan, namun, dalam menggambarkan detail budaya kehidupan di Timur Tengah selama zaman
                        Alkitab, seperti jenis oven yang digunakan dalam memanggang roti.
                    </p>
                    <h3>Panggilan untuk Keputusan</h3>
                    <p>
                        Sepanjang setiap pelajaran anak-anak diundang untuk membuat keputusan—bagaimana mereka akan
                        menerapkan konsep yang dipelajari dalam hidup mereka sendiri? Bagaimana mereka bisa menggunakan
                        apa yang mereka pelajari untuk membantu diri mereka sendiri, keluarga mereka, teman-teman
                        mereka? Pertanyaan seperti "Apa yang bisa kamu lakukan untuk... " atau "Seberapa penting ini
                        bagi kamu dan/atau keluargamu?" sering diajukan sepanjang pengalaman mengajar/pembelajaran
                        setiap minggu.
                    </p>
                </div>


                <!-- more resources -->
                <hr class style="margin: 2.5rem 0 0; More Resources">
                <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
                        Resources</span>
                    <aside>
                        <ul class="folders folders-gracelink">

                            <!-- <li class="folder">
<h3 class="font--secondary--m sized theme--secondary-text-color">
<a href="" target="_blank" style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
Tentang Sekolah Sabat
</a>
</h3>
</li> -->

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
                                    <a href="#"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Ruang Lingkup dan Urutan Pelajaran
                                    </a>
                                </h3>
                                <ul class="children">
                                    <li class="file file-9">
                                        <h3 class="font--secondary--m sized theme--secondary-text-color">
                                            <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view"
                                                target="_blank"
                                                style="background-image:url(https://www.gracelink.net/assets/template/images/file-9.svg)">
                                                Ruang Lingkup dan Urutan Pelajaran SS Anak-anak
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="file file-9">
                                        <h3 class="font--secondary--m sized theme--secondary-text-color">
                                            <a href="https://drive.google.com/file/d/1J9N6oc0gbLaKFJGtqTKLgipj18TiS00M/view"
                                                target="_blank"
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