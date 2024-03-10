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

                    <div class="menu">
                        <nav class="menu__nav">

                            <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>

                        </nav>
                    </div>
                    <div class="lang-btns">
                        <button>Укр</button>
                        <button>Eng</button>
                    </div>

                    <div class="account">
                        <a href="/" class="small-button">Вхід</a>
                    </div>
                </div>
            </div>
        </header>