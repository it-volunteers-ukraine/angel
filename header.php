<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>It-volunteers</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <?php 
                            if ( has_custom_logo() ) {
                                echo get_custom_logo();
                            }
                            ?>
                        </div>
                        <div class="logo-text">Архангел Cвітла</div>
                    </div>

                    <div id="headerMenu" class="menu">
                        <nav class="menu-nav">
                            <?php 
                            wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,   
                                'depth'                => 1,                         
                                'items_wrap'           => '<ul id="%1$s" class="menu_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>
                        </nav>

                        <!-- Mobile menu version -->
                        <nav class="mobile-menu-nav">
                            <div class="mobile-menu__bg"></div>
                            <?php 
                            wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,   
                                'depth'                => 0,                         
                                'items_wrap'           => '<ul id="%1$s" class="mobile-menu_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>
                        </nav>
                    </div>

                    <button id="headerMenuToggle" class="menu-toggle" aria-label="Перемикач мобільного меню">
                        <svg width="28" height="21" class="button-menu__burger">
                            <use
                                href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-burger-button">
                            </use>
                        </svg>
                        <svg width="28" height="28" class="button-menu__cross">
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-cross">
                            </use>
                        </svg>
                    </button>

                    <div class="lang-btns">
                        <button>Укр</button>
                        <button>Eng</button>
                    </div>

                    <div class="account">
                        <a href="/" class="small-button">Вхід</a>
                        <a href="/" class="user-icon-button">
                            <svg width="28" height="28" aria-label="Посиланна на реєстрацію">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-user">
                                </use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <section class="sub-menu-section">
            <?php
            $top_items = get_nav_items_of_parent('header_menu', 0);
            foreach($top_items as $top_item) {
                $children = get_nav_items_of_parent('header_menu', $top_item->ID);
                
                foreach ($children as $child) {
                    $current_url = esc_url(get_permalink());
                    if($child->url === $current_url) {
                        echo render_menu_section($children, "sub-menu", $top_item->title);
                    }
                }
            }
            ?>
        </section>