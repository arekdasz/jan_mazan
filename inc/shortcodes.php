<?php
function about_me_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/About/about-me-text');
    return ob_get_clean();
}
add_shortcode('about_me_section', 'about_me_section_shortcode');
