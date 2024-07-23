<main class="main can-be--dark-dark" role="main">
    <style type="text/css">
        .header-swath--with-image {
            background-size: 100% auto;
            background-image: url(<?= base_url('assets') ?>/image/resource.jpg);
        }

        @media (min-width: 900px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/resource.jpg);
            }
        }

        @media (min-width: 1100px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/resource.jpg);
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
                    <h1 class="font--tertiary--xl white">Tautan Sumber Daya</h1>
                </div>
                <div class="shift-right--fluid"></div>
            </div>
        </div>
    </header>
    <div class="layout-container full--until-large">
        <div class="flex-container cf">
            <div class="shift-left--fluid column__primary bg--white can-be--dark-light ">

                <div class="pad--primary spacing text page_content pad--btm">
                    <p>Tautan Sumber Daya merupakan kumpulan tautan atau situs sumber daya eksternal yang relevan dengan
                        Pelajaran Sekolah Sabat Resmi milik Gereja
                        Masehi Advent Hari Ketujuh yang menjadi sumber adopsi semua konten dalam website ini. <br><br>
                        Juga dapat menjadi sumber daya tambahan atau informasi yang berguna bagi pengguna yang mau
                        berkunjung.
                    </p>
                    <br>
                </div>

                <!-- more resources -->
                <div class="pad--primary spacing sublist">
                    <span class="font--tertiary--m theme--primary-text-color">Tautan Utama</span>
                    <aside>
                        <ul class="folders folders-gracelink">

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.gracelink.net/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Gracelink
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat Anak-anak
                                                menggunakan Kurikulum Gracelink</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.juniorpowerpoints.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Junior PowerPoints Lessons
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat untuk kelas Junior
                                                PowerPoints</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.realtimefaith.net/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        RealTime Faith Lessons
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat untuk kelas
                                                RealTime Faith
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.cornerstoneconnections.net/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Cornerstone Connections Lessons
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat untuk kelas
                                                Cornerstone Connections
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.inversebible.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        inVerse
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat untuk kelas
                                                inVerse (Dewasa Muda)
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.adultbiblestudyguide.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Adult Bible Stude Guide International
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama untuk Sekolah Sabat Dewasa
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.sabbathschoolpersonalministries.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Sabbath School and Personal Ministries
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Departemen Sekolah Sabat &
                                                Pelayanan Perorangan General Conference
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="http://www.instepwithjesus.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        In Step With Jesus
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Sekolah Sabat untuk Anggota baru
                                                (New Members)
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>



                        </ul>
                    </aside>
                </div>

                <!-- more resources 2-->
                <div class="pad--primary spacing sublist">
                    <span class="font--tertiary--m theme--primary-text-color">Tautan Lainnya</span>
                    <aside>
                        <ul class="folders folders-gracelink">

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://children.adventist.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        General Conference Children’s Ministries
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Departemen Pelayanan Anak-anak
                                                General Conference</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.globaltmi.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Total Member Involvement
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Global TMI (Keterlibatan Seluruh
                                                anggota) yang merupakan Strategi alkitabiah untuk penginjilan melalui
                                                pemuridan</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://alive.adventist.org/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Sabbath School Alive!
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Program untuk membuat Sekolah
                                                Sabat lebih hidup dengan mengutamakan 3 aspek utama yaitu Bible Stude &
                                                Prayer, Fellowship dan Mission
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.aliveinjesus.info/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Alive in Jesus Sabbath School Curriculum
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama Kurikulum Sekolah Sabat Alive in
                                                Jesus
                                            </span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                        </ul>
                    </aside>
                </div>

                <!-- more resources 3-->
                <div class="pad--primary spacing sublist">
                    <span class="font--tertiary--m theme--primary-text-color">Tautan Belajar Sekolah Sabat</span>
                    <aside>
                        <ul class="folders folders-gracelink">

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.sabbath.school/" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Sabbath.School
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Sebuah Tools Lengkap Pembelajaran Sekolah
                                                Sabat
                                                dalam bahasa Inggris</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://sabbath-school.adventech.io/in" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Sekolah Sabat Adventech
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Pembelajaran Sekolah Sabat dalam
                                                berbagai bahasa termasuk bahasa Indonesia yang didukung oleh General
                                                Conference</span>
                                        </p>
                                    </div>
                                </h3>
                            </li>
                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="https://www.fustero.es/index_ba.php" target="_blank"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.svg)">
                                        Fustero
                                    </a>
                                    <div class="text text--s pad-half--btm">
                                        <p class="media-block__description block__description color"
                                            style="color: #6B6D6F">
                                            <span class="font--primary--xs">Situs Utama PowerPoint slideshow untuk
                                                program sekolah sabat dalam berbagai bahasa
                                            </span>
                                        </p>
                                    </div>
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
        const API_KEY = 'AIzaSyC8P1chbEJmL46XJPr3DAQ-CYjlYXW6CzM';
        const PLAYLIST_ID = 'PLm5O3jZMf_3qNxPSMk5v1tGgiMv36dSPo';
        const MAX_RESULTS = 13;

        async function fetchPlaylistItems() {
            const response = await fetch(`https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=${MAX_RESULTS}&playlistId=${PLAYLIST_ID}&key=${API_KEY}`);
            const data = await response.json();
            return data.items;
        }

        function createVideoElement(video) {
            const videoElement = document.createElement('div');
            videoElement.classList.add('video');
            videoElement.innerHTML = `
                <iframe src="https://www.youtube.com/embed/${video.snippet.resourceId.videoId}" frameborder="0" allowfullscreen></iframe>
            `;
            return videoElement;
        }

        async function displayPlaylist() {
            const videoContainer = document.getElementById('video-container');
            const videos = await fetchPlaylistItems();
            videos.forEach(video => {
                const videoElement = createVideoElement(video);
                videoContainer.appendChild(videoElement);
            });
        }

        displayPlaylist();
    </script>

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