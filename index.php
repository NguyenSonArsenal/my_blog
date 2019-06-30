<?php include './includes/header.php';?>

<div class="container">
    <!-- Description: Top page -->
    <div id="home">
        <div id="top" class="text-center">
            <h1><a href="profile.php" class="link-profile"><span class="name">Nguyen Son Arsenal</span></a></h1>
            <h3>
                <span class="sp-break-line fadeInUp animated">Tự nhận mình là người khá hài hước. Cảm ơn bạn đã ghé thăm tường nhà Sơn</span>
            </h3>
            <p class="fadeInDown animated sort-description">
                Bạn chỉ cần siêng thôi, bạn càng dễ đạt được. <br>
                Còn bạn lười, chắc chắn bạn sẽ mãi như thời điểm vô tình đọc được những dòng này.
            </p>
        </div>
        <div class="link-inline-block bounceIn animated">
            <h2><a href="<?php assets('profile.html') ?>" class="">Xem thêm</a></h2>
        </div>
    </div>

    <!-- Content post -->
    <div id="blog" class="blog home__blog">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="<?php assets('assets/images/home/1.jpg')?>" alt="image name">
            </div>
            <div class="col-sm-6">
                <h2 class="title color-red">Nhật kí sưu tầm</h2>
                <ul class="list">
                    <li>
                        <a class="blog__item" href="/v-blog/lac-loi-tuoi-24">
                            <h4 class="item-title f18">Lạc lối tuổi 24, 2 năm sau ra trường</h4>
                            <small class="item-time">Ngày 5 tháng 5 năm 2019</small>
                            <p class="item-description">
                                Tuổi 24, có người 2 chó, 2 mèo, một khoản nợ kếch xù...
                                CÒN BẢN THÂN TA CŨNG NÊN THAY ĐỔI RỒI, để trời đất luân hồi, cuộc đời "reset"...
                            </p>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a class="blog__item" href="/v-blog/loi-xin-loi-ba-chan-thanh">
                            <h4 class="item-title f18">Lời xin lỗi ba chân thành</h4>
                            <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                            <p class="item-description">
                                Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của ba...
                            </p>
                        </a>
                    </li>
                </ul>
                <div class="text-right">
                    <a class="more color-black-default " href="<?php assets('post.html') ?>">» Xem thêm</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include './includes/footer.php'; ?>
