<?php
class ResetPasswordForm extends CFormModel
{
    public $password;
    public $password_repeat;
    public $email;

    public function rules()
    {
        return array(
            array('password', 'required', 'message' => Yii::t('error', '{attribute} is required.')),
            //array('email,role', 'required','on'=>'admin-reset','message' => Yii::t('error','{attribute} is required.')),
            //array('email', 'email','on'=>'admin-reset','message' => Yii::t('error','{attribute} is not a valid email address.')),
            array('password', 'match', 'pattern'=>"/^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/", 'message'  => Yii::t('error', "Password may not be less than 8 alpha-numeric characters, please re-­enter your password." ) ),
            array('password_repeat', 'compare', 'compareAttribute' => 'password', 'message'     => Yii::t('error', '{attribute} must be repeated exactly.')),

            array('password_repeat,crypted_password', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'password'          => Yii::t('app', 'New Password'),
            'password_repeat'   => Yii::t('app', 'Repeat New Password'),
        );
    }

}