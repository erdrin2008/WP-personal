<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

    // ------- Create Nav Menu --------
$automobile_hub_menuname = 'Main Menus';
$automobile_hub_bpmenulocation = 'primary-menu';
$automobile_hub_menu_exists = wp_get_nav_menu_object($automobile_hub_menuname);

if (!$automobile_hub_menu_exists) {
    $automobile_hub_menu_id = wp_create_nav_menu($automobile_hub_menuname);

    // Create Home Page
    $automobile_hub_home_title = 'Home';
    $automobile_hub_home = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $automobile_hub_home_id = wp_insert_post($automobile_hub_home);

    // Assign Home Page Template
    add_post_meta($automobile_hub_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $automobile_hub_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Home', 'car-paint-job'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $automobile_hub_about_title = 'About Us';
    $automobile_hub_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_about = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_about_title,
        'post_content' => $automobile_hub_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $automobile_hub_about_id = wp_insert_post($automobile_hub_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'car-paint-job'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $automobile_hub_services_title = 'Services';
    $automobile_hub_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_services = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_services_title,
        'post_content' => $automobile_hub_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $automobile_hub_services_id = wp_insert_post($automobile_hub_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Services', 'car-paint-job'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $automobile_hub_pages_title = 'Pages';
    $automobile_hub_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $automobile_hub_pages = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_pages_title,
        'post_content' => $automobile_hub_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $automobile_hub_pages_id = wp_insert_post($automobile_hub_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'car-paint-job'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $automobile_hub_contact_title = 'Contact';
    $automobile_hub_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $automobile_hub_contact = array(
        'post_type' => 'page',
        'post_title' => $automobile_hub_contact_title,
        'post_content' => $automobile_hub_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $automobile_hub_contact_id = wp_insert_post($automobile_hub_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($automobile_hub_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'car-paint-job'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $automobile_hub_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($automobile_hub_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$automobile_hub_bpmenulocation] = $automobile_hub_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('automobile_hub_mail', 'automobile22@gmail.com');
        set_theme_mod('automobile_hub_mail_icon', 'fas fa-envelope-open');

        set_theme_mod('automobile_hub_call', '1234567890');
        set_theme_mod('automobile_hub_call_icon', 'fas fa-phone');

        set_theme_mod('car_paint_job_location', '123, Fashion Street, USA');

        set_theme_mod('automobile_hub_header_fb_new_tab', true);
        set_theme_mod('automobile_hub_facebook_url', '#');
        set_theme_mod('automobile_hub_facebook_icon', 'fab fa-facebook-f');

        set_theme_mod('automobile_hub_header_twt_new_tab', true);
        set_theme_mod('automobile_hub_twitter_url', '#');
        set_theme_mod('automobile_hub_twitter_icon', 'fab fa-twitter');

        set_theme_mod('automobile_hub_header_ins_new_tab', true);
        set_theme_mod('automobile_hub_instagram_url', '#');
        set_theme_mod('automobile_hub_instagram_icon', 'fab fa-instagram');

        set_theme_mod('automobile_hub_header_ut_new_tab', true);
        set_theme_mod('automobile_hub_youtube_url', '#');
        set_theme_mod('automobile_hub_youtube_icon', 'fab fa-youtube');

        set_theme_mod('automobile_hub_header_pint_new_tab', true);
        set_theme_mod('automobile_hub_pint_url', '#');
        set_theme_mod('automobile_hub_pint_icon', 'fab fa-pinterest');

        // Slider Section

        for ($i = 1; $i <= 4; $i++) {
            $automobile_hub_title = 'Save Your Cars Original Finish';
            $automobile_hub_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard.';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($automobile_hub_title),
                'post_content'  => $automobile_hub_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('automobile_hub_slider_page' . $i, $post_id);

                $image_url = get_stylesheet_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }

       // Our Services Section //
        set_theme_mod('car_paint_job_featured_car_section_tittle', 'Offerening Quality Services');

        set_theme_mod('car_paint_job_featured_car_section_category', 'postcategory1');

        // Define post category names and post titles
        $car_paint_job_category_names = array('postcategory1');
        $car_paint_job_title_array = array(
            array("Full Services Wash", "Auto Detailing", "Express Exterior")
        );

        $car_paint_job_content = 'Lorem Ipsum has been the industrys standard dummy';

        foreach ($car_paint_job_category_names as $car_paint_job_index => $car_paint_job_category_name) {
            // Create or retrieve the post category term ID
            $car_paint_job_term = term_exists($car_paint_job_category_name, 'category');
            if ($car_paint_job_term === 0 || $car_paint_job_term === null) {
                // If the term does not exist, create it
                $car_paint_job_term = wp_insert_term($car_paint_job_category_name, 'category');
            }
            if (is_wp_error($car_paint_job_term)) {
                error_log('Error creating category: ' . $car_paint_job_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($car_paint_job_i = 0; $car_paint_job_i < 3; $car_paint_job_i++) {
                // Create post content
                $car_paint_job_title = $car_paint_job_title_array[$car_paint_job_index][$car_paint_job_i];

                // Create post post object
                $car_paint_job_my_post = array(
                    'post_title'    => wp_strip_all_tags($car_paint_job_title),
                    'post_content'  => $car_paint_job_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $car_paint_job_post_id = wp_insert_post($car_paint_job_my_post);

                if (is_wp_error($car_paint_job_post_id)) {
                    error_log('Error creating post: ' . $car_paint_job_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($car_paint_job_post_id, array((int)$car_paint_job_term['term_id']));

                // Handle the featured image using media_sideload_image
                $car_paint_job_image_url = get_stylesheet_directory_uri() . '/assets/images/post-img' . ($car_paint_job_i + 1) . '.png';
                $car_paint_job_image_id = media_sideload_image($car_paint_job_image_url, $car_paint_job_post_id, null, 'id');

                if (is_wp_error($car_paint_job_image_id)) {
                    error_log('Error downloading image: ' . $car_paint_job_image_id->get_error_message());
                    continue; // Skip to the next post if image download fails
                }

                // Assign featured image to post
                set_post_thumbnail($car_paint_job_post_id, $car_paint_job_image_id);
            }
        }


    }
?>