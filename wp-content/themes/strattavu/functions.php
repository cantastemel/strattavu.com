<?php 
//include('widgets.php');

// Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 720, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail

// Add HTML5 theme support.
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}

// Enqueue scripts and styles.
function scripts_and_styles() {
  if (!is_admin()) {
   
    // Deregister unwanted scripts
    wp_deregister_script('jquery');
    
    // Jquery and the rest of our script in thee footer
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js','','',true);
    wp_register_script('jqueryForm', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js','','',true);
    wp_register_script('jqueryFormValidate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js','','',true);
    wp_register_script('placeholderJS', 'https://cdnjs.cloudflare.com/ajax/libs/placeholders/4.0.1/placeholders.jquery.min.js','','',true);
    wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array(), '1.0', true );
    wp_register_script( 'mapAPI', 'https://maps.google.com/maps/api/js?key=AIzaSyAlLLrNXhqfVn9lDT238FOA2kLeABzcz3k', array(), '1.0', true );

    wp_enqueue_script('jquery');

    // if ( is_page_template( 'page-signup.php' ) ) {
    //     wp_enqueue_script('jqueryForm');
    //     wp_enqueue_script('jqueryFormValidate');
    //     wp_enqueue_script('placeholderJS');
    // }

    wp_enqueue_script('scripts');

    if ( is_page_template( 'page-contact.php' ) ) {
        wp_enqueue_script('mapAPI');
    }

    // Main Stylesheet
    wp_register_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all' );
    wp_enqueue_style('styles');

  }
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Adding Filters and Actions

add_theme_support( 'menus' );
add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
add_action('wp_enqueue_scripts', 'scripts_and_styles', 100);
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)

// Removing Actions
// Remove Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

