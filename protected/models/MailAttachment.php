<?php

/**
 * This is the model class for table "alsadaqat.mail_attachment".
 *
 * The followings are the available columns in table 'alsadaqat.mail_attachment':
 * @property string $id
 * @property string $mail_id
 * @property string $name
 * @property string $extension
 * @property string $size
 * @property string $source_path
 * @property string $source_url
 * @property string $owner_id
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Owner $owner
 * @property Mail $mail
 * @property MailInbox[] $mailInboxes
 */
class MailAttachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alsadaqat.mail_attachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mail_id, extension, size, source_path, source_url, owner_id, created_at, updated_at', 'required'),
			array('mail_id, size, owner_id', 'length', 'max'=>11),
			array('name, source_path, source_url', 'length', 'max'=>255),
			array('extension', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mail_id, name, extension, size, source_path, source_url, owner_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'owner' => array(self::BELONGS_TO, 'Owner', 'owner_id'),
			'mail' => array(self::BELONGS_TO, 'Mail', 'mail_id'),
			'mailInboxes' => array(self::HAS_MANY, 'MailInbox', 'mail_attachment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mail_id' => 'Mail',
			'name' => 'Name',
			'extension' => 'Extension',
			'size' => 'Size',
			'source_path' => 'Source Path',
			'source_url' => 'Source Url',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('mail_id',$this->mail_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('extension',$this->extension,true);
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
	 * @return MailAttachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
