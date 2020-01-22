<?php
/*
	* Template name : blog
 */

get_header();
?>


	<div class="bg_noir"></div>

	<section class="container blog_posts col-10">
		<h2>Architecte d'intérieur en action</h2>
		<main id="main" class="site-main d-flex flex-wrap m-auto p-0">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>

			<article id="post-<?php the_ID(); ?>" class="col-6">
				<a href="<?php the_permalink() ?>">
					<div class="article_image">
						<img src="<?php the_field('principal_image'); ?>" class="img-fluid d-block">
					</div>
					
					<h3><?php the_title() ?></h3>
				</a>
				<p class="article_date"><?php echo get_the_date(); ?></p>
			</article>


		<?php endwhile; endif; ?>
		</main>

		<div class="blog_pagination text-center">
			<?php next_posts_link(); ?>
			<?php previous_posts_link(); ?>
		</div>
	</section>

<?php
get_footer();
?>