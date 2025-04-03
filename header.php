<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php  
  $ds_classes = array("ds-class", "my-ds-class"); 
  
  if (!is_front_page()) {
      $ds_classes[] = "no-ds-class"; 
  }
?>

<body <?php body_class($ds_classes); ?>>

<nav id="site-navigation" class="main-navigation">
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'primary-menu',
    )); ?>
</nav>


<h1>My header</h1>



<?php wp_footer(); ?>
</body>
</html>
