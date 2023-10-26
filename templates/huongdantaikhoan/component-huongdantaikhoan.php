<section class="huongdantaikhoan">
    <div class="container">
        <div class="huongdantaikhoan-banner">
            <?php
            $image = get_field('img');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="" width="100%" />
            <?php endif; ?>
        </div>
        <div class="huongdantaikhoan-section">
            <div class="bg">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active after" id="pills-introduce-tab" data-bs-toggle="pill" data-bs-target="#pills-introduce" type="button" role="tab" aria-controls="pills-introduce" aria-selected="true">Hướng dẫn đăng ký tài khoản</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link after" id="pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#pills-achievement" type="button" role="tab" aria-controls="pills-achievement" aria-selected="false" style="border-right: 1px solid #dfd8d8; border-left: 1px solid #dfd8d8;">Lưu ý về sử dụng tài khoản</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link " id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-active" type="button" role="tab" aria-controls="pills-active" aria-selected="false">Hướng dẫn khác</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <!-- HƯỚNG DẪN ĐĂNG KÝ -->
                    <div class="tab-pane fade show active" id="pills-introduce" role="tabpanel" aria-labelledby="pills-introduce-tab" tabindex="0">
                        <?php if (have_rows('huongdantaikhoan-huongdandangky')) : ?>
                            <?php while (have_rows('huongdantaikhoan-huongdandangky')) : the_row();
                                $content  = get_sub_field('content');
                            ?>
                                <p><?php echo $content ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- LƯU Ý SỬ DỤNG -->
                    <div class="tab-pane fade" id="pills-achievement" role="tabpanel" aria-labelledby="pills-achievement-tab" tabindex="0">
                        <?php if (have_rows('huongdantaikhoan-luuysudung')) : ?>
                            <?php while (have_rows('huongdantaikhoan-luuysudung')) : the_row();
                                $content  = get_sub_field('content');
                            ?>
                                <p><?php echo $content ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- HƯỚNG DẪN KHÁC -->
                    <div class="tab-pane fade" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab" tabindex="0">
                        <?php if (have_rows('huongdantaikhoan-huongdankhac')) : ?>
                            <?php while (have_rows('huongdantaikhoan-huongdankhac')) : the_row();
                                $content  = get_sub_field('content');
                            ?>
                                <p><?php echo $content ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    var elements = document.querySelectorAll('.active');
    elements.forEach(function(element) {
        element.classList.remove('active');
    });
    document.getElementById("login").classList.add('active');
</script>