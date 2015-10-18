<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Adam_Boro_Blog
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="card">
					<h2><?php the_title(); ?></h2>
					<p class="category smaller"><?php
						foreach((get_the_category()) as $category) {
							echo $category->cat_name . ' ';
						}?>
					</p>
					<p class="time dimmed smaller"><?php the_time( 'F jS, Y' ); ?></p>
					<p class="excerpt"><?php the_excerpt(); ?></p>
				</a>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
