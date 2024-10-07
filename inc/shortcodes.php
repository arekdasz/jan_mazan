<<<<<<< Updated upstream
<?php

function about_me_section_shortcode()
{
    ob_start();
    get_template_part('template-parts/About/about-me-text');
    return ob_get_clean();
}
add_shortcode('about_me_section', 'about_me_section_shortcode');
<<<<<<< HEAD
=======
<?php

// function about_me_section_shortcode()
// {
//     ob_start();
//     get_template_part('template-parts/About/about-me-text');
//     return ob_get_clean();
// }
// add_shortcode('about_me_section', 'about_me_section_shortcode');


function notarial_actions_shortcode()
{
    ob_start();
    get_template_part('template-parts/notarial-actions/notarial-actions');
    return ob_get_clean();
}
add_shortcode('notarial_actions', 'notarial_actions_shortcode');
>>>>>>> Stashed changes
=======


function notarial_actions_shortcode()
{
    ob_start();
    get_template_part('template-parts/notarial-actions/notarial-actions');
    return ob_get_clean();
}
add_shortcode('notarial_actions', 'notarial_actions_shortcode');
>>>>>>> 24d26882094ae9e2f5f80f46cb35df32cd974ef9
