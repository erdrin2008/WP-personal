<?php get_header(); ?>

<div class="container">
    <h2>Welcome to Auto Car Painting</h2>
    <p>Transform your vehicle with our premium car painting services. We offer custom designs, high-quality finishes, and professional care to make your car stand out.</p>
    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>" class="btn">View Services</a>
</div>

<?php get_footer(); ?>