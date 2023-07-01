<section class="item">
    <div class="container">
        <div class="item__wrapper">
            <div class="item__left">
                <img src="<?php the_field('item_img'); ?>" alt="hoody_black">
            </div>
            <div class="item__choice">
                <h1 class="item__title"><?php the_field('item_title'); ?></h1>
                <div class="item__code">Item code: <?php the_field('item_code'); ?></div>
                <div class="item__price"><?php the_field('item_price'); ?> €</div>
                <div class="item__text">Please fill out the form for buying and delivering product.</div>
                <form action="#" class="item__form" id="form">
                    <div class="item__sizes">Size:
                        <div class="item__sizes_wrapper">
                            <input required value="A3" type="radio" id="size1" class="item__sizes_radio" name="choosen_size">
                            <label for="size1">A3</label>
                            <input required value="A2" type="radio" id="size2" class="item__sizes_radio" name="choosen_size">
                            <label for="size1">A2</label>
                        </div>
                    </div>
                    <div class="item__form_wrapper">
                        <div class="item__input">
                            <input required name="name" type="text">
                            <label for="name">Your name</label>
                        </div>
                        <div class="item__input">
                            <input required name="email" type="email">
                            <label for="email">Your email</label>
                        </div>
                        <div class="item__input">
                            <input readonly value="<?php the_field('item_code'); ?>" required name="code" type="text">
                            <label for="code">Item code:</label>
                        </div>
                    </div>
                    <button class="item__btn">Order goods</button>
                </form>
                <div class="item__comp"><?php the_field('item_subdescr'); ?></div>
            </div>
        </div>   
    </div>
    <div class="item__about item__about_plus">
        <div class="container">
            <h2 class="item__about_title">About the product</h2>
            <div class="item__about_text"><?php the_field('item_about'); ?>
            </div>
            <ul class="item__about_list">
                <li class="item__about_list-item"><?php the_field('item_about_li1'); ?></li>
                <li class="item__about_list-item"><?php the_field('item_about_li2'); ?></li>
            </ul>
        </div>
    </div> 
</section> 