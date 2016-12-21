<!doctype html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head();  ?>
</head>
<body <?php body_class(); ?> >

<!-- header logo + menu -->
<header class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <?php minhlong_logo(); ?>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h2 class="caption-title">Công ty TNHH MINH LONG Hà Nội</h2>
                <h4 class="caption-title-h4"><?php echo get_bloginfo('description');?></h4>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3 class="hot-number"><i class="fa fa-phone" aria-hidden="true"></i>0942 266 789</h3>
            </div>
        </div>
    </div>
</header>
<header class="header-bottom">
    <div class="container">
        <div class="row">
            <?php minhlong_menu( 'primary-menu' ); ?>
        </div>
    </div>
</header>
<!-- header logo + menu -->

<?php  if ( is_home() ) { // show home page only ?>
<!-- header slider -->
<div id="owl-home" class="owl-carousel">
    <div class="item"><img src="<?php echo get_template_directory_uri();?>/images/slider1.jpg" alt="Minh Long"></div>
    <div class="item"><img src="<?php echo get_template_directory_uri();?>/images/slider2.jpg" alt="Minh Long"></div>
</div>
<!-- header slider -->
<?php } ?>

<!-- content -->
<div class="main-content">
    <div class="container">