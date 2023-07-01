   <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__rights_wrapper">
                    <div class="footer__place">Estonia, Tallinn</div>
                    <div class="footer__email">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/email.svg" alt="email" class="footer__icon">
                        <a href="mailto: info@bonebreakershop.com" class="footer__email-link">info@bonebreakershop.com</a>
                    </div>
                    <div class="footer__rights">Copyright © 2022-2023 www.en.bonebreakershop.com<br>All rights reserved.</div>
                </div>
                <div class="footer__social">
                    <a href="https://instagram.com/sergei.petrogradov?igshid=YmMyMTA2M2Y=" class="footer__instagram" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/instagram.svg" alt="instagram"></a>
                    <a href="https://instagram.com/sergei.petrogradov?igshid=YmMyMTA2M2Y=" target="_blank"><div class="footer__instagram_title">Instagram</div></a> 
                </div>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="modal" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__title">Thank you for ordering!</div>
            <div class="modal__descr">We will contact you soon.</div>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/thanks.gif" alt="thank you">
        </div>
    </div>
    <?php 
        wp_footer();
    ?>
</body>
</html>