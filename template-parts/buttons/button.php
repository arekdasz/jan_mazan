<?php
if (!function_exists('render_custom_button')) {
    function render_custom_button($text, $url)
    {
?>
        <button class="custom-button" onclick="window.location.href='<?php echo esc_url($url); ?>'">
            <?php echo esc_html($text); ?>
        </button>
<?php
    }
}
?>