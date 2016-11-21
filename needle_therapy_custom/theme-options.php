<?php

//load_theme_textdomain( 'needletherapy', get_template_directory() . '/languages' );

/////////////////////////////////////////////////////////////////////
// Add DevDm Theme Options to the Appearance Menu and Admin Bar
////////////////////////////////////////////////////////////////////

    function nt_theme_options_menu() {
        add_theme_page( 'Needle Therapy' . __('Options','needletherapy'), 'Needle Therapy' . __('Options','needletherapy'), 'manage_options', 'needletherapy-theme-options', 'nt_theme_options' );
    }
    add_action( 'admin_menu', 'nt_theme_options_menu' );

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
    add_action( 'admin_bar_menu', 'toolbar_link_to_nt_options', 999 );

////////////////////////////////////////////////////////////////////
// Add admin.css enqueue
////////////////////////////////////////////////////////////////////

    function nt_theme_style() {
        wp_enqueue_style('needletherapy-admin-theme', get_template_directory_uri() . '/css/admin.css');
    }
    add_action('admin_enqueue_scripts', 'nt_theme_style');

////////////////////////////////////////////////////////////////////
// Register our settings options (the options we want to use)
////////////////////////////////////////////////////////////////////

    $nt_options = array(
        'nt_intro_text' => "add text in settings",
        'nt_about_text' => "add text in settings",
        'nt_acu_text' => "add text in settings",
        'nt_facial_text' => "add text in settings",
        'nt_nutrition_text' => "add text in settings",
    );


    function nt_register_settings() {
        register_setting( 'nt_theme_options', 'nt_options', 'nt_validate_options' );
    }

    add_action ('admin_init', 'nt_register_settings');

////////////////////////////////////////////////////////////////////
// Validate Options
////////////////////////////////////////////////////////////////////

    function nt_validate_options( $input ) {

        global $nt_options;

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

        //USE WP_KSES FOR VALIDATION TO ALLOW BASIC HTML TAGS
        

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
        global $nt_options;

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
                            <textarea rows="4" cols="50" id="intro_text" name="nt_options[nt_intro_text]"><?php echo $settings['nt_intro_text']; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('About Text','needletherapy') ;?></th>
                        <td>
                            <textarea rows="4" cols="50" id="about_text" name="nt_options[nt_about_text]"><?php echo $settings['nt_about_text']; ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top"><th scope="row"><?php _e('Product boxes','needletherapy') ;?></th>
                        <td>
                            <label for="product-one-text">Acupuncture text</label><br />
                            <textarea rows="4" cols="50" id="product-one-text" name="nt_options[nt_acu_text]"><?php echo $settings['nt_acu_text']; ?></textarea>
                            <br />
                            <label for="product-two-text">Facial acupuncture text</label><br />
                            <textarea rows="4" cols="50" id="product-two-text" name="nt_options[nt_facial_text]"><?php echo $settings['nt_facial_text']; ?></textarea>
                            <br />
                            <label for="product-one-text">Nutrition text</label><br />
                            <textarea rows="4" cols="50" id="product-three-text" name="nt_options[nt_nutrition_text]"><?php echo $settings['nt_nutrition_text']; ?></textarea>
                        </td>
                    </tr>
            
                </table>

                <p class="submit">
                    <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes','needletherapy'); ?>" />
                </p>

            </form>

        </div>
<?php

}
?>
