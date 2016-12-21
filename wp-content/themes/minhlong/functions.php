<?php
ini_set("display_errors", 1);

//define('THEME_URL', get_stylesheet_directory());
//define('CORE', THEME_URL . '/core');
//require_once (CORE . '/init.php');

if ( ! isset( $content_width ) ) {
    $content_width = 620;
}

if ( ! function_exists( 'minhlong_theme_setup' ) ) {

    function minhlong_theme_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-formats',
            array(
                'video',
                'image',
                'audio',
                'gallery'
            )
        );

        add_theme_support( 'custom-logo', array(
            'class' => 'logo-header'
        ) );

        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support( 'custom-background', $default_background );

        register_nav_menu ( 'primary-menu', __('Primary Menu', 'minhlong') );

        register_nav_menu ( 'footer-menu', __('Footer Menu', 'minhlong') );

        $sidebar = array(
            'name' => __('Main Sidebar', 'minhlong'),
            'id' => 'main-sidebar',
            'description' => 'Main sidebar for MinhLong theme',
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_sidebar' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action ( 'init', 'minhlong_theme_setup' );
}

/*LOGO*/
if ( ! function_exists( 'minhlong_logo' ) ) {
    function minhlong_logo() {?>
        <?php
            printf(
                '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                get_bloginfo( 'url' ),
                get_bloginfo( 'sitename' ),
                the_custom_logo()
            );
        ?>
    <?php }
}

/*MENU*/
if ( ! function_exists( 'minhlong_menu' ) ) {
    function minhlong_menu( $slug ) {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug,
        );
        wp_nav_menu( $menu );
    }
}

/*PAGINATION*/
if ( ! function_exists( 'minhlong_pagination' ) ) {
    function minhlong_pagination() {
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return '';
        }
        ?>

        <nav class="pagination" role="navigation">
        <?php if ( get_next_post_link() ) : ?>
            <div class="prev"><?php next_posts_link( __('Older Posts', 'minhlong') ); ?></div>
        <?php endif; ?>

        <?php if ( get_previous_post_link() ) : ?>
            <div class="next"><?php previous_posts_link( __('Newer Posts', 'minhlong') ); ?></div>
        <?php endif; ?>

        </nav><?php
    }
}

/*THUMBNAIL*/
if ( ! function_exists( 'minhlong_thumbnail' ) ) {
    function minhlong_thumbnail( $size ) {
        if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
        endif;
    }
}

/*HEADER ENTRY*/
if ( ! function_exists( 'minhlong_entry_header' ) ) {
    function minhlong_entry_header() {
        if ( is_single() ) : ?>

            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
        <?php else : ?>
            <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
            </h2><?php

        endif;
    }
}

/*META ENTRY*/
if( ! function_exists( 'minhlong_entry_meta' ) ) {
    function minhlong_entry_meta() {
        if ( ! is_page() ) :
            echo '<div class="entry-meta">';

            printf( __('<span class="author">Posted by %1$s</span>', 'minhlong'),
                get_the_author() );

            printf( __('<span class="date-published"> at %1$s</span>', 'minhlong'),
                get_the_date() );

            printf( __('<span class="category"> in %1$s</span>', 'minhlong'),
                get_the_category_list( ', ' ) );

            if ( comments_open() ) :
                echo ' <span class="meta-reply">';
                comments_popup_link(
                    __('Leave a comment', 'minhlong'),
                    __('One comment', 'minhlong'),
                    __('% comments', 'minhlong'),
                    __('Read all comments', 'minhlong')
                );
                echo '</span>';
            endif;
            echo '</div>';
        endif;
    }
}

/*READ MORE*/
function minhlong_readmore() {
    return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'minhlong') . '</a>';
}
add_filter( 'excerpt_more', 'minhlong_readmore' );

if ( ! function_exists( 'minhlong_entry_content' ) ) {
    function minhlong_entry_content() {

        if ( ! is_single() ) :
            the_excerpt();
        else :
            the_content();

            $link_pages = array(
                'before' => __('<p>Page:', 'minhlong'),
                'after' => '</p>',
                'nextpagelink'     => __( 'Next page', 'minhlong' ),
                'previouspagelink' => __( 'Previous page', 'minhlong' )
            );
            wp_link_pages( $link_pages );
        endif;

    }
}

if ( ! function_exists( 'minhlong_entry_tag' ) ) {
    function minhlong_entry_tag() {
        if ( has_tag() ) :
            echo '<div class="entry-tag">';
            printf( __('Tagged in %1$s', 'minhlong'), get_the_tag_list( '', ', ' ) );
            echo '</div>';
        endif;
    }
}

/*SIDEBAR*/
$sidebar = array(
    'name' => __('Footer Sidebar', 'minhlong'),
    'id' => 'footer-sidebar',
    'description' => 'Footer sidebar for minhlong theme',
    'class' => 'main-sidebar',
    'before_title' => '<h4 class="h4-title">',
    'after_sidebar' => '</h4>'
);
register_sidebar( $sidebar );

$sidebarHomePage = array(
    'name' => __('Homepage Sidebar', 'minhlong'),
    'id' => 'home-sidebar',
    'description' => 'Homepage sidebar for minhlong theme',
    'class' => 'main-sidebar'
);
register_sidebar( $sidebarHomePage );

/*STYLE AND JS*/
function minhlong_styles() {
    wp_register_style( 'main-style-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 'all' );
    wp_register_style( 'main-style-font', get_template_directory_uri() . '/css/font-awesome.min.css', 'all' );
    wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', 'all' );
    wp_register_style( 'main-style-owl', get_template_directory_uri() . '/owl-carousel/owl.carousel.css', 'all' );
    wp_register_style( 'main-style-owltheme', get_template_directory_uri() . '/owl-carousel/owl.theme.css', 'all' );
    wp_enqueue_style( 'main-style-bootstrap' );
    wp_enqueue_style( 'main-style-font' );
    wp_enqueue_style( 'main-style' );
    wp_enqueue_style( 'main-style-owl' );
    wp_enqueue_style( 'main-style-owltheme' );
}
add_action( 'wp_enqueue_scripts', 'minhlong_styles' );

function minhlong_scripts() {
    wp_enqueue_script(' main-jquery ', get_bloginfo('template_directory').'/jquery-3.1.1.min.js', array('jquery'));
    wp_enqueue_script(' main-slider-owl ', get_bloginfo('template_directory').'/owl-carousel/owl.carousel.min.js', array('jquery'));
    wp_enqueue_script(' main-script ', get_bloginfo('template_directory').'/script.js', array('jquery'));
}
add_action('init', 'minhlong_scripts');

/*ADMIN THEME SETTINGS*/

function theme_settings_page()
{
    ?>
        <div class="wrap">
        <h1>Theme Panel</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields("section");
                do_settings_sections("theme-options");      
                submit_button(); 
            ?>          
        </form>
        </div>
    <?php
}

function handle_file_upload($option)
{
  if(!empty($_FILES["logoFile"]["tmp_name"]))
  {
    $urls = wp_handle_upload($_FILES["logoFile"], array('test_form' => FALSE));
    $temp = $urls["url"];
    return $temp;   
  }
  
  return $option;
}

function demo_file_display()
{
   ?>
        <input type="file" name="logoFile" /> 
        <?php echo get_option('logoFile'); ?>
   <?php
}

function setting_bgmenu_element()
{
    ?>
    <input type="color" name="colorBgMenu" id="colorBgMenu" value="<?php echo get_option('colorBgMenu'); ?>" />
    <?php
}
function setting_bgmenuactive_element()
{
    ?>
    <input type="color" name="acviteBgMenu" id="acviteBgMenu" value="<?php echo get_option('acviteBgMenu'); ?>" />
    <?php
}
function setting_color_element()
{
    ?>
    <input type="color" name="colorElement" id="colorElement" value="<?php echo get_option('colorElement'); ?>" />
    <?php
}
function setting_color_bold_element()
{
    ?>
    <input type="color" name="colorElementBold" id="colorElementBold" value="<?php echo get_option('colorElementBold'); ?>" />
    <?php
}


function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");

    add_settings_field("colorBgMenu", "Background menu", "setting_bgmenu_element", "theme-options", "section");
    add_settings_field("acviteBgMenu", "Menu active", "setting_bgmenuactive_element", "theme-options", "section");
    add_settings_field("colorElement", "Color main", "setting_color_element", "theme-options", "section");
    add_settings_field("colorElementBold", "Color bold main", "setting_color_bold_element", "theme-options", "section");

    register_setting("section", "colorBgMenu");
    register_setting("section", "acviteBgMenu");
    register_setting("section", "colorElement");
    register_setting("section", "colorElementBold");

    add_settings_field("logoFile", "Logo Footer", "demo_file_display", "theme-options", "section");
    register_setting("section", "logoFile", "handle_file_upload");
}

add_action("admin_init", "display_theme_panel_fields");

function add_theme_menu_item()
{
    add_menu_page("Các cài đặt khác", "Cài đặt khác", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");

?>
