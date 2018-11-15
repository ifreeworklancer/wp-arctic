<!-- Stock -->
<section id="stock">
    <?php $stock = get_post(47); ?>
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-xl-between">
            <div class="col-lg-6 p-0">
                <div class="stock-tabs-img">
                    <?php 
                        $stock_images_fields = get_field('stock__images', $stock->ID);
                        $stock_fields = get_field('stock', $stock->ID);
                    ?>
                    <?php foreach($stock_images_fields as $stock_images_field) : ?>
                        <div class="stock-tabs-img__item" style="background-image: url(<?php echo $stock_images_field['url'] ?>);"></div>
                    <?php endforeach; ?>
                    <div class="logo">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-5 mx-auto mt-4 mt-sm-0">
                <h2 class="section-title mb-4">
                    <?= $stock->post_title ?>
                </h2>
                <div class="stock-tabs-sm-img">
                    <?php foreach($stock_images_fields as $stock_images_field) : ?>
                        <div class="stock-tabs-sm-img__item" style="background-image: url(<?php echo $stock_images_field['url'] ?>);"></div>
                    <?php endforeach; ?>
                </div>
                <div class="stock-tabs">

                    <?php foreach($stock_fields as $stock_field) : ?>
                        <div class="stock-tabs-item">
                            <div class="stock-tabs-item__title">
                                <?php echo $stock_field['stock__title'] ?>
                            </div>
                            <div class="stock-tabs-item__text">
                                <?php echo $stock_field['stock__text'] ?>
                            </div>
                            <div class="btn-container">
                                <a href="#" class="btn btn-primary open-order">
                                    Заказать воду
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                
                </div>
            </div>
        </div>
    </div>
</section>