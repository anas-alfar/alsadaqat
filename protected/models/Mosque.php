<?php

/**
 * This is the model class for table "alsadaqat.mosque".
 *
 * The followings are the available columns in table 'alsadaqat.mosque':
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string $contract_date
 * @property string $contract_photo_path
 * @property string $construction_progress
 * @property string $donator_id
 * @property string $agent_id
 * @property string $mosque_type_id
 * @property string $country_id
 * @property string $city_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Donator $donator
 * @property MosqueAgent $agent
 * @property MosqueType $mosqueType
 * @property Country $country
 * @property City $city
 * @property OrganizationUser $owner
 * @property MosquePhoto[] $mosquePhotos
 */
class Mosque extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.mosque';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, contract_date, contract_photo_path, construction_progress, donator_id, agent_id, mosque_type_id, country_id, city_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('name, address, contract_photo_path', 'length', 'max'=>255),
			array('construction_progress, donator_id, agent_id, mosque_type_id, country_id, city_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, address, contract_date, contract_photo_path, construction_progress, donator_id, agent_id, mosque_type_id, country_id, city_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'donator' => array(self::BELONGS_TO, 'Donator', 'donator_id'),
			'agent' => array(self::BELONGS_TO, 'MosqueAgent', 'agent_id'),
			'mosqueType' => array(self::BELONGS_TO, 'MosqueType', 'mosque_type_id'),
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'mosquePhotos' => array(self::HAS_MANY, 'MosquePhoto', 'mosque_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'address' => 'Address',
			'contract_date' => 'Contract Date',
			'contract_photo_path' => 'Contract Photo Path',
			'construction_progress' => 'Construction Progress',
			'donator_id' => 'Donator',
			'agent_id' => 'Agent',
			'mosque_type_id' => 'Mosque Type',
			'country_id' => 'Country',
			'city_id' => 'City',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('contract_date',$this->contract_date,true);
		$criteria->compare('contract_photo_path',$this->contract_photo_path,true);
		$criteria->compare('construction_progress',$this->construction_progress,true);
		$criteria->compare('donator_id',$this->donator_id,true);
		$criteria->compare('agent_id',$this->agent_id,true);
		$criteria->compare('mosque_type_id',$this->mosque_type_id,true);
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('city_id',$this->city_id,true);
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
	 * @return Mosque the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
