<?php

class NI_Mailchimp_InstallController extends NI_Mailchimp_BaseController {
    
    
    /**
     * Prepare our Installation Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        
        register_activation_hook( __FILE__, array( 'NI_Mailchimp_InstallController', 'install' ) );
        
        
    }
    
        
    /**
     * Sets our initial default options when menu
     * is first installed
     *
     * @return null
     * @added 1.0
     */
    
    static function install() {

        
        add_option( 'NI_Mailchimp_Ver', NI_Mailchimp_Registry::get( 'config', 'current_version' ) );
        add_option( 'NI_Mailchimp_Options', NI_Mailchimp_Registry::get( 'defaults' ) );

        
    }
    
    
}