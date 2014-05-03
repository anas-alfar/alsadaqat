<?php

/**
 * This is the model class for table "alsadaqat.mosque_type".
 *
 * The followings are the available columns in table 'alsadaqat.mosque_type':
 * @property string $id
 * @property string $name
 * @property double $construction_area
 * @property double $construction_cost
 * @property integer $construction_time
 * @property string $construction_type
 * @property string $furniture_type
 * @property integer $number_of_people
 * @property integer $number_of_restrooms
 * @property integer $number_of_floors
 * @property integer $number_of_entrances
 * @property integer $has_female_area
 * @property integer $has_sound_system
 * @property integer $has_air_condition
 * @property string $agent_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $notes
 * @property string $options
 *
 * The followings are the available model relations:
 * @property Mosque[] $mosques
 * @property MosqueAgent $agent
 * @property OrganizationUser $owner
 */
class MosqueType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.mosque_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, construction_area, construction_cost, construction_time, construction_type, furniture_type, number_of_people, number_of_restrooms, number_of_floors, number_of_entrances, has_female_area, has_sound_system, has_air_condition, agent_id, owner_id, created_at, updated_at, notes, options', 'required'),
			array('construction_time, number_of_people, number_of_restrooms, number_of_floors, number_of_entrances, has_female_area, has_sound_system, has_air_condition', 'numerical', 'integerOnly'=>true),
			array('construction_area, construction_cost', 'numerical'),
			array('name, construction_type, furniture_type', 'length', 'max'=>255),
			array('agent_id, owner_id', 'length', 'max'=>11),
			array('notes, options', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, construction_area, construction_cost, construction_time, construction_type, furniture_type, number_of_people, number_of_restrooms, number_of_floors, number_of_entrances, has_female_area, has_sound_system, has_air_condition, agent_id, owner_id, created_at, updated_at, notes, options', 'safe', 'on'=>'search'),
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
			'mosques' => array(self::HAS_MANY, 'Mosque', 'mosque_type_id'),
			'agent' => array(self::BELONGS_TO, 'MosqueAgent', 'agent_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
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
			'construction_area' => 'Construction Area',
			'construction_cost' => 'Construction Cost',
			'construction_time' => 'Construction Time',
			'construction_type' => 'Construction Type',
			'furniture_type' => 'Furniture Type',
			'number_of_people' => 'Number Of People',
			'number_of_restrooms' => 'Number Of Restrooms',
			'number_of_floors' => 'Number Of Floors',
			'number_of_entrances' => 'Number Of Entrances',
			'has_female_area' => 'Has Female Area',
			'has_sound_system' => 'Has Sound System',
			'has_air_condition' => 'Has Air Condition',
			'agent_id' => 'Agent',
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
		$criteria->compare('construction_area',$this->construction_area);
		$criteria->compare('construction_cost',$this->construction_cost);
		$criteria->compare('construction_time',$this->construction_time);
		$criteria->compare('construction_type',$this->construction_type,true);
		$criteria->compare('furniture_type',$this->furniture_type,true);
		$criteria->compare('number_of_people',$this->number_of_people);
		$criteria->compare('number_of_restrooms',$this->number_of_restrooms);
		$criteria->compare('number_of_floors',$this->number_of_floors);
		$criteria->compare('number_of_entrances',$this->number_of_entrances);
		$criteria->compare('has_female_area',$this->has_female_area);
		$criteria->compare('has_sound_system',$this->has_sound_system);
		$criteria->compare('has_air_condition',$this->has_air_condition);
		$criteria->compare('agent_id',$this->agent_id,true);
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
	 * @return MosqueType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
