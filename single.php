<?php

/* 
    Template name: Single_page
*/

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container m-auto p-0">
				<div class="article_infos">
					<a href="/wp-challenge/blog/">Retour</a>
					<p><?php the_date(); ?></p>
				</div>

				<h2><?php the_title(); ?></h2>
				<img src="<?php the_field('principal_image'); ?>" class="img-fluid">
				<p><?php the_field('intro');?></p>

				<?php
					if( have_rows('content_2') ):

						while ( have_rows('content_2') ) : the_row();

						if( get_row_layout() == 'content' ): $content2 = the_sub_field('wysiwyg');
						elseif( get_row_layout() == 'subtitle' ): $subtitle = get_sub_field('subtitle');
						elseif( get_row_layout() == 'image' ): $image = get_sub_field('image_2');
				?>

				<h3><?php echo $subtitle ?></h3>
				<img src="<?php echo $image ?>">
				<p><?php echo $content2; ?></p>

				<?php	
						endif;
						endwhile; 
					endif;
				?>	


			</div>

<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
