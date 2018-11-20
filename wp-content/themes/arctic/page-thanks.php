<?php
/*
* Template name: thanks page
* Template type: page
*/
 get_header('secondary'); ?>

 <section id="thanks-page">
     <div class="container h-100 d-flex align-items-center">
         <div class="row w-100">
            <div class="col-sm-6 col-lg-5 mx-auto">
                <div class="thanks-page-item">
                    <h1 class="thanks-page-item__title">
                        Спасибо!
                    </h1>
                    <div class="thanks-page-item__text">
                        Ваш заказ принят.
                    </div>
                    <a href="<?php echo site_url(); ?>" class="btn btn-primary">
                        На главную
                    </a>
                </div>
            </div>
         </div>
     </div>
 </section>

 <?php
get_footer('secondary'); ?>