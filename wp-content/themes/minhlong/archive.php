<?php get_header(); ?>

<div class="content">

    <section id="main-content">
        <div class="archive-title">
            <h2>
                <?php
                if ( is_tag() ) :
                    printf( __('Posts Tagged: %1$s','minhlong'), single_tag_title( '', false ) );
                elseif ( is_category() ) :
                    printf( __('Posts Categorized: %1$s','minhlong'), single_cat_title( '', false ) );
                elseif ( is_day() ) :
                    printf( __('Daily Archives: %1$s','minhlong'), get_the_time('l, F j, Y') );
                elseif ( is_month() ) :
                    printf( __('Monthly Archives: %1$s','minhlong'), get_the_time('F Y') );
                elseif ( is_year() ) :
                    printf( __('Yearly Archives: %1$s','minhlong'), get_the_time('Y') );
                endif;
                ?>
            </h2>
        </div>

        <?php if ( is_tag() || is_category() ) : ?>
            <div class="archive-description">
                <?php echo term_description(); ?>
            </div>
        <?php endif; ?>

        <?php if ( have_posts() ) : ?>
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
            endwhile;
            minhlong_pagination();
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
