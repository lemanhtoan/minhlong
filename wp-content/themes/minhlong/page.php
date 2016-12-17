<?php get_header(); ?>

<div class="content">
    <section id="main-content">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // End the loop.
        endwhile;
        ?>
    </section>
    <section id="sidebar">
        <?php get_sidebar(); ?>
    </section>

</div>

<?php get_footer(); ?>