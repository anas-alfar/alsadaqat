<?php

/**
 * This is the model class for table "well_type".
 *
 * The followings are the available columns in table 'well_type':
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
 * @property string $has_female_area
 * @property string $has_sound_system
 * @property string $has_air_condition
 * @property string $agent_id
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Well[] $wells
 * @property MosqueAgent $agent
 * @property OrganizationUser $owner
 */
class WellType extends Aulaula {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'well_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, construction_cost, construction_time, number_of_people, agent_id', 'required'),
			array('construction_time, number_of_people', 'numerical', 'integerOnly' => true),
			array('construction_cost', 'numerical'),
			array('name', 'length', 'max'               => 255),
			array('agent_id, owner_id', 'length', 'max' => 11),
			array('created_at, updated_at', 'safe'),

			array('updated_at', 'default', 'value'             => new CDbExpression('NOW()'), 'setOnEmpty'             => false, 'on'             => 'update'),
			array('created_at, updated_at', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, construction_cost, construction_time, number_of_people, agent_id, owner_id, created_at, updated_at', 'safe', 'on' => 'search'),

			array('owner_id', 'default', 'value' => Yii::app()->user->id, 'setOnEmpty' => false),
		);
	}

	public function defaultScope() {
		return array(
			'condition' => $this->getTableAlias(false, false).'.owner_id='.Yii::app()->user->id,
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'wells' => array(self::HAS_MANY, 'Well', 'well_type_id'),
			'agent' => array(self::BELONGS_TO, 'MosqueAgent', 'agent_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id'                => Yii::t('well_type', 'ID'),
			'name'              => Yii::t('well_type', 'Name'),
			'construction_cost' => Yii::t('well_type', 'Construction Cost'),
			'construction_time' => Yii::t('well_type', 'Construction Time'),
			'number_of_people'  => Yii::t('well_type', 'Number Of People'),
			'agent_id'          => Yii::t('well_type', 'Agent'),
			'owner_id'          => Yii::t('well_type', 'Owner'),
			'created_at'        => Yii::t('well_type', 'Created At'),
			'updated_at'        => Yii::t('well_type', 'Updated At'),
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
		$criteria->compare('name', $this->name, true);
		$criteria->compare('construction_cost', $this->construction_cost);
		$criteria->compare('construction_time', $this->construction_time);
		$criteria->compare('number_of_people', $this->number_of_people);
		$criteria->compare('agent_id', $this->agent_id, true);
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
	 * @return WellType the static model class
	 */
	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function getOptions() {
		$criteria         = new CDbCriteria;
		$criteria->select = 'id,name';
		//$criteria->addCondition('iso3 is NOT NUll AND iso3 !=""');

		return CHtml::listData($this->findAll($criteria), 'id', 'name');
	}
}
