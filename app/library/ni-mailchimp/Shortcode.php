<?php

class NI_Mailchimp_Shortcode {
    
    /**
     * Function to set a new status in the system
     *
     * @param  string  $type
     * @param string $text
     * @return null
     * @added 1.0
     */
    
    static function prepare() {
        

            add_shortcode( 'ni-mailchimp', array( 'NI_Mailchimp_HTMLController', 'display' ) );

        
    }
    
    
}