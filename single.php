<?php

/* 
    Template name: Single_page
*/

get_header();
?>
	<div class="bg_noir"></div>

	<section class="container blog_single col-8">
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="back_to_list d-flex justify-content-between col-12">
			<a href="/wp-challenge/blog/">Retour</a>
			<p><?php the_date(); ?></p>
		</div>

		<article class="article_single col-12">


			<h1><?php the_title(); ?></h1>
			<img src="<?php the_field('principal_image'); ?>" class="img-fluid">
			<p><?php the_field('intro');?></p>

			<?php
				if( have_rows('content_2') ): while ( have_rows('content_2') ) : the_row();

					if( get_row_layout() == 'content' ): $content2 = the_sub_field('wysiwyg');
					elseif( get_row_layout() == 'subtitle' ): $subtitle = get_sub_field('subtitle');
					elseif( get_row_layout() == 'image' ): $image = get_sub_field('image_2');
			?>

			<h2><?php echo $subtitle ?></h2>
			<img src="<?php echo $image ?>" class="img-fluid">
			<p><?php echo $content2; ?></p>

			<?php	
						endif;
					endwhile; 
				endif;
			?>	


		<?php endwhile; ?>

		<a href="/wp-challenge/blog/" class="back_bottom">Retour</a>

		</article>
	</section><!-- #primary -->

<?php
get_footer();
