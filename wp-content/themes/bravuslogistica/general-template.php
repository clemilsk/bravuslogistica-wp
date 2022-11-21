<?php 
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>

<header>
        <nav id="nav" class="nav-menu">
          
                <?php 
                if( has_custom_logo() ){
                    the_custom_logo(); 
                }else{ ?>
                    <a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
                <?php } ?>
           
            <div class="menu-mobile">
                <i class="material-icons" id="menuMobile">menu</i>
            </div>
            <?php
            $theme_location = 'primary';
            create_bootstrap_menu($theme_location);
            ?>
        </nav>
        
</header>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<main>

    <?php


    
    get_footer();
    ?>