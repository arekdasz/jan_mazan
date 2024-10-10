<?php
if (function_exists('get_field')) :
    $title = get_field('contact_section_title');
    $description = get_field('contact_section_description');
    $button_text = get_field('contact_section_button_text');
    $button_url = get_field('contact_section_button_url');
    $image_url = get_field('contact_section_image');
?>

    <div class="contact-text">
        <h2><?php echo esc_html($title); ?></h2>
        <p><?php echo esc_html($description); ?></p>
        <?php if ($image_url): ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>"> <!-- Add the image here -->
        <?php endif; ?>
        <?php render_custom_button(esc_html($button_text), esc_url($button_url)); ?>
    </div>

<?php endif; ?>