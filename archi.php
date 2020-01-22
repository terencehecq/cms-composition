<?php

// template name: archi

get_header();
?>

<?php
$diaporama = get_field('diaporama');
$etude = get_field('etude');
$owner = get_field('nghi_stephan');
$tissus = get_field('tissus_et_artisanat');
?>

<?php
if ($diaporama) { ?>
    <section id="diaporama" class="container">
        <div class="diapo-bg"></div>
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <h1 class="lead text-white diapo-title"><?php echo $diaporama['titre_dia']; ?></h1>
                <img class="img-fluid diapo-img" src="<?php echo esc_url($diaporama['img_dia']['url']); ?>" alt="<?php echo esc_attr($diaporama['img_dia']['alt']); ?>" />
                <!-- <p class="diapo-title"><?php echo $diaporama['intro_dia']; ?></p> -->
            </div>
        </div>
    </section>
<?php } ?>

<?php
if ($etude) {  ?>
    <section id="etude" class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <p class="lead font-weight-bold"><?php echo $etude['titre_etude']; ?></p>
                <p><?php echo $etude['ss-titre_etude']; ?></p>
                <p><?php echo $etude['wysiwig_etude']; ?></p>
            </div>
            <div class="col-md-4 offset-md-1">
                <?php
                    $repEtude = $etude['repeater_etude'];
                    foreach ($repEtude as $key => $value) { ?>
                        <p><?php echo $value['texte_rep']; ?></p>
                    <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
if ($owner) {  ?>
    <section id="owner" class="container">
        <p><?php echo $owner['titre_ns']; ?></p>
        <p><?php echo $owner['ss-titre_ns']; ?></p>
        <p><?php echo $owner['wysiwig_ns']; ?></p>
    </section>
<?php } ?>

<?php
if ($tissus) {  ?>
    <section id="tissus" class="container">
        <p><?php echo $tissus['titre_ns']; ?></p>
        <img class="img-fluid" src="<?php echo esc_url($tissus['repeater_ta'][0]['img_rep']['url']); ?>" alt="<?php echo esc_attr($tissus['repeater_ta'][0]['img_rep']['alt']); ?>" />
        <p><?php echo $tissus['titre_ta']; ?></p>
        <p><?php echo $tissus['ss-titre_ta']; ?></p>
        <p><?php echo $tissus['wysiwig_ta']; ?></p>
    </section>
<?php } ?>

<?php

get_footer();
