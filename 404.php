<?php
$metaTitle = "";
$metaDescription = "";
$metaKeyword = "Nguyen Son Arsenal, 404 page";
$canonical = "http://sonnguyen-vlog.top/";

include './includes/header.php';
?>

<!-- 404 page -->
<div class="container">
    <div class="page-404" id="page-404">
        <div class="page404">
            <div class="row">
                <div class="col-4 offset-2">
                    <img src="<?php assets('assets/images/404.png') ?>" width="100%" alt="image 404 page">
                </div>
                <div class="col-5">
                    <p class="name">Truy cập của bạn có thể bị lỗi hoặc không tìm thấy nội dung</p>
                    <div class="link-inline-block bounceIn animated">
                        <h2><a href="/" class=""><i class="fa fa-home fa-lg"></i> &nbspQuay lại trang chủ</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include './includes/footer.php'; ?>

