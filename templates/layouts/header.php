<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <base href="<?= domain ?>">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $assets ?>/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->



    <?php

    use Apps\Template;

    if ($haspage) : ?>

        <title>AUL Medical Education</title>
        <meta name="description" content="We are a medical and healthcare teaching platform. We use people's real stories, thought contributions from experts, and video explainers to teach our audience how to take care of themselves">

        <meta name="twitter:title" content="Sammy the Shark" />
        <meta name="twitter:description" content="Senior Selachimorpha at DigitalOcean" />
        <meta name="twitter:image" content="https://html.sammy-codes.com/images/large-profile.jpg" />

        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:type" content="site">
        <meta property="og:image" content="<?php $_REQUEST[""] ?>">

    <?php else : ?>

        <title>AUL Medical Education</title>
        <meta name="description" content="We are a medical and healthcare teaching platform. We use people's real stories, thought contributions from experts, and video explainers to teach our audience how to take care of themselves">

        <meta name="twitter:title" content="Sammy the Shark" />
        <meta name="twitter:description" content="Senior Selachimorpha at DigitalOcean" />
        <meta name="twitter:image" content="https://html.sammy-codes.com/images/large-profile.jpg" />

    <?php endif; ?>

    <!-- CSS here-->
    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $assets ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $assets ?>/font-flaticon/flaticon.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/dripicons.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/slick.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/meanmenu.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/default.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/responsive.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/defined.css">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/"><img src="<?= $assets ?>/img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu text-center text-xl-center">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li class="sub">
                                            <a href="./pages/health-topics">Health</a>
                                            <ul>
                                                <li><a href="./pages/health-topics">Health Guide</a></li>
                                                <?php if ($Template->storage("accid")) : ?>
                                                    <li><a href="./pages/videos">Online Clases</a></li>
                                                <?php else : ?>
                                                    <li><a href="./visitors/pages/login">Online Clases</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                        <li class="sub"><a href="./pages/stories">Your Doctor's Diary</a></li>
                                        <li class="sub"><a href="./pages/campaigns">Campaigns</a></li>
                                        <li class="sub"><a href="./pages/blog">Blog</a></li>
                                        <li class="sub"><a href="./pages/about-us">About Us</a></li>

                                        <?php
                                        $accid = $Template->storage("accid");

                                        $userSql = "SELECT * FROM `users` WHERE id='{$accid}'";
                                        $uerResult = mysqli_query($Core->dbCon, $userSql);
                                        $User = mysqli_fetch_object($uerResult);

                                        $Template->assign("User", $User);
                                        ?>

                                        <?php if ($Template->storage("accid")) : ?>

                                            <li class="sub">
                                                <h6 class="text-danger">Hi <?= $User->fullName ?>!</h6>
                                                <ul>
                                                    <li><a class="text-center" href="/visitors/pages/home">Go to Dashboard</a></li>
                                                    <li><a class="btn ss-btn py-3 px-4 mx-3 text-white text-center" href="/user/logout">Logout</a></li>
                                                </ul>


                                            </li>
                                        <?php else : ?>
                                            <li class="sub">
                                                <a class="btn ss-btn py-3 px-4 mx-3 text-white text-center" href="./visitors/pages/login">Login</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->