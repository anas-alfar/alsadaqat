<?php

/**
 * This is the model class for table "beneficiary_home".
 *
 * The followings are the available columns in table 'beneficiary_home':
 * @property string $id
 * @property string $description
 * @property string $owner_name
 * @property string $construction_type
 * @property integer $number_of_rooms
 * @property integer $number_of_residents
 * @property string $contract_type
 * @property double $rent_cost
 * @property string $rent_type
 * @property string $has_tv
 * @property string $has_refrigerator
 * @property string $has_washer
 * @property string $has_dryer
 * @property string $has_video_player
 * @property string $has_telephone
 * @property string $has_mobile
 * @property string $has_gas
 * @property string $has_oven
 * @property string $has_microwave
 * @property string $has_air_conditioner
 * @property string $has_water_solar_heater
 * @property string $has_water_electrical_heater
 * @property string $has_gas_heater
 * @property string $has_electrical_heater
 * @property string $beneficiary_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Beneficiary $beneficiary
 * @property OrganizationUser $owner
 */
class BeneficiaryHome extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficiary_home';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, owner_name, construction_type, number_of_rooms, number_of_residents, rent_cost, beneficiary_id, owner_id', 'required'),
			array('number_of_rooms, number_of_residents', 'numerical', 'integerOnly'=>true),
			array('rent_cost', 'numerical'),
			array('description', 'length', 'max'=>512),
			array('owner_name, construction_type', 'length', 'max'=>255),
			array('contract_type', 'length', 'max'=>6),
			array('rent_type', 'length', 'max'=>9),
			array('has_tv, has_refrigerator, has_washer, has_dryer, has_video_player, has_telephone, has_mobile, has_gas, has_oven, has_microwave, has_air_conditioner, has_water_solar_heater, has_water_electrical_heater, has_gas_heater, has_electrical_heater', 'length', 'max'=>3),
			array('beneficiary_id, owner_id', 'length', 'max'=>11),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, owner_name, construction_type, number_of_rooms, number_of_residents, contract_type, rent_cost, rent_type, has_tv, has_refrigerator, has_washer, has_dryer, has_video_player, has_telephone, has_mobile, has_gas, has_oven, has_microwave, has_air_conditioner, has_water_solar_heater, has_water_electrical_heater, has_gas_heater, has_electrical_heater, beneficiary_id, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'beneficiary' => array(self::BELONGS_TO, 'Beneficiary', 'beneficiary_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('beneficiary_home','ID'),
			'description' => Yii::t('beneficiary_home','Description'),
			'owner_name' => Yii::t('beneficiary_home','Owner Name'),
			'construction_type' => Yii::t('beneficiary_home','Construction Type'),
			'number_of_rooms' => Yii::t('beneficiary_home','Number Of Rooms'),
			'number_of_residents' => Yii::t('beneficiary_home','Number Of Residents'),
			'contract_type' => Yii::t('beneficiary_home','Contract Type'),
			'rent_cost' => Yii::t('beneficiary_home','Rent Cost'),
			'rent_type' => Yii::t('beneficiary_home','Rent Type'),
			'has_tv' => Yii::t('beneficiary_home','Has Tv'),
			'has_refrigerator' => Yii::t('beneficiary_home','Has Refrigerator'),
			'has_washer' => Yii::t('beneficiary_home','Has Washer'),
			'has_dryer' => Yii::t('beneficiary_home','Has Dryer'),
			'has_video_player' => Yii::t('beneficiary_home','Has Video Player'),
			'has_telephone' => Yii::t('beneficiary_home','Has Telephone'),
			'has_mobile' => Yii::t('beneficiary_home','Has Mobile'),
			'has_gas' => Yii::t('beneficiary_home','Has Gas'),
			'has_oven' => Yii::t('beneficiary_home','Has Oven'),
			'has_microwave' => Yii::t('beneficiary_home','Has Microwave'),
			'has_air_conditioner' => Yii::t('beneficiary_home','Has Air Conditioner'),
			'has_water_solar_heater' => Yii::t('beneficiary_home','Has Water Solar Heater'),
			'has_water_electrical_heater' => Yii::t('beneficiary_home','Has Water Electrical Heater'),
			'has_gas_heater' => Yii::t('beneficiary_home','Has Gas Heater'),
			'has_electrical_heater' => Yii::t('beneficiary_home','Has Electrical Heater'),
			'beneficiary_id' => Yii::t('beneficiary_home','Beneficiary'),
			'owner_id' => Yii::t('beneficiary_home','Owner'),
			'created_at' => Yii::t('beneficiary_home','Created At'),
			'updated_at' => Yii::t('beneficiary_home','Updated At'),
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
		$criteria->compare('has_tv',$this->has_tv,true);
		$criteria->compare('has_refrigerator',$this->has_refrigerator,true);
		$criteria->compare('has_washer',$this->has_washer,true);
		$criteria->compare('has_dryer',$this->has_dryer,true);
		$criteria->compare('has_video_player',$this->has_video_player,true);
		$criteria->compare('has_telephone',$this->has_telephone,true);
		$criteria->compare('has_mobile',$this->has_mobile,true);
		$criteria->compare('has_gas',$this->has_gas,true);
		$criteria->compare('has_oven',$this->has_oven,true);
		$criteria->compare('has_microwave',$this->has_microwave,true);
		$criteria->compare('has_air_conditioner',$this->has_air_conditioner,true);
		$criteria->compare('has_water_solar_heater',$this->has_water_solar_heater,true);
		$criteria->compare('has_water_electrical_heater',$this->has_water_electrical_heater,true);
		$criteria->compare('has_gas_heater',$this->has_gas_heater,true);
		$criteria->compare('has_electrical_heater',$this->has_electrical_heater,true);
		$criteria->compare('beneficiary_id',$this->beneficiary_id,true);
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
	 * @return BeneficiaryHome the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
