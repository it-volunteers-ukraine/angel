<footer class='footer'>
    <div class="container footer-wrapper">
       <div class="footer-logo-socials-wrapper">
            <div class="footer-logo-wrapper">
                <a class="footer-logo-link" href="<?php echo site_url(''); ?>">
                    <div class=footer-logo-img-wrapper><img class="footer-logo-img" src="<?php the_field('footer_logo','option'); ?>" alt="Логотип" width=42 heigh=56 /></div>
                    <p class="footer-logo-name title-h3">
                        <?php the_field( 'footer_logo_name', 'option' ); ?>
                    </p>
                </a>
                <p class="footer-logo-description">
                    <?php the_field( 'footer_logo_description', 'option' ); ?>
                
                </p>    
            </div>
            
            <div class="socials-wrapper">
                <h6 class="title-h6 footer-heading">
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
                <a href="<?php the_field('address_google_link', 'options' ); ?>"
                            target="_blank">
                                
                    <p class=""><?php the_field('address', 'options' ); ?></p>
            </a>

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
