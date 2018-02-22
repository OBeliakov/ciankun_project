<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cian_cun
 */

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Цянь Кунь</title>
    <meta name="viewport" content="width=1326, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
 <header class="header-main">
        <div class="header-bg">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-1">
                            <a href="http://ci90599.tmweb.ru" class="logo"><img src="<?=get_template_directory_uri();?>/images/logo/logotype.svg" alt=""></a>
                        </div>
                        <div class="col-4">
                            <div class="main-tagline">愿这是您最美好的俄罗斯之旅！</div>
                        </div>
                        <div class="col-4">
                            <nav>
                                <ul class="main-menu">
                                    <li><a href="#"><i class="i-type-city"></i>旅行的城市的选择</a></li>
                                    <li><a href="category/hotels"><i class="i-services"></i>基础设施</a></li>
                                    <li><a href="#"><i class="i-news"></i>新闻</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="main-contact number-block">
                                <div class="text-number">热线</div>
                                <div class="number"><i class="i-phone"></i>+7 965 799 89 99</div>
                                <a href="#contacts" class="btn-contact">联系我们</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php if (is_front_page()):?>
         <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-7">
                            <div class="nav-city">
                                <ul class="nav-city-menu">
                                    <li><a href="#" class="city-spb"><i class="i-spb"></i>圣彼得堡</a></li>
                                    <li><a href="#" class="city-msk"><i class="i-msk"></i>莫斯科</a></li>
                                    <li><a href="#" class="city-kazan"><i class="i-kazan"></i>喀山</a></li>
                                    <li><a href="#" class="city-sochi"><i class="i-sochi"></i>索契</a></li>
                                    <li><a href="#" class="cities-catalog">旅行的城市的选择</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="services">
                                <ul class="services-menu">
                                    <li><a href="#"><i class="i-excursions"></i>参观</a></li>
                                    <li><a href="#"><i class="i-attractions"></i>地标</a></li>
                                    <li><a href="#"><i class="i-eat"></i>餐馆</a></li>
                                    <li><a href="#"><i class="i-shop"></i>商店</a></li>
                                    <li><a href="#"><i class="i-fun"></i>文娱</a></li>
                                    <li><a href="#"><i class="i-news"></i>新闻</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?endif;?>
    </header>
<main class="content">