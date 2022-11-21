</main>
<footer>
    <nav id="nav" class="nav-menu ca-footer">
        <?php
        $theme_location = 'primary';
        create_bootstrap_menu($theme_location);
        ?>
    </nav>
    <hr class="hr-footer">
    <div class="rs-footer">
            <a href="#"><img class="svg-footer" src="<?php bloginfo('template_url'); ?>/assets/images/icons/10502791911556105704.svg" alt=""></a>
            <a href="#"><img class="svg-footer" src="<?php bloginfo('template_url'); ?>/assets/images/icons/13880855881556105710.svg" alt=""></a>
            <a href="#"><img class="svg-footer" src="<?php bloginfo('template_url'); ?>/assets/images/icons/9920775951556105709.svg" alt=""></a>
    </div>
    <div class="content-footer-copy">
        <span>Copyright © <strong><?php bloginfo('name'); ?></strong></span>
        <span class="webbideias">Desenvolvido por <a href="https://www.instagram.com/webbideias/">@webbideias</a></span>
    </div>
</footer>
</body>

</html>
<?php wp_footer(); ?>