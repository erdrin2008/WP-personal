<?php
/*
Template Name: Order
*/
get_header(); ?>
<main>
    <h1>Place Your Order</h1>
    <p>Ready to start your car painting project? Fill out our order form below or contact us directly.</p>
    <p><strong>Note:</strong> This is a demo form for your school project.</p>
    <form>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Your Name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Your Email"><br>
        <label for="details">Project Details:</label><br>
        <textarea id="details" name="details" placeholder="Describe your painting needs"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</main>
<?php get_footer(); ?>