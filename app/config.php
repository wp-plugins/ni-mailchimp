<?php


/*
|--------------------------------------------------------------------------
| Configuration Settings
|--------------------------------------------------------------------------
|
| Although some people aren't fans of array configurations, here we have one!
| This is where we set paths and our version number among other things.
|
*/

$config = array( 
    
    
    'current_version' => 1.0,
    
    
    'is_beta' => false,
    
    
    'plugins_dir' => plugin_dir_path( __FILE__ ),
        
    
    'plugins_base_uri' => plugin_dir_url( dirname( __FILE__ ) ),
    
    
    'plugin_base_dir' => dirname( plugin_dir_path( __FILE__ ) ),
    
    
    'plugin_base_uri' => plugin_dir_url( dirname( __FILE__ ) ),
    
    
);


/*
|--------------------------------------------------------------------------
| Save Config to the Registry
|--------------------------------------------------------------------------
|
| Again, some people don't like Registry's in PHP Applications, but here we
| have one and it is very useful for retrieving our settings throughout the app
|
*/

NI_Mailchimp_Registry::set( 'config', $config );


/*
|--------------------------------------------------------------------------
| NI Mailchimp Defaults
|--------------------------------------------------------------------------
|
| Another configuration array of type, this time we hold all the application
| default options.
|
*/

$defaults = array( 
    
    
    'ApiKey' => null,
    
    
    'ListId' => null,
    
    
    'SbtBtnTxt' => 'Sign up now',
    
    
    'EPlcHol' => 'Enter your email address and hit enter',
    
    
);


/*
|--------------------------------------------------------------------------
| Save Defaults to the Registry
|--------------------------------------------------------------------------
|
| Again, some people don't like Registry's in PHP Applications, but here we
| have it again and it is very useful for retrieving our default values
| throughout the app
|
*/

NI_Mailchimp_Registry::set( 'defaults', $defaults );