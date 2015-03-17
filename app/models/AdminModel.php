<?php

class NI_Mailchimp_AdminModel extends NI_Mailchimp_BaseModel {
    
        
    /**
     * Saves all the data from the admin page to the database
     *
     * @param  array  $data
     * @return null
     * @added 1.0
     */
    
    static public function save( $data ) {
        
        // Initialise Variables Correctly
        
        $ApiKey = isset( $data['ApiKey'] ) ? $data['ApiKey'] : NI_Mailchimp_Registry::get( 'defaults', 'ApiKey' );
        
        $ListId = isset( $data['ListId'] ) ? $data['ListId'] : NI_Mailchimp_Registry::get( 'defaults', 'ListId' );
        
        $SbtBtnTxt = isset( $data['SbtBtnTxt'] ) ? $data['SbtBtnTxt'] : NI_Mailchimp_Registry::get( 'defaults', 'SbtBtnTxt' );
        
        $EPlcHol = isset( $data['EPlcHol'] ) ? $data['EPlcHol'] : NI_Mailchimp_Registry::get( 'defaults', 'EPlcHol' );

        $optionsArray = array(
            
            // Filter Input Correctly
            
            'ApiKey' => self::Filter( $ApiKey ),
            
            'ListId' => self::Filter( $ListId ),
            
            'SbtBtnTxt' => self::Filter( $SbtBtnTxt ),
            
            'EPlcHol' => self::Filter( $EPlcHol ),

        );

        // Update Submitted Options 
        
        update_option( 'NI_Mailchimp_Options', $optionsArray );
        
        // And save the status

        NI_Mailchimp_Status::set( 'updated', __( 'You have successfully updated the NI Mailchimp options', 'ni-mailchimp' ) );
        
        
    }
    
    
}