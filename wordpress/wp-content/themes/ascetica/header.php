<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * @package Ascetica
 * @subpackage Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<?php if ( hybrid_get_setting( 'ascetica_favicon_url' ) ) { ?>
<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo esc_url( hybrid_get_setting( 'ascetica_favicon_url' ) ); ?>" />
<?php } ?>

<!-- Title -->
<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- WP Head -->
<?php wp_head(); ?>

</head>

<body class="<?php hybrid_body_class(); ?>">

	<?php do_atomic( 'open_body' ); // ascetica_open_body ?>

	<div id="container">
		
		<div class="wrap">

			<?php do_atomic( 'before_header' ); // ascetica_before_header ?>

			<div id="header">
		
				<?php do_atomic( 'open_header' ); // ascetica_open_header ?>
	
					<div id="branding">
						
						<?php ascetica_site_title(); ?>

						<?php hybrid_site_description(); ?>
						
					</div><!-- #branding -->

					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>					
	
					<?php do_atomic( 'header' ); // ascetica_header ?>						
	
				<?php do_atomic( 'close_header' ); // ascetica_close_header ?>
		
			</div><!-- #header -->

			<?php do_atomic( 'after_header' ); // ascetica_after_header ?>
			
			<?php do_atomic( 'before_main' ); // ascetica_before_main ?>
			
			<div id="main">
				
				<?php do_atomic( 'open_main' ); // ascetica_open_main ?>

				<div id="primary" class="site-content">

					<?php if ( is_home() && !is_paged() ) get_template_part( 'featured-content' ); // Loads the featured-content.php template. ?>		