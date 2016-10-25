<?php

//load_theme_textdomain( 'needletherapy', get_template_directory() . '/languages' );

/////////////////////////////////////////////////////////////////////
// Add DevDm Theme Options to the Appearance Menu and Admin Bar
////////////////////////////////////////////////////////////////////

    function nt_theme_options_menu() {
        add_theme_page( 'Needle Therapy' . __('Options','needletherapy'), 'Needle Therapy' . __('Options','needletherapy'), 'manage_options', 'needletherapy-theme-options', 'nt_theme_options' );
    }
    add_action( 'admin_menu', 'nt_theme_options_menu' );

    add_action( 'admin_bar_menu', 'toolbar_link_to_nt_options', 999 );

    function toolbar_link_to_nt_options( $wp_admin_bar ) {
        $args = array(
            'id'    => 'needle_therapy_theme_options',
            'title' => __('Needle Therapy Options','needletherapy'),
            'href'  => home_url() . '/wp-admin/themes.php?page=needletherapy-theme-options',
            'meta'  => array( 'class' => 'needletherapy-theme-options' ),
            'parent' => 'site-name'
        );
        $wp_admin_bar->add_node( $args );
    }

////////////////////////////////////////////////////////////////////
// Add admin.css enqueue
////////////////////////////////////////////////////////////////////

    function nt_theme_style() {
        wp_enqueue_style('needletherapy-admin-theme', get_template_directory_uri() . '/css/admin.css');
    }
    add_action('admin_enqueue_scripts', 'nt_theme_style');

////////////////////////////////////////////////////////////////////
// Custom background theme support
////////////////////////////////////////////////////////////////////

    $defaults = array(
        'default-color'          => '',
        'default-image'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => ''
    );
    add_theme_support( 'custom-background', $defaults );

////////////////////////////////////////////////////////////////////
// Custom header theme support
////////////////////////////////////////////////////////////////////

    register_default_headers( array(
        'wheel' => array(
            'url' => '%s/images/defaultlogo.png',
            'thumbnail_url' => '%s/images/defaultlogo.png',
            'description' => __( 'Your Business Name', 'needletherapy' )
        ))

    );

    $defaults = array(
        'default-image'          => get_template_directory_uri() . '/images/defaultlogo.png',
        'width'                  => 300,
        'height'                 => 100,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '000',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => 'nt_admin_header_image',
    );
    add_theme_support( 'custom-header', $defaults );

    function nt_admin_header_image() { ?>

        <div id="headimg">
            <?php
            $color = get_header_textcolor();
            $image = get_header_image();

            if ( $color && $color != 'blank' ) :
                $style = ' style="color:#' . $color . '"';
            else :
                $style = ' style="display:none"';
            endif;
            ?>


            <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image ); ?>" alt="" />
            <?php endif; ?>
            <div class="dm_header_name_desc">
            <h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>

            </div>
        </div>

    <?php }

    function custom_header_text_color () {
        if ( get_header_textcolor() != 'blank' ) { ?>
            <style>
               .custom-header-text-color { color: #<?php echo get_header_textcolor(); ?> }
            </style>
    <?php }
    }

    add_action ('wp_head', 'custom_header_text_color');

////////////////////////////////////////////////////////////////////
// Register our settings options (the options we want to use)
////////////////////////////////////////////////////////////////////

    $nt_options = array(
        'nt_intro_text' => true,
        'nt_about_text' => true,
        'nt_product_one_title' => 3,
        'nt_product_one_text' => 3,
        'nt_product_two_title' => 3,
        'nt_product_two_text' => 3,
        'nt_product_three_title' => 3,
        'nt_product_three_text' => 3,
        'show_header' => true,
        'show_postmeta' => true
    );


    function nt_register_settings() {
        register_setting( 'nt_theme_options', 'nt_options', 'nt_validate_options' );
    }

    add_action ('admin_init', 'nt_register_settings');
    $dm_settings = get_option( 'nt_options', $nt_options );


////////////////////////////////////////////////////////////////////
// Validate Options
////////////////////////////////////////////////////////////////////

    function nt_validate_options( $input ) {

        global $dm_options;

        $settings = get_option( 'nt_options', $nt_options );

        // EXAMPLES _ JOE TO EDIT
        // $prev = $settings['right_sidebar_width'];
        // if ( !array_key_exists( $input['right_sidebar_width'], $dm_sidebar_sizes ) ) {
        //     $input['right_sidebar_width'] = $prev;
        // }

        // if ( ! isset( $input['show_header'] ) ) {
        //     $input['show_header'] = null;
        // } else {
        //     $input['show_header'] = ( $input['show_header'] == 1 ? 1 : 0 );
        // }

        return $input;
    }

////////////////////////////////////////////////////////////////////
// Display Options Page
////////////////////////////////////////////////////////////////////

    function nt_theme_options() {

    if ( !current_user_can( 'manage_options' ) )  {
        wp_die('You do not have sufficient permissions to access this page.');
    }

        //get our global options
        global $dm_options, $dm_sidebar_sizes, $developer_uri;

        //get the logo
        $logo = get_template_directory_uri() . '/images/defaultlogo.png'; ?>

        <div class="wrap">

        <div class="nt-logo-wrap"><img src="<?php echo $logo; ?>" class="nt-logo" title="Needle Therapy" /></a></div>

            <div class="icon32" id="icon-options-general"></div>

            <h2>Needle Therapy Front Page text</h2>

               <?php

               if ( ! isset( $_REQUEST['settings-updated'] ) )

                   $_REQUEST['settings-updated'] = false;

               ?>

               <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>

               <div class='saved'><p><strong><?php _e('Options Saved!','needletherapy') ;?></strong></p></div>

               <?php endif; ?>

            <form action="options.php" method="post">

                <?php
                    $settings = get_option( 'nt_options', $nt_options );
                    settings_fields( 'nt_theme_options' );
                ?>

                <table cellpadding='10'>

                    <tr valign="top"><th scope="row"><?php _e('Intro Text','needletherapy') ;?></th>
                        <td>
                            <textarea rows="4" cols="50" id="intro_text" name="nt_options[nt_intro_text]"><?php echo 'Put current value text here'; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('About Text','needletherapy') ;?></th>
                        <td>
                            <textarea rows="4" cols="50" id="about_text" name="nt_options[nt_about_text]"><?php echo 'Put current value text here'; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('Product One','needletherapy') ;?></th>
                        <td><label for="product-one-title">Product One Title</label><br />
                            <input type="text" id="product-one-title" name="nt_options[nt_product_one_title]"/>
                            <br />
                            <label for="product-one-text">Product One Text</label><br />
                            <textarea rows="4" cols="50" id="product-one-text" name="nt_options[nt_product_one_text]"><?php echo 'Put current value text here'; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('Product Two','needletherapy') ;?></th>
                        <td><label for="product-two-title">Product Two Title</label><br />
                            <input type="text" id="product-two-title" name="nt_options[nt_product_two_title]"/>
                            <br />
                            <label for="product-two-text">Product One Text</label><br />
                            <textarea rows="4" cols="50" id="product-two-text" name="nt_options[nt_product_two_text]"><?php echo 'Put current value text here'; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('Product Three','needletherapy') ;?></th>
                        <td><label for="product-three-title">Product Three Title</label><br />
                            <input type="text" id="product-Three-title" name="nt_options[nt_product_three_title]"/>
                            <br />
                            <label for="product-one-text">Product Three Text</label><br />
                            <textarea rows="4" cols="50" id="product-three-text" name="nt_options[nt_product_three_text]"><?php echo 'Put current value text here'; ?></textarea>
                        </td>
                    </tr>

                

                </table>

                <p class="submit">
                    <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes','devdmbootstrap3'); ?>" />
                </p>

            </form>

        </div>
<?php

}
?>
