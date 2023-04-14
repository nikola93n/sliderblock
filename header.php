<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta chartset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="header bg-primary">
    <div class="container">
        <div class="row">
            <header class="d-flex justify-content-between align-items-center">
                <a href="<?php site_url(); ?>"><h1 class="logo">Nero <span>Block</span></h1></a>
                <nav class="py-2">    
                    <?php  
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenu',
                        ));
                    ?>

                    <!-- <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                </nav>
            </header>
        </div>
    </div>
</section>