<main class="main can-be--dark-dark" role="main">
    <style type="text/css">
        .header-swath--with-image {
            background-size: 100% auto;
            background-image: url(<?= base_url('assets') ?>/image/berita_misi/cover-q3.webp);
        }

        @media (min-width: 900px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/berita_misi/cover-q3.webp);
            }
        }

        @media (min-width: 1100px) {
            .header-swath--with-image {
                background-image: url(<?= base_url('assets') ?>/image/berita_misi/cover-q3.webp);
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

        .video-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .video {
            flex: 1 1 calc(25% - 10px);
            /* Four columns */
            box-sizing: border-box;
        }

        .video iframe {
            width: 100%;
            height: 200px;
        }

        @media (max-width: 1200px) {
            .video {
                flex: 1 1 calc(33.333% - 10px);
                /* Three columns */
            }
        }

        @media (max-width: 800px) {
            .video {
                flex: 1 1 calc(50% - 10px);
                /* Two columns */
            }
        }

        @media (max-width: 500px) {
            .video {
                flex: 1 1 100%;
                /* One column */
            }
        }
    </style>
    <header class="header__swath theme--primary-background-color header-swath--with-image blend-mode--multiply">
        <div class="layout-container cf">
            <div class="flex-container cf">
                <div class="shift-left--fluid">
                    <span class="kicker white"></span>
                    <h1 class="font--tertiary--xl white">VIDEO BERITA MISSION</h1>
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
                    <p>Video Berita Misi Dewasa ini ditampilkan dari Channel Youtube Berita Misi Advent ID yang juga
                        dikelola oleh AiWerek Ministry. Semoga Menjadi Berkat!<br>
                    </p>
                    <h3>Berita Misi Terbaru</h3>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/videoseries?si=RLoUo8MBEKwv9lkZ&amp;list=PLm5O3jZMf_3qNxPSMk5v1tGgiMv36dSPo"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <br>
                    <h3>Video Berita Misi Lainnya</h3>
                    <div class="video-container" id="video-container"></div>

                </div>

                <!-- more resources -->
                <hr class style="margin: 2.5rem 0 0; More Resources">
                <div class="pad--primary spacing sublist"><span class="font--tertiary--m theme--primary-text-color">More
                        Resources</span>
                    <aside>
                        <ul class="folders folders-gracelink">

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="<?= base_url('') ?>berita-misi/dewasa"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.webp)">
                                        Bacaan Berita Misi Dewasa
                                    </a>
                                </h3>
                            </li>

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="<?= base_url('') ?>berita-misi/anak-anak"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.webp)">
                                        Bacaan Berita Misi Anak-anak
                                    </a>
                                </h3>
                            </li>

                            <li class="folder">
                                <h3 class="font--secondary--m sized theme--secondary-text-color">
                                    <a href="<?= base_url('') ?>pages/tentang-sekolah-sabat"
                                        style="background-image:url(https://www.gracelink.net/assets/template/images/icon-arrow-right.webp)">
                                        Tentang Sekolah Sabat
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