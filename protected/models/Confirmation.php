<?php

class Confirmation extends CFormModel
{
	public $username;
	
	/**
	 * Declares the validation rules.
	 * The rules state that email and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('username', 'required','message' => Yii::t('error','{attribute} is required')),
			array('username', 'check'),
			//array('email', 'email','message' =>Yii::t('error','{attribute} is not a valid email address.')),
		);
	}
	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username' => Yii::t('organization_user', 'Username'),
		);
	}
	/**
	 * validate if username exist or not
	 */
	public function check($attribute, $params)
	{	
		if(!$this->hasErrors())
		{
			$record = OrganizationUser::model()->findByAttributes( array('username' => $this -> $attribute) );

			if( ! $record )
				$this->addError('username', Yii::t('error', Yii::t('organization_user', 'Username') . ' is not Exist'));

            if( empty( $record->email ) )
                $this->addError('username', Yii::t('error', 'Missing some information for this user, Please contact the administrator'));
		}
	}



	
}
