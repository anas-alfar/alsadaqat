<?php

/**
 * This is the model class for table "alsadaqat.beneficiary_home".
 *
 * The followings are the available columns in table 'alsadaqat.beneficiary_home':
 * @property string $id
 * @property string $description
 * @property string $owner_name
 * @property string $construction_type
 * @property integer $number_of_rooms
 * @property integer $number_of_residents
 * @property string $contract_type
 * @property double $rent_cost
 * @property string $rent_type
 * @property integer $has_tv
 * @property integer $has_refrigerator
 * @property integer $has_washer
 * @property integer $has_dryer
 * @property integer $has_video_player
 * @property integer $has_telephone
 * @property integer $has_mobile
 * @property integer $has_gas
 * @property integer $has_oven
 * @property integer $has_microwave
 * @property integer $has_air_conditioner
 * @property integer $has_water_solar_heater
 * @property integer $has_water_electrical_heater
 * @property integer $has_gas_heater
 * @property integer $has_electrical_heater
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property OrganizationUser $owner
 * @property Beneficiary $beneficiary
 */
class BeneficiaryHome extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.beneficiary_home';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, owner_name, construction_type, number_of_rooms, number_of_residents, rent_cost, has_tv, has_refrigerator, has_washer, has_dryer, has_video_player, has_telephone, has_mobile, has_gas, has_oven, has_microwave, has_air_conditioner, has_water_solar_heater, has_water_electrical_heater, has_gas_heater, has_electrical_heater, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('number_of_rooms, number_of_residents, has_tv, has_refrigerator, has_washer, has_dryer, has_video_player, has_telephone, has_mobile, has_gas, has_oven, has_microwave, has_air_conditioner, has_water_solar_heater, has_water_electrical_heater, has_gas_heater, has_electrical_heater', 'numerical', 'integerOnly'=>true),
			array('rent_cost', 'numerical'),
			array('description, owner_name, construction_type', 'length', 'max'=>255),
			array('contract_type', 'length', 'max'=>6),
			array('rent_type', 'length', 'max'=>9),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, owner_name, construction_type, number_of_rooms, number_of_residents, contract_type, rent_cost, rent_type, has_tv, has_refrigerator, has_washer, has_dryer, has_video_player, has_telephone, has_mobile, has_gas, has_oven, has_microwave, has_air_conditioner, has_water_solar_heater, has_water_electrical_heater, has_gas_heater, has_electrical_heater, beneficiary_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'beneficiary' => array(self::BELONGS_TO, 'Beneficiary', 'beneficiary_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'owner_name' => 'Owner Name',
			'construction_type' => 'Construction Type',
			'number_of_rooms' => 'Number Of Rooms',
			'number_of_residents' => 'Number Of Residents',
			'contract_type' => 'Contract Type',
			'rent_cost' => 'Rent Cost',
			'rent_type' => 'Rent Type',
			'has_tv' => 'Has Tv',
			'has_refrigerator' => 'Has Refrigerator',
			'has_washer' => 'Has Washer',
			'has_dryer' => 'Has Dryer',
			'has_video_player' => 'Has Video Player',
			'has_telephone' => 'Has Telephone',
			'has_mobile' => 'Has Mobile',
			'has_gas' => 'Has Gas',
			'has_oven' => 'Has Oven',
			'has_microwave' => 'Has Microwave',
			'has_air_conditioner' => 'Has Air Conditioner',
			'has_water_solar_heater' => 'Has Water Solar Heater',
			'has_water_electrical_heater' => 'Has Water Electrical Heater',
			'has_gas_heater' => 'Has Gas Heater',
			'has_electrical_heater' => 'Has Electrical Heater',
			'beneficiary_id' => 'Beneficiary',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('owner_name',$this->owner_name,true);
		$criteria->compare('construction_type',$this->construction_type,true);
		$criteria->compare('number_of_rooms',$this->number_of_rooms);
		$criteria->compare('number_of_residents',$this->number_of_residents);
		$criteria->compare('contract_type',$this->contract_type,true);
		$criteria->compare('rent_cost',$this->rent_cost);
		$criteria->compare('rent_type',$this->rent_type,true);
		$criteria->compare('has_tv',$this->has_tv);
		$criteria->compare('has_refrigerator',$this->has_refrigerator);
		$criteria->compare('has_washer',$this->has_washer);
		$criteria->compare('has_dryer',$this->has_dryer);
		$criteria->compare('has_video_player',$this->has_video_player);
		$criteria->compare('has_telephone',$this->has_telephone);
		$criteria->compare('has_mobile',$this->has_mobile);
		$criteria->compare('has_gas',$this->has_gas);
		$criteria->compare('has_oven',$this->has_oven);
		$criteria->compare('has_microwave',$this->has_microwave);
		$criteria->compare('has_air_conditioner',$this->has_air_conditioner);
		$criteria->compare('has_water_solar_heater',$this->has_water_solar_heater);
		$criteria->compare('has_water_electrical_heater',$this->has_water_electrical_heater);
		$criteria->compare('has_gas_heater',$this->has_gas_heater);
		$criteria->compare('has_electrical_heater',$this->has_electrical_heater);
		$criteria->compare('beneficiary_id',$this->beneficiary_id,true);
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
	 * @return BeneficiaryHome the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
