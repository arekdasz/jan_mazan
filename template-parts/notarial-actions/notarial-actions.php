<?php

require get_template_directory() . '/template-parts/buttons/button.php';
?>

<div class="notarial-container">
    <h2 class="notarial-title">Czynności Notarialne</h2>

    <div class="notarial-actions">
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/nieruchomosci.svg" alt=" NIERUCHOMOŚCI">
            </div>
            <div class="title">Nieruchomości</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/najem.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Najem okazjonalny</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/spolki.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Prawo spółek</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/malzenskie.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Sprawy małżeńskie</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/pelnomocnictwa.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Pełnomocnictwa</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/spadki.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Spadki</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/depozyt.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Depozyt notarialny</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
        <div class="action-item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/poswiadczenie.svg" alt="NIERUCHOMOŚCI">
            </div>
            <div class="title">Poświadczenia</div>
            <?php render_custom_button('WIĘCEJ', '#'); ?>
        </div>
    </div>
</div>