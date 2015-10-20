<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Adam_Boro_Blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', 'single' ); ?>
	
			<div class="posts-navigation">

				<?php if(get_next_post()){ ?>
				<?php $next_post = get_next_post(); ?>
				<a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="card notlink card-next">
					<h2><?php echo $next_post -> post_title; ?></h2>
					<p class="time dimmed smaller"><?php the_time( 'F jS, Y' ); ?></p>
					<p class="excerpt"><?php 
						echo wp_trim_words( $next_post -> post_content, 30, '...' );
					?></p>
				</a>
				<?php }; ?>

				<?php if(get_previous_post()){ ?>
				<?php $previous_post = get_previous_post(); ?>
				<a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="card notlink card-prev">
					<h2><?php echo $previous_post -> post_title; ?></h2>
					<p class="time dimmed smaller"><?php the_time( 'F jS, Y' ); ?></p>
					<p class="excerpt"><?php 
						echo wp_trim_words( $previous_post -> post_content, 30, '...' );
					?></p>
				</a>
				<?php }; ?>

			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
