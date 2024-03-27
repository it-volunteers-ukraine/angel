<footer class='footer'>
    <div class="container">
       <div class="footer-wrapper">
            <div class="footer-logo-socials-wrapper">
                    <div class="footer-logo-description-wrapper">
                        <div class="footer-logo">
                            <?php 
                                    if ( has_custom_logo() ) {
                                        echo get_custom_logo();
                                    }
                                ?>
                            
                            <a class="footer-logo-link" href="<?php echo site_url(''); ?>">
                                <p class="footer-logo-name title-h3">
                                    <?php the_field('logo_title','option'); ?>
                                </p>
                            </a>
                        </div>
                        <p class="footer-logo-description">
                            <?php the_field( 'footer_logo_description', 'option' ); ?>
                        
                        </p>    
                    </div>
                    
                    <div class="socials-wrapper">
                        <h2 class="title-h6 footer-heading footer-heading-socials">
                            <?php the_field( 'footer_title_1', 'option' ); ?>
                        </h2>
                        <ul class="socials">
                            <?php if ( get_field( 'instagram', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" href="<?php the_field( 'instagram', 'option' ); ?>"
                                        target="_blank">
                                    
                                            <svg width="19" height="19">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-instagram"></use>
                                            </svg>
                                    
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ( get_field( 'facebook', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" href="<?php the_field( 'facebook', 'option' ); ?>"
                                        target="_blank">
                                        
                                            <svg width="11" height="19">
                                            <use  href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-facebook"></use>
                                            </svg>
                                
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ( get_field( 'twitter', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" href="<?php the_field( 'twitter', 'option' ); ?>"
                                        target="_blank">
                                        
                                            <svg width="20" height="18">
                                            <use  href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-twitter-x"></use>
                                            </svg>
                                
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ( get_field( 'linkedin', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" href="<?php the_field( 'linkedin', 'option' ); ?>"
                                        target="_blank">
                                    
                                            <svg width="20.5" height="20.5">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-linkedIn"></use>
                                            </svg>
                                    
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ( get_field( 'telegram', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" href="<?php the_field( 'telegram', 'option' ); ?>"
                                        target="_blank">
                                    
                                            <svg width="20.34" height="17.78">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-telegram"></use>
                                            </svg>
                                    
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ( get_field( 'youtube', 'option' ) ) { ?>
                                <li class="social-item">
                                    <a class="social-link" class='' href="<?php the_field( 'youtube', 'option' ); ?>"
                                        target="_blank">
                                    
                                            <svg width="21px" height="15px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-youtube"></use>
                                            </svg>
                                    
                                    </a>
                                </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
            </div>
            <div class="footer-menu-wrapper">
                <div class="footer-menu-heading-wrapper">
                    <h2 class="title-h6 footer-heading"><?php the_field( 'footer_title_2', 'option' ); ?></h2>
                    <div class="footer-menu-heading-icon-wrapper">
                        <svg class="footer-menu-heading-icon" width="13.82" height="8">
                            <use
                                href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-arrow">
                            </use>
                        </svg>
                    </div>
                </div>

                <div class="footer-menu-list-wrapper">
                    <?php $menu = wp_nav_menu( [
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => "menu-list",
                                'menu_id'        => false,
                                'echo'           => true,
                                'items_wrap'     => '<ul id="%1$s" %2$s">%3$s</ul>',
                            ] );
                    if($menu) : ?>

                        <nav>
                            <?php echo $menu ?>	
                        </nav>

                    <?php endif; ?>    
                </div>
            </div>
            <div class="contacts">
                <h2 class="title-h6 footer-heading footer-heading-not-socials"><?php the_field( 'footer_title_3', 'option' ); ?></h2>
                <div class="contacts-item">
                    <a class="contacts-link" href="mailto:<?php the_field( 'email', 'option' ); ?>"
                            target="_blank">
                        <span class="contact-icon"> 
                            <svg width="18.78" height="15.09">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-envelope"></use>
                            </svg>
                        </span>
                        <p class="contacts-link-item"><?php the_field( 'email', 'option' ); ?></p>
                    </a>
                </div>

                <div class="contacts-item">
                    <a class="contacts-link" href="<?php the_field('address_google_link', 'options' ); ?>"
                                target="_blank">
                        <span class="contact-icon"> 
                            <svg width="17.01" height="20.56">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-location"></use>
                            </svg>
                        </span>
                        <p class="contacts-link-item"><?php the_field('address', 'options' ); ?></p>
                    </a>
                </div>
                <div class="contacts-item">
                    <div class="contacts-link">
                        <span class="contact-icon"> 
                            <svg width="18.5" height="18.5">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-clock"></use>
                            </svg>
                        </span>
                        <p class=""><?php the_field('work_hours', 'options' ); ?></p>
                    </div>
                </div>
                <div class="contacts-item">
                    <div class="contacts-link">
                        <span class="contact-icon"> 
                            <svg width="18.5" height="18.5">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-sprite.svg#icon-phone"></use>
                            </svg>
                        </span>
                        <div class="contacts-phones">
                            <a href="tel:<?php the_field( 'hotline_phone', 'option' ); ?>"
                                    target="_blank">
                                
                                <p class="contacts-link-item">
                                    <span><?php the_field( 'hotline_phone', 'option' ); ?></span>
                                    <span><?php the_field( 'hotline_phone_text', 'option' ); ?></span>
                                </p>
                            </a>
                            <a href="tel:<?php the_field( 'help_phone', 'option' ); ?>"
                                    target="_blank">
                                <p class="contacts-link-item">
                                    <span><?php the_field( 'help_phone', 'option' ); ?></span>
                                    <span><?php the_field( 'help_phone_text','option' ); ?></span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-us">
                <h2 class="title-h6 footer-heading footer-heading-not-socials"><?php the_field( 'footer_title_4', 'option' ); ?></h2>
                <?php if ( get_field( 'footer_btn_1_text', 'option' ) ) { ?>
                    <a href="<?php the_field( 'footer_btn_1_link', 'option' ); ?>" class="footer-button"><?php the_field( 'footer_btn_1_text','option' ); ?></a>
                <?php } ?>
                <?php if ( get_field( 'footer_btn_2_text', 'option' ) ) { ?>
                    <a href="<?php the_field( 'footer_btn_2_link', 'option' ); ?>" class="footer-button"><?php the_field( 'footer_btn_2_text','option' ); ?></a>
                <?php } ?>
                <?php if ( get_field( 'footer_btn_3_text', 'option' ) ) { ?>
                    <a href="<?php the_field( 'footer_btn_3_link', 'option' ); ?>" class="footer-button"><?php the_field( 'footer_btn_3_text','option' ); ?></a>
                <?php } ?>
            </div>
       </div>
       <div class="footer-copyright-wrapper">
                <p class="footer-copyright-text">© By using this website, you agree to the Terms of Service and Privacy Policy  </p>
            </div>

    </div>
      
</footer>
<?php wp_footer(); ?>  
</body>
</html>
