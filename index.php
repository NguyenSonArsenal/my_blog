<html lang="vi" class="">
<head lang="vi">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="./assets/images/favicon.ico" type="image/x-icon" rel="icon">
    <link href="/bower_components/bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/bower_components/animate/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/common.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=vietnamese&&w=2.2.7.22008864"/>

    <script src="/bower_components/jquery/jquery-3.3.1.min.js"></script>
    <script src="/bower_components/bootstrap4/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div id="loading" style="display: none">
    <img id="loading-image" src="./assets/images/loading.gif" alt="Loading...">
</div>
<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.svg" alt="Logo">
                <span class="company-name">NguyenSonArsenal</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-expanded="false">
                <img src="./assets/images/menu.png" alt="image name">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav navbar-right ml-auto">
                    <li class="nav-item" data-scroll="home">
                        <a class="nav-item__link nav-item__link_home active" href="index.php">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="about">
                        <a class="nav-item__link nav-item__link_about" href="profile.html">
                            <span>PR bản thân</span>
                        </a>
                    </li>
                    <li class="nav-item" data-scroll="partner">
                        <a class="nav-item__link nav-item__link_partner" href="contact.html">
                            <span>Liên hệ</span>
                        </a>
                    </li>
                    <li class="nav-item lang" data-scroll="tab-04">
                        <div class="row text-center">
                            <div class="col">
                                <a href="#" class="lang--flag">
                                    <img src="./assets/images/vn.svg" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="lang--flag">
                                    <img src="./assets/images/gb.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Description: Top page -->

    <div class="container">
        <div class="rowx" id="home">
            <div id="top" class="text-center">
                <h1><a href="profile.html" class="link-profile"><span class="name">Nguyen Son Arsenal</span></a></h1>
                <h3>
                    <span class="sp-break-line fadeInUp animated">Tự nhận mình là người khá hài hước. Cảm ơn bạn đã ghé thăm tường nhà Sơn</span>
                </h3>
                <p class="fadeInDown animated sort-description">
                    Bạn chỉ cần siêng thôi, bạn càng dễ đạt được. <br>
                    Còn bạn lười, chắc chắn bạn sẽ mãi như thời điểm vô tình đọc được những dòng này.
                </p>
            </div>
        </div>
    </div>

    <!-- Content post -->
    <div class="rowx" id="">
        <div class="container">
            <div class="link-inline-block bounceIn animated">
                <h2><a href="./profile.html" class="">Xem thêm</a></h2>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <div class="color--grey">© 2019 NguyenSonArsenal <img src="./assets/images/heart.svg" alt="image name"> Tại Hà
            Nội
        </div>
        <div class="footer__back-to-top">
            <img id="icon-back-to-top" src="./assets/images/arrow-up-icon.png" alt="Back to top" width="40px">
        </div>
    </footer>
</div>
</body>
<script src="./assets/js/common.js"></script>
<script src="./assets/js/index.js"></script>
</html>

