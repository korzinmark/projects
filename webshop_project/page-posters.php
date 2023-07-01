<?php 
/*
Template Name: Постеры
*/
?>

<?php 
    get_header();
?>
<div class="catalog">
    <div class="catalog__menu">
        <div class="container">
            <ul class="catalog__menu-wrapper">
                <li class="catalog__menu-item">
                    <a class="catalog__menu_link" href="/posters">
                        <img class="catalog__menu-img-poster" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/poster1.svg" alt="poster">
                        <div>Posters</div>
                    </a>
                </li>
                <li class="catalog__menu-item">
                    <a class="catalog__menu_link" href="/catalog">
                        <img class="catalog__menu-img-products" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/products1.svg" alt="products">
                        <div>All products</div>
                    </a>
                </li>
                <li class="catalog__menu-item"> 
                    <a class="catalog__menu_link" href="/merch">
                        <img class="catalog__menu-img-hoody" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/hoody1.svg" alt="hoody">
                        <div>Merch</div>
                    </a>
                </li>                                
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="catalog__wrapper">
            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'posters',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <a href="<?php echo get_permalink(); ?>" class="catalog-item">
                        <div class="catalog-item__content">
                            <img src="<?php the_field('item_img'); ?>" alt="item" class="catalog-item__img">
                            <div class="catalog-item__subtitle"><?php the_title(); ?></div>
                            <div class="catalog-item__price"><?php the_field('item_price'); ?> €</div>
                        </div>
                    </a>
                    <?php
                }

                wp_reset_postdata($post);
            ?>
        </div>
    </div>  
</div>
<?php 
    get_footer();
?>