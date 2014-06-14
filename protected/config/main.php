<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('yiiwheels', dirname(__FILE__).'/../extensions/yiiwheels');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	//'theme'=>'abound',
	//'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log', 'translate'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'bootstrap.helpers.TbHtml', // yiistrap configuration
        'application.extensions.gallerymanager.*',
        'application.extensions.gallerymanager.models.*',
		'application.modules.translate.TranslateModule',
	),

    'charset'             => 'UTF-8',
    //'defaultController'   => 'landing/index',
    'sourceLanguage'      => 'en',
    'language'            => 'ar',

	'modules'=>array(
	   'translate',
	   'admin',
		// uncomment the following to enable the Gii tool

		'gii'=>array(
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),		
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
        // yiistrap configuration
        'bootstrap'=>array(
            'class' => 'bootstrap.components.TbApi',
        ),
        // yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),

        'user' => array(
            // enable cookie-based authentication
            //'allowAutoLogin'  => true,
            'class'           => 'WebUser',
            'stateKeyPrefix'  => 'app',
            'loginUrl'        => '/home/index',
            'autoUpdateFlash' => false, // add this line to disable the flash counter
            //'allowAutoLogin'  => true,
            //'autoRenewCookie' => true,
        ),

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
            'class'           => 'ext.localeurls.LocaleUrlManager',
            'languageParam'   => 'lang', //  Name of the parameter that contains the desired language when constructing a URL
			'urlFormat'       => 'path',
            'showScriptName'  => false,
            'caseSensitive'   => false,
			'rules'=>array(
                //'login'=>'/site/login',
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
            'class' => 'ext.localeurls.LocaleHttpRequest',
            'languages'               => array( 'ar', 'en'),     // Array of available language codes
            'persistLanguage'         => true,     // Wether to store the user language selection in session and cookie
            'detectLanguage'          => true,     // Wether to auto detect the preferred user language from the HTTP headers
            'redirectDefault'         => true,     // Wether to also redirect the application's default language
            'languageCookieLifetime'  => false,    // How long to store the user language in a cookie. Default is 1 year. Set to false to disable cookie storage

            'enableCookieValidation'  => true,
            //'enableCsrfValidation'    => true,
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
        
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sadaqat_online',
			'emulatePrepare' => true,
			'username' => 'sadaqat_online',
			'password' => 'sadaqat_online',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);