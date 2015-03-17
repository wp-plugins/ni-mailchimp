<?php

class NI_Mailchimp_HTMLController extends NI_Mailchimp_BaseController {
        
    /**
     * Creates the view for the menu and echos it out
     *
     * @return string
     * @added 1.0
     */
    
    static function display( $args = null ) {
            
        $options = NI_Mailchimp::getOptions();
        $success = false;
        $error = null;
        $email = null;
        
        $ApiKey = $options['ApiKey'];
        $ListId = $options['ListId'];
        
        $submitted = NI_Mailchimp_Input::post( 'ni_mc_submit' );

        if( $submitted ) :
            
            $email = NI_Mailchimp_Input::post( 'ni_mc_email' );

            if( empty( $email ) )
                $error = 'You provided an empty email address';
            
            if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
                $error = 'You provided an invalid email address';
            
            if( !$error ) :
                
                $MailChimp = new MailChimp( $ApiKey );
                
                $result = $MailChimp->call( 'lists/subscribe', array(
                    'id'                => $ListId,
                    'email'             => array( 'email' => $email ),
                   // 'merge_vars'        => array( 'FNAME'=> $f_name, 'LNAME'=> $l_name )
                ));

                if( isset( $result['error'] ) )
                    $error = $result['error'];

                if( !$error ) 
                    $success = true;
                    
            endif;
            
        endif;
            
        if( $success )    
            return NI_Mailchimp_View::make( 'mailchimp-success', array( 'email' => $email ) );
        
        NI_Mailchimp_View::make( 'mailchimp', array( 'error' => $error, 'email' => $email, 'options' => $options ) );
     
        
    }
    
    
}