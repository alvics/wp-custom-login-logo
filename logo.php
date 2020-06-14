<?php


/*
Plugin Name: WP Custom login logo

Version: 1.3

Plugin URI: http://ewebdesigns.com.au

Description: Simply adds your logo to the WordPress admin login page. (Replaces the default WordPress logo).
steps.
1. Add your logo to WordPress as you normally would through Appearance>Customize.
2. Install this plugin

Author: Allen Pavic

Author URI: http://allenpavic.ga

License: GPLv2 or later

*/
// Custom logo support for admin login page
add_theme_support('custom-logo');


function my_login_logo()
{

    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>

    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo $image[0]; ?>);
            height: 65px;
            width: auto;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');
