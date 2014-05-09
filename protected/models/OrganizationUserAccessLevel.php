<?php

/**
 * This is the model class for table "organization_user_access_level".
 *
 * The followings are the available columns in table 'organization_user_access_level':
 * @property string $id
 * @property string $user_id
 * @property string $organization_access_level_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property User $user
 * @property OrganizationAccessLevel $organizationAccessLevel
 */
class OrganizationUserAccessLevel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_user_access_level';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, organization_access_level_id', 'required'),
			array('user_id, organization_access_level_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
			array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, organization_access_level_id, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'organizationAccessLevel' => array(self::BELONGS_TO, 'OrganizationAccessLevel', 'organization_access_level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization_user_access_level','ID'),
			'user_id' => Yii::t('organization_user_access_level','User'),
			'organization_access_level_id' => Yii::t('organization_user_access_level','Organization Access Level'),
			'created_at' => Yii::t('organization_user_access_level','Created At'),
			'updated_at' => Yii::t('organization_user_access_level','Updated At'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('organization_access_level_id',$this->organization_access_level_id,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrganizationUserAccessLevel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
