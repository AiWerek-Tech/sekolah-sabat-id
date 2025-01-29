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
                    <h1 class="font--tertiary--xl white">SEKOLAH SABAT REMAJA</h1>
                </div>
                <div class="shift-right--fluid"></div>
            </div>
        </div>
    </header>

    <div class="layout-container full--until-large">
        <div class="flex-container cf">

            <!-- Featured section -->
            <div class="shift-left--fluid column__primary bg--white can-be--dark-light no-pad--btm ">
                <div class="spacing--double">
                    <div class="pad--primary">
                        <h1 class="font--tertiary--l">Featured</h1>
                    </div>
                    <div class="landing">
                        <hr>
                        <!-- CARD IMAGE 5 -->
                        <hr>
                        <div class="pad--primary spacing--half">
                            <div class="media-block block spacing--quarter ">
                                <div class="media-block__inner spacing--quarter block__row">
                                    <a class="media-block__image-wrap block__image-wrap db"
                                        href="<?= base_url('') ?>ss-remaja/realtimefaith">
                                        <div class=" dib">
                                            <img class="media-block__image block__image"
                                                src="<?= base_url('assets') ?>/image/kelas/realtimefaith.webp"
                                                loading="lazy" alt="Media Block Image Alt Left">
                                        </div>
                                    </a>
                                    <div class="media-block__content block__content ">
                                        <h3 class="media-block__title block__title ">
                                            <a href="<?= base_url('') ?>ss-remaja/realtimefaith"
                                                class="block__title-link theme--primary-text-color">Real
                                                Time Faith</a>
                                        </h3>
                                        <div class="spacing--half">
                                            <div class="text text--s pad-half--btm">
                                                <p class="media-block__description block__description">
                                                    <span class="font--primary--xs">Real Time Faith ditujukan untuk anak
                                                        usia 13 – 14.</span>
                                                </p>
                                            </div>
                                            <p>
                                                <a class="media-block__cta block__cta btn theme--secondary-background-color"
                                                    href="<?= base_url('') ?>ss-remaja/realtimefaith">Read More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD IMAGE 6 -->
                        <hr>
                        <div class="pad--primary spacing--half">
                            <div class="media-block block spacing--quarter ">
                                <div class="media-block__inner spacing--quarter block__row">
                                    <a class="media-block__image-wrap block__image-wrap db"
                                        href="<?= base_url('') ?>ss-remaja/cornerstone">
                                        <div class=" dib">
                                            <img class="media-block__image block__image"
                                                src="<?= base_url('assets') ?>/image/kelas/cornerstone.webp"
                                                loading="lazy" alt="Media Block Image Alt Left">
                                        </div>
                                    </a>
                                    <div class="media-block__content block__content ">
                                        <h3 class="media-block__title block__title ">
                                            <a href="<?= base_url('') ?>ss-remaja/cornerstone"
                                                class="block__title-link theme--primary-text-color">Cornerstone
                                                Connections</a>
                                        </h3>
                                        <div class="spacing--half">
                                            <div class="text text--s pad-half--btm">
                                                <p class="media-block__description block__description">
                                                    <span class="font--primary--xs">Cornerstone Connections ditujukan
                                                        untuk Remaja Dewasa usia 15 – 18.</span>
                                                </p>
                                            </div>
                                            <p>
                                                <a class="media-block__cta block__cta btn theme--secondary-background-color"
                                                    href="<?= base_url('') ?>ss-remaja/cornerstone">Read More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

            <!-- ASIDE BOX section -->
            <!-- Aside -->
            <?php $this->load->view($aside); ?>

        </div>
    </div>
</main>