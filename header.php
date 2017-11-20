<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru-RU">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon" type="image/png">
    <?php wp_head(); ?> 
</head>

<body id="to-top" <?php body_class(); ?>>
    <?php the_field('option_code_top','option'); ?>

<div class="header">
    <div class="header__inner">
        <div class="container">
            <div class="header__top">
                <div class="header__logo">
                    <?php if (!is_front_page()) { ?><a href="<?php echo home_url(); ?>"><?php } ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="">
                    <?php if (!is_front_page()) { ?></a><?php } ?>
                    <div class="header__logo-txt"><strong>Минимальный заказ</strong> 1000 <span class="rub">P</span></div>
                </div>
                <div class="header__center">
                    <div class="header__tagline">Нанесение логотипов и символики на одежду и сувениры оптом сроком от 1-го дня с доставкой по Москве и России</div>
                    <div class="header__search">
                        <form class="header__search-form" role="search" method="get" action="/">
                            <input class="header__search-input" type="search" placeholder="Поиск: например, сигнальные жилеты" value="" name="s">
                            <button class="header__search-btn btn btn_c1 btn_search" type="submit"><span class="header__search-form-txt">Найти</span></button>
                        </form>
                    </div>
                </div>
                <div class="header__right"> 
                    <?php if ($main_email = get_field('option_email','option')): ?>
                        <a href="mailto:<?php echo $main_email ?>" class="header__email"><?php echo $main_email ?></a>
                    <?php endif; ?>
                    <?php if ($main_tel = get_field('option_tel','option')): ?>
                        <a class="header__tel" href="tel:<?php echo preg_replace("/[^0-9+]/","",$main_tel); ?>"><?php echo $main_tel; ?></a>
                    <?php endif; ?>
                    <a class="header__call-btn btn btn_c2 js-btn-call">Заказать звонок</a>
                </div>
                <a class="mmenu-btn js-mmenu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="header__menu-wrap">
        <div class="container">
            <div class="header__menu js-header-menu">
                <ul class="topmenu">
                    <li class="menu-item"><a href="#">ПромПечать</a></li>
                    <li class="menu-item current-menu-item"><a href="#">Услуги печати</a></li>
                    <li class="menu-item"><a href="#">Товары</a></li>
                    <li class="menu-item"><a href="#">Прайс-лист</a></li>
                    <li class="menu-item"><a href="#">Доставка</a></li>
                    <li class="menu-item"><a href="#">Примеры работ</a></li>
                    <li class="menu-item"><a href="#">Контакты</a></li>
                </ul>
                        <?php
                            // wp_nav_menu( array(
                            //     'theme_location'    => 'primary',
                            //     'depth'             => 2,
                            //     'container'         => 'div',
                            //     'container_class'   => 'collapse navbar-collapse',
                            //     'container_id'      => 'menu-collapse',
                            //     'menu_class'        => 'nav navbar-nav',
                            // );
                        ?>
            </div>
        </div>
    </div>
</div>
<div class="main-layout">



