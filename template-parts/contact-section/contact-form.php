<?php
/*
Template Name: Contact Form
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $consent = isset($_POST['consent']) ? 'Yes' : 'No';

    // Send email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission';
    $headers = 'From: ' . $email;

    $body = "Name: $name\nEmail: $email\nMessage: $message\nConsent: $consent";

    wp_mail($to, $subject, $body, $headers);

    echo '<p>Thank you for your message!</p>';
}
?>

<?php get_header(); ?>

<div class="contact-form-section">
    <form method="post" action="">
        <input type="text" id="name" name="name" required>
        <input type="email" id="email" name="email" required>
        <textarea id="message" name="message" required></textarea>
        <label for="consent">
            <input type="checkbox" id="consent" name="consent">
            Wyrażam zgodę na przetwarzanie moich danych.
        </label>
        <input type="submit" value="Wyślij" class="custom-button">
    </form>
</div>