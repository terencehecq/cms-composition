<?php 
/* 
    Template name: Page blog
*/

get_header();
?>
<h2>Architecte d'intérieur en action</h2>

<div class="container-fluid col-9 mx-auto d-flex flex-wrap justify-content-around">

<?php
if( have_rows('article') ): while( have_rows('article') ): the_row(); 

// vars
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$intern_image = get_sub_field('intern_image');
$subtitle = get_sub_field('subtitle');
$subcontent = get_sub_field('subcontent');
$date = getdate();

?>

    <div class="card article_preview col-5 m-3 border-0">

        <img class="card-img-top" src="<?php echo $image; ?>" >
        <h3><?php echo $title; ?></h3>

        <!-- <?php if( $content ): ?>
            <p><?php echo $content; ?></p>
        <?php endif; ?> -->


    </div>

    <?php endwhile; ?>


    <?php endif; ?>

</div>

<?php get_footer(); ?>