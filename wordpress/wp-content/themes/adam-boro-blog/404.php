<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Adam_Boro_Blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'adam-boro-blog' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>It looks like nothing was found at this location. <span id="link-msg">But check this link out:</span></p>

					<a id="link-404" href="" target="_blank" class="card notlink">
						<h2> </h2>
						<p class="excerpt"> </p>
					</a>

					<script>
						var link = document.getElementById('link-404');
						var link_msg = document.getElementById('link-msg');

						var request = new XMLHttpRequest();
						request.open('GET', 'http://adamboro.com/links/wp-json/posts', true);
						request.onload = function() {
						  if (request.status >= 200 && request.status < 400) {
						    // Success!
						    var data = JSON.parse(request.responseText);
						    console.log(data)

						    var item = data[Math.floor(Math.random()*data.length)];
						    console.log(item)

							link.href = item.acf.link;
							link.children[0].innerHTML = item.title;
							link.children[1].innerHTML = item.excerpt;

						    link.style.display = 'inline-block'
						    link_msg.style.display = 'initial'

						  } else {
						    // We reached our target server, but it returned an error
						  }
						};
						request.onerror = function() {
						  // There was a connection error of some sort
						};
						request.send();

					</script>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
