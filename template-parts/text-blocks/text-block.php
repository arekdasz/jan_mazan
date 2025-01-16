<?php

/**
 * Bloki z tekstem szare/niebieskie
 *
 * @package My_Theme
 */

$tytul = $args['tytul'] ?? '';
$tresc = $args['tresc'] ?? '';
$bg_color = $args['kolor_tla'] ?? 'szare';
$additional_class = $args['additional_class'] ?? '';
$klasa_tla = ($bg_color === 'niebieski') ? 'blue-background' : 'grey-background';
?>

<div class="text-block <?php echo esc_attr($klasa_tla . $additional_class); ?>">
    <div class="text-block-content">
        <?php if ($tytul): ?>
            <h2 class="text-block-title"><?php echo esc_html($tytul); ?></h2>
        <?php endif; ?>
        <?php if ($tresc): ?>
            <p class="text-block-content"><?php echo esc_html($tresc); ?></p>
        <?php endif; ?>
    </div>
</div>