<?php

/**
 * This is the model class for table "alsadaqat.organization_access_level_permission".
 *
 * The followings are the available columns in table 'alsadaqat.organization_access_level_permission':
 * @property string $id
 * @property string $organization_access_level_id
 * @property string $controller_name
 * @property string $action_name
 * @property string $permission
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationAccessLevel $organizationAccessLevel
 */
class OrganizationAccessLevelPermission extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.organization_access_level_permission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_access_level_id, controller_name, action_name, permission, created_at, updated_at, notes, options', 'required'),
			array('organization_access_level_id', 'length', 'max'=>11),
			array('controller_name, action_name', 'length', 'max'=>255),
			array('permission', 'length', 'max'=>10),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_access_level_id, controller_name, action_name, permission, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'organization_access_level_id' => 'Organization Access Level',
			'controller_name' => 'Controller Name',
			'action_name' => 'Action Name',
			'permission' => 'Permission',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'notes' => 'Notes',
			'options' => 'Options',
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
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('options',$this->options,true);

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
