<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adam_Boro_Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class( $body_width_class ); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<h1 class="site-title serif"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description">
				This site is where I keep track of the stuff I learn as a side effect of coding.
				<br>
				<br class="divider">
				I also <a href="http://adamboro.com/links/" target="_blank">collect links</a> and am <a href="mailto:adam@adamboro.com&subject=I have work for you.">available for work</a>. Check out <a href="http://adamboro.com/" target="_blank">my portfolio</a>.
			</p>
		</div><!-- .site-branding -->

		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
		</form>

		<div class="categories-subtitle">Categories:</div>
		<div class="categories">
		<?php
			$categories = get_categories();
			foreach ($categories as $category) {
				echo '<a href="' . home_url( '/' ) . $category->slug . '">' . $category->cat_name . '</a><br>';
			}
		?>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
