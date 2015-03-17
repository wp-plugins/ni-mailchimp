<?php


class NI_Mailchimp {
    
    
    /**
     * Main Construct for the Whole Application
     * Sets Registry and Default Values (if none present)
     *
     * @return null
     * @added 1.0
     */
    
    public function __construct() {
        
        
        if( !get_option( 'NI_Mailchimp_Ver' ) ) :
                add_option( 'NI_Mailchimp_Ver', NI_Mailchimp_Registry::get( 'config', 'current_version' ) );
        endif;
        
        if( !get_option( 'NI_Mailchimp_Options' ) ) :
            add_option( 'NI_Mailchimp_Options', NI_Mailchimp_Registry::get( 'defaults' ) );
        endif;
        
        NI_Mailchimp_Registry::set( 'options', get_option( 'NI_Mailchimp_Options' ) );
        NI_Mailchimp_Registry::set( 'version', get_option( 'NI_Mailchimp_Ver' ) );

        
    }
    
        
    /**
     * The main application run function, this sets up all the magic and grunt
     * work of the application, firing off all the different controllers.
     *
     * @return null
     * @added 1.0
     */
    
    public function run() {
        

        NI_Mailchimp_InstallController::prepare();
        NI_Mailchimp_UpgradeController::upgrade();
        NI_Mailchimp_GlobalController::prepare();
        NI_Mailchimp_AdminController::prepare();
        NI_Mailchimp_Shortcode::prepare();
     
    }
    
  
    /**
     * Function to return all options throughout the site, it also
     * automatically mixes in any default options that don't exist
     * in the current version
     *
     * @return array
     * @added 1.0
     */
    
    static function getOptions() {
        
        return array_merge( (array) NI_Mailchimp_Registry::get( 'defaults' ), (array) get_option( 'NI_Mailchimp_Options' ) );
        
    }
    
    
    /**
     * Function to return individual options throughout the site, it
     * automatically returns the default option if a current value
     * doesn't exist in the current version
     *
     * @return array
     * @added 2.1
     */
    
    static function getOption( $option ) {
        
        $options = self::getOptions();
        
        if( isset( $options[$option] ) )
            return $options[$option];
        
        return NI_Mailchimp_Registry::get( 'defaults', $option );
        
    }
    
    
}