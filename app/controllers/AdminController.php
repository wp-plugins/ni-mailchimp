<?php


class NI_Mailchimp_AdminController extends NI_Mailchimp_BaseController {
    
        
    /**
     * Prepare our Admin Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        // Check that we are in the admin area
        if( is_admin() ) : 
            
            add_filter( 'plugin_action_links', array( 'NI_Mailchimp_AdminController', 'addSettingsLink' ), 10, 2 );
            add_action( 'admin_menu', array( 'NI_Mailchimp_AdminController', 'addMenus' ) );
            
        endif;
        

    }
    
    
    /**
     * Create our admin menus.
     *
     * @return null
     * @added 1.0
     */
    
    static function addMenus() {

        
        add_menu_page( 

            __( 'Mailchimp', 'ni-mailchimp' ), 
            __( 'Mailchimp', 'ni-mailchimp' ), 
            'manage_options', 
            'ni-mailchimp', 
            array( 'NI_Mailchimp_AdminController', 'adminPage' ), 
            NI_Mailchimp_Registry::get( 'config', 'plugins_base_uri' ) . 'public/imgs/icon.png' 

        );

        
    }
    
    /**
     * Creates the main admin page and saves the data if submitted
     *
     * @return null
     * @added 1.0
     */
    
    static function adminPage() {
        
   
        if( NI_Mailchimp_Input::post( 'NI_Mailchimp_Submit' ) ) :

            NI_Mailchimp_AdminModel::save( NI_Mailchimp_Input::post() );               
        
        endif;    

        NI_Mailchimp_View::make( 'admin.page', NI_Mailchimp::getOptions() );
        
        
    }
        
    /**
     * Adds the settings link on the WordPress Plugins Page
     *
     * @param array $links
     * @param string $file
     * @return array
     * @added 1.0
     */
    
    static function addSettingsLink( $links, $file ) {
        
        
        if ( $file == 'ni-mailchimp/ni-mailchimp.php' ) :

            $settings_link = '<a href="' . get_bloginfo( 'wpurl' ) . '/wp-admin/admin.php?page=ni-mailchimp">';
            $settings_link .= __( 'Settings', 'ni-mailchimp' );
            $settings_link .= '</a>';
            
            array_unshift( $links, $settings_link );

        endif;

        return $links;

    
    }

    
}