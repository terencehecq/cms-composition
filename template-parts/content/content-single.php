<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-10 m-auto'); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header text-center">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content m-auto p-0">
		<img src="<?php the_field('principal_image'); ?>" class="img-fluid">
		<p><?php the_field('intro');?></p>

		<?php
			if( have_rows('content_2') ):

				while ( have_rows('content_2') ) : the_row();

					$content2 = get_sub_field('content');
					$subtitle = get_sub_field('subtitle');
					$image = get_sub_field('image_2');
		?>

		<h3><?php echo $subtitle ?></h3>
		<img src="<?php echo $image ?>">
		<p><?php echo $content2; ?></p>

		<?php	
				endwhile; 
			endif;
		?>	


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_date(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
