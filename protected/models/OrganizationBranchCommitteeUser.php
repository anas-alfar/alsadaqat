<?php

/**
 * This is the model class for table "organization_branch_committee_user".
 *
 * The followings are the available columns in table 'organization_branch_committee_user':
 * @property string $id
 * @property string $organization_branch_committee_id
 * @property string $organization_user_id
 * @property string $organization_position_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property OrganizationBranchCommittee $organizationBranchCommittee
 * @property OrganizationUser $organizationUser
 * @property OrganizationPosition $organizationPosition
 * @property Owner $owner
 */
class OrganizationBranchCommitteeUser extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_branch_committee_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_branch_committee_id, organization_user_id, organization_position_id', 'required'),
			array('organization_branch_committee_id, organization_user_id, organization_position_id, owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_branch_committee_id, organization_user_id, organization_position_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
			
            array('owner_id',               'default', 'value' => Yii::app()->user->id,                     'setOnEmpty' => false ),
            //array('organization_id',        'default', 'value' => Yii::app()->user->organization_id,        'setOnEmpty' => false ),
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
			'organizationBranchCommittee' => array(self::BELONGS_TO, 'OrganizationBranchCommittee', 'organization_branch_committee_id'),
			'organizationUser' => array(self::BELONGS_TO, 'OrganizationUser', 'organization_user_id'),
			'organizationPosition' => array(self::BELONGS_TO, 'OrganizationPosition', 'organization_position_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('organization_branch_country_committee_user','ID'),
			'organization_branch_committee_id' => Yii::t('organization_branch_country_committee_user','Organization Branch Committee'),
			'organization_user_id' => Yii::t('organization_branch_country_committee_user','Organization User'),
			'organization_position_id' => Yii::t('organization_branch_country_committee_user','Organization Position'),
			'owner_id' => Yii::t('organization_branch_country_committee_user','Owner'),
			'created_at' => Yii::t('organization_branch_country_committee_user','Created At'),
			'updated_at' => Yii::t('organization_branch_country_committee_user','Updated At'),
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
		$criteria->compare('organization_branch_committee_id',$this->organization_branch_committee_id,true);
		$criteria->compare('organization_user_id',$this->organization_user_id,true);
		$criteria->compare('organization_position_id',$this->organization_position_id,true);
		$criteria->compare('owner_id',$this->owner_id,true);
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
	 * @return OrganizationBranchCommitteeUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
