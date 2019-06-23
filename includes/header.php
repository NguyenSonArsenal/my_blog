<?php include './helper/helper.php'; ?>

<html lang="vi" class="">
<head lang="vi">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NguyenSonArsenal-Vlog</title>
    <link href="./assets/images/layout/favicon.png" type="image/x-icon" rel="icon">
    <link href="/bower_components/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/bower_components/animate/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=vietnamese&&w=2.2.7.22008864"/>

    <script src="/bower_components/jquery/jquery-3.3.1.min.js"></script>
    <script src="/bower_components/bootstrap4/dist/js/bootstrap.min.js"></script>

    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/index.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/profile.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/contact.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/404.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/post.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="loading" style="display: none">
    <img id="loading-image" src="./assets/images/loading.gif" alt="Loading...">
</div>
<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="./assets/images/layout/favicon.png" alt="Logo">
                <span class="company-name color-red">NguyenSonArsenal</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-expanded="false">
                <img src="./assets/images/layout/menu.png" alt="image name">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav navbar-right ml-auto">
                    <li class="nav-item" data-scroll="home">
                        <a class="nav-item__link nav-item__link_home <?php getMenuActive('index.php') ?>" href="/">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="about">
                        <a class="nav-item__link nav-item__link_about <?php getMenuActive('profile.php') ?>" href="profile.php">
                            <span>PR bản thân</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="partner">
                        <a class="nav-item__link nav-item__link_partner <?php getMenuActive('contact.php') ?>" href="contact.php">
                            <span>Liên hệ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>