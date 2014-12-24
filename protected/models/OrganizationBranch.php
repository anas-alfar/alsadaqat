<?php

/**
 * This is the model class for table "organization_branch".
 *
 * The followings are the available columns in table 'organization_branch':
 * @property string $id
 * @property string $organization_id
 * @property string $name
 * @property string $description
 * @property string $website
 * @property string $phone
 * @property string $fax
 * @property string $mobile
 * @property string $country_id
 * @property string $city_id
 * @property string $adress
 * @property string $manager_id
 * @property string $work_days
 * @property string $work_hours
 * @property string $break_hours
 * @property string $geo_location
 * @property string $is_main_branch
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Donator[] $donators
 * @property Organization $organization
 * @property Country $country
 * @property City $city
 * @property Manager $manager
 * @property Owner $owner
 * @property OrganizationBranchCountry[] $organizationBranchCountries
 * @property OrganizationUser[] $organizationUsers
 */
class OrganizationBranch extends Aulaula {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'organization_branch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, mobile, country_id, city_id, adress, manager_id, work_days, work_hours, break_hours, geo_location', 'required'),
			array('organization_id, country_id, city_id, manager_id, owner_id', 'length', 'max'              => 11),
			array('name, website, adress, work_days, work_hours, break_hours, geo_location', 'length', 'max' => 255),
			array('description', 'length', 'max'                                                             => 512),
			array('phone, fax, mobile', 'length', 'max'                                                      => 17),
			array('is_main_branch', 'length', 'max'                                                          => 3),
			array('created_at, updated_at', 'safe'),

			array('updated_at', 'default', 'value'             => new CDbExpression('NOW()'), 'setOnEmpty'             => false, 'on'             => 'update'),
			array('created_at, updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, name, description, website, phone, fax, mobile, country_id, city_id, adress, manager_id, work_days, work_hours, break_hours, geo_location, is_main_branch, owner_id, created_at, updated_at', 'safe', 'on' => 'search'),

			array('owner_id', 'default', 'value'        => Yii::app()->user->id, 'setOnEmpty'        => false),
			array('organization_id', 'default', 'value' => Yii::app()->user->organization_id, 'setOnEmpty' => false),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'beneficiaries'               => array(self::HAS_MANY, 'Beneficiary', 'organization_branch_id'),
			'donators'                    => array(self::HAS_MANY, 'Donator', 'organization_branch_id'),
			'organization'                => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'country'                     => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city'                        => array(self::BELONGS_TO, 'City', 'city_id'),
			'manager'                     => array(self::BELONGS_TO, 'OrganizationUser', 'manager_id'),
			'owner'                       => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'organizationBranchCountries' => array(self::HAS_MANY, 'OrganizationBranchCountry', 'organization_branch_id'),
			'organizationUsers'           => array(self::HAS_MANY, 'OrganizationUser', 'organization_branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id'              => Yii::t('organization_branch', 'ID'),
			'organization_id' => Yii::t('organization_branch', 'Organization'),
			'name'            => Yii::t('organization_branch', 'Name'),
			'description'     => Yii::t('organization_branch', 'Description'),
			'website'         => Yii::t('organization_branch', 'Website'),
			'phone'           => Yii::t('organization_branch', 'Phone'),
			'fax'             => Yii::t('organization_branch', 'Fax'),
			'mobile'          => Yii::t('organization_branch', 'Mobile'),
			'country_id'      => Yii::t('organization_branch', 'Country'),
			'city_id'         => Yii::t('organization_branch', 'City'),
			'adress'          => Yii::t('organization_branch', 'Adress'),
			'manager_id'      => Yii::t('organization_branch', 'Manager'),
			'work_days'       => Yii::t('organization_branch', 'Work Days'),
			'work_hours'      => Yii::t('organization_branch', 'Work Hours'),
			'break_hours'     => Yii::t('organization_branch', 'Break Hours'),
			'geo_location'    => Yii::t('organization_branch', 'Geo Location'),
			'is_main_branch'  => Yii::t('organization_branch', 'Is Main Branch'),
			'owner_id'        => Yii::t('organization_branch', 'Owner'),
			'created_at'      => Yii::t('organization_branch', 'Created At'),
			'updated_at'      => Yii::t('organization_branch', 'Updated At'),
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
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('organization_id', $this->organization_id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('website', $this->website, true);
		$criteria->compare('phone', $this->phone, true);
		$criteria->compare('fax', $this->fax, true);
		$criteria->compare('mobile', $this->mobile, true);
		$criteria->compare('country_id', $this->country_id, true);
		$criteria->compare('city_id', $this->city_id, true);
		$criteria->compare('adress', $this->adress, true);
		$criteria->compare('manager_id', $this->manager_id, true);
		$criteria->compare('work_days', $this->work_days, true);
		$criteria->compare('work_hours', $this->work_hours, true);
		$criteria->compare('break_hours', $this->break_hours, true);
		$criteria->compare('geo_location', $this->geo_location, true);
		$criteria->compare('is_main_branch', $this->is_main_branch, true);
		$criteria->compare('owner_id', $this->owner_id, true);
		$criteria->compare('created_at', $this->created_at, true);
		$criteria->compare('updated_at', $this->updated_at, true);

		return new CActiveDataProvider($this, array(
				'criteria' => $criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrganizationBranch the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function getOptions() {
		$criteria            = new CDbCriteria;
		$criteria->select    = 'id,name';
		$criteria->condition = 'id = '.Yii::app()->getUser()->getState('organization_id');

		return CHtml::listData($this->findAll($criteria), 'id', 'name');
	}
}
