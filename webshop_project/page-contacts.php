<?php 
/*
Template Name: Контакты
*/
?>

<?php 
    get_header();
?>
<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <h1 class="contacts__title"><?php the_field('webshop_name'); ?></h1>
            <div class="contacts__descr">
                Email: <a href="mailto: <?php the_field('contacts_email'); ?>" target="_blank" class="contacts__email"><?php the_field('contacts_email'); ?></a> <br>
                Telegram: <a class="contacts__phone" target="_blank" href="<?php the_field('telegram_link'); ?>"><?php the_field('contacts_telegram'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php 
    get_footer();
?>