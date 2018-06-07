<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Source+Sans+Pro:300,400,700" rel="stylesheet">
            
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header">
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <a class="logoMobile" href="http://localhost:8888/final-kkart/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobileLogo.png" alt="kelly logo mobile"></a>
    <a class="logoDesktop" href="http://localhost:8888/final-kkart/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="kelly logo desktop"></a>
    <?php
        $navArgs = array(
            "menu" => "nav menu", //this should match the title of the menu name in wp
		);
        wp_nav_menu($navArgs);
    ?>
</div>

                