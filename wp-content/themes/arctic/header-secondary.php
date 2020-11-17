<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

    <?php require_once(__DIR__ . '/includes/common/ga.php') ?>
    <?php require_once(__DIR__ . '/includes/common/fb.php') ?>
</head>

<body <?php body_class(); ?>>
<?php require_once (__DIR__. '/includes/common/fb_noscript.php'); ?>

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
                                <a href="<?php echo site_url() . '#services' ?>">
                                    сервисы
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url() . '#about' ?>">
                                    о нас
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url() . '#stock' ?>">
                                    акции
                                </a>
                            </li>
                            <li class="menu-list-item">
                                <a href="<?php echo site_url() . '#contacts' ?>">
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

