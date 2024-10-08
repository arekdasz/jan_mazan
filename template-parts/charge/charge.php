<?php
// Pobierz wartości z ACF
$title = get_field('charge_title');
$content = get_field('charge_content');
// $button_text = get_field('button_text');
// $button_url = get_field('button_url');
?>

<div class="charge-section">
    <h2><?php echo esc_html($title); ?></h2>
    <p><?php echo esc_html($content); ?></p>
    <?php
    if (function_exists('render_custom_button')) {
        render_custom_button('WIĘCEJ', '#');
    }
    ?>
</div>
