<?php

class NI_Mailchimp_UpgradeController extends NI_Mailchimp_BaseController {
    
      
    /**
     * Script that runs if the menu has been upgraded
     *
     * @return mixed
     * @added 1.0
     */
    
    static function upgrade() {
        
        
        if( self::needsUpgrade() ) :
            
            /* Update Version */
            update_option( 'NI_Mailchimp_Ver', NI_Mailchimp_Registry::get( 'config', 'current_version' ) );
            
            /* Merge Changes */
            update_option( 'NI_Mailchimp_Options', array_merge( NI_Mailchimp_Registry::get( 'defaults' ), NI_Mailchimp::getOptions() ) );
            
            
        endif;

            
    }
    
        
    /**
     * Determines whether or not the site needs upgrading
     *
     * @return boolean
     * @added 1.0
     */
    
    static function needsUpgrade() {
        
        
        return get_option( 'NI_Mailchimp_Ver' ) != NI_Mailchimp_Registry::get( 'config', 'current_version' ) ? true : false;

        
    }
    
    
}