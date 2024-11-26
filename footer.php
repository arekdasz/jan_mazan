<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jan_Mazan
 */

?>
<!-- test -->
<footer id="colophon" class="site-footer">
	<h2 class="footer-heading">Dane Kontaktowe</h2>
	<ul class="footer-contact">
		<li class="footer-contact-item">TELEFON: <?php the_field('phone_number'); ?></li>
		<li class="footer-contact-item">KOMÓRKA: <?php the_field('mobile_number'); ?></li>
		<li class="footer-contact-item">E-MAIL: <?php the_field('email_address'); ?></li>
		<li class="footer-contact-item"><?php the_field('address'); ?></li>
	</ul>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>