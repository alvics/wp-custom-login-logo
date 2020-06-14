## WP Custom login logo

#### Description

<p>Customize your WordPress login page and add your own logo to the WordPress admin login page!</p>

<p>WordPress uses CSS to display a background image the WordPress logo in the link inside the heading tag You can use the login_enqueue_scripts hook to insert CSS into the head of the login page so your logo loads instead:</p>

<p><strong>Step 1. add logo as normal in WordPress dashboard</strong> <code>Appearance>Customize</code></p>
<p><strong>Step 2. Install plugin</strong></p>

<p>or if you can insert below code in <code>functions.php</code></p>

**Add the below function:**

```javascript
add_theme_support( 'custom-logo' );

function my_login_logo() {

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $image[0]; ?>);
            height:65px;
            width:auto;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

```
