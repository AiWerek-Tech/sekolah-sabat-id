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
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets') ?>/image/faficon.png">
    <base href="">

    <style>
        a {
            text-decoration: none !important;
        }

        a:hover {
            text-decoration: none !important;
        }

        @font-face {
            font-family: "oswald";
            src: url("<?php echo base_url('assets/fonts/Oswald-VariableFont_wght.ttf'); ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Montserrat";
            src: url("<?php echo base_url('assets/fonts/Montserrat-VariableFont_wght.ttf'); ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "merriweather";
            src: url("<?php echo base_url('assets/fonts/Merriweather-Regular.ttf'); ?>") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "merriweather";
            src: url("<?php echo base_url('assets/fonts/Merriweather-Italic.ttf'); ?>") format("truetype");
            font-weight: normal;
            font-style: italic;
        }

        @font-face {
            font-family: "merriweather";
            src: url("<?php echo base_url('assets/fonts/Merriweather-Bold.ttf'); ?>") format("truetype");
            font-weight: bold;
            font-style: normal;
        }
    </style>

    <!-- CDN links -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/alps.2.main.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.adventist.org/alps/2/latest/css/main.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/sspm.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://www.gracelink.net/assets/template/css/sspm.css"> -->
    <script src="https://cdn.adventist.org/alps/2/latest/js/head-script.min.js" type="text/javascript"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

    <!-- JS Bootstrap (jQuery required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Local CSS file -->

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/mystyle.css">
    <script>document.createElement("picture");</script>

    <!-- Custom CSS Link Responsive Vertical Timeline -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/timeline.css">

    <!-- Font Awesome Link For Responsive Vertical Timeline  -->
    <script src="https://kit.fontawesome.com/8b7107198b.js"></script>

    <!-- Alkitab SABDA -->
    <!-- <script type="text/javascript" src="https://alkitab.sabda.org/api/alkitab.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- CSS Bootstrap -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/css/bootstrap.min.custom.css">


</head>

<body class="body theme--warm index-gracelink">
    <div class="content cf has-aside" role="document">

        <!-- HEADER -->
        <header class="header can-be--dark-dark" role="banner" id="header">