<?php

/**
 * This is the model class for table "alsadaqat.mail_template".
 *
 * The followings are the available columns in table 'alsadaqat.mail_template':
 * @property integer $id
 * @property string $organization_id
 * @property string $mail_type_id
 * @property string $mail_template_id
 * @property string $number
 * @property string $from_name
 * @property string $from_department
 * @property string $to_name
 * @property string $to_department
 * @property string $subject
 * @property string $description
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property MailType $mailType
 * @property Organization $organization
 * @property Owner $owner
 */
class MailTemplate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.mail_template';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_id, mail_type_id, mail_template_id, number, from_name, from_department, to_name, to_department, subject, description, owner_id, created_at, updated_at', 'required'),
			array('organization_id, mail_type_id, mail_template_id, owner_id', 'length', 'max'=>11),
			array('number, from_name, from_department, to_name, to_department, subject', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, mail_type_id, mail_template_id, number, from_name, from_department, to_name, to_department, subject, description, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'mailType' => array(self::BELONGS_TO, 'MailType', 'mail_type_id'),
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'owner' => array(self::BELONGS_TO, 'Owner', 'owner_id'),
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
			'mail_type_id' => 'Mail Type',
			'mail_template_id' => 'Mail Template',
			'number' => 'Number',
			'from_name' => 'From Name',
			'from_department' => 'From Department',
			'to_name' => 'To Name',
			'to_department' => 'To Department',
			'subject' => 'Subject',
			'description' => 'Description',
			'owner_id' => 'Owner',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('organization_id',$this->organization_id,true);
		$criteria->compare('mail_type_id',$this->mail_type_id,true);
		$criteria->compare('mail_template_id',$this->mail_template_id,true);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('from_name',$this->from_name,true);
		$criteria->compare('from_department',$this->from_department,true);
		$criteria->compare('to_name',$this->to_name,true);
		$criteria->compare('to_department',$this->to_department,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return MailTemplate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
