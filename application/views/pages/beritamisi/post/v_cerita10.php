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

		.sidebar-c .content {
			background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjEuMCIgeDI9IjAuNSIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Q2ZDFjMiIgc3RvcC1vcGFjaXR5PSIwLjMiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC40Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
			background-size: 100%;
			background-image: -moz-linear-gradient(90deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
			background-image: -webkit-linear-gradient(90deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
			background-image: linear-gradient(0deg, rgba(214, 209, 194, 0.3) 0%, rgba(255, 255, 255, 0.4) 100%);
		}

		.sidebar-c h3 {
			background: rgba(223, 158, 0, 0.4);
			font: 600 1.3em/1.3em "Montserrat", sans-serif;
			margin: 0 0 20px;
			padding: 10px 7%;
		}

		.sidebar-c p {
			margin: 0;
			padding: 0 7% 20px;
			font-size: .85em;
			/* font: 600 .85em/.85em "Montserrat", sans-serif; */
		}

		.sidebar-c ul {
			margin: 0;
			padding: 0 7% 20px;
		}

		.sidebar-c li {
			border-top: 1px solid #fff;
			padding: .4em 0 .4em 20px;
		}

		.sidebar-ctop {
			display: none;
		}

		@media all and (min-width: 900px) {
			.sidebar-ctop {
				display: block;
				float: right;
				margin: 0 0 15px 20px;
				width: 40%;
			}
		}

		.sidebar-ctop .vidlink {
			background-position: center center;
			background-size: 120% auto;
			display: block;
			margin: 0 7% 20px;
			text-align: center;
			width: 86%;
			height: 120px;
		}

		.sidebar-ctop .vidlink img {
			margin: 15% auto;
			width: 25%;
		}

		@media all and (min-width: 900px) {
			.sidebar-cbottom {
				display: none;
			}
		}

		.container1 {
			display: flex;
			flex-direction: row-reverse;
			/* Mengubah arah flex menjadi dari kanan ke kiri */
		}

		.sidebar-c {
			right: 0;
			top: 0;
			width: 200px;
			height: 100%;
			font-size: .85em;

			background: url(<?= base_url('assets') ?>/image/berita_misi/waves-bg-darker.png);
			border-bottom: 1px solid #fff;
			box-shadow: inset 0 0 2px #d6d1c2;
			z-index: 100;
			/* Nilai z-index lebih tinggi */
			position: relative;
			/* Posisi relative untuk desktop */
		}

		.content1 {
			flex: 1;
			/* Gaya lainnya untuk konten */
		}

		@media (max-width: 768px) {

			/* Untuk layar dengan lebar maksimal 768px */
			.container1 {
				display: flex;
				flex-direction: column;
				/* Menumpuk elemen menjadi satu kolom */
			}

			.sidebar-c {
				display: block;
				width: 100%;
				/* Mengatur lebar sidebar-c agar sesuai dengan lebar kontainer */
				height: auto;
				/* Mengatur tinggi otomatis */
				order: 2;
				/* Mengatur posisi .sidebar-c di bawah .content1 */
				margin-top: 10px;
				/* Menambahkan jarak antara konten dan sidebar */
			}

			.content1 {
				order: 1;
				/* Mengatur posisi .content1 di atas .sidebar-c */
			}
		}

		/* line 260, ../sass/parts/_misc.scss */
		.author {
			border-top: 1px dashed #d6d1c2;
			color: #7E7667;
			font: 300 0.85em/1.3em "Merriweather", serif;
			overflow: hidden;
			padding: 1em 0 .5em;
		}

		/* line 266, ../sass/parts/_misc.scss */
		.author img {
			border: 1px solid #df9e00;
			float: left;
			margin: -.5em 1em .5em 0;
			width: 100px;
		}

		/* line 272, ../sass/parts/_misc.scss */
		.author strong {
			color: #565046;
			font: 800 1.2em/1em "Merriweather", serif;
		}

		/* line 506, ../sass/parts/_type.scss */
		.byline {
			padding: 50px 0 50px 100px;
		}

		/* line 508, ../sass/parts/_type.scss */
		.byline p.icon {
			background-position: center top;
			background-size: 100% auto;
			border-radius: 40px;
			float: left;
			margin: -20px 20px 0 -100px;
			width: 80px;
			height: 80px;
		}

		/* line 516, ../sass/parts/_type.scss */
		.byline strong {
			color: #438390;
			font: 600 1.2em/1.4em "Montserrat";
			display: block;
		}

		.cap {
			display: block;
			color: #df9e00;
			float: left;
			font: 400 4em/1em "Merriweather", serif;
			margin: 0 2px -7px 0;
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
							<li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
									href="<?= base_url('') ?>berita-misi/dewasa">Dewasa</a></li>
							<li class="breadcrumbs__list-item font--secondary--xs upper dib"><a
									class="current"><?= $judul ?></a></li>
						</ul>
					</nav>
				</div>
				<div class="pad--primary spacing text page_content pad--btm">
					<h3>Sabat ke <?= $sabatke ?> - Triwulan 3, 2024</h3>
					<img class="img-story" src="<?= $og_image ?>" loading="lazy" alt="<?= $storyby ?>">

					<div>
						<h1 class="content"><?= $judul ?></h1>
					</div>
					<div class="container1">
						<!-- <p>DALAM PROSES PENGERJAAN</p> -->
						<?php $this->load->view('pages/beritamisi/post_isi/v_post_isi10'); ?>
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
									<a href="<?= base_url('') ?>berita-misi/dewasa"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Bacaan Berita Misi Dewasa
									</a>
								</h3>
							</li>

							<li class="folder">
								<h3 class="font--secondary--m sized theme--secondary-text-color">
									<a href="<?= base_url('') ?>berita-misi/anak-anak"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Bacaan Berita Misi Anak-anak
									</a>
								</h3>
							</li>

							<li class="folder">
								<h3 class="font--secondary--m sized theme--secondary-text-color">
									<a href="<?= base_url('') ?>berita-misi/video"
										style="background-image:url(<?= base_url('assets') ?>/image/icon/icon-arrow-right.svg)">
										Video Berita Mission
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