<?php

// template name: archi

get_header();
?>

<?php
// 
$diaporama = get_field('diaporama');
$etude = get_field('etude');
$owner = get_field('nghi_stephan');
$tissus = get_field('tissus_et_artisanat');
?>

<?php
if ($diaporama) { ?>
    <div id="diaporama">
        <p><?php echo $diaporama['titre_dia']; ?></p>
        <img src="<?php echo esc_url($diaporama['img_dia']['url']); ?>" alt="<?php echo esc_attr($diaporama['img_dia']['alt']); ?>" />
      <p><?php echo $diaporama['intro_dia']; ?></p>
    </div>
<?php } ?>

<?php
if ($etude) {  ?>
    <div id="etude">
        <p><?php echo $etude['titre_etude']; ?></p>
        <p><?php echo $etude['ss-titre_etude']; ?></p>
        <p><?php echo $etude['wysiwig_etude']; ?></p>
    </div>
<?php } ?>

<?php
if ($owner) {  ?>
    <div id="owner">
        <p><?php echo $owner['titre_ns']; ?></p>
        <p><?php echo $owner['ss-titre_ns']; ?></p>
        <p><?php echo $owner['wysiwig_ns']; ?></p>
    </div>
<?php } ?>

<?php
if ($tissus) {  ?>
    <div id="tissus">
        <p><?php echo $tissus['titre_ns']; ?></p>
        <img src="<?php echo esc_url($tissus['repeater_ta'][0]['img_rep']['url']); ?>" alt="<?php echo esc_attr($tissus['repeater_ta'][0]['img_rep']['alt']); ?>" />
        <p><?php echo $tissus['titre_ta']; ?></p>
        <p><?php echo $tissus['ss-titre_ta']; ?></p>
        <p><?php echo $tissus['wysiwig_ta']; ?></p>
    </div>
<?php } ?>