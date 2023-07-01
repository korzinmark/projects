<?php 
/*
Template Name: О нас
*/
?>

<?php 
    get_header();
?>
<section class="aboutUs">
    <div class="container">
        <h2 class="aboutUs__title">About us</h2>
        <div class="aboutUs__wrapper">
            <p><?php the_field('about_us_descr'); ?></p>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>