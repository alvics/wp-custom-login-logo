<?php


/*
Plugin Name: WP Custom login logo

Version: 1.6

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

    <h1 id="welcome-login">Welcome to <?php bloginfo('name'); ?></h1>

    <style type="text/css">
        .login-action-login {
            background: #fff !important;
        }

        .wp-core-ui #login {
            padding: 0 !important;
        }

        #welcome-login {
            display: flex;
            justify-content: center;
            align-content: center;
            font-size: 24px !important;
            padding-top: 50px;
        }

        #login h1 a,
        .login h1 a {
            height: 185px;
            width: auto;
            padding-bottom: 30px;
            background-image: url(<?php echo $image[0]; ?>);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .login form {
            background: #f1f1f1 !important;
            border: 1px solid #eee;
            -webkit-box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2),
                0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12) !important;
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.2), 0 4px 5px 0 rgba(0, 0, 0, 0.14),
                0 1px 10px 0 rgba(0, 0, 0, 0.12) !important;
        }

        .wp-core-ui .button,
        .wp-core-ui .button.button-large {
            padding: 0 34px !important;
            background-color: #333;
            border-radius: 40px;
            border: none;
        }

        .wp-core-ui .button-primary:hover {
            background-color: #333 !important;
            opacity: 0.8 !important;
        }
    </style>

<?php }
add_action('login_enqueue_scripts', 'my_login_logo');
