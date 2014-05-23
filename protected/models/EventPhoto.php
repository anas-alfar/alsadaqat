<?php

/**
 * This is the model class for table "event_photo".
 *
 * The followings are the available columns in table 'event_photo':
 * @property string $id
 * @property string $event_id
 * @property string $title
 * @property string $size
 * @property string $source_path
 * @property string $source_url
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Event $event
 * @property OrganizationUser $owner
 */
class EventPhoto extends Aulaula
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, size, source_path, source_url, owner_id', 'required'),
			array('event_id, size, owner_id', 'length', 'max'=>11),
			array('title, source_path, source_url', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id, title, size, source_path, source_url, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('event_photo','ID'),
			'event_id' => Yii::t('event_photo','Event'),
			'title' => Yii::t('event_photo','Title'),
			'size' => Yii::t('event_photo','Size'),
			'source_path' => Yii::t('event_photo','Source Path'),
			'source_url' => Yii::t('event_photo','Source Url'),
			'owner_id' => Yii::t('event_photo','Owner'),
			'created_at' => Yii::t('event_photo','Created At'),
			'updated_at' => Yii::t('event_photo','Updated At'),
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
		$criteria->compare('size',$this->size,true);
		$criteria->compare('source_path',$this->source_path,true);
		$criteria->compare('source_url',$this->source_url,true);
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
	 * @return EventPhoto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
