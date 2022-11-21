<?php get_header(); ?>

<header>
    <div class="header-bg">

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

        <div class="header-text">

            <?php
            $destaques = array(
                'post_type' => 'header',
                'posts_per_page' => 1,
            );

            $destaquesheader = new WP_Query($destaques);
            if ($destaquesheader->have_posts()) :

                while ($destaquesheader->have_posts()) : $destaquesheader->the_post();

                    $custom_post_type = get_post_meta($post->ID, 'custom_input', true);
                    $custom_post_type_link = get_post_meta($post->ID, 'custom_input_link', true);
            ?>

                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <a href="<?php echo $custom_post_type_link; ?>">
                        <button type="button" class="btn-header"><?php echo $custom_post_type; ?></button>
                    </a>

            <?php endwhile;
            endif; ?>

        </div>
    </div>

</header>
<main>

    <?php

    get_template_part('template-parts/main', get_post_format());

    get_footer();

    ?>