</div>
</div>
<!-- content -->

<!-- footer -->
<div class="border-footer"></div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo get_bloginfo( 'url' ); ?>"><img class="logo-footer" src="<?php echo get_template_directory_uri();?>/images/<?php echo get_option('logoFile');?>"/></a>
                <p class="copyright"> ©copyright <?php echo date('Y'); ?> <a href="<?php echo get_bloginfo( 'url' ); ?>"><b class="red"> <?php bloginfo( 'sitename' ); ?></b></a></p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-5">
                <?php
                if(is_active_sidebar('footer-sidebar')){
                    dynamic_sidebar('footer-sidebar');
                }
                ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <h4 class="h4-title">Danh Mục</h4>
                <?php minhlong_menu( 'footer-menu' ); ?>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->
<a href="#" class="scrollup">Scroll</a>
<?php wp_footer(); ?>
</body>
</html>
