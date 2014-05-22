<?php

/**
 * This is the model class for table "event_agenda".
 *
 * The followings are the available columns in table 'event_agenda':
 * @property string $id
 * @property string $event_id
 * @property string $title
 * @property string $start_time
 * @property string $end_time
 * @property string $venue_name
 * @property integer $day_number
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Event $event
 */
class EventAgenda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, title, start_time, end_time, venue_name', 'required'),
			array('day_number', 'numerical', 'integerOnly'=>true),
			array('event_id', 'length', 'max'=>11),
			array('title, venue_name', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, title, start_time, end_time, venue_name, day_number, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'event' => array(self::BELONGS_TO, 'Event', 'event_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('event_agenda','ID'),
			'event_id' => Yii::t('event_agenda','Event'),
			'title' => Yii::t('event_agenda','Title'),
			'start_time' => Yii::t('event_agenda','Start Time'),
			'end_time' => Yii::t('event_agenda','End Time'),
			'venue_name' => Yii::t('event_agenda','Venue Name'),
			'day_number' => Yii::t('event_agenda','Day Number'),
			'created_at' => Yii::t('event_agenda','Created At'),
			'updated_at' => Yii::t('event_agenda','Updated At'),
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
		$criteria->compare('event_id',$this->event_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('venue_name',$this->venue_name,true);
		$criteria->compare('day_number',$this->day_number);
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
	 * @return EventAgenda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
