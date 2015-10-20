<div class="single-wrapper">
	<div class="single">
		<h2><?php the_title(); ?></h2>
		<div class="single-data">
			<p class="category smaller"><?php
				foreach((get_the_category()) as $category) {
					echo '<a href="'. home_url( '/' ) . $category->slug .'">' . $category->cat_name . '</a> ';
				}?>
			</p>
			<p class="time dimmed smaller"><?php the_time( 'F jS, Y' ); ?></p>
		</div>
		<div class="single-content">
			<?php the_content(); ?>
		</div>
		<?php comments_template(); ?>
	</div>
</div>
