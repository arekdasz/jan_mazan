<?php

/**
 * Szary blok z tekstem
 *
 * @package My_Theme
 */

// Pobierz dane z pól ACF
$tytul = get_field('tytul_bloku');
$tresc = get_field('tresc_bloku');
?>

<div class="grey-text-block">
    <?php if ($tytul): ?>
        <h2 class="grey-text-block-title"><?php echo esc_html($tytul); ?></h2>
    <?php endif; ?>
    <?php if ($tresc): ?>
        <p class="grey-text-block-content"><?php echo esc_html($tresc); ?></p>
    <?php endif; ?>
</div>