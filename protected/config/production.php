<?php

// Load main config file
$main = include_once( 'main.php' );

// Production configurations
$production = array(
    'name'       => 'ALSADAQAT.com ',
    'components' => array(
    
        'db'=>array(
            //'class'       => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;dbname=sadaqat_online',
            'emulatePrepare'=> true,
            'username'      => 'sadaqat_online',
            'password'      => 'sadaqat_online',
            'charset'       => 'utf8',
            //'tablePrefix'       => '',
        ),

        'log' => array(
            'class'  => 'CLogRouter',
            'routes' => array( // Configures Yii to email all errors and warnings to an email address
                array(
                    'class'     => 'LogEmailMessages',
                    'levels'    => 'error, warning',
                    'emails'    => array('mohammad.riad@gmail.com'),
                    'sentFrom'  => 'support@alsadaqat.com',
                    'subject'   => 'ALSADAQAT.com Application Error',
                ),
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),

    ),
    
    // using Yii::app()->params['paramName']
    'params' => array(
        'adminEmail' => 'mohammad.riad@gmail.com',
        'webroot'    => '/home/sadaqat/public_html/', // change this on production server
    ),
    
);
//merge both configurations and return them
return CMap::mergeArray($main, $production);
