<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.en.bonebreakershop.com">
    <meta property="og:title" content="<?php bloginfo('name'); echo " | "; bloginfo('description'); ?>">
    <meta property="og:description" content="Looking for a merch and posters with a cool design? Then you come to us!">
    <meta property="og:image" content="<?php the_field('main_bg'); ?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.en.bonebreakershop.com">
    <meta property="twitter:title" content="<?php bloginfo('name'); echo " | "; bloginfo('description'); ?>">
    <meta property="twitter:description" content="Looking for a merch and posters with a cool design? Then you come to us!">
    <meta property="twitter:image" content="<?php the_field('main_bg'); ?>">
    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000">
    <?php 
        wp_head();
    ?>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar__block">
            <div class="sidebar__close">
                <svg width="24" height="23" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.73924 0.237933C1.95854 0.234106 2.54896 0.547125 3.41216 1.12698C4.13998 1.63159 5.2879 2.46513 5.96721 2.98353C6.64676 3.51485 7.62276 4.2738 8.12994 4.70467C8.63689 5.12261 9.39156 5.76902 9.80014 6.13694C10.2087 6.50487 10.6647 6.79437 10.8233 6.80453C11.0304 6.80092 11.1139 6.696 11.1818 6.39735C11.2265 6.16378 11.3562 5.91579 11.4767 5.83609C11.6696 5.71632 11.7555 5.75362 12.0048 6.07259C12.167 6.28962 12.8039 7.17088 13.4287 8.05236C14.0412 8.93404 14.5549 9.73985 14.5567 9.84329C14.5585 9.94672 13.7944 10.8524 12.8489 11.8389C11.9157 12.8381 11.0408 13.6811 10.9075 13.7222C10.7744 13.7763 10.5664 13.7282 10.4551 13.6396C10.3439 13.551 9.5405 12.9054 8.66309 12.2094C7.79764 11.5003 6.58701 10.5644 5.99432 10.1221C5.40142 9.66683 4.9062 9.22282 4.91703 9.14504C4.91545 9.05453 5.08307 8.88348 5.2762 8.77664C5.4815 8.6696 5.63672 8.48582 5.63492 8.38239C5.63311 8.27896 5.20851 7.69145 4.68599 7.07979C4.16324 6.4552 3.44061 5.54957 3.07872 5.06443C2.71684 4.57929 2.06594 3.59481 1.63931 2.89094C1.20049 2.18729 0.834321 1.4565 0.830935 1.26256C0.815367 1.06884 0.932232 0.782273 1.09941 0.58536C1.27854 0.375305 1.51995 0.241761 1.73924 0.237933V0.237933ZM29.1226 0.923925C29.1348 0.923713 29.2451 0.960586 29.3554 0.997459C29.478 1.03412 29.5659 1.18778 29.5438 1.3175C29.5339 1.447 28.4632 2.94005 27.1763 4.61794C25.877 6.28311 24.0631 8.48752 23.1426 9.51236C22.2219 10.5243 20.4743 12.3395 19.2519 13.5248C18.0296 14.7101 16.1733 16.579 15.1199 17.6709C14.0665 18.7627 12.9913 19.9972 12.7185 20.4287C12.4579 20.86 11.2866 22.1738 10.0892 23.3975C8.91607 24.6078 7.84893 25.6093 7.73928 25.6112C7.61745 25.6133 7.51863 25.5375 7.51728 25.4599C7.52788 25.3692 7.43989 25.2155 7.32889 25.1399C7.18021 25.0002 6.72087 25.2151 4.58524 26.4423C3.17337 27.2429 1.89325 27.9119 1.74705 27.9144C1.58868 27.9172 1.41608 27.8038 1.3405 27.6629C1.2771 27.5217 1.21325 27.3547 1.2119 27.2771C1.21055 27.1995 1.8303 26.3998 2.6064 25.481C3.37009 24.5494 5.29296 22.3043 6.86952 20.4661C8.45827 18.6278 11.0169 15.8025 12.5605 14.1719C14.1042 12.5413 16.2353 10.3572 17.2898 9.32999C18.3441 8.28988 19.9026 6.81418 20.7667 6.04899C21.6305 5.27086 22.9152 4.16206 23.6486 3.59314C24.9466 2.54878 24.9829 2.53521 25.7017 2.52267C26.3598 2.52411 26.5534 2.44313 27.7595 1.7237C28.4952 1.28407 29.0982 0.924351 29.1226 0.923925V0.923925ZM10.0422 2.55028C10.359 2.54475 10.4456 2.62083 10.6611 3.09559C10.8641 3.55764 10.8783 3.67379 10.7482 3.89592C10.6654 4.03963 10.4603 4.1596 10.3019 4.16237C10.0826 4.1662 9.9461 4.02632 9.732 3.62913C9.50526 3.2063 9.46532 3.013 9.5594 2.81736C9.64175 2.6478 9.81073 2.55432 10.0422 2.55028ZM19.4097 15.5784C19.6411 15.5744 20.3595 16.2344 22.4559 18.3447C24.5277 20.4424 25.3602 21.3591 25.8865 22.1905C26.2626 22.7918 26.828 23.7649 27.1308 24.3545C27.4334 24.9312 28.2598 26.1971 28.9714 27.1676C29.6705 28.1254 30.2463 28.9948 30.2481 29.0982C30.2499 29.2017 30.1558 29.3973 30.0363 29.5287C29.9289 29.6599 29.7233 29.754 29.5893 29.7564C29.4553 29.7587 28.0148 28.9173 26.3883 27.8982C24.7741 26.8788 23.3575 26.0111 23.2471 25.9742C23.1488 25.9242 22.9663 25.9404 22.8577 26.0069C22.737 26.0737 22.619 26.2956 22.5863 26.516C22.5536 26.7365 22.4354 26.9455 22.3264 26.9862C22.1809 27.0275 22.0212 26.9527 21.8838 26.7611C21.759 26.5951 21.2207 25.7768 20.6819 24.9327C20.1432 24.0885 19.268 22.8234 18.7074 22.1219C18.1589 21.4201 17.3744 20.4638 16.9519 19.9927C16.5291 19.5086 16.1794 19.0233 16.1773 18.9069C16.1751 18.7776 16.2209 18.6087 16.268 18.5173C16.3154 18.4389 16.9735 17.742 17.728 16.9787C18.7098 15.9786 19.1904 15.5823 19.4097 15.5784V15.5784Z" fill="white"/>
                </svg>                    
            </div>
            <nav>
                <ul class="sidebar__list">
                    <li class="sidebar__link"><a href="/about_us">About us</a></li>
                    <li class="sidebar__link"><a href="/contacts">Contacts</a></li>
                    <li class="sidebar__link"><a href="/catalog">Catalog</a></li>
                </ul>
            </nav>
        </div>
        <div class="sidebar__overlay"></div>
    </div>

    <section class="promo" style="background: url('<?php the_field('main_bg'); ?>') center center/cover no-repeat;background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)) , url('<?php the_field('main_bg'); ?>');background-color: #000;">
        <header>
            <div class="container">
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__link"><a href="/about_us">About us</a></li>
                        <li class="menu__link menu__link-m"><a href="/contacts">Contacts</a></li>
                        <li class="menu__link-logo">
                            <a href="<?php echo get_home_url(); ?>" class="logo__link">
                                <img src="<?php // получаем ссылку на логотип
                                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                                            // выводим
                                            echo $custom_logo__url[0]; 
                                ?>" alt="Bone Breaker" class="logo__image">
                            </a>
                        </li>
                        <li class="menu__link menu__link-m"><a href="/catalog">Catalog</a></li>
                        <li class="menu__link menu__link-lg">
                            <ul class="menu__list">
                                <li>
                                    <a class="menu__lg">EN</a>
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/arrow.svg" alt="arrow">
                                    <ul class="submenu__list-lg">
                                        <li>
                                            <a href="https://www.bonebreakershop.com" class="submenu__ru">RU</a>
                                        </li>
                                        <li>
                                            <a href="https://www.en.bonebreakershop.com" class="submenu__en">EN</a>
                                        </li>
                                        <li>
                                            <a href="https://www.et.bonebreakershop.com" class="submenu__et">ET</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
        <div class="container">
            <div class="promo__wrapper">
                <h1 class="promo__title"><?php the_field('main_title'); ?></h1>
                <a href="/catalog" class="promo__btn">View catalog</a>
            </div>
        </div>
    </section> 
<?php 
    wp_footer();
?> 
</body>
</html>