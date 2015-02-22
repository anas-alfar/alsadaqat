<?php
/**
 * This Class will handle all common emails that should be send to clients
 *
 * @author      Mohammad Mousa <mohammad Dot riad At gmail Dot com >
 * @version     1.0
 * @category    Yii Framework
 * @package     YiiMailMessage
 * @copyright   Copyright (c) 2013 OilWell7.com
 *  
 */

class CommonMails extends AlsadaqatMailMessage
{
    public function __construct()
    {
        parent::__construct();

        //$this->from  = '' ;
        //$this->setTo ( '' );
    }

	public function sendmail_forget_password( $model ) {
		$this -> setTo ( $model->email );
        $this -> view = '/common/forget_password';
        $this -> setSubject( Yii::t( 'emails.subject', 'Your request to reset your password'.' |'.' تعليمات إعادة تعيين كلمة المرور') );
        $this -> setBody( array('model' => $model), 'text/html' );

        return Yii::app()->mail->send($this);
	}

}