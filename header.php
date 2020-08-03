<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
    <?php wp_head() ?>
</head>
    
<body>
    
    <body <?php body_class(); ?>>

<div class = "rat-background"></div>
        
        
<div class="container_16 clearfix">        
<div class = "rat">
    
    <div class="grid_8 rat-logo">
        <a href="<?php echo get_home_url() ?>"><?php the_custom_logo(); ?></a>
    </div>
   
    <div class = "grid_8 rat-menu">
        <?php wp_nav_menu(array('sort_column' => 'menu_order', 
                                    'menu' => 'composinfo_main', 
                                    'container_class' => 'main-menu', 
                                    'container_id' => 'header', 
                                    'theme_location'  => 'header') ); ?>
    </div> 
    <div class = "clear"></div>
    
    
</div>


 
        
 