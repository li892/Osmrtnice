<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till content wrapper
 * @package osmrtnice
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=latin-ext" rel="stylesheet"> 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Chrome, Firefox OS and Opera -->
	 <meta name="theme-color" content="#282828" />
	 <!-- Windows Phone -->
	 <meta name="msapplication-navbutton-color" content="#282828" />
	 <!-- iOS Safari -->
	 <meta name="apple-mobile-web-app-capable" content="yes">
	 <metaname="apple-mobile-web-app-status-bar-style"content="black-translucent">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--media css-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/media.css">
	<meta name="google-site-verification" content="jrRSLnejnls5d-VdhARe3OkKWe-h9VqDvW2SLJ5tcFk" />
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	   <!-- Favicon-->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple.png">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-icon.png" sizes="180x180">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon_32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon_16x16.png" sizes="16x16" type="image/png">
		<!--- google --->
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2184241449874460",
    enable_page_level_ads: true
  });
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2184241449874460",
    enable_page_level_ads: true
  });
</script>
	<!--- End google --->
	<?php
	wp_head();
	echo stacker_load_homepage_column_count();
	?>
</head>
<body <?php body_class(); ?>>
	<div id="cssmenu" class="align-center">
	<?php
	wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul>%3$s</ul>',
			'depth'          => 0,
			'fallback_cb'    => 'stacker_fallback_menu',
		)
	);

	?>
</div>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<center><div id="header">
<div id="sitebranding">
<?php if ( function_exists( 'has_site_logo' ) && has_site_logo() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( get_site_logo( 'url' ) ); ?>" class="site-logo" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
		</a>
	<?php endif; // End site logo check. ?>
	<h1 class="sitetitle">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
			   rel="home"><?php bloginfo( 'name' ); ?></a>
	</h1>
	<div class="tagline"><?php bloginfo( 'description' ); ?></div>
	<div id="menu-social" class="menu">
		<?php get_template_part( 'menu', 'social' ); ?>	</div>
    </div><!--End Site Branding -->
</div>
<!--saric banner --->
<br><br>
<div class="saric_728">
	<a href="https://www.facebook.com/vrtlarija.saric.39?fref=ts" target="_blank">
<img src="https://osmrtnice.rip/wp-content/uploads/2017/11/saric_728.jpg"></a>
</div>
<div class="saric_300">
	<a href="https://www.facebook.com/vrtlarija.saric.39?fref=ts" target="_blank">
<img src="https://osmrtnice.rip/wp-content/uploads/2017/11/saric_300_250.jpg"></a>
</div></center>
<!-- End saric banner --->
<!--End Header -->
