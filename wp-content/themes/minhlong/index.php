<?php get_header(); ?>
<!--
<div class="content">

    <section id="main-content">
        <?php //if ( have_posts() ) : ?>
        <?php /*
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            minhlong_pagination();
        else :
            get_template_part( 'content', 'none' );
        endif;*/
        ?>

    </section>
    <section id="sidebar">
        <?php //get_sidebar(); ?>
    </section>

</div>
-->

<?php
if(is_active_sidebar('home-sidebar')){
    dynamic_sidebar('home-sidebar');
}
?><?php get_footer(); ?>
