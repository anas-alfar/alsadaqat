<?php
/**
 *
 * @author      Mohammad Mousa <mohammad.riad@gmail.com>
 * @version     1.0
 * @category    Yii Framework
 * @package     YiiMailMessage
 * @copyright   Copyright (c) 2015 Alsadaqat.com
 *  
 */

class AlsadaqatMailMessage extends YiiMailMessage{
	
	public function __construct(){
        parent::__construct();
        $this->from  = 'support@alsadaqat.com';
    }

}