<?php 
    /* Main header template */

    ?> 
    <!DOCTYPE html> 
    <html lang="nl">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?> 
</head>
    <header class="header">
    <a href="http://">Menu</a>
    <a href=""> <img src=" <?php bloginfo('template_url')?> /images/logo.png" alt"some text" class="logo"></a>
    <nav class="clearfix main-navigation-container mobile-menu">
    
    <?php 
        wp_nav_menu($arg = array 
        (
            'menu_class' => 'mean-navigation', 
            theme_location => 'primary'
        )); 
        ?> 
    </nav>
    </header>


