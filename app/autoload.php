<?php

/*
|--------------------------------------------------------------------------
| Autoload our application
|--------------------------------------------------------------------------
|
| Here we include all our required files for the application to run correctly.
| At the moment this is a big mess of require_once calls and needs to be 
| tidied up with an autoloader function
|
*/

define( 'NI_MAILCHIMP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/Registry.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'config.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/NI_Mailchimp.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/View.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/Status.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/Input.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/ni-mailchimp/Shortcode.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'library/mailchimp/MailChimp.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/BaseController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/AdminController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/GlobalController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/InstallController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/HTMLController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'controllers/UpgradeController.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'models/BaseModel.php';

require_once NI_MAILCHIMP_PLUGIN_DIR . 'models/AdminModel.php';