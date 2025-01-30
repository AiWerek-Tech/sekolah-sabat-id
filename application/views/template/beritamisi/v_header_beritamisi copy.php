<!DOCTYPE html>
<html class="theme--emperor" lang="en">

<head>
    <script>
        //<![CDATA[
        window.cookieConsent = {
            config: { "first_party": { "_session_id": "necessary", "cookie_consent": "necessary" }, "unknown": "marketing" }
        };
        //]]>
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?> | <?= $this->config->item('app_name') ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/image/faficon.webp">
    <base href="">

    <!-- Meta Tags for SEO and Open Graph -->
    <meta property="og:title"
        content="<?= isset($og_title) ? $og_title : $judul ?> | <?= $this->config->item('app_name') ?>">
    <meta property="og:description"
        content="<?= isset($og_description) ? $og_description : $this->config->item('app_description') ?>">
    <meta property="og:image" content="<?= isset($og_image) ? $og_image : base_url('assets/image/home_image.webp') ?>">
    <meta property="og:url" content="<?= isset($og_url) ? $og_url : current_url() ?>">
    <meta property="og:type" content="website">

    <!-- Meta Tags for Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($og_title) ? $og_title : $judul ?>">
    <meta name="twitter:description"
        content="<?= isset($og_description) ? $og_description : $this->config->item('app_description') ?>">
    <meta name="twitter:image" content="<?= isset($og_image) ? $og_image : base_url('assets/image/home_image.webp') ?>">

    <style>
        a {
            text-decoration: none !important;
        }

        a:hover {
            text-decoration: none !important;
        }

        @font-face {
            font-family: "oswald";
            src: url("<?= base_url('assets/fonts/Oswald-VariableFont_wght.woff2'); ?>") format("woff2");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Montserrat";
            src: url("<?= base_url('assets/fonts/Montserrat-VariableFont_wght.woff2'); ?>") format("woff2");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "merriweather";
            src: url("<?= base_url('assets/fonts/Merriweather-Regular.woff2'); ?>") format("woff2");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "merriweather";
            src: url("<?= base_url('assets/fonts/Merriweather-Italic.woff2'); ?>") format("woff2");
            font-weight: normal;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: "oswald";
            src: url("<?= base_url('assets/fonts/Merriweather-Bold.woff2'); ?>") format("woff2");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Merriweather";
            src: url("<?= base_url('assets/fonts/Merriweather-Bold.woff2'); ?>") format("woff2");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        /* berita misi font */
        @font-face {
            font-family: "Merriweather";
            src: url("<?= base_url('assets/fonts/beritamisi/Merriweather-Light.ttf'); ?>") format("truetype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: "abril fatface";
            src: url("<?= base_url('assets/fonts/beritamisi/AbrilFatface-Regular.ttf'); ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        */
    </style>

    <!-- CDN links -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/beritamisi/missionstory.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.adventist.org/alps/2/latest/css/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/sspm.css">
    <script src="https://cdn.adventist.org/alps/2/latest/js/head-script.min.js" type="text/javascript"></script>

    <!-- JS Bootstrap (jQuery required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>

    <!-- <script type="text/javascript" src="https://am.adventistmission.org/assets/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://am.adventistmission.org/assets/js/default.js?v=1691607279"></script> -->

    <!-- Local CSS file -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/mystyle.css">
    <script>document.createElement("picture");</script>

    <!-- Custom CSS Link Responsive Vertical Timeline -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/timeline.css">

    <!-- Font Awesome Link For Responsive Vertical Timeline  -->
    <script src="https://kit.fontawesome.com/8b7107198b.js" defer></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> -->

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/bootstrap.min.custom.css" defer>
</head>

<body class="body theme--warm index-gracelink">
    <div class="content cf has-aside" role="document">

        <!-- HEADER -->
        <header class="header can-be--dark-dark" role="banner" id="header">