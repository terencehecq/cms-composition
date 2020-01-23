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
    <section id="diaporama" class="container-fluid">
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
    <section id="etude" class="container-fluid">
        <div class="etude-bg"></div>
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <p class="lead font-weight-bold"><?php echo $etude['titre_etude']; ?></p>
                <p><?php echo $etude['ss-titre_etude']; ?></p>
                <p><?php echo $etude['wysiwig_etude']; ?></p>
            </div>
            <div class="col-md-5 offset-md-1 repeater py-5 pl-5">
                <?php
                    $repEtude = $etude['repeater_etude'];
                    foreach ($repEtude as $key => $value) { ?>
                        <p class="repeater-etude"><?php echo $value['texte_rep']; ?></p>
                    <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
if ($owner) {  ?>
    <section id="owner" class="container-fluid">
        <div class="row">
            <div class="col-md-5 offset-md-1 pr-0">
                <img class="img-fluid ns-img" src="<?php echo esc_url($owner['img_ns']['url']); ?>"/>
            </div>
            <div class="col-md-5 offset-md-1 pt-5 ns-txt">
                <p class="lead font-weight-bold"><?php echo $owner['titre_ns']; ?></p>
                <p class="font-weight-bold"><?php echo $owner['ss-titre_ns']; ?></p>
                <?php echo $owner['wysiwig_ns']; ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
if ($tissus) {  ?>
    <section id="tissus" class="container">
        <div class="row my-5">
            <div class="col-md-8 offset-md-3 tissus-txt">
                <img class="img-fluid" src="<?php echo esc_url($tissus['repeater_ta'][0]['img_rep']['url']); ?>" alt="<?php echo esc_attr($tissus['repeater_ta'][0]['img_rep']['alt']); ?>" />
                <p class="lead font-weight-bold pt-5"><?php echo $tissus['titre_ta']; ?></p>
                <p class="font-weight-bold"><?php echo $tissus['ss-titre_ta']; ?></p>
                <?php echo $tissus['wysiwig_ta']; ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php

get_footer();
