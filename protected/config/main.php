<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('yiiwheels', dirname(__FILE__).'/../extensions/yiiwheels');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	//'name'=>'My Web Application',
	//'theme'=>'abound',
	//'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array( 'log', 'translate' ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'bootstrap.helpers.TbHtml', // yiistrap configuration

        'application.extensions.gallerymanager.*',
        'application.extensions.gallerymanager.models.*',

        'application.modules.translate.TranslateModule',        

        'application.modules.rights.*',
        'application.modules.rights.components.*',
	),

    'charset'             => 'UTF-8',
    //'defaultController'   => 'landing/index',
    'sourceLanguage'      => 'en',
    'language'            => 'ar',

	'modules'=>array(
	   'translate',
	   'admin',

        'rights' => array(
            'install'           => false,  // Whether to enable the installer. This should only be enabled when Rights is not installed or you wish to reinstall the module.
            'debug'             => false,  // Whether to enable debugging mode. This is used for developing purposes only. Please note that the module performance is decreased while debugging mode is enabled.

            'userClass'         => 'OrganizationUser',  // Name of the user model class.
            'enableBizRuleData' => true, // Whether to enable data for business rules. To enable this business rules needs to be enabled as well.

            'superuserName'     => 'Admin',  // Name of the role with all privileges. When access is checked for a user that has been assigned this role true is always returned.
            'authenticatedName' => 'Authenticated',  // Name of the role assigned to authenticated users. This can also be null if this role is not needed.
            'userIdColumn'      => 'id',  // Name of the id column in the user table.
            'userNameColumn'    => 'username',  // Name of the column in the user table which should be used for displaying the user’s name.
            'enableBizRule'     => true,  // Whether to enable business rules
            'displayDescription'=> true,  // Whether to display the description as the authorization item name instead of the name.
            'flashSuccessKey'   => 'RightsSuccess',  // Key to use for displaying success flash messages. Change this if you wish that the Rights success flash message appear in your own flash message region
            'flashErrorKey'     => 'RightsError',  // Key to use for displaying error flash messages. Change this if you wish that the Rights flash message appear in your own flash message region
            'baseUrl'           => '/rights',  // Base URL to Rights. This only needs to be set if Rights is nested within another module.
            'layout'            => 'rights.views.layouts.main',  // Path to the layout to use for displaying Rights
            'appLayout'         => 'application.views.layouts.main',  // Path to the application layout
            //'cssFile'         => 'rights.css',  // Name of the cascading style sheet file to use for applying styles to Rights.
        ),

		
	),

	// application components
	'components' => array(
        // yiistrap configuration
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        // yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),

        'authManager'=>array(
            'class'             => 'RDbAuthManager',
            'connectionID'      => 'db',
            'itemTable'         => 'auth_item',
            'itemChildTable'    => 'auth_item_child',
            'assignmentTable'   => 'auth_assignment',
            'rightsTable'       => 'auth_rights',
        ),
        'user'=>array(
            'class'=>'RWebUser',
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),

        /*'user' => array(
            // enable cookie-based authentication
            //'allowAutoLogin'  => true,
            'class'           => 'WebUser',
            'stateKeyPrefix'  => 'app',
            //'loginUrl'        => '/home/index',
            'autoUpdateFlash' => false, // add this line to disable the flash counter
            //'allowAutoLogin'  => true,
            //'autoRenewCookie' => true,
        ),*/

        /*'session'=>array(
            'class' => 'CCacheHttpSession',
            'cacheID' => 'memcache'
        ),*/

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
            'class'           => 'ext.localeurls.LocaleUrlManager',
            'languageParam'   => 'lang', //  Name of the parameter that contains the desired language when constructing a URL
			'urlFormat'       => 'path',
            'showScriptName'  => false,
            //'caseSensitive'   => false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

        'image' => array(
            'class' => 'application.extensions.image.CImageComponent',
              // GD or ImageMagick
            'driver' => 'ImageMagick',
              // ImageMagick setup path
            'params' => array('directory' => '/usr/bin'),
        ),

        'request' => array(
            'class'                   => 'ext.localeurls.LocaleHttpRequest',
            'languages'               => array( 'ar', 'en'),     // Array of available language codes
            'persistLanguage'         => false,     // Wether to store the user language selection in session and cookie
            'detectLanguage'          => true,     // Wether to auto detect the preferred user language from the HTTP headers
            'redirectDefault'         => true,     // Wether to also redirect the application's default language
            'languageCookieLifetime'  => false,    // How long to store the user language in a cookie. Default is 1 year. Set to false to disable cookie storage

            'enableCookieValidation'  => true,
            'enableCsrfValidation'    => true,
            'noCsrfValidationRoutes'  => array('translate/translate'),
        ),

        'coreMessages'=>array(
            //'basePath'=>'protected/messages',
             'class'                 => 'CDbMessageSource',
             'onMissingTranslation' => array('TranslateModule', 'missingTranslation'),
        ),

        'messages' => array(
            'class' => 'CDbMessageSource',
            //'cachingDuration'      =>0,
            'onMissingTranslation' => array('TranslateModule', 'missingTranslation'),
        ),

        'translate' => array( //if you name your component something else change TranslateModule
            'class'             => 'translate.components.MPTranslate',
            'acceptedLanguages' => array(
                'en' => 'English',
                'ar' => 'Arabic',
            ),
        ),
        
		// 'db'=>array(
			// 'connectionString' => 'mysql:host=localhost;dbname=sadaqat_online',
			// 'emulatePrepare' => true,
			// 'username' => 'sadaqat_online',
			// 'password' => 'sadaqat_online',
			// 'charset' => 'utf8',
		// ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'webroot' => '/var/www/alsadaqat',
	),
);