<style>
    .visitor-container {
        width: 100%;
        margin: 20px 0;
        /* Margin around the container */
    }

    .visitor-row {
        display: flex;
        /* Uses Flexbox to align items in a row */
        margin-bottom: 10px;
        /* Space between rows */
        align-items: center;
        /* Vertically center items */
    }

    .visitor-label {
        display: flex;
        align-items: center;
        /* Vertically center items */
        min-width: 200px;
        /* Ensure label column width */
    }

    .visitor-label span {
        display: inline-block;
        min-width: 150px;
        /* Ensure space for labels and align : vertically */
        text-align: left;
        /* Align text to the left */
    }

    .visitor-value {
        font-weight: bold;
        margin-left: 10px;
        /* Space between label and value */
    }

    @media (max-width: 600px) {

        .visitor-label span,
        .visitor-value {
            font-size: 0.8em;
            /* Reduce font size */
        }

        .visitor-row {
            margin-bottom: 5px;
            /* Reduce vertical spacing */
        }
    }
</style>
<!-- ASIDE BOX section -->
<div class="shift-right--fluid bg--beige can-be--dark-dark">

    <!-- breakouts -->
    <div
        class="media-block block spacing--quarter bg--tan can-be--dark-dark block--breakout pad--secondary--for-breakouts">
        <h2 class="font--tertiary--m theme--primary-text-color pad--btm">
            <div class="icon icon--m">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                    <title>Star Icon</title>
                    <path
                        d="M37.67,22L59,23.25,42.41,37.43,47.9,59.16,30,46.94,12.1,59.16l5.49-21.73L1,23.25,22.33,22,30,1.06ZM19,49.18l11-7.53,11,7.53L37.65,35.79l10.2-8.73-13.12-.75L30,13.39,25.27,26.31l-13.12.75,10.2,8.73Z"
                        class="theme--primary-fill-color" fill />
                </svg>
            </div>
            Popular Resources
        </h2>
        <div class="media-block__inner spacing--quarter">
            <div class="media-block__content block__content">
                <div class="spacing--half">
                    <div class="text--s pad-half--btm">
                        <ul class="aside-nav__list spacing--quarter">
                            <!-- <li class="aside-nav__list-item rel">
                                                <a href="https://www.sabbathschoolpersonalministries.org/study" class="aside-nav__link theme--primary-text-color font--primary--s">Quarterly Bible Study Resources</a>
                                            </li> -->
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ssaa/beginner"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Beginner (usia
                                    lahir-2)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ssaa/kindergarten"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Kindergarten
                                    (usia 3-4)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ssaa/primary"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Primary (usia
                                    5-9)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ssaa/powerpoints"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Junior
                                    PowerPoints (10-12)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ss-remaja/real-time-faith"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">RealTime
                                    Faith (13-14)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ss-remaja/cornerstone-connections"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Cornerstone
                                    Connections (15-17)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ss-dewasa/inverse"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">inVerse (18+)</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>ss-dewasa/panduan-pendalaman-alkitab-dewasa"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Panduan
                                    Pendalaman Alkitab Dewasa</a>
                            </li>
                            <li class="aside-nav__list-item rel">
                                <a href="<?= base_url('') ?>pages/berita-misi"
                                    class="aside-nav__link theme--primary-text-color font--primary--s">Berita
                                    Mission</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ASIDE -->
    <div class="column__secondary can-be--dark-dark">
        <aside class="aside spacing--double">
            <div class="pad--secondary spacing--double">
                <div class="media-block__content block__content">
                    <h2 class="font--tertiary--m theme--primary-text-color pad--btm">Resource Links</h2>
                    <ul class="aside-nav__list spacing--quarter">
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://www.adultbiblestudyguide.org/" target="_blank">Adult Bible Stude Guide
                                International</a>
                        </li>
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://www.sabbathschoolpersonalministries.org/" target="_blank">Sekolah Sabat &
                                Pelayanan Perorangan GC</a>
                        </li>
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://www.gracelink.net/" target="_blank">Gracelink</a>
                        </li>
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://children.adventist.org/" target="_blank">General Conference Children’s
                                Ministries</a>
                        </li>
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://sabbath-school.adventech.io/in" target="_blank">Sekolah Sabat
                                Adventech</a>
                        </li>
                        <li class="aside-nav__list-item rel">
                            <a class="aside-nav__link theme--primary-text-color font--primary--s"
                                href="https://www.sabbath.school/" target="_blank">Sabbath School Tools</a>
                        </li>
                        <!-- <li class="aside-nav__list-item rel">
                                            <a class="aside-nav__link theme--primary-text-color font--primary--s" href="https://am.adventistmission.org/mq-adult" target="_blank">Berita Misi Dewasa</a>
                                        </li>
                                        <li class="aside-nav__list-item rel">
                                            <a class="aside-nav__link theme--primary-text-color font--primary--s" href="https://am.adventistmission.org/mq-children" target="_blank">Berita Misi Anak-anak</a>
                                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- PENGUNGJUNG -->
            <div class="pad--secondary spacing--double">
                <div class="media-block__content block__content">
                    <hr>
                    <h2 class="font--tertiary--m theme--primary-text-color pad--btm pad--top">Pengunjung</h2>
                    <div class="visitor-container">
                        <div class="visitor-row">
                            <div class="visitor-label">Total Pengunjung</div>
                            <div class="visitor-value"><?php echo $visitor_data->total_visitors; ?></div>
                        </div>
                        <div class="visitor-row">
                            <div class="visitor-label">Hari ini</div>
                            <div class="visitor-value"><?php echo $visitor_data->today_visitors; ?></div>
                        </div>
                        <div class="visitor-row">
                            <div class="visitor-label">Kemarin</div>
                            <div class="visitor-value"><?php echo $visitor_data->yesterday_visitors; ?></div>
                        </div>
                        <div class="visitor-row">
                            <div class="visitor-label">Sedang Online</div>
                            <div class="visitor-value"><?php echo $visitor_data->online_visitors; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="pad--secondary spacing--double">
                                <div class="media-block__content block__content">
                                    <hr>
                                    <h2 class="font--tertiary--m theme--primary-text-color pad--btm pad--top">Share This Page</h2>
                                    <div class="addthis_sharing_toolbox"></div>
                                </div>
                            </div> -->
        </aside>
    </div>
</div>