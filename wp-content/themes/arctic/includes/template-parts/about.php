<!-- About -->
<section id="about">
    <?php $about = get_post(36); ?>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-5 order-2 order-sm-1">
                <div class="about-item">
                    <h2 class="section-title mb-4">
                    <?= $about->post_title ?>
                    </h2>
                    <?php 
                        $about_text_fields = get_field('about__text', $about->ID);
                        $about_desciption_fields = get_field('about__description', $about->ID);
                        $about_image_fields = get_field('about__image', $about->ID);
                    ?>
                    <?php echo ($about_text_fields); ?>
                </div>
                <div class="about-description">
                    <?php echo ($about_desciption_fields); ?>
                </div>
            </div>
            <div class="col-sm-6 order-1 order-sm-2">
                <div class="about-img" style="background-image: url(<?php echo ($about_image_fields['url']); ?>)"></div>
            </div>
        </div>
    </div>
</section>