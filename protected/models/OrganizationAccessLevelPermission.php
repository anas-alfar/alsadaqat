<?php

/**
 * This is the model class for table "organization_access_level_permission".
 *
 * The followings are the available columns in table 'organization_access_level_permission':
 * @property string $id
 * @property string $organization_access_level_id
 * @property string $controller_name
 * @property string $action_name
 * @property string $permission
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property OrganizationAccessLevel $organizationAccessLevel
 */
class OrganizationAccessLevelPermission extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_access_level_permission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_access_level_id, controller_name, action_name, permission', 'required'),
			array('organization_access_level_id', 'length', 'max'=>11),
			array('controller_name, action_name', 'length', 'max'=>255),
			array('permission', 'length', 'max'=>10),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_access_level_id, controller_name, action_name, permission, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'organizationAccessLevel' => array(self::BELONGS_TO, 'OrganizationAccessLevel', 'organization_access_level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization_access_level_permission','ID'),
			'organization_access_level_id' => Yii::t('organization_access_level_permission','Organization Access Level'),
			'controller_name' => Yii::t('organization_access_level_permission','Controller Name'),
			'action_name' => Yii::t('organization_access_level_permission','Action Name'),
			'permission' => Yii::t('organization_access_level_permission','Permission'),
			'created_at' => Yii::t('organization_access_level_permission','Created At'),
			'updated_at' => Yii::t('organization_access_level_permission','Updated At'),
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
		$criteria->compare('organization_access_level_id',$this->organization_access_level_id,true);
		$criteria->compare('controller_name',$this->controller_name,true);
		$criteria->compare('action_name',$this->action_name,true);
		$criteria->compare('permission',$this->permission,true);
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
	 * @return OrganizationAccessLevelPermission the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
