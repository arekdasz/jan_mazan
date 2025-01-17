<?php

/**
 * Bloki z tekstem szare/niebieskie
 *
 * @package My_Theme
 */

$tytul = $args['tytul'] ?? '';
$tresc = $args['tresc'] ?? '';
$bg_color = $args['kolor_tla'] ?? 'szare';
$klasa_tla = ($bg_color === 'niebieski') ? 'background-blue' : 'background-grey';
?>

<div class="text-list-block <?php echo esc_attr($klasa_tla . ' '); ?>">
    <div class="text-list-block__content">
        <?php if ($tytul): ?>
            <h2 class="text-list-block__title"><?php echo esc_html($tytul); ?></h2>
        <?php endif; ?>
        <?php if ($tresc): ?>
            <div class="text-list-block__content">
                <?php echo wp_kses_post($tresc); ?>
            </div>
        <?php endif; ?>
    </div>
</div>