<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php minhlong_thumbnail( 'thumbnail' ); ?>
    </div>
    <header class="entry-header">
        <?php minhlong_entry_header(); ?>
        <?php minhlong_entry_meta() ?>
    </header>
    <div class="entry-content">
        <?php minhlong_entry_content(); ?>
        <?php ( is_single() ? minhlong_entry_tag() : '' ); ?>
    </div>
</article>
