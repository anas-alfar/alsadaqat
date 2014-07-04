<?php

// Load main config file
$main = include_once( 'main.php' );

// Development configurations
$development = array(
    'name'    =>'ALSADAQAT.COM Development Web Application ',
    
    'modules' => array(
        'gii' => array(
            'generatorPaths' => array( 'bootstrap.gii', ),
            'class'          => 'system.gii.GiiModule',
            'password'       => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'      => array('127.0.0.1','::1'),
        ),

    ),
    
    'components' => array(
        'db' => array(
            //'class'           => 'CDbConnection',
            'connectionString'  => 'mysql:host=localhost;dbname=sadaqat_online',
            'emulatePrepare'    => true,
            'enableProfiling'   => true,
            'enableParamLogging'=> true,
            'username'          => 'sadaqat_online',
            'password'          => 'sadaqat_online',
            'charset'           => 'utf8',
            //'tablePrefix'     => '',
        ),

        'log' => array(
            'class'  => 'CLogRouter',
            'routes' => array( // Configures Yii to email all errors and warnings to an email address
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),

    ),
    
    'params' => array(
        // this is used in contact page
        'adminEmail'=> 'mohammad.riad@gmail.com',
        'webroot'   => '/var/www/alsadaqat/',
    ),

);
//merge both configurations and return them
return CMap::mergeArray($main, $development);