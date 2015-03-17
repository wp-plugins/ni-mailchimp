<?php


class NI_Mailchimp_GlobalController extends NI_Mailchimp_BaseController {
    
        
    /**
     * Prepare our Global Options
     *
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        
        
        add_action( 'plugins_loaded', array( 'NI_Mailchimp_GlobalController', 'Internationalise' ) );

         
    }
    
    /**
     * Loads our Translations for use throughout the program
     *
     * Current Translations:
     * 
     * @return null 
     * @added 1.0
     */
    
    
    static function Internationalise() {

        
        __( 'Very simple Mailchimp Plugin Created By Peter Featherstone @ Network Intellect', 'ni-mailchimp' );
        
        load_plugin_textdomain( 'ni-mailchimp', false, 'ni-mailchimp/translations/' );

        
    }
    
    
}