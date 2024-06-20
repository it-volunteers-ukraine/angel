<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>It-volunteers</title>

    <style>
    .menu_list .sub-menu {
        display: none;
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div class="wrapper">
        <header class="header lock-padding">
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

                        <a href="<?php echo get_locale() === 'uk'? site_url(''): site_url('/en/home/') ?>">
                            <p class="logo-text">
                                <?php the_field('logo_title','option'); ?>
                            </p>
                        </a>
                    </div>

                    <!-- Desktop menu version -->
                    <div id="headerMenu" class="menu">
                        <nav class="menu-nav">
                            <?php 
                            wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,    
                                'menu_id'              => false,    
                                'echo'                 => true,
                                'depth'                => 0,       
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

                    <div class="account">
                        <?php 
                        $isLogin = is_user_logged_in();
                        if ($isLogin):?>
                        <a href="<?php the_field( 'login-link', 'option' ); ?>" class="user-icon-button--login">
                            <svg>
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-login-user">
                                </use>
                            </svg>
                        </a>


                        <?php else:?>
                        <a href="<?php the_field( 'login-link', 'option' ); ?>" class="user-icon-button">
                            <svg width="28" height="28" aria-label="Посиланна на реєстрацію">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-user">
                                </use>
                            </svg>
                        </a>
                        <a href="<?php the_field( 'login-link', 'option' ); ?>" class="small-button">
                            <?php the_field('sign_in_button','option'); ?>
                        </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </header>

        <script>            
        jQuery(document).ready(function($) {
            let currentMenuItemSubmenu = $(
                '.menu_list .current-post-ancestor .sub-menu, .menu_list .current_page_parent  .sub-menu')

            let listItems = null

            if (currentMenuItemSubmenu.length !== 0) {
                listItems = $(currentMenuItemSubmenu).find('li')
            } else {
                currentMenuItemSubmenu = $('.menu_list .current-menu-parent .sub-menu')
                listItems = $(currentMenuItemSubmenu).find('li')

                if (listItems.length === 0) {
                    currentMenuItemSubmenu = $('.menu_list .current_page_item .sub-menu')
                    listItems = $(currentMenuItemSubmenu).find('li')
                }
            }

            if (listItems.length !== 0) {
                $(listItems).appendTo('.sub-menu-section .sub-menu');
                $('.sub-menu-section').show()
            }

        })
        </script>
        <script>
        jQuery(document).ready(function($) {
            const subMenuWrapper = document.querySelector(".sub-menu-wrapper");
            const parentMenu = document.querySelector(
                ".menu_list .current-menu-item, .menu_list .current_page_parent, .menu_list .current-menu-parent, .menu_list .current-post-ancestor"
            );
            const pageTitle = document.querySelector(".page-title");
            const subMenuItem = document.querySelector(
                ".sub-menu-wrapper .sub-menu .current-menu-parent, .sub-menu-wrapper .sub-menu .current_page_parent, .sub-menu-wrapper .sub-menu .current-menu-item"
            )
            const isSingle = <?php echo json_encode(is_single()); ?>;


            if (parentMenu) {
                $(".first-level").text(parentMenu.textContent);
                $(".first-level").attr("href", parentMenu.firstChild.href);
            }
            if (subMenuItem) {
                $(".second-level").text(subMenuItem.firstChild.textContent);
                $(".second-level").attr("href", subMenuItem.firstChild.href);
                if (!isSingle) {
                    $(".second-level").css("color", "#0087d2")
                }
            }

            if (isSingle) {
                const pageTitleContent = `<span class="post-title">${pageTitle.textContent}</span>`;
                $(pageTitleContent).appendTo(subMenuWrapper);
            }
        })
        </script>

        <section class="sub-menu-section" style="display: none">
            <div class="sub-menu-container">
                <div class="sub-menu-wrapper">
                    <ul class="sub-menu">
                    </ul>
                    <a class="first-level">
                    </a>
                    <a class="second-level">
                    </a>
                </div>
            </div>
        </section>