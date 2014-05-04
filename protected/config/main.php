<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	//'theme'=>'abound',
	//'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
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
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
        'user'=>array(
            // enable cookie-based authentication
            'class'         => 'WebUser',
            'allowAutoLogin'=> true,
            'autoRenewCookie' => true,
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
            'params' => array('directory'=>'/usr/bin'),
        ),
        
         'request' => array(
            'class'     => 'ext.localeurls.LocaleHttpRequest',
            'languages' => array('en','ar'),

            // Since version 1.1.3 you can also map url => language
            // 'languages' => array(
            //      'english'   => 'en',
            //      'deutsch'   => 'de',
            //      'fr',
            //  )

            // Advanced configuration with defaults (see below)
            //'persistLanguage'         => true,
            //'languageCookieLifetime'  => 31536000,
            //'redirectDefault'         => false,
        ),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=alsadaqat',
			'emulatePrepare' => true,
			'username' => 'alsadaqat',
			'password' => 'alsadaqat',
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