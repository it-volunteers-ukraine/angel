<footer class='footer'>
    <div class="container footer-wrapper">
       <div class="footer-logo-socials-wrapper">
            <div>
                <div class="footer-logo-wrapper">
                    <?php 
                            if ( has_custom_logo() ) {
                                echo get_custom_logo();
                            }
                        ?>
                    
                    <a class="footer-logo-link" href="<?php echo site_url(''); ?>">
                        <p class="footer-logo-name title-h3">
                            Архангел світла
                        </p>
                    </a>
                </div>
                <p class="footer-logo-description">
                    <?php the_field( 'footer_logo_description', 'option' ); ?>
                
                </p>    
            </div>
            
            <div class="socials-wrapper">
                <h6 class="title-h6 footer-heading-socials">
                    Соціальні мережі
                </h6>
                <div class="socials">
                    
                </div>
            </div>

       </div>
        <div class="footer-menu-wrapper">
            <h6 class="title-h6 footer-heading">Посилання</h6>

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
        <div class="contacts">
            <h6 class="title-h6 footer-heading">Наші контакти</h6>
               <div class="contacts-item">
                    <a href="mailto:<?php the_field( 'email', 'option' ); ?>"
                            target="_blank">
                        <!-- <span class="icon"
                                style="background: url('<?php bloginfo( 'template_url' ); ?>/assets/images/colorIcon-envelope.svg');"></span> -->
                        <p class=""><?php the_field( 'email', 'option' ); ?></p>
                    </a>
               </div>

                <div class="contacts-item">
                    <a href="<?php the_field('address_google_link', 'options' ); ?>"
                                target="_blank">
                                    
                        <p class=""><?php the_field('address', 'options' ); ?></p>
                    </a>
                </div>
                <div class="contacts-item"><p class=""><?php the_field('work_hours', 'options' ); ?></p></div>
                <div class="contacts-item">
                    <a href="tel:<?php the_field( 'hotline_phone', 'option' ); ?>"
                            target="_blank">
                        <!-- <span class="icon"
                                style="background: url('<?php bloginfo( 'template_url' ); ?>/assets/images/colorIcon-phone.svg');"></span> -->
                        <p>
                            <span class=""><?php the_field( 'hotline_phone', 'option' ); ?></span>
                            <span><?php the_field( 'hotline_phone_text', 'option' ); ?></span>
                        </p>
                    </a>
                    <a href="tel:<?php the_field( 'help_phone', 'option' ); ?>"
                            target="_blank">
                        <p>
                            <span class=""><?php the_field( 'help_phone', 'option' ); ?></span>
                            <span><?php the_field( 'help_phone_text','option' ); ?></span>
                        </p>
                    </a>
                </div>

        </div>
        <div class="contact-us">
            <h6 class="title-h6 footer-heading">Зв’яжіться з нами</h6>
            <a href="/" class="footer-button">Стати партнером</a>
            <a href="/" class="footer-button">Стати волонтером</a>
            <a href="/" class="footer-button">Запит на допомогу</a>
        </div>


        
    </div>
    
</footer>
<?php wp_footer(); ?>  
</body>
</html>
