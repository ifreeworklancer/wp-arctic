<!-- Intro -->
<section id="intro">
    <?php $intro = get_post(8); ?>
    <div class="video-container" data-src="<?php echo get_theme_file_uri('/video/arktika.mp4')?>"></div>
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-lg-9 col-xl-7">
                <div class="intro-item">
                    <h1 class="intro-item__title text-white mb-4">
                        <?= $intro->post_title ?>
                    </h1>
                    <div class="intro-item-description d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
                        <div class="intro-button order-2 order-sm-1">
                            <a href="#" class="btn btn-primary open-order">
                                Заказать воду
                            </a>
                        </div>
                        <div class="intro-item-description__text order-1 order-sm-2">
                            <?= $intro->post_content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#services" class="scroll-down scroll-link">
        <div class="scroll-down__text">
            скролл вниз
        </div>
        <div class="scroll-down__icon"></div>
    </a>
</section>