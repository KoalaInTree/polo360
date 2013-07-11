<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
     <?php wp_head(); ?>
</head>
<body>
	<div class="top">
		<div class="container">
          <?php
          wp_nav_menu(
               array(
                    'menu' => 'mymenu',
                    'menu_class' => 'inline pull-right topnav',
                    'fallback_cb' => '',
                    'menu_id' => 'mymenu',
                    'walker' => new walker_description_menu()
               )    
          ); ?>
        	<div class="logo">
				<a href="/">
					<h1>Polo Theme</h1>
				</a>
			</div>
		</div>
	</div>