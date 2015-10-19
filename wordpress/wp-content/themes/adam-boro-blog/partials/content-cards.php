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