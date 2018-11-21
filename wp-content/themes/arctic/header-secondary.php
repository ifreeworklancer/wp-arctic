<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85554531-1', 'auto');
      ga('send', 'pageview');

    </script>

    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '506799066368931');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=506799066368931&ev=PageView&noscript=1"
        /></noscript>
</head>

<body <?php body_class();?>>

    <header id="app-header">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">
                <div class="col-sm-3 col-lg-2">
                    <a href="<?php echo site_url(); ?>" class="logo">
                        <img src="<?php echo get_theme_file_uri('images/icon/logo/logo.png') ?>" alt="logo">
                    </a>
                </div>
                <div class="col-sm-9 col-xl-7 d-flex justify-content-between align-items-center">
                    <nav class="menu w-100 mr-lg-5" id="nav-menu">
                        <div class="menu-content">
                            <ul class="menu-list d-flex flex-column flex-lg-row justify-content-between align-items-center list-unstyled">
                                <li class="menu-list-item">
                                    <a href="<?php echo site_url() . '#services'?>">
                                        сервисы
                                    </a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="<?php echo site_url() . '#about'?>">
                                        о нас
                                    </a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="<?php echo site_url() . '#stock'?>">
                                        акции
                                    </a>
                                </li>
                                <li class="menu-list-item">
                                    <a href="<?php echo site_url() . '#contacts'?>">
                                        контакты
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <a href="<?php echo site_url(); ?>" class="btn btn-outline-light d-none d-lg-inline-flex">
                        На главную
                    </a>
                </div>
            </div>
            <div class="burger-menu d-flex d-lg-none flex-column justify-content-center align-items-center">
                <div class="line line--top"></div>
                <div class="line line--middle"></div>
                <div class="line line--bottom"></div>
            </div>
        </div>
    </header>

    <main>

