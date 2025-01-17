<?php

/**
 * Template Name: nieruchomosci
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        $title = get_field("tytul_bloku");
        $description = get_field("tresc_bloku");
        $bg_color = get_field("kolor_tla");
        $additional_class = ' first-block';
        get_template_part('template-parts/text-blocks/text-block', null, [
            'tytul' => $title,
            'tresc' => $description,
            'kolor_tla' => $bg_color,
            'additional_class' => $additional_class
        ]);
        ?>
        <?php
        $block_count = 3;
        for ($i = 1; $i <= $block_count; $i++) {
            $title = get_field("tytul_bloku_$i");
            $description = get_field("tresc_bloku_$i");
            $bg_color = get_field("kolor_tla_$i");

            get_template_part('template-parts/text-list-blocks/text-list-block', null, [
                'tytul' => $title,
                'tresc' => $description,
                'kolor_tla' => $bg_color,
            ]);
        }
        ?>
        <?php get_template_part('template-parts/contact/contact-section', null, []); ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>