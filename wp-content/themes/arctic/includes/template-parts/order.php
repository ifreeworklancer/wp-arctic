<div class="order">
    <?php $order = get_post(62); ?>
    <div class="order-body">
        <div class="close-order">
            <div class="close-order__text">Закрыть</div>
            <div class="close-order-icon">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
        </div>
        <h2 class="section-title text-white mb-4">
            <?= $order->post_title ?>
        </h2>
        <?php echo do_shortcode('[contact-form-7 id="68" title="Заказ воды"]'); ?>
    </div>
</div>