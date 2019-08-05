<?php
$metaTitle = "Nguyen Son Arsenal - Bài viết - Gia đình, sức khỏe, đam mê, thể thao";
$metaDescription = "Website tổng hợp những kinh nghiệm cuộc sống, gia đình, kĩ năng lập trình, sưu tầm những mẫu chuyện hay của chính tác giả cũng như những người bạn ";
$metaKeyword = "IT, CNTT, Bách Khoa, lập trình, gia đình, arsenal, Nguyen Son Arsenal";
$canonical = "http://sonnguyen-vlog.top/";

include './includes/header.php';
?>

<!-- Content: List posts -->
<div class="rowx post" id="post">
    <div class="container">
        <p class="color-red f18 title">
            <marquee><strong><i>Mãi là anh em. Hoặc là chúng ta cùng trên một con thuyền, hoặc chúng ta chẳng là gì của nhau cả. Tôi có quá nhiều bạn rồi.</i></strong></marquee>
        </p>

        <div class="contact-cover">
            <img src="<?php assets('assets/images/posts/cover.jpg')?>" alt="Nguyen Son Arsenal posts cover">
        </div>

        <div class="list_post_wrapper">
            <ul class="list_post_ul">
                <li class="list_post_item">
                    <a href="/v-blog/mot-thoang-bach-khoa-trong-toi" class="item_title">Một thoáng bách khoa trong tôi.</a>
                    <br>
                    <small class="item-time">Ngày 21 tháng 7 năm 2019</small>
                    <p class="item-description">
                        Gần đây, tôi hay nhận được rất nhiều cuộc điện thoại từ các phụ huynh ở quê, có con vừa thi đại học
                        , và có nguyện vọng cho con vào học Bách Khoa.
                    </p>
                </li>

                <li class="list_post_item">
                    <a href="/v-blog/cau-chuyen-ve-chuyen-xe-muon" class="item_title">Câu chuyện về quê trên chuyến xe muộn.</a>
                    <br>
                    <small class="item-time">Ngày 7 tháng 7 năm 2019</small>
                    <p class="item-description">
                        Bài viết được trích từ một người bạn, người em mình mới quen, xin phép được gọi em là cô gái...
                    </p>
                </li>

                <li class="list_post_item">
                    <a href="/v-blog/lac-loi-tuoi-24" class="item_title">Lạc lối tuổi 24, 2 năm sau ra trường</a>
                    <br>
                    <small class="item-time">Ngày 5 tháng 5 năm 2019</small>
                    <p class="item-description">
                        Tuổi 24, bản thân ta cũng nên thay đổi, để trời đất luân hồi, cuộc đời "reset"...
                    </p>
                </li>

                <li class="list_post_item">
                    <a href="/v-blog/loi-xin-loi-ba-chan-thanh" class="item_title">Lời xin lỗi ba chân thành</a>
                    <br>
                    <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                    <p class="item-description">
                        Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của ba...
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>

