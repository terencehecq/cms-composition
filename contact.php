<?php
/*
Template Name: Contact
*/
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>contact</title>
    </head>
    <body>

        <!-- header  -->
    <div class="row">
        <div class="col-lg-2 hidden-sm">
        </div>
        <div class="col-lg-10 col-sm-14">
            <?php get_header(); ?>
        </div>
        <div class="col-lg-2 hidden-sm">
        </div>
    </div>
        

        <!-- contact -->

        <div class="row">
        <div class="col-lg-2 hidden-sm">
            <hr class="contact-hr-white">
        </div>
        <div class="col-lg-4 col-sm">
            <h2 class="text-white">Contact</h2>
        </div>
        <div class="col-lg-6 col-sm">
            <div class="col-lg">
                <ul class="text-white">
                    <li>Route de hamoir, 87 - 4500 Huy</li>
                    <li><a mailto:"info@meublescomposition.be">info@meublescomposition.be</a></li>
                    <li>+32 (0)85 21 52 38</li>
                </ul>
            </div>
            <div class="col-lg">
                <ul class="text-white">
                    <li>Horaires</li>
                    <li>Lundi > dimanche: (fermé le mardi) </li>
                    <li>10h > 18h30</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 hidden-sm"></div>
        </div>

        <!-- map  -->

        <div class="row row pt-5 mt-5" id="contact-bg-map">
            <div class="col-lg-2 hidden-sm"></div>
            <div class="col-lg-4 col-sm-0">
                <h3 class="text-white">Intinéraire -></h3>
            </div>
            <div class="col-lg-6 col-sm-14">
                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                src="https://www.openstreetmap.org/export/embed.html?bbox=5.215587615966797%2C50.47935662596124%2C5.3470802307128915%2C50.53798091723641&amp;layer=mapnik" 
                style="border: 1px solid black"></iframe><br/>
            </div>
            <div class="col-lg-2 hidden-sm"></div>
        </div>
        

        <!-- formulaire  -->

        <div class="row pt-5 mt-5" id="contact-bg-form">
        <div class="col-lg-2"></div>
            <div class="col-lg-4 py-5 my-5">
                <h2 class="text-black">Une question, une demande d'offre ?</h2>
                <p class="text-black">Formulaire de contact</p>
            </div>

            <div class="col-lg-6 py-5 my-5 center-block">
                <?php  echo do_shortcode( '[contact-form-7 id="13" title="Formulaire de contact"]' ); ?>
            </div>
        </div>
        <div class="col-lg-2"></div>

        <!-- promo  -->

        <div class="row">
            <div class="col">
                <?php // ici on importe la partie avec la pub ?>
            </div>
        </div>
        
        <!-- footer  -->

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
                <?php get_footer(); ?>
            </div>
            <div class="col-lg-2"></div>
        </div>

    </body>
</html>

