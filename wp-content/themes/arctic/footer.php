</main>

<footer id="app-footer">
    <div class="container" id="contacts">
        <div class="row justify-content-between pb-3">
            <div class="col-sm-3 col-lg-2 mb-4 mb-sm-0">
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                </a>
            </div>
            <div class="col-sm-3 col-lg-1 p-lg-0">
                <div class="footer-title">
                    Сервисы
                </div>
                <ul class="footer-list list-unstyled">
                    <li class="footer-list-item">
                        <a href="#" class="open-order">Заказ воды</a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#services" class="scroll-link">Оборудование</a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#stock" class="scroll-link">Акции</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-lg-2 mb-4 mb-sm-0 p-sm-0">
                <div class="footer-title">
                    Контакты
                </div>
                <ul class="footer-list list-unstyled">
                    <?php 
                        $phones = get_theme_mod('phones');
                        $phones__arrays = explode("\n", $phones);
                    ?>
                    <?php foreach($phones__arrays as $phones__array) : ?>
                        <li class="footer-list-item">
                            <a href="tel:<?php echo phone_filter($phones__array); ?>"><?php echo $phones__array ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-sm-3 col-lg-2 mb-4 mb-sm-0 p-sm-0">
                <a href="#" class="btn btn-outline-light open-order">
                    Заказать воду
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-copyr d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div class="footer-copyr__item mb-3 mb-sm-0">
                        2018 Все права защищены.
                    </div>
                    <div class="footer-copyr__item">
                        Дизайн и разработка сайта <a href="https://impressionbureau.pro" target="_blank">Impression.Bureau</a><sup>2018</sup>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>