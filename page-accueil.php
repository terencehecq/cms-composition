
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
/* 
Template Name: Page Accueil
*/
$image1 = get_field("image1");
$image2 = get_field("image2");
$imageIntro = get_field("image_intro1");
?>
<!--Pour aller chercher le header--> 
<?php get_header(); ?> 
<?php the_title(); ?>




<section class="d-flex row banner">
    <div class="d-flex flex-row container-fluid no-gutters">
        <img src="<?php echo $image1['url']; ?>" class="col-6 img1">
        <img src="<?php echo $image2['url']; ?>" class="col-6" >
    </div>
    <div class="titres d-flex flex-row container-fluid justify-content-around">
        <div class="titre1 bg-white p-5 mb-3">
            <?php the_field('titre1'); ?>
        </div>
        <div class="titre2  text-light p-5 mb-3">
            <?php the_field('titre2'); ?>
        </div>

    </div>

</section>

<section class="Introduction"><!--attention changer couleur après-->
    <div class="txtETtitre bg-dark">
        <div class="titre">
            <?php the_field('titre_intro1'); ?>
        </div>
        <div class="txt">
            <?php the_field('texte_intro1'); ?>
        </div>
    </div>

    <div class="img_test">
        <img src="<?php echo $imageIntro['url']; ?>">
    </div>
</section>
<!--Pour aller chercher le footer--> 
<?php get_footer(); ?> 