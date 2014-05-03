<?php

/**
 * This is the model class for table "alsadaqat.organization_branch".
 *
 * The followings are the available columns in table 'alsadaqat.organization_branch':
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
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Beneficiary[] $beneficiaries
 * @property Donator[] $donators
 * @property Owner $owner
 * @property Organization $organization
 * @property Country $country
 * @property City $city
 * @property Manager $manager
 * @property OrganizationBranchCountry[] $organizationBranchCountries
 * @property OrganizationUser[] $organizationUsers
 */
class OrganizationBranch extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.organization_branch';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_id, name, description, website, phone, fax, mobile, country_id, city_id, adress, manager_id, work_days, work_hours, break_hours, geo_location, owner_id, created_at, updated_at, notes, options', 'required'),
			array('organization_id, country_id, city_id, manager_id, owner_id', 'length', 'max'=>11),
			array('name, description, website, adress, work_days, work_hours, break_hours, geo_location', 'length', 'max'=>255),
			array('phone, fax, mobile', 'length', 'max'=>17),
			array('is_main_branch', 'length', 'max'=>3),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, name, description, website, phone, fax, mobile, country_id, city_id, adress, manager_id, work_days, work_hours, break_hours, geo_location, is_main_branch, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'beneficiaries' => array(self::HAS_MANY, 'Beneficiary', 'organization_branch_id'),
			'donators' => array(self::HAS_MANY, 'Donator', 'organization_branch_id'),
			'owner' => array(self::BELONGS_TO, 'Owner', 'owner_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'manager' => array(self::BELONGS_TO, 'Manager', 'manager_id'),
			'organizationBranchCountries' => array(self::HAS_MANY, 'OrganizationBranchCountry', 'organization_branch_id'),
			'organizationUsers' => array(self::HAS_MANY, 'OrganizationUser', 'organization_branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'organization_id' => 'Organization',
			'name' => 'Name',
			'description' => 'Description',
			'website' => 'Website',
			'phone' => 'Phone',
			'fax' => 'Fax',
			'mobile' => 'Mobile',
			'country_id' => 'Country',
			'city_id' => 'City',
			'adress' => 'Adress',
			'manager_id' => 'Manager',
			'work_days' => 'Work Days',
			'work_hours' => 'Work Hours',
			'break_hours' => 'Break Hours',
			'geo_location' => 'Geo Location',
			'is_main_branch' => 'Is Main Branch',
			'owner_id' => 'Owner',
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
		$criteria->compare('organization_id',$this->organization_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('manager_id',$this->manager_id,true);
		$criteria->compare('work_days',$this->work_days,true);
		$criteria->compare('work_hours',$this->work_hours,true);
		$criteria->compare('break_hours',$this->break_hours,true);
		$criteria->compare('geo_location',$this->geo_location,true);
		$criteria->compare('is_main_branch',$this->is_main_branch,true);
		$criteria->compare('owner_id',$this->owner_id,true);
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
	 * @return OrganizationBranch the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
