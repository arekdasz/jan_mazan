<?php

function about_me_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/about/about-me');
    return ob_get_clean();
}
add_shortcode('about_me_section', 'about_me_section_shortcode');

function notarial_actions_shortcode()
{
    ob_start();
    get_template_part('template-parts/notarial-actions/notarial-actions');
    return ob_get_clean();
}
add_shortcode('notarial_actions', 'notarial_actions_shortcode');

function charge_shortcode()
{
    ob_start();
    get_template_part('template-parts/charge/charge');
    return ob_get_clean();
}
add_shortcode('charge', 'charge_shortcode');

function section_documents_shortcode()
{
    ob_start();
    get_template_part('template-parts/section-documents/section-documents');
    return ob_get_clean();
}
add_shortcode('section_documents', 'section_documents_shortcode');

function contact_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/contact-section/contact-section');
    return ob_get_clean();
}
add_shortcode('contact_section', 'contact_section_shortcode');

function hero_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/hero/hero');
    return ob_get_clean();
}
add_shortcode('hero_section', 'hero_section_shortcode');
