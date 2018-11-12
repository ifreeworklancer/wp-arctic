<!-- Services -->
<section id="services">
    <?php $services = get_post(19); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-end mb-5">
                <h2 class="section-title">
                    <?= $services->post_title ?>
                </h2>
                <div class="tabs-decor">
                    <div class="tabs-decor__item active">
                        Вода
                    </div>
                    <div class="tabs-decor__item">
                        Оборудование
                    </div>
                    <div class="tabs-decor__item">
                        Сервис
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="services-tabs-img">
                    <?php 
                        $services_images_fields = get_field('services__images', $services->ID);
                        $services_fields = get_field('services', $services->ID);
                    ?>
                    <?php foreach($services_images_fields as $services_images_field) : ?>
                        <div class="services-tabs-img__item" style="background-image: url(<?php echo $services_images_field['url'] ?>);"></div>
                    <?php endforeach; ?>

                    <div class="logo">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                    </div>
                </div>
            </div>
            <div class="col-sm-8 mx-auto col-lg-6">
                <div class="services-tabs">
                    <div class="services-tabs-header">
                        <ul class="services-tabs-header-list list-unstyled">
                            <li class="services-tabs-header-list-item active">
                                Вода
                            </li>
                            <li class="services-tabs-header-list-item">
                                Оборудование
                            </li>
                            <li class="services-tabs-header-list-item">
                                Сервис
                            </li>
                        </ul>
                    </div>
                    <div class="services-tabs-body-item-img">
                        <?php foreach($services_images_fields as $services_images_field) : ?>
                            <div class="services-tabs-body-item-img__item" style="background-image: url(<?php echo $services_images_field['url'] ?>);"></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="services-tabs-body">

                        <?php foreach($services_fields as $services_field) : ?>
                        <div class="services-tabs-body-item">
                            <div class="services-tabs-body-item__title">
                             <?php echo ($services_field['services__title']) ?>  
                            </div>
                            <div class="services-tabs-body-item__text">
                                <?php echo ($services_field['services__text']) ?> 
                            </div>
                            <?php echo ($services_field['services__list']) ?> 
                            <div class="services-tabs-body-item-description">
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
    </div>
</section>