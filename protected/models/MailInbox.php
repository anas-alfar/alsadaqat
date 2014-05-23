<?php

/**
 * This is the model class for table "mail_inbox".
 *
 * The followings are the available columns in table 'mail_inbox':
 * @property integer $id
 * @property string $organization_id
 * @property string $mail_type_id
 * @property string $number
 * @property string $from_name
 * @property string $from_department
 * @property string $subject
 * @property string $received_at
 * @property string $owner_id
 * @property string $mail_attachment_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Organization $organization
 * @property Owner $owner
 * @property MailAttachment $mailAttachment
 * @property MailType $mailType
 */
class MailInbox extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mail_inbox';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization_id, mail_type_id, number, from_name, subject, received_at, owner_id, mail_attachment_id', 'required'),
			array('organization_id, mail_type_id, owner_id, mail_attachment_id', 'length', 'max'=>11),
			array('number, from_name, from_department, subject', 'length', 'max'=>255),
			array('created_at, updated_at', 'safe'),
			
            array('updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on' => 'update'),
            array('created_at, updated_at', 'default', 'value' => new CDbExpression( 'NOW()' ), 'setOnEmpty' => false, 'on'=>'insert'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, organization_id, mail_type_id, number, from_name, from_department, subject, received_at, owner_id, mail_attachment_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
			'owner' => array(self::BELONGS_TO, 'OrganizationUser', 'owner_id'),
			'mailAttachment' => array(self::BELONGS_TO, 'MailAttachment', 'mail_attachment_id'),
			'mailType' => array(self::BELONGS_TO, 'MailType', 'mail_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('mail_inbox','ID'),
			'organization_id' => Yii::t('mail_inbox','Organization'),
			'mail_type_id' => Yii::t('mail_inbox','Mail Type'),
			'number' => Yii::t('mail_inbox','Number'),
			'from_name' => Yii::t('mail_inbox','From Name'),
			'from_department' => Yii::t('mail_inbox','From Department'),
			'subject' => Yii::t('mail_inbox','Subject'),
			'received_at' => Yii::t('mail_inbox','Received At'),
			'owner_id' => Yii::t('mail_inbox','Owner'),
			'mail_attachment_id' => Yii::t('mail_inbox','Mail Attachment'),
			'created_at' => Yii::t('mail_inbox','Created At'),
			'updated_at' => Yii::t('mail_inbox','Updated At'),
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
		$criteria->compare('number',$this->number,true);
		$criteria->compare('from_name',$this->from_name,true);
		$criteria->compare('from_department',$this->from_department,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('received_at',$this->received_at,true);
		$criteria->compare('owner_id',$this->owner_id,true);
		$criteria->compare('mail_attachment_id',$this->mail_attachment_id,true);
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
	 * @return MailInbox the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
