<?php get_header(); ?>

<div class="content">
    <section class="img-intro">
        <img src="<?php echo get_template_directory_uri();?>/images/intro/intro<?php echo rand(1,3); ?>.jpg" alt="Minh Long" />
    </section>
    <section id="main-content">
        <?php if ( have_posts() ) : ?>
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                get_template_part( 'author-bio' );
                comments_template();
            endwhile;
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>

    </section>
    <section id="sidebar">
        <?php get_sidebar(); ?>
    </section>

</div>

<?php get_footer(); ?>
