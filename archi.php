<?php

// template name: archi

get_header();
?>

<?php
$diaporama = get_field('diaporama');
if ($diaporama) { ?>
    <div id="diaporama">
      <?php echo '<pre>'; ?>
        <?php var_dump($diaporama); ?>
      <?php echo '</pre>'; ?>

        <img src="<?php echo esc_url($diaporama['img_dia']['sizes']['medium']); ?>" alt="<?php echo esc_attr($diaporama['img_dia']['alt']); ?>" />
        <div class="content">

        </div>
    </div>
<?php } ?>
